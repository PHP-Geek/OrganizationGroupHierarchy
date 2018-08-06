var dtable = $('#projectTemplateDatatable').DataTable({
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
        "url": base_url + "/admin/project/templates/datatable",
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
                return '<a href="javascript:;" onclick="editProjectTemplate(' + row.id + ')" class="btn green-jungle btn-outline btn-xs"><i class="fa fa-edit" title="Edit"></i></a><a type="button" class="btn red btn-outline btn-xs" title="Delete" href="javascript:;" onclick="deleteProjectTemplate(' + row.id + ')"><i class="fa fa-trash"></i></a><a type="button" class="btn yellow btn-outline btn-xs" title="Use" href="javascript:;" onclick="useProjectTemplate(' + row.id + ',1)"><i class="fa fa-copy"></i></a>';
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

//edit the project template
function editProjectTemplate(id) {
    window.location.href = base_url + '/admin/project/template/edit/' + id;
}

function addProjectTemplate() {
    window.location.href = base_url + '/admin/project/template/create';
}
function useProjectTemplate(id, type) {
    window.location.href = base_url + '/admin/project/template/use/' + id + '/' + type;
}

/**
 * change the user status
 * @param {type} projectId
 * @returns {undefined}
 */
function deleteProjectTemplate(Id) {
    swal(
            {
                title: "Confirmation",
                text: "Are you sure to delete the template?",
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
            $.post(base_url + "/admin/delete-template/" + Id, {_token: $("input[name=_token]").val()}, function (data) {
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


