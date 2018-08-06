$(function () {

    var remoteArrayUserName = '';
    var remoteArrayUserEmail = '';
    if (userId == '0') {
        remoteArrayUserName = {
            url: base_url + '/validateUserNameOrEmail?type=username',
            type: 'post',
            data: {
                _token: $("input[name=_token]").val(),

            }
        };
    } else {
        remoteArrayUserName = {
            url: base_url + '/validateEditUserNameOrEmail?type=username',
            type: 'post',
            data: {
                _token: $("input[name=_token]").val(),
                id: userId
            }
        };
    }

//Check validation of unique email
    if (userId == '0') {
        remoteArrayUserEmail = {
            url: base_url + '/validateUserNameOrEmail?type=email',
            type: 'post',
            data: {
                _token: $("input[name=_token]").val(),

            }
        };
    } else {
        remoteArrayUserEmail = {
            url: base_url + '/validateEditUserNameOrEmail?type=email',
            type: 'post',
            data: {
                _token: $("input[name=_token]").val(),
                id: userId
            }
        };
    }
    $("#addUserForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            userName: {
                required: true,
                remote: remoteArrayUserName
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
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            email: {
                required: true,
                email: true,
                remote: remoteArrayUserEmail

            },
            phone: {
                required: true,
                contactNumber: true
            },
            roleId: {
                required: true
            }

        },
        messages: {
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
                required: "Contact no. is required"
            },
            roleId: {
                required: "Role is required"
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
            $.post('', $("#addUserForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/admin/users';
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

jQuery.validator.addMethod("validPassword", function (value, element) {
    var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
    return pattern.test(value);
}, "Invalid Password");

$("#cancelButton").on('click', function () {
    window.location.href = base_url + '/admin/users';
});