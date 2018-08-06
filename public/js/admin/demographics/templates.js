var controlArray = {'text': 'Text Field', 'select': 'Drop Down List', 'checkbox': 'Check Box', 'radio': 'Radio Button', 'number': 'Number'};
function viewTrait(id) {
    $.get(base_url + '/getTrait?id=' + id, function (data) {
        var html = '<tr><th>Field Name</th><th>Field Type</th></tr>';
        $.each(data, function (k, v) {
            html += '<tr>';
            html += '<td>' + v.templateFieldLabel + '</td>'
            html += '<td>' + controlArray[v.templateFieldControl] + '</td>'
            html += '</tr>'
        });
        $("#fields").html(html);
        $("#fieldsValueModal").modal('show');
    });
}

function addTemplate(){
    window.location.href=base_url+'/admin/trait/template/create';
}