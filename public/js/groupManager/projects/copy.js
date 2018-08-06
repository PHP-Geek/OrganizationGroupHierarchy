$("#cancelBtn").on('click', function () {
    window.location.href = base_url + '/group-manager/project/list';
});
$(function () {
    $("#copyProjectForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            projectTypeId: {
                required: true
            },
            groupId: {
                required: true
            },
            projectOwner: {
                required: true
            },
           projectTitle: {
                required: true
            },
            projectDescription: {
                required: true
            },
            projectSessionCount: {
                required: true
            }
        },
        messages: {
            projectTypeId: {
                required: "Project type is required"
            },
            groupId: {
                required: "Group is required"
            },
            projectOwner: {
                required: "Owner is required"
            },
           projectTitle: {
                required: "Title is required"
            },
            projectDescription: {
                required: "Description is required"
            },
            projectSessionCount: {
                required: "No of session is required",
                min: "Please enter valid no of session"
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
          $("#submitBtn").button('loading');
            $.post('', $("#copyProjectForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/group-manager/project/list';
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
                $("#submitBtn").button('reset');
            });
        }
    });

})


