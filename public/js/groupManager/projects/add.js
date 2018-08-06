

$("#cancelBtn").on('click', function () {
    window.location.href = base_url + '/group-manager/project/list';
});

$(function () {
    $('#saveTemplate').click(function () {
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
        $.post(base_url + '/group-manager/project/template/create', $("#createProjectForm").serialize(), function (result) {
            if (result.code == '1') {
                swal({title: '', text: result.message, type: 'success'}, function () {
                    window.location.href = base_url + '/group-manager/project/templates';
                });
            } else {
                swal('', result.message, 'error');
            }
            $(window).unblock();
        });
    });

    $("#createProjectForm").validate({
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
                required: true,
                min: 1
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
            $("#createProjectForm")[0].submit();
        }
    });

});

//Search group manager
$("#groupManagerId").select2({
    width: '100%',
    placeholder: "Search By name of Group Manager",
    minimumInputLength: 1,
    allowClear: true,
    ajax: {
        url: base_url + '/get-company-groupManager',
        dataType: 'json',
        data: function (params) {
            return {term: params.term};
        },
        processResults: function (data) {
            if (data == '0') {
                return {results: [{'text': 'No Results Found'}]};
            }
            return {results: data};
        }
    },
    escapeMarkup: function (markup) {
        return markup;
    }
});

