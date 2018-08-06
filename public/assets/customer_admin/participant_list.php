
<?php include('include/header.php'); ?>

<style>
    .table thead tr th {
        font-size: 14px;
        font-weight: 600;
        white-space: nowrap;
    }
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
        white-space: nowrap;
    }
    .clr-green {
        color: #417d6b !important;
    }
</style>
<body class="page-container-bg-solid">
    <div class="page-wrapper">
        <?php include('include/header_include.php'); ?>
        <div class="page-wrapper-row full-height">
            <div class="page-wrapper-middle">
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <!-- BEGIN PAGE HEAD-->
                        <!--                        <div class="page-head">
                                                    <div class="container">
                                                         
                                                        <div class="page-title">
                                                            <h1>Companies
                                                                
                                                            </h1>
                                                        </div>
                                                    </div>
                                                </div>-->
                        <!-- END PAGE HEAD-->
                        <!-- BEGIN PAGE CONTENT BODY -->
                        <div class="page-content">
                            <div class="container">
                                <!-- BEGIN PAGE BREADCRUMBS -->
                                <ul class="page-breadcrumb breadcrumb">
                                    <li>
                                        <a href="index.html">Home</a>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Session Management</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Manage Session</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Participant List</span>

                                    </li>
                                </ul>
                                <!-- END PAGE BREADCRUMBS -->
                                <!-- BEGIN PAGE CONTENT INNER -->

                                <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="portlet light">
                                                    <div class="portlet-title">
                                                        <div class="caption caption-md">
                                                            <i class="icon-bar-chart font-dark hide"></i>
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Participant List</span>
                                                            <!--                                                            class="btn blue-madison"-->
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <button type="button" class="btn green" data-toggle="modal" href="#import-list">Import List</button>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 text-right">
                                                            <a href="add_participant_list.php" class="btn blue">Add List</a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">

                                                        <div class="table-responsive">

                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th> S.No </th>
                                                                        <th> List Name </th>
                                                                        <th> No of Participants</th>
                                                                        <th> Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td> 1 </td>
                                                                        <td> My List 1 </td>
                                                                        <td> Participants - 54</td>
                                                                        <td>   
                                                                            <a class="btn blue btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 2 </td>
                                                                        <td> My List 2 </td>
                                                                        <td> Participants - 46</td>
                                                                        <td>   
                                                                            <a class="btn blue btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 3 </td>
                                                                        <td> My List 3 </td>
                                                                        <td> Participants - 47</td>
                                                                        <td>   
                                                                            <a class="btn blue btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 4 </td>
                                                                        <td> My List 4 </td>
                                                                        <td> Participants - 17</td>
                                                                        <td>   
                                                                            <a class="btn blue btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 5 </td>
                                                                        <td> My List 5 </td>
                                                                        <td> Participants - 95</td>
                                                                        <td>   
                                                                            <a class="btn blue btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- END PAGE CONTENT INNER -->
                            </div>
                        </div>
                        <!-- END PAGE CONTENT BODY -->
                        <!-- END CONTENT BODY -->
                    </div>
                    <!-- END QUICK SIDEBAR -->
                </div>
                <!-- END CONTAINER -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="import-list" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h3 class="modal-title text-center clr-green"><b>Add List</b></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>List Name</label>
                                <input class="form-control" placeholder="" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Upload List</label>
                                <div class="input-group">
                                    <span class="btn green fileinput-button">
                                        <i class="fa fa-plus"></i>
                                        <span> Add files... </span>
                                        <input type="file" name="files[]" multiple="">
                                    </span>
                                </div>
                                <p>
                                    <span class="label label-danger">NOTE:</span> &nbsp; The files format upload only on CSV, xls, docx.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="button" class="btn green">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script>
        $(".swtalert").on('click', function () {
            swal({
                title: "Are you sure to deactivate?",
                text: "Company will be deactivated !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, deactivate it !",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deactivated!", "Company has been deactivated.", "success");
                        }
                    });
        });
        swal();
        $(".swtalertt").on('click', function () {
            swal({
                title: "Are you sure to delete?",
                text: "Company will be deleted !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete it !",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Company has been deleted.", "success");
                        }
                    });
        });
        swal();

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <?php include('include/footer.php'); ?>