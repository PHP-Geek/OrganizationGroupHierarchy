//function listingDatatable() {
var dtable = $('#framingGuideListing').DataTable({
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
        "url": base_url + "/admin/framing-guide-datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();

        }
    },
    columns: [
        {data: 'fileOriginalName', name: 'fileOriginalName', searchable: false, orderable: false, title: "File Name", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'dateTime', name: 'dateTime', searchable: false, orderable: false, title: "Date/Time", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: null, searchable: false, orderable: false, title: "View", visible: true,
            render: function (data, full, row) {

                return '<a  download="true" href="' + base_url + '/uploads/assets/' + row.companyId + '/' + row.fileName + '" type="button" class="label label-sm label-success"><i class="fa fa-eye"></i></a>';
            }
        },

        {data: 'status', name: 'status', searchable: false, orderable: false, title: "Action", visible: true,
            render: function (data, full, row) {

                switch (data) {
                    case "1":
                    case 1:
                        return '<div class="text-center"><span id="status' + row.id + '" class="statusList label label-success" onclick="framingGuideStatus(' + row.id + ')" data-value="0"> Visible </span></div>';
                        break;
                    default:
                        return '<div class="text-center"><span id="status' + row.id + '" class="statusList label label-danger" onclick="framingGuideStatus(' + row.id + ')" data-value="1"> Invisible </span></div>';
                        break;
                }
            }
        },
    ]
});
$.fn.dataTable.ext.errMode = 'throw';

//change Framing guide status
function framingGuideStatus(Id) {
    swal(
            {
                title: "Confirmation",
                text: "Are you sure to want change status?",
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
            var status = $("#status" + Id).attr('data-value');
            $.post(base_url + "/admin/change-framing-guide-status", {_token: $("input[name=_token]").val(), id: Id, status: status}, function (data) {
                if (data.code == '1') {
                    if (status == '1') {
                        swal({title: "", text: "Activated", type: "success"}, function () {
                            $("#status" + Id).removeClass('label-danger');
                            $("#status" + Id).addClass('label-success');
                            $("#status" + Id).attr('data-value', '0');
                            $("#status" + Id).html('Active');
                        });
                    } else {
                        swal({title: '', text: 'De-activated', type: 'success'}, function () {
                            $("#status" + Id).removeClass('label-success');
                            $("#status" + Id).addClass('label-danger');
                            $("#status" + Id).attr('data-value', '1');
                            $("#status" + Id).html('Inactive');
                        });
                    }
                } else {
                    swal('', 'Something went wrong', 'error');
                }
                $(window).unblock();
            });
        }
    });
}