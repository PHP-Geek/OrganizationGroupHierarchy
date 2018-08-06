var dtable = $('#projectTypeDatatable').DataTable({
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
        "url": base_url + "/group-manager/project/project-type-datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
             d.keyword = $("#keyword").val();
        }
    },
    columns: [
        {data: 'projectTypeName', name: 'projectTypeName', searchable: false, orderable: false, title: "Project Type", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'firstName', name: 'firstName', searchable: false, orderable: false, title: "Created By", visible: true,
            render: function (data, full, row) {
                return data + ' ' + row.lastName;
            }
        },
        {data: 'noOfSpeakers', name: 'noOfSpeakers', searchable: true, orderable: false, title: "No. of speakers", visible: true,
            render: function (data, full, row) {
                return data == '-1' ? 'Not Specified' : data;
            }
        },
        {data: 'projectTypeStatus', name: 'projectTypeStatus', searchable: false, orderable: false, title: "Status", visible: true,
            render: function (data, full, row) {
                switch (data) {
                    case "1":
                    case 1:
                        return '<div class="btn-group"> <a class="btn btn-sm green-jungle" href="javascript:;" data-toggle="dropdown" aria-expanded="false">Active <i class="fa fa-angle-down"></i></a><ul class="dropdown-menu"><li><a href="javascript:;" data-value="0" onclick="projectTypeStatus(' + row.id + ',this)"><i class="fa fa-circle font-red"></i> De-activate </a></li></ul></div>';
                        break;
                    default:
                        return '<div class="btn-group"><a class="btn btn-sm red" href="javascript:;" data-toggle="dropdown" aria-expanded="false">De-active <i class="fa fa-angle-down"></i></a><ul class="dropdown-menu"><li><a href="javascript:;" data-value="1" onclick="projectTypeStatus(' + row.id + ',this)"><i class="fa fa-circle font-green-jungle"></i> Activate </a></li></ul></div>';
                        break;
                }
            }
        },
        {data: null, searchable: false, orderable: false, title: 'Action', visbile: true,
            render: function (data, full, row) {
                return '<a  href="' + base_url + '/group-manager/project/project-type/edit/' + row.id + '" class="btn green-jungle btn-outline btn-xs"><i class="fa fa-edit"></i></a>';
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
    $("#searchProjectForm")[0].reset();
    dtable.draw();
});

//edit the project type
function editProjectType(id) {
    window.location.href = base_url + '/project-type/edit/' + id;
}

/**
 * change the user status
 * @param {type} projectTypeId
 * @returns {undefined}
 */
function projectTypeStatus(projectTypeId, that) {
    swal(
            {
                title: "Status Confirmation",
                text: "Are you sure to change the status?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: true,
                closeOnCancel: true
            }, function (isConfirm) {
        if (isConfirm) {
            var status = $(that).attr('data-value');
            changeProjectTypeStatus(projectTypeId, status);
        }
    });
}

function changeProjectTypeStatus(projectTypeId, status) {
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
    $.post(base_url + "/group-manager/project/change-project-type-status", {_token: $("input[name=_token]").val(), id: projectTypeId, projectTypeStatus: status}, function (data) {
        if (data.code == '1') {
            dtable.draw();
        } else {
            swal('', 'Something went wrong', 'error');
        }
        $(window).unblock();
    });
}



