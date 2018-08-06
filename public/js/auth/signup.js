$(function () {
    $("#registerForm").validate({
        errorElement: 'span',
        errorClass: 'help-block text-right',
        rules: {
            userName: {
                required: true,
                remote: {
                    url: base_url + '/validateUserNameOrEmail?type=username',
                    type: 'post',
                    data: {
                        _token: $("input[name=_token]").val()
                    }
                }
            },
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            password: {
                required: true,
                validPassword: true,
                minlength: 8,
                maxlength: 14
            },
            confirmPassword: {
                required: true,
                equalTo: '#password'
            },
            companyName: {
                required: true
            },
            phone: {
                required: true
            },
            email: {
                required: true,
                email: true,
                remote: {
                    url: base_url + '/validateUserNameOrEmail?type=email',
                    type: 'post',
                    data: {
                        _token: $("input[name=_token]").val()
                    }
                }
            },
            tnc: {
                required: true
            }
        },
        messages: {
            userName: {
                required: "Username is required",
                remote: "Username already exist"
            },
            firstName: {
                required: "First Name is required"
            },
            lastName: {
                required: "Last Name is required"
            },
            password: {
                required: "Password is required",
                validPassword: 'Invalid password',
                minlength: "Password must be atleast 8 characters",
                maxlength: "Password must be maximum 14 characters"
            },
            confirmPassword: {
                required: "Password must be confirmed",
                equalTo: "Password must be same"
            },
            companyName: {
                required: "Company Name is required"
            },
            phone: {
                required: "Phone Number is required"
            },
            email: {
                required: "Email is required",
                email: "Email must be valid",
                remote: "Email already exist"
            },
            tnc: {
                required: "Please accept terms & conditions"
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
            swal(
                    {
                        title: "Confirm your registration",
                        text: "Are you sure to proceed?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    }, function (isConfirm) {
                if (isConfirm) {
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
                    $.post('', $("#registerForm").serialize(), function (data) {
                        if (data.code == '1') {
                            window.location.href = base_url + '/select-package';
                        } else if (code == '0') {
                            swal('', data.message, 'error');
                        } else {
                            swal('', 'Something went wrong');
                        }
                        $(window).unblock();
                    });
                }
            });
        }
    });
    $('[data-toggle="popover"]').popover({
        trigger: 'hover'
    });
});
jQuery.validator.addMethod("validPassword", function (value, element) {
    var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
    return pattern.test(value);
}, "Invalid Password");
