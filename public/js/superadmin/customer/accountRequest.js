var dtable = $('#accountRequestDatatable').DataTable({
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
        "url": base_url + "/account-request-datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
            d.createdAt = $("#createdAt").val();
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
        {data: 'companyName', name: 'companyName', searchable: true, orderable: false, title: "Company", visible: true},
        {data: 'createdAt', name: 'createdAt', searchable: true, orderable: false, title: "Created At", visible: true},
        {data: 'title', name: 'title', searchable: true, orderable: false, title: "LOB", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'packageTitle', name: 'packageTitle', searchable: true, orderable: false, title: "Package", visible: true,
            render: function (data, full, row) {
                if (data != 'undefined' && data != '') {
                    return '<label class="label label-warning">' + data + '</span>';
                }
                return '';
            }
        },
        {data: null, searchable: false, orderable: false, title: "Action", visible: true,
            render: function (data, full, row) {
                return '<div class="text-center"><a  onclick="approveAccount(' + row.id + ')" id="approveuser_' + row.id + '" href="javascript:;" class="btn green-jungle margin btn-xs approveAccount" data-value="' + row.id + '"><i class="fa fa-check"></i> Approve</a></div>';
            }
        }
    ]
});
$.fn.dataTable.ext.errMode = 'throw';

//get the user details
//function getUserById(id) {
//    $.get(base_url + '/getUserById?id=' + id, function (data) {
//
//    });
//}

//filter the data 
$("#searchBtn").on('click', function () {
    dtable.draw();
});

//filter the data 
$("#resetBtn").on('click', function () {
    $("#searchAccountRequestForm")[0].reset();
    dtable.draw();
});

//approve user
function approveAccount(id) {
    swal(
            {
                title: "Approve Customer",
                text: "Are you sure to approve the customer",
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
            $.post(base_url + '/approve-customer', {_token: $("input[name=_token]").val(), userId: id}, function (data) {
                if (data.code == '1') {
                    swal({title: 'Account Approved', text: 'Account approved successfully', type: 'success'}, function () {
                        dtable.draw();
                    });
                } else {
                    swal('Error', data.message, 'error');
                }
                $(window).unblock();
            });
        }
    });
}


function deleteAccount(id) {
    swal(
            {
                title: "Delete Customer",
                text: "Are you sure to delte the customer",
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
            $.post(base_url + '/delete-customer', {_token: $("input[name=_token]").val(), userId: id}, function (data) {
                if (data.code == '1') {
                    swal({title: 'Account Approved', text: 'Account approved successfully', type: 'success'}, function () {
                        dtable.draw();
                    });
                } else {
                    swal('Error', data.message, 'error');
                }
                $(window).unblock();
            });
        }
    });
}
$(function () {
    $("#createdAt").inputmask("mm/dd/yyyy");
});