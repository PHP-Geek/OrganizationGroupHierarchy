
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
                                        <span>Customers Listing</span>
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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Customers Listing</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>
                                                    </div>
                                                     <div class="row">
                                                         <div class="col-md-12 col-sm-12">
                                                             <div class="dataTables_length pull-right" id="sample_5_length">
                                                               <div id="sample_5_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_5" type="search"></label></div></div></div>
                                                     </div>
                                                        <div class="portlet-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th> S.No </th>
                                                                            <th> Company Name </th>
                                                                            <th> Company Admin </th>
                                                                            <th> LOB </th>
                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> 1 </td>
                                                                            <td> Apple </td>
                                                                            <td> John doe </td>
                                                                            <td> Mobile communication </td>
                                                                            <td> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                </a>
                                                                                <button class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                </button>
                                                                                <button class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></button></td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td> 2 </td>
                                                                            <td> Samsung </td>
                                                                            <td> Mike </td>
                                                                            <td> Mobile communication </td>
                                                                            <td> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                </a>
                                                                                <button class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                </button>
                                                                                <button class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></button></td>


                                                                        </tr>
                                                                        <tr>
                                                                            <td> 3 </td>
                                                                            <td> Nokia </td>
                                                                            <td> Jablin </td>
                                                                            <td> Mobile communication </td>
                                                                            <th> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                </a>
                                                                                <button class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                </button>
                                                                                <button class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></button></th>

                                                                        </tr>
                                                                        <tr>
                                                                            <td> 4 </td>
                                                                            <td> Google </td>
                                                                            <td> Jack </td>
                                                                            <td> Web/Mobile  </td>
                                                                            <th> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                </a>

                                                                                <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></th>
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
        <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h3 class="modal-title text-center clr-green"><b>Reset Password</b></h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input class="form-control" placeholder="New Password" type="password"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input class="form-control" placeholder="Confirm Password" type="password"> </div>
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
        </script>
        <?php include('include/footer.php'); ?>