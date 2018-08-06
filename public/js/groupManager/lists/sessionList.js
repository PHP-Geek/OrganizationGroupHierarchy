function addSessionList() {
    $("#addNewListModal").modal('show');
}
/**
 * navigate to participant list
 * @param {*} id 
 */
function participants(id) {
    window.location.href = base_url + '/group-manager/session/list/participant/' + id + '/' + curData.sessionId;
}

$(".sessionListUpdate").on('click', function () {
    var listId = $(this).attr('data-value');
    swal({
            title: "Confirmation",
            text: "Are you sure to change the participant list for the session?",
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
                $.post(base_url + '/group-manager/session/change-session-list', {
                    _token: $("input[name=_token]").val(),
                    sessionId: curData.sessionId,
                    listId: listId
                }, function (response) {
                    if (response.code == '1') {
                        swal({
                            title: '',
                            text: 'Success',
                            type: 'success'
                        }, function () {
                            window.location.href = '';
                        });
                    } else {
                        swal('', response.message, 'error');
                    }
                    $(window).unblock();
                });
            }
        });

});
/**
 * edit list
 * @param {*} id 
 */
function editList(id) {
    $.get(base_url + '/group-manager/session/list/get-list/' + id, function (result) {
        $("#addNewListModal").find('#listName').val(result.listName);
        $("#addNewListModal").find('#listId').val(result.id);
        $("#addNewListModal").modal('show');
    });
}

$("#addListForm").validate({
    errorElement: 'span',
    errorClass: 'help-block text-right',
    rules: {
        listName: {
            required: true
        }
    },
    messages: {
        listName: {
            required: "List name is required"
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
        $.post(base_url + "/group-manager/session/list/save", $("#addListForm").serialize(), function (data) {
            if (data.code == '1') {
                swal({
                    title: '',
                    text: 'Success',
                    type: 'success'
                }, function () {
                    if ($("#addListForm").find('#listId').val() != '' && parseInt($("#addListForm").find('#listId').val()) > 0) {
                        $("#row_" + $("#addListForm").find('#listId').val()).find('.listNameLabel').html($("#addListForm").find('#listName').val());
                    } else {
                        window.location.href = '';
                    }
                    $("#addNewListModal").modal('hide');
                });
            } else {
                swal('', data.message, 'error');
            }
            $("#addNewListModal").find('#listId,#listName').val('');
            $(window).unblock();
        });
    }
});