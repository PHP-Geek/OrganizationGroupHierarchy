$(function () {
    $("#addPackageForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            packageTitle: {
                required: true,

            },
            packagePrice: {
                required: true,

            },
            packageType: {
                required: true,

            },
            packageDuration: {
                required: true,
                number: true
            },
            packageDescription: {
                required: true
            },
            'description[]': {
                required: true
            }

        },
        messages: {
            packageTitle: {
                required: "Title is required",

            },
            packagePrice: {
                required: "Price is required",

            },
            packageDescription: {
                required: "Description is required",

            },
            packageDuration: {
                required: "Duration is required",
                number: ""
            },
            packageType: {
                required: "Type is required"
            },
            'description[]': {
                required: "Please fill atleast one feature"
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
            $("#addPackageBtn").button('loading');
            $.post('', $("#addPackageForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/packages';
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
            });
        }
    });

});
$("#packageType").on('change', function () {
    switch ($(this).val()) {
        
        case 1:
        case '1':
            $("#duration").html('(Months)');
            break;
        case 2:
        case '2':
            $("#duration").html('(Years)');
            break;

        default:
            $("#duration").html('(days)');
            break;

    }

});

//clone component
function clone_component(t, n) {
    var tr = $(t).closest('.clone_component_' + n);
    clone = tr.clone();
    clone.find('input').val('');
    tr.after(clone);
    clone.find('.remove_component_button_' + n).removeClass("hidden");
    if ($('.clone_component_' + n).length > 1) {
        $('.remove_component_button_' + n).removeClass("hidden");
    }
//    tr.find('.remove_component_button_' + n).addClass("hidden");
    $(t).addClass("hidden");
}

//remove component
function remove_component(t, n) {
    if ($('.clone_component_' + n).length !== 1) {
        $(t).closest('.clone_component_' + n).remove();
        if ($('.clone_component_' + n).length === 1) {
            $('.remove_component_button_' + n).addClass("hidden");
        } else {
            $('.remove_component_button_' + n).eq(($('.clone_component_' + n).length - 1)).removeClass("hidden");
        }
    } else {
        $('.remove_component_button_' + n).addClass("hidden");
    }
    $('.clone_component_button_' + n).eq(($('.clone_component_' + n).length - 1)).removeClass("hidden");
}