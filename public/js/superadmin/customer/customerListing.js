var dtable = $('#customerListingDatatable').DataTable({
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
        "url": base_url + "/approved-customer-datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
            d.keyword = $("#keyword").val();
            d.status = $("#status").val();
        }
    },
    columns: [
        {data: 'companyName', name: 'companyName', searchable: true, orderable: false, title: "Company", visible: true},
        {data: 'firstName', name: 'firstName', searchable: false, orderable: false, title: "Company Admin", visible: true,
            render: function (data, full, row) {
                return data + ' ' + row.lastName;
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
        {data: 'title', name: 'title', searchable: true, orderable: false, title: "LOB", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'userStatus', name: 'userStatus', searchable: false, orderable: false, title: "Status", visible: true,
            render: function (data, full, row) {
                switch (data) {
                    case "1":
                    case 1:
                        return '<div class="btn-group"> <a class="btn btn-sm green-jungle" href="javascript:;" data-toggle="dropdown" aria-expanded="false">Active <i class="fa fa-angle-down"></i></a><ul class="dropdown-menu"><li><a href="javascript:;" data-value="0" onclick="userStatus(' + row.id + ',this)"><i class="fa fa-circle"></i> De-activate </a></li><li><a href="javascript:;" data-value="-1" onclick="userStatus(' + row.id + ',this)"><i class="fa fa-ban font-red-thunderbird"></i> Ban </a></li></ul></div>';
                        break;
                    case "0":
                    case 0:
                        return '<div class="btn-group"><a class="btn btn-sm default" href="javascript:;" data-toggle="dropdown" aria-expanded="false">Inactive <i class="fa fa-angle-down"></i></a><ul class="dropdown-menu"><li><a href="javascript:;" data-value="1" onclick="userStatus(' + row.id + ',this)"><i class="fa fa-circle font-green-sharp"></i> Activate </a></li><li><a href="javascript:;" data-value="-1" onclick="userStatus(' + row.id + ',this)"><i class="fa fa-ban font-red-thunderbird"></i> Ban </a></li></ul></div>';
                        break;
                    default:
                        return '<div class="btn-group"><a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown" aria-expanded="false">Banned <i class="fa fa-angle-down"></i></a><ul class="dropdown-menu"><li><a href="javascript:;" data-value="1" onclick="userStatus(' + row.id + ',this)"><i class="fa fa-circle font-green-sharp"></i> Activate </a></li><li><a href="javascript:;" data-value="0" onclick="userStatus(' + row.id + ',this)"><i class="fa fa-circle"></i> De-activate </a></li></ul></div>';
                        break;
                }
            }
        },
        {data: null, searchable: false, orderable: false, title: 'Action', visbile: true,
            render: function (data, full, row) {
                return '<a onclick="viewCustomer(' + row.id + ')" href="javascript:;" class="btn yellow btn-outline btn-xs"><i class="fa fa-eye"></i></a><a href="javascript:;" onclick="changePassword(' + row.id + ')" class="btn yellow btn-outline btn-xs"><i class="fa fa-key" aria-hidden="true"></i></a>';
            }
        }
    ]
});
$.fn.dataTable.ext.errMode = 'throw';
//redirect to change password link
function changePassword(id) {
    window.location.href = base_url + '/customer/change-password/' + id;
}
//redirect to change view customer link
function viewCustomer(id) {
    window.location.href = base_url + '/customer/view/' + id;
}

//filter the data 
$("#applyBtn").on('click', function () {
    dtable.draw();
});

//filter the data 
$("#resetBtn").on('click', function () {
    $("#customerListingForm")[0].reset();
    dtable.draw();
});

/**
 * change the user status
 * @param {type} userId
 * @returns {undefined}
 */
function userStatus(userId, that) {
    swal(
            {
                title: "Status Confirmation",
                text: "Are you sure to change the user status?",
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
            var status = $(that).attr('data-value');
            $.post(base_url + "/change-status", {_token: $("input[name=_token]").val(), id: userId, userStatus: status}, function (data) {
                if (data.code == '1') {
                    dtable.draw();
                } else {
                    swal('', 'Something went wrong', 'error');
                }
                $(window).unblock();
            });
        }
    });
}



