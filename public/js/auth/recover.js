$(function () {
    $("#forgotPasswordForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            newPassword: {
                required: true,
                minlength: 8,
                maxlength: 14,
                validPassword: true,
                
            },
            confirmPassword:{
                required: true,
                 equalTo: '#newPassword'
            }
        },
        messages: {
            newPassword: {
                required: "Password is required",
                minlength: "password must be of minimum {0} characters",
                maxlength: "password must be of maximum {0} characters"
            },
            confirmPassword: {
                required: "Confirm password is required",
                equalTo: "Password must be same"
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
            $("#registerButton").button('loading');
            $.post('', $("#forgotPasswordForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '';
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
                $("#registerButton").button('reset');
            });
        }
    });
 $('[data-toggle="popover"]').popover();
})
jQuery.validator.addMethod("validPassword", function (value, element) {
    var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}/;
    return pattern.test(value);
}, "Invalid Password");