function deleteParticipant(that) {
    var id = $(that).attr('data-value');
    swal({
            title: "Confirmation",
            text: "Are you sure to delete this participant from list?",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn btn-orange text-white",
            confirmButtonText: "Confirm",
            closeOnConfirm: false
        },
        function (res) {
            if (res) {
                $(window).block({
                    'message': '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
                    'css': {
                        border: '0',
                        padding: '0',
                        backgroundColor: 'none',
                        marginTop: '5%',
                        zIndex: '10600'
                    },
                    overlayCSS: {
                        backgroundColor: '#555',
                        opacity: 0.3,
                        cursor: 'wait',
                        zIndex: '10600'
                    },
                });
                $.post(base_url + '/group-manager/session/list/delete-list-user', {
                    _token: $("input[name=_token]").val(),
                    listUserId: id
                }, function (response) {
                    if (response.code == '1') {
                        swal({
                            title: '',
                            text: 'Success',
                            type: 'success'
                        }, function () {
                            $("#row_" + id).remove();
                        });
                    } else {
                        swal('', response.message, 'error');
                    }
                    $(window).unblock();
                });
            }
        });
}


$("#listParticipantForm").validate({
    errorElement: 'span',
    errorClass: 'help-block text-right',
    rules: {
        listId: {
            required: true
        },
        firstName: {
            required: true
        },
        email: {
            required: true,
            email: true,
            remote: {
                url: base_url + '/validateUserNameOrEmail?type=email',
                type: 'post',
                data: {
                    _token: $("input[name=_token]").val(),

                }
            }
        },
        phone: {
            required: true
        }
    },
    messages: {
        listId: {
            required: "List is required"
        },
        firstName: {
            required: "Participant Name is required"
        },
        email: {
            required: "Email is required",
            email: "Email must be valid",
            remote: "Email already exist"
        },
        phone: {
            required: "Contact is required"
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
            overlayCSS: {
                backgroundColor: '#555',
                opacity: 0.3,
                cursor: 'wait',
                zIndex: '10600'
            },
        });
        $.post(base_url + "/group-manager/session/list/add-list-participant", $("#listParticipantForm").serialize(), function (data) {
            if (data.code == '1') {
                swal({
                    title: '',
                    text: 'Success',
                    type: 'success'
                }, function () {
                    window.location.href = '';
                });
            } else {
                swal('', data.message, 'error');
            }
            $(window).unblock();
        });
    }
});

//Search user
$("#userId").select2({
    width: '100%',
    placeholder: "Search By name/email",
    minimumInputLength: 1,
    allowClear: true,
    ajax: {
        url: base_url + '/group-manager/get-company-participants',
        dataType: 'json',
        data: function (params) {
            return {
                term: params.term
            };
        },
        processResults: function (data) {
            if (data == '0') {
                return {
                    results: [{
                        'text': 'No Results Found'
                    }]
                };
            }
            return {
                results: data
            };
        }
    },
    escapeMarkup: function (markup) {
        return markup;
    }
});

$("#addExistingUserButton").on('click', function () {
    $(window).block({
        'message': '<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>',
        'css': {
            border: '0',
            padding: '0',
            backgroundColor: 'none',
            marginTop: '5%',
            zIndex: '10600'
        },
        overlayCSS: {
            backgroundColor: '#555',
            opacity: 0.3,
            cursor: 'wait',
            zIndex: '10600'
        },
    });
    $.post(base_url + '/group-manager/session/list/add-exiting-participant', {
        _token: $("input[name=_token]").val(),
        listId: curData.listId,
        userId: $("#userId").val()
    }, function (result) {
        if (result.code == '1') {
            window.location.href = '';
        } else {
            swal('', result.message, 'error');
        }
        $(window).unblock();
    });
});