//save the package
function selectPackage(id) {
    swal(
            {
                title: "Confirm Your Package",
                text: "Are you sure to select the package?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: true,
                closeOnCancel: true
            }, function (isConfirm) {
        if (isConfirm) {
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
            $.post(base_url + '/savePackage', {_token: $("input[name=_token]").val(), packageId: id}, function (data) {
                if (data.code == "1" || data.code == 1) {
                    swal({title: 'Successful', 'text': 'Request Added Successfully. You will get a notification as account is approved', 'type': 'success'}, function () {
                        window.location.href = base_url;
                    });
                } else {
                    swal('Error', data.message, 'error');
                }
                $(window).unblock();
            });
        }
    });
}
