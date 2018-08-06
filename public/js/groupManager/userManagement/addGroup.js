//Search user
$("#userId").select2({
    width: '100%',
    placeholder: "Search By name",
    minimumInputLength: 1,
    allowClear: true,
    ajax: {
        url: base_url + '/get-company-user',
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


$(function () {
    $("#addGroupForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            groupName: {
                required: true,
            },
            groupManagerId: {
                required: true
            },
            groupDescription: {
                required: true,
            }
        },
        messages: {
            groupName: {
                required: "Group name is required",
            },
            groupManagerId: {
                required: "Group Manager is required"
            },
            groupDescription: {
                required: "Group description is required",

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
            $("#addGroupBtn").button('loading');
            $.post('', $("#addGroupForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/group-manager/group/list';
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
                $("#addGroupBtn").button('reset');
            });
        }
    });

});
//cancel button click
$("#cancelButton").on('click', function () {
    window.location.href = base_url + '/group-manager/group/list';
});