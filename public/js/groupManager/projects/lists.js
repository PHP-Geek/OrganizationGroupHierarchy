var dtable = $('#projectDatatable').DataTable({
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
        "url": base_url + "/group-manager/project/project-datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
            d.keyword = $("#keyword").val();
        }
    },
    columns: [
        {data: 'projectTitle', name: 'projectTitle', searchable: false, orderable: false, title: "Project Title", visible: true},
        {data: 'projectTypeName', name: 'projectTypeName', searchable: false, orderable: false, title: "Project type", visible: true
        },
        {data: 'groupName', name: 'groupName', searchable: true, orderable: false, title: "Group", visible: true},
        {data: 'projectSessionCount', name: 'projectSessionCount', searchable: true, orderable: false, title: "No of sessions", visible: true},
        {data: 'ownerFirstName', name: 'ownerFirstName', searchable: true, orderable: false, title: "Owner", visible: true, render: function (data, full, row) {
                return data + ' ' + (row.ownerLastName != null ? row.ownerLastName : '');
            }
        },
        {data: 'firstName', name: 'firstName', searchable: true, orderable: false, title: "Created by", visible: true, render: function (data, full, row) {
                return data + ' ' + (row.firstName != null ? row.lastName : '');
            }
        },
        {data: 'projectCreatedOn', name: 'projectCreatedOn', searchable: false, orderable: false, title: "Created", visible: true},
        {data: null, searchable: false, orderable: false, title: 'Action', visbile: true,
            render: function (data, full, row) {
                return '<a href="javascript:;" onclick="editProject(' + row.id + ')" class="btn green btn-outline btn-xs" title="Edit"><i class="fa fa-edit"></i></a><a type="button" class="btn yellow btn-outline btn-xs" title="Copy" href="javascript:;" onclick="copyProject(' + row.id + ')"><i class="fa fa-copy"></i></a>';
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
function editProject(id) {
    window.location.href = base_url + '/group-manager/project/edit/' + id;
}
function addProject() {
    window.location.href = base_url + '/group-manager/project/add';
}
function copyProject(id) {
    window.location.href = base_url + '/group-manager/project/copy/' + id;
}

/**
 * change the user status
 * @param {type} projectId
 * @returns {undefined}
 */
function projectStatus(projectId, that) {
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
            changeProjectStatus(projectId, status);
        }
    });
}

function changeProjectStatus(projectId, status) {
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
    $.post(base_url + "/group-manager/change-project-type-status", {_token: $("input[name=_token]").val(), id: projectId, projectStatus: status}, function (data) {
        if (data.code == '1') {
            dtable.draw();
        } else {
            swal('', 'Something went wrong', 'error');
        }
        $(window).unblock();
    });
}



