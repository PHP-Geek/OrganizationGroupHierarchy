<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Product;
use Auth;

class ProductController extends Controller {

    /**
     * load view of view product
     * @return type
     */
    function manageProduct() {
	return view('admin/product/manageProduct');
    }

    /**
     * Product datatables
     * @param Request $request
     * @return type\
     */
    function productDtatable(Request $request) {
	$productObj = new \App\Product();
	$data = $productObj->getProductDatatable($request);
	return response()->json(["draw" => intval($request->draw), "recordsTotal" => $data[0], "recordsFiltered" => $data[0], "data" => $data[1]]);
    }

    /**
     * Add product details
     * @param Request $request
     * @return type
     */
    function add(Request $request, Product $product) {
	$productId = 0;
	if (isset($product->id)) {
	    $productId = $product->id;
	}
	if ($product->id > 0) {
	    $productObj = new \App\Product();
	    $data['productDetailArray'] = $productObj;
	} else {
	    $productObj = new \App\Product();
	}
	if ($request->method() == 'POST') {
	    $rules['productName'] = 'required';
	    $rules['productAltName'] = 'required';
	    $rules['productManufacturingYear'] = 'required';
	    $validator = Validator::make($request->all(), $rules);
	    if (!$validator->fails()) {
		if ($productId == 0) {
		    $productInsertId = $productObj->addProduct($request);
		    //insert the Product categories
		    $productCategories = new \App\ProductCategory();
		    $productCategories->productId = $productInsertId;
		    $productCategories->categoryId = $request->categoryId;
		    $productCategories->productCategoryStatus = 1;
		    $productCategories->created_at = date('Y-m-d h:i:s');
		    $productCategories->save();
		    return response()->json(['code' => '1', 'message' => 'Product added successfully!!!']);
		} else {
		    $editProductArray = ['productName' => $request->productName,
			'productAltName' => $request->productAltName,
			'productManufacturingYear' => $request->productManufacturingYear,
			'productDescription' => $request->productDescription,
			'brandId' => $request->brandId,
		    ];
		    $productObj->updateProductData($productId, $editProductArray);
		    \App\ProductCategory::where('productId', $productId)->update(['categoryId' => $request->categoryId]);
		    return response()->json(['code' => '1', 'message' => 'Product updated successfully!!!']);
		}
	    } else {
		return response()->json(['code' => '-1', 'message' => 'Something went wrong', 'data_array' => $validator->errors()->all()]);
	    }
	    return response()->json(['code' => '0', 'message' => 'Error creating Product!!!']);
	}
	$data['productDetailArray'] = $product;
	$data['brandsData'] = \App\Brand::get();
	$data['categoryData'] = \App\Category::get();
	return view('admin/product/add')->with($data);
    }

    /**
     * Import csv files
     * @param Request $request
     * @return type
     */
    function import(Request $request) {

	if ($request->method() == 'POST') {
	    $file = $request->file('csvfile');
	    if ($file != null) {
		$destination_path = public_path('/uploads/products');
		if (!is_dir($destination_path)) {
		    mkdir($destination_path, 0777, TRUE);
		}
		if ($file->getClientOriginalExtension() === "csv") {
		    $fileName = $file->getClientOriginalName() . '_' . time() . '.' . $file->getClientOriginalExtension();
		    $file->move($destination_path, $fileName); //upload file to the upload directory
		    if (is_file($destination_path . '/' . $fileName)) {
			$uploadReport = $this->uploadProducts($destination_path . '/' . $fileName);

			if ($uploadReport == '1') {
			    unlink($destination_path . '/' . $fileName);
			    \Session::put('success', ' Products Uploaded Successfully!!!');
			    return redirect(url('/admin/product/import'));
			} else {
			    \Session::put('error', $uploadReport);
			}
		    } else {
			\Session::put('error', 'Error Uploading File!!!');
		    }
		} else {
		    \Session::put('error', 'Please upload csv file format only!!!');
		}
	    } else {
		\Session::put('error', 'Please upload csv file!!!');
	    }
	}
	return view('admin/product/import');
    }

    /**
     * Upload csv product file
     * @param type $file
     * @return string
     */
    function uploadProducts($file = '') {
	if ($file != '') {
	    $handle = fopen($file, 'r');
	    $ProductData = [];
	    $column = fgetcsv($handle);
	    while (!feof($handle)) {
		$ProductData[] = fgetcsv($handle);
	    }
	    $time_now = date('Y-m-d H:i:s');
//To check any empty field
	    foreach ($ProductData as $key1 => $products) {
		if ($products != false) {
		    if ($products[0] == '' || $products[1] == '' || $products[2] == '' || $products[3] == '' || $products[4] == '' || $products[5] == '') {
			return 'Please enter all required data at row' . " " . ($key1 + 1);
		    }
		}
	    }
	    foreach ($ProductData as $key1 => $products) {
		if ($products[0] != '' && $products[1] != '' && $products[2] != '' && $products[3] != '' && $products[4] != '' && $products[5] != '') {
		    $product = new Product();
		    //check category exists with given name or not
		    $category = \App\Category::where('categoryName', $products[1])->where('companyId', Auth::user()->companyId)->first();
		    if (count($category) == 0) {
			//save category
			$category = new \App\Category();
			$category->categoryName = $products[1];
			$category->companyId = Auth::user()->companyId;
			$category->categorySlug = str_replace(' ', '-', $product[1]);
			$category->categoryStatus = '1';
			$category->created_at = $time_now;
			$category->save();
		    }
		    $brand = \App\Brand::where('brandName', $products[2])->first();
		    if (count($brand) == 0) {
			//save brand
			$brand = new \App\Brand();
			$brand->brandCreatedBy = Auth::user()->id;
			$brand->brandName = $products[2];
			$brand->brandDescription = '';
			$brand->brandSlug = str_replace(' ', '-', $product[2]);
			$brand->brandStatus = '1';
			$brand->created_at = $time_now;
			$brand->save();
		    }
		    //insert products data
		    $product->companyId = Auth::user()->companyId;
		    $product->productName = $products[0];
		    $product->productAltName = $products[3];
		    $product->brandId = $brand->id;
		    $product->productSlug = str_replace(' ', '-', $product[0]);
		    $product->productManufacturingYear = $products[4];
		    $product->productDescription = $products[5];
		    $product->productStatus = '1';
		    $product->created_at = $time_now;
		    $product->save();
		    //insert product categories
		    if ($product->id > 0) {
			$productCategory = new \App\ProductCategory;
			$productCategory->categoryId = $category->id;
			$productCategory->productId = $product->id;
			$productCategory->productCategoryStatus = '1';
			$productCategory->created_at = $time_now;
			$productCategory->save();
		    }
		}
	    }
	    return '1';
	}
	return '0';
    }

}
