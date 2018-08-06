<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\Activity;
use App\Project;

class AssetController extends Controller {

    protected $activityObj;

    function __construct() {
        $this->activityObj = new Activity();
    }

    /**
     * import asset screen
     * @return type
     */
    function import() {
        $data['projects'] = Project::where('projectStatus', '1')->where('companyId', Auth::user()->companyId)->get();
        return view('admin/asset/import')->with($data);
    }

    /**
     * framing guide datatables
     * @param Request $request
     * @return type
     */
    function framinGuideDtatable(Request $request) {
        $assetObj = new \App\Asset();
        $data = $assetObj->getframingGuideDatatable($request);
        return response()->json(["draw" => intval($request->draw), "recordsTotal" => $data[0], "recordsFiltered" => $data[0], "data" => $data[1]]);
    }

    /**
     * Upload assets file
     * @return type
     */
    function uploadAsset(Request $request) {
        if ($request->method() == 'POST') {
            $rules = array(
//                'image' => 'required|max:5242880',
            );
            $validator = Validator::make($request->all(), $rules);
            if (!$validator->fails()) {
                $file = $request->file('files')[0];
                if ($file == null) {
                    \Session::put('error', 'Please Upload a valid file!!!');
                    return redirect(url('/admin/framing-guide'));
                }
                $time_now = date('Y-m-d H:i:s');
                $timeStamp = time();
                $image_directory = public_path('uploads/assets' . '/' . Auth::user()->companyId . '/' . $timeStamp);
                if (!is_dir($image_directory)) {
                    mkdir($image_directory, 0777, TRUE);
                }
                $mimeTypes = array('gif', 'png', 'pdf', 'tiff', 'xls', 'xlsx', 'csv', 'txt', 'doc', 'docx');
                if (!in_array($file->getClientOriginalExtension(), $mimeTypes)) {
                    \Session::put('error', 'File must be of type gif,png,pdf,tiff,csv,txt,doc,docx only!!!');
                    return redirect(url('/admin/framing-guide'));
                }
                if ($file->move($image_directory, $file->getClientOriginalName())) {
                    $insertFile = new \App\Asset();
                    $insertFile->companyId = Auth::user()->companyId;
                    $insertFile->fileName = $timeStamp . '/' . $file->getClientOriginalName();
                    $insertFile->fileOriginalName = $file->getClientOriginalName();
                    $insertFile->status = 1;
                    $insertFile->created_at = $time_now;
                    $insertFile->save();
                    \Session::put('success', 'File Uploaded Successfully.');
                    return redirect(url('/admin/framing-guide'));
                }
            }
            $errors = $validator->errors()->first();
            \Session::put('error', $errors);
            return redirect(url('/admin/framing-guide'));
        }
    }

}
