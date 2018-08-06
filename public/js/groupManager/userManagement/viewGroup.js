var dtable = $('#groupDatatable').DataTable({
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
        "url": base_url + "/group-manager/group/datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
            d.keyword = $("#keyword").val();
        }
    },
    columns: [
        {data: 'groupName', name: 'groupName', searchable: false, orderable: false, title: "NameOfGroup", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'parentGroupName', name: 'parentGroupName', searchable: false, orderable: false, title: "Parent Group", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'groupManagerName', name: 'groupManagerName', searchable: false, orderable: false, title: "Group Manager", visible: true},
        {data: 'firstName', name: 'firstName', searchable: false, orderable: false, title: "Created by", visible: true},
        {data: 'groupStatus', name: 'groupStatus', searchable: false, orderable: false, title: "Status", visible: true,
            render: function (data, full, row) {
                switch (data) {
                    case "1":
                    case 1:
                        return '<div class="text-center"><span id="status' + row.id + '" class="statusList label label-success" onclick="groupStatus(' + row.id + ')" data-value="0"> Active </span></div>';
                        break;
                    default:
                        return '<div class="text-center"><span id="status' + row.id + '" class="statusList label label-danger" onclick="groupStatus(' + row.id + ')" data-value="1"> Inactive </span></div>';
                        break;
                }
            }
        },
        {data: null, searchable: false, orderable: false, title: 'Action', visbile: true,
            render: function (data, full, row) {
                return '<a onclick="groupHierarchy(' + row.id + ')" href="javascript:;" class="btn green btn-outline btn-sm"><i class="fa fa-eye"> View Group Hierarchy </i></a> <a href="javascript:;"onclick="edit(' + row.id + ')" class="btn green btn-sm"><i class="fa fa-edit"></i></a>';
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
    $("#searcGroupForm")[0].reset();
    dtable.draw();
});

function edit(id) {
    window.location.href = base_url + '/group-manager/group/edit/' + id;
}
function groupHierarchy(id) {
    window.location.href = base_url + '/group-manager/group/hierarchy/' + id;
}

//change group status
function groupStatus(groupId) {
    swal(
            {
                title: "Status Confirmation",
                text: "Change group status",
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
            var status = $("#status" + groupId).attr('data-value');
            $.post(base_url + "/group-manager/change-group-status", {_token: $("input[name=_token]").val(), id: groupId, groupStatus: status}, function (data) {
                if (data.code == '1') {
                    if (status == '1') {
                        swal({title: '', text: 'Activated', type: 'success'}, function () {
                            $("#status" + groupId).removeClass('label-danger');
                            $("#status" + groupId).addClass('label-success');
                            $("#status" + groupId).attr('data-value', '0');
                            $("#status" + groupId).html('Active');
                        });
                    } else {
                        swal({title: '', text: 'De-activated', type: 'success'}, function () {
                            $("#status" + groupId).removeClass('label-success');
                            $("#status" + groupId).addClass('label-danger');
                            $("#status" + groupId).attr('data-value', '1');
                            $("#status" + groupId).html('Inactive');
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

//add group link method
function addGroup() {
    window.location.href = base_url + '/group-manager/group/add';
}