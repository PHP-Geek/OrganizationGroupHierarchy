$("#addBrandform").validate({
    errorElement: 'span',
    errorClass: 'help-block text-right',
    rules: {
        brandName: {
            required: true
        }
    }, messages: {
        brandName: {
            required: "Brand name is required"
        },
    },
    highlight: function (element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('has-error');
        $(element).closest('.form-group').children('span.help-block').remove();
    },
    errorPlacement: function (error, element) {
        error.appendTo(element.closest('.form-group'));
    },
    submitHandler: function (form) {
        $("#addBrandBtn").button('loading');
        $.post(base_url + "/add-brand", $("#addBrandform").serialize(), function (data) {
            if (data.code == '1') {
                $("#addBrandModal").modal('hide');
                var show = data.data_array.brandName;
                $("#addProductForm #brandId").append('<option value="' + data.data_array.brandName + '">' + show + '</option>');
                swal({title: "", text: data.message, type: "success"});
            } else if (data.code == '0') {
                $("#addBrandModal").modal('hide');
                swal("", data.message, "error");
            } else if (data.code == '-1') {
                $("#addBrandModal").modal('hide');
                swal("", data.data_array, "error");
            } else {
                $("#addBrandModal").modal('hide');
                swal("", data.message, "error");
            }
            $("#addBrandBtn").button('reset');
        });
    }
});
//perform action on modal hide
$('#addBrandModal').on('hidden.bs.modal', function () {
    $("#addBrandform").find('input:not[name=_token]').val('');
    $("#addBrandform").find('textarea').html('');
});

$("#cancelBtn").on('click', function () {
    window.location.href = base_url + '/group-manager/products';
});

//Add category
$("#addCategoryForm").validate({
    errorElement: 'span',
    errorClass: 'help-block text-right',
    rules: {
        categoryName: {
            required: true
        }
    }, messages: {
        categoryName: {
            required: "Category name is required"
        },
    },
    highlight: function (element) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element) {
        $(element).closest('.form-group').removeClass('has-error');
    },
    success: function (element) {
        $(element).closest('.form-group').removeClass('has-error');
        $(element).closest('.form-group').children('span.help-block').remove();
    },
    errorPlacement: function (error, element) {
        error.appendTo(element.closest('.form-group'));
    },
    submitHandler: function (form) {
        $("#addCategoryBtn").button('loading');
        $.post(base_url + "/add-category", $("#addCategoryForm").serialize(), function (data) {
            if (data.code == '1') {
                $("#addCategoryModal").modal('hide');
                var show = data.data_array.categoryName;
                $("#addProductForm #categoryId").append('<option value="' + data.data_array.categoryName + '">' + show + '</option>');
                swal({title: "", text: data.message, type: "success"}, function () {

                });
            } else if (data.code == '0') {
                $("#addCategoryModal").modal('hide');
                swal("", data.message, "error");
            } else if (data.code == '-1') {
                $("#addCategoryModal").modal('hide');
                swal("", data.data_array, "error");
            } else {
                $("#addCategoryModal").modal('hide');
                swal("", data.message, "error");
            }
            $("#addCategoryBtn").button('reset');
        });
    }
});
//perform action on modal hide
$('#addCategoryModal').on('hidden.bs.modal', function () {
    $("#addCategoryForm").find('input:not[name=_token]').val('');

});

$(function () {
    $("#addProductForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            brandId: {
                required: true
            },
            categoryId: {
                required: true
            },
            productName: {
                required: true
            },
            productAltName: {
                required: true
            },
            productManufacturingYear: {
                required: true
            },
            productDescription: {
                required: true
            }
        },
        messages: {
            brandId: {
                required: "Brand name is required"
            },
            categoryId: {
                required: "Category name is required"
            },
            productName: {
                required: "Product name is required"
            },
            productAltName: {
                required: "Product alternate name is required"
            },
            productManufacturingYear: {
                required: "Product manufacturing year is required"
            },
            productDescription: {
                required: "Product description is required"
            }
        },
        highlight: function (element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        success: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
            $(element).closest('.form-group').children('span.help-block').remove();
        },
        errorPlacement: function (error, element) {
            error.appendTo(element.closest('.form-group'));
        },
        submitHandler: function (form) {
            $("#addProductBtn").button('loading');
            $.post('', $("#addProductForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/group-manager/products';
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
                $("#addProductBtn").button('reset');
            });
        }
    });

})  