
$(function () {
    $("#profileForm").validate({
        errorElement: 'span', errorClass: 'help-block text-right',
        rules: {
            firstName: {
                required: true
            },
            lastName: {
                required: true
            },
            contactNo: {
                required: true,
            }
        },
        messages: {

            firstName: {
                required: "First name is required"
            },
            lastName: {
                required: "Last name is required"
            },
            contactNo: {
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
            $("#editSuperadminBtn").button('loading');
            $.post('', $("#profileForm").serialize(), function (data) {
                if (data.code == '1') {
                    swal({title: "", text: data.message, type: "success"}, function () {
                        window.location.href = base_url + '/profile';
                    });
                } else if (data.code == '0') {
                    swal("", data.message, "error");
                } else {
                    swal("", data.message, "error");
                }
            });
        }
    });

})

//get states on load
$(document).ready(function () {
    getStates($("#country_id").val());
    $('#country_id').on('change', function () {
        var id = $(this).val();
        getStates(id);
    });
});
//get address states
function getStates(id) {
    if (id == '') {
        $('#stateId').prop('disable', true);
    } else {

        $.ajax({
            url: base_url + '/get-states',

            type: "GET",
            data: {'id': id},
            dataType: 'json',
            success: function (data) {
                var html = '<option value="" selected="selected" disabled="disabled">Select State</option>';
                $.each(data, function (key, value) {
                    var selected = false;
                    if (stateEditID == value.id) {
                        selected = true;
                    }
                    html += '<option ' + (selected == true ? 'selected="selected"' : '') + ' value="' + value.id + '">' + value.stateName + '</option>';
                });
                $('#stateId').html(html);
            },
            error: function () {
            }

        });
    }
}

