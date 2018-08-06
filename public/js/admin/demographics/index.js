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
    $.get(base_url + '/admin/get-session-by-project/' + projectId, function (data) {
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
        $.post(base_url + '/admin/trait/makeSessionTemplateGrid', $("#filterForm").serialize(), function (response) {
            if (response != '0') {
                $("#showGrid").html(response);
            } else {
                swal('', 'Something went wrong', 'error');
            }
        });
    }
}
