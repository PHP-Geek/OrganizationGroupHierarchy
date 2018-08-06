$(function () {
    getSessionByProjectId($("#projectId").val(), () => {
        getGridData();
    });

});

$("#projectId").on('click', function () {
    getSessionByProjectId($(this).val());
});
/**
 * get teh sessions by project 
 * @param {type} projectId
 * @returns {undefined}
 */
function getSessionByProjectId(projectId, cb) {
   
    $.get(base_url + '/group-manager/get-session-by-project/' + projectId, function (data) {
        var html = '<option value="" selected="selected" disabled="disabled">Select Session</option>';
        if (data != 0) {
            $.each(data, function (i, v) {
                html += '<option ' + (v.id == currentData.sessionId ? 'selected="selected"' : '') + ' value="' + v.id + '">' + v.sessionName + '</option>'
            });
           
        }
        $("#sessionId").html(html);
        cb();
    });
}

$("#sessionId").on('change', function () {
    getGridData();
});

function getGridData() {
    if ($("#sessionId").val() != null) {
        $.post(base_url + '/group-manager/trait/makeSessionTemplateGrid', $("#filterForm").serialize(), function (response) {
            if (response != '0') {
                $("#showGrid").html(response);
            } else {
                swal('', 'Something went wrong', 'error');
            }
        });
    }
}
