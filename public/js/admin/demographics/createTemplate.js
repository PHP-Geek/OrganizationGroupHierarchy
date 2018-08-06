$(function () {
    $("#traitTemplateForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            templateTitle: {
                required: true
            }
        },
        messages: {
            templateTitle: {
                required: "Template title is required"
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
            $.post('', $("#traitTemplateForm").serialize(), function (data) {
                if (data.code === '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/admin/trait/templates';
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

});

//clone component
function clone_component(t, n) {
    var tr = $(t).closest('.clone_component_' + n);
    clone = tr.clone();
    clone.find('input,textarea').val('');
    tr.after(clone);
    clone.find('.remove_component_button_' + n).removeClass("hidden");
    if ($('.clone_component_' + n).length > 1) {
        $('.remove_component_button_' + n).removeClass("hidden");
    }
    $("#traitTemplateForm").find("textarea").each(function (k, v) {
        $(v).attr('id', 'templateFieldValue_' + k);
        $(v).attr('onclick', 'openmodal(' + k + ')');
    });
    $(t).addClass("hidden");
}

//remove component
function remove_component(t, n) {
    if ($('.clone_component_' + n).length !== 1) {
        $(t).closest('.clone_component_' + n).remove();
        if ($('.clone_component_' + n).length === 1) {
            $('.remove_component_button_' + n).addClass("hidden");
        } else {
            $('.remove_component_button_' + n).eq(($('.clone_component_' + n).length - 1)).removeClass("hidden");
        }
    } else {
        $('.remove_component_button_' + n).addClass("hidden");
    }
    $('.clone_component_button_' + n).eq(($('.clone_component_' + n).length - 1)).removeClass("hidden");
}

function openmodal(rowId) {
    $("#fieldsValueModal").find('#rowId').val(rowId);
    $("#fieldsValueModal").modal('show');
}

$("#setValueBtn").on('click', function () {
    var id = $("#fieldsValueModal").find('#rowId').val();
    var valueArray = [];
    $("#fieldsValueModal").find('.setValue').each(function (i, v) {
        valueArray.push($(v).val());
    });
    $("#templateFieldValue_" + id).val(JSON.stringify(valueArray));
    $("#fieldsValueModal").modal('hide');
});

$("#cancelBtn").on('click', function () {
    window.location.href = base_url + '/admin/trait/templates';
})