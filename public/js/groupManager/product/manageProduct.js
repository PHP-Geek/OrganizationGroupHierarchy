//function listingDatatable() {
var dtable = $('#productListing').DataTable({
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
        "url": base_url + "/group-manager/product-datatable",
        'method': 'POST',
        'data': function (d) {
            d._token = $("input[name=_token]").val();
             d.keyword = $("#keyword").val();

        }
    },
    columns: [
        {data: 'productName', name: 'productName', searchable: false, orderable: false, title: "Product Name", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'categoryName', name: 'categoryName', searchable: false, orderable: false, title: "Category", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'brandName', name: 'brandName', searchable: true, orderable: false, title: "Brand", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },

        {data: 'productAltName', name: 'productAltName', searchable: true, orderable: false, title: "Alternate Name", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: 'productManufacturingYear', name: 'productManufacturingYear', searchable: true, orderable: false, title: "Manufacturing Year", visible: true,
            render: function (data, full, row) {
                return data;
            }
        },
        {data: null, searchable: false, orderable: false, title: "Action", visible: true,
            render: function (data, full, row) {

                return html = '<a href="' + base_url + '/group-manager/product/edit/' + row.id + '" type="button" class="btn blue btn-outline btn-sm"><i class="fa fa-pencil"></i></a><span id="status' + row.id + '" class="fa fa-trash btn red btn-outline btn-sm" onclick="productStatus(' + row.id + ')" data-value="-1"> </span>';
            }
        },
    ]
});
$.fn.dataTable.ext.errMode = 'throw';

//filter the data 
$("#searchBtn").on('click', function () {
    dtable.draw();
});

//filter the data 
$("#resetBtn").on('click', function () {
    $("#searchProductForm")[0].reset();
    dtable.draw();
});

//change product status
function productStatus(Id) {
    swal(
            {
                title: "Confirmation",
                text: "Are you sure to delete the product?",
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
            $.post(base_url + "/group-manager/change-product-status", {_token: $("input[name=_token]").val(), id: Id, productStatus: status}, function (data) {
                if (data.code == "1" || data.code == 1) {
                    swal({title: '', text: 'Success', type: 'success'}, function () {
                        $("#status" + Id).closest('tr').remove();
                    });
                } else {
                    swal('', 'Something went wrong', 'error');
                }
                $(window).unblock();
            });
        }
    });
}