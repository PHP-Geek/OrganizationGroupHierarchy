var dtable = $('#sessionDatatable').DataTable({
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
        "url": base_url + "/group-manager/session/datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
            d.projecId = $("#projectName").val();
            d.date = $("#date").val();
            d.keyword = $("#keyword").val();

        }
    },
    columns: [
        {data: 'sessionName', name: 'sessionName', searchable: false, orderable: false, title: "Session", visible: true},
        {data: 'ownerName', name: 'ownerName', searchable: false, orderable: false, title: "Owner", visible: true},
        {data: 'sessionStart', name: 'sessionStart', searchable: false, orderable: false, title: "When", visible: true, render: function (data, full, row) {
                return row.sessionDate + ' ' + data;
            }
        },
        {data: 'sessionLocation', name: 'sessionLocation', searchable: true, orderable: false, title: "Location", visible: true},
//        {data: 'P', name: 'projectSessionCount', searchable: true, orderable: false, title: "No of sessions", visible: true},
        {data: 'projectTitle', name: 'projectTitle', searchable: true, orderable: false, title: "Project", visible: true},
        {data: 'firstName', name: 'firstName', searchable: true, orderable: false, title: "Created by", visible: true, render: function (data, full, row) {
                return data + ' ' + (row.firstName != null ? row.lastName : '');
            }
        },
        {data: 'reportNeeded', name: 'reportNeeded', searchable: true, orderable: false, title: "Reports Needed", visible: true},
        {data: 'listName', name: 'listName', searchable: true, orderable: false, title: "Participants", visible: true, render: function (data, full, row) {
                if (data != null) {
                    return ' <a type="button" class="btn yellow btn-outline btn-xs" title="Participants" href="javascript:;" onclick="participantList(' + row.id + ')">' + data + '</a>';
                }
                return '<a type="button" class="btn yellow btn-outline btn-xs" title="Participants" href="javascript:;" onclick="participantList(' + row.id + ')">No List</a>';

            }},
        {data: 'sessionCreatedOn', name: 'sessionCreatedOn', searchable: false, orderable: false, title: "Created", visible: true},
        {data: null, searchable: false, orderable: false, title: 'Action', visbile: true,
            render: function (data, full, row) {
                return '<a href="javascript:;" onclick="editSession(' + row.id + ')" class="btn green-jungle btn-outline btn-xs" title="Edit"><i class="fa fa-edit"></i></a> <a href="javascript:;" onclick="copySession(' + row.id + ')" class="btn green-jungle btn-outline btn-xs" title="Edit"><i class="fa fa-copy"></i></a>';
            }
        }
    ]
});
$.fn.dataTable.ext.errMode = 'throw';

//go to participant list
function participantList(id) {
    window.location.href = base_url + '/group-manager/session/list/participants/' + id;
}
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
function editSession(id) {
    window.location.href = base_url + '/group-manager/session/edit/' + id;
}
function addSession() {
    window.location.href = base_url + '/group-manager/session/create';
}
function copySession(id) {
    window.location.href = base_url + '/group-manager/session/copy/' + id + '/1';
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


/**
 * get sersch product
 */
$("#projectName").select2({
    width: '100%',
    placeholder: "Filter By project name",
    minimumInputLength: 1,
    allowClear: true,
    ajax: {
        url: base_url + '/search-project',
        dataType: 'json',
        data: function (params) {
            return {term: params.term};
        },
        processResults: function (data) {
            if (data == '0') {
                return {results: [{'text': 'No Results Found'}]};
            }
            return {results: data};
        }
    },
    escapeMarkup: function (markup) {
        return markup;
    }
});
$(function () {
    $("#date").inputmask("mm/dd/yyyy");
});

