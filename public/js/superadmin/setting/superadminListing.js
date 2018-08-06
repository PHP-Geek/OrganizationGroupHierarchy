
//function listingDatatable() {
var dtable = $('#superadminListing').DataTable({
    processing: true,
    serverSide: true,
    searching: false,
    dom: 'lBfrtip',
    lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
    pageLength: 10,
    buttons: [
        'csv', 'print'
    ],
    ajax: {
        "url": base_url + "/superadminDatatables",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
              d.keyword = $("#keyword").val();

        }
    },
    columns: [
        {data: 'firstName', name: 'firstName', searchable: false, orderable: false, title: "First Name", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'lastName', name: 'lastName', searchable: false, orderable: false, title: "Last Name", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'userName', name: 'userName', searchable: true, orderable: false, title: "Username", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },

        {data: 'email', name: 'email', searchable: true, orderable: false, title: "Email", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'phone', name: 'phone', searchable: true, orderable: false, title: "Contact No", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: null, searchable: false, orderable: false, title: "Edit", visible: true,
            render: function (data, full, row) {

                return html = '<a href="' + base_url + '/vadi-admin/edit/' + row.id + '" type="button" class="label label-sm label-warning"><i class="fa fa-edit"></i></a>';
            }
        },
        {data: 'userStatus', name: 'userStatus', searchable: false, orderable: false, title: "Status", visible: true,
            render: function (data, full, row) {
                switch (data) {

                    case "1":
                    case 1:
                        return '<div class="text-center"><span id="status' + row.id + '" class="statusList label label-success" onclick="superadminStatus(' + row.id + ')" data-value="0"> Active </span></div>';
                        break;
                    default:
                        return '<div class="text-center"><span id="status' + row.id + '" class="statusList label label-danger" onclick="superadminStatus(' + row.id + ')" data-value="1"> Inactive </span></div>';
                        break;
                }
            }
        }

    ]
});
$.fn.dataTable.ext.errMode = 'throw';


//filter the data 
$("#searchBtn").on('click', function () {
    dtable.draw();
});

//filter the data 
$("#resetBtn").on('click', function () {
    $("#searchVadiAdminForm")[0].reset();
    dtable.draw();
});


//Change 
function superadminStatus(userId) {
    swal(
            {
                title: "Status Confirmation",
                text: "Change superadmin status",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false,
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
            var status = $("#status" + userId).attr('data-value');
            $.post(base_url + "/change-status", {_token: $("input[name=_token]").val(), id: userId, userStatus: status}, function (data) {
                if (data.code == '1') {
                    if (status == '1') {
                        swal({title: '', text: 'Activated', type: 'success'}, function () {
                            $("#status" + userId).removeClass('label-danger');
                            $("#status" + userId).addClass('label-success');
                            $("#status" + userId).attr('data-value', '0');
                            $("#status" + userId).html('Active');
                        });
                    } else {
                        swal({title: '', text: 'De-activated', type: 'success'}, function () {
                            $("#status" + userId).removeClass('label-success');
                            $("#status" + userId).addClass('label-danger');
                            $("#status" + userId).attr('data-value', '1');
                            $("#status" + userId).html('Inactive');
                        });
                    }
                } else {
                    swal('', 'Something went wrong', 'error');
                }
                $(window).unblock();
            });
        } else {
            location.reload();
        }
    });
}

