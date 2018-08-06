$("#assetType").on('change', function () {
    var assetType = $(this).val();
    values = ['1', '2', '3'];
    if ($.inArray(assetType, values) != -1) {
        $("#browseFile").removeClass('hidden');
        switch (assetType) {
            case '1':
                $("#uploadLabel").html("Project Guide (excel file)");
                break;
            case '2':
                $("#uploadLabel").html("Dictionary (.txt)");
                break;
            default:
                $("#uploadLabel").html("Proudct (.csv)");
                break;
        }
    } else {
        $("#browseFile").addClass('hidden');
    }
});

$("#assetForm").validate({
    errorElement: 'span', errorClass: 'help-block text-right',
    rules: {
        projectId: {
            required: true
        },
        assetType: {
            required: true
        },
        fileName: {
            required: true,
            filesize: 5,
            extension: function () {
                if ($("#assetType").val() == '1') {
                    return "xls, xlsx, xlsxx";
                } else if ($("#assetType").val() == '2') {
                    return "txt";
                } else {
                    return "csv";
                }
            }
        }
    },
    messages: {
        projectId: {
            required: "Project is required"
        },
        assetType: {
            required: "Asset type is required"
        },
        fileName: {
            required: "Please upload a file",
            extension: function () {
                if ($("#assetType").val() == '1') {
                    return "File must be valid excel file";
                } else if ($("#assetType").val() == '2') {
                    return "File must be valid text file";
                } else {
                    return "File must be valid csv file";
                }
            }
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
        $(window).block({
            'message': '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
            'css': {
                border: '0',
                padding: '0',
                backgroundColor: 'none',
                marginTop: '5%',
                zIndex: '10600'
            },
            overlayCSS: {backgroundColor: '#555', opacity: 0.3, cursor: 'wait', zIndex: '10600'},
        });
        $("#assetForm")[0].submit();
    }
});
$.validator.addMethod('filesize', function (value, element, param) {
    console.log(element.files[0].size);
    return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}');