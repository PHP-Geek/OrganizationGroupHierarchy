$(function () {

    //Search user
    $("#participantId").select2({
        width: '100%',
        placeholder: "Search By name/email",
        minimumInputLength: 1,
        allowClear: true,
        ajax: {
            url: base_url + '/group-manager/get-company-participants',
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
});

$("#addParticipantForm").validate({

    errorElement: 'span', errorClass: 'help-block text-right',

    rules: {
        userName: {
            required: true,
            remote: {
                url: base_url + '/validateUserNameOrEmail?type=username',
                type: 'post',
                data: {
                    _token: $("input[name=_token]").val(),
                }
            }
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
            remote: {
                url: base_url + '/validateUserNameOrEmail?type=email',
                type: 'post',
                data: {
                    _token: $("input[name=_token]").val(),

                }
            }
        },
        phone: {
            required: true,
//            contactNumber: true
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

        $.post(base_url + '/admin/add-participant', $("#addParticipantForm").serialize(), function (data) {
            if (data.code === '1') {
                $("#newParticipantModal").modal('hide');
                swal({title: "", text: data.message, type: "success"}, function () {
                    location.reload();
//                    $("#newParticipantModal").modal('hide');
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

$("#addExistingParticipantForm").validate({
    errorElement: 'span', errorClass: 'help-block text-right',
    rules: {
        participantId: {
            required: true
        }
    },
    messages: {
        participantId: {
            required: "Participant is required"
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
        $.post(base_url + '/admin/add-existing-participant', $("#addExistingParticipantForm").serialize(), function (data) {
            if (data.code === '1') {
                $("#existingParticipantModal").modal('hide');
                swal({title: "", text: data.message, type: "success"}, function () {
                    location.reload();
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

function deleteParticipant(id) {
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
    $.post(base_url + '/admin/remove-participant', {_token: $("input[name=_token]").val(), id: id}, function (data) {
        if (data.code === '1') {
            swal({title: "", text: data.message, type: "success"}, function () {
                $("#" + id).remove();
                $("#showBtns").html('<div class="btn-group"><button class="btn green dropdown-toggle" data-toggle="dropdown">Add Participant <i class="fa fa-angle-down"></i></button><ul class="dropdown-menu"><li><a href="javascript:;" data-toggle="modal" data-target="#newParticipantModal"> New </a></li><li><a href="javascript:;" data-toggle="modal" data-target="#existingParticipantModal"> Existing </a></li></ul></div>');
            });
        } else if (data.code == '0') {
            swal("", data.message, "error");
        } else {
            swal("", data.message, "error");
        }
        $(window).unblock();
    });
}