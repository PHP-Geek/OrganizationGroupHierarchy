$(function () {

    $("#editCustomerForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            companyName: {
                required: true,
                remote: {
                    url: base_url + '/validateEditCompanyName',
                    type: 'post',
                    data: {
                        _token: $("input[name=_token]").val(),
                        id: companyId
                    }
                }
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: base_url + '/validateEditUserNameOrEmail?type=email',
                    type: 'post',
                    data: {
                        _token: $("input[name=_token]").val(),
                        id: userId
                    }
                }
            },
            phone: {
                required: true,
                contactNumber: true
            }

        },
        messages: {
            companyName: {
                required: "Company name is required",
                remote: "Company name already registered"
            },
            userName: {
                required: "Username is required",
                remote: "Username not available"
            },
            password: {
                required: "Password is required",
                minlength: "password must be of minimum {0} characters",
                maxlength: "password must be of maximum {0} characters"
            },
            confirmPassword: {
                required: "Confirm password is required",
                equalTo: "Password must be same"
            },
            firstName: {
                required: "First name is required"
            },
            lastName: {
                required: "Last name is required"
            },
            email: {
                required: "Email is required",
                email: "Email must be valid",
                remote: "Email already exist"
            },
            phone: {
                required: "Phone is required"
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
            $.post('', $("#editCustomerForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/customer/view/' + userId;
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
                $(window).unblock();
            });
        }
    });
    $('[data-toggle="popover"]').popover();
})  //custom jquery validation
jQuery.validator.addMethod("contactNumber", function (value, element) {
    return /^\d+(-\d+)*$/.test(value);
}, "Invalid Contact Number");
