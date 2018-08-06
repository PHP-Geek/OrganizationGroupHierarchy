
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
                                        <span>Customer Administartor</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Add/Edit User</span>
                                    </li>

                                </ul>
                                <!-- END PAGE BREADCRUMBS -->
                                <!-- BEGIN PAGE CONTENT INNER -->

                                <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption font-red-sunglo">
<!--                                                                            <i class="icon-settings font-red-sunglo"></i>-->
                                                            <span class="caption-subject bold uppercase"> Users</span>
                                                        </div>
                                                        <div class="caption caption-md pull-right ">
                                                            <!--                                                            <a type="button" href="add_superadmin.php" class="btn blue-madison text-white"> Add Super Admin</a>-->
                                                            <a type="button" href="add_user.php" class="btn default btn-green text-white"> Add User</a>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-12">
                                                            <form class="form-horizontal">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="inputEmail1" class="col-md-2 control-label">Filter By</label>
                                                                            <div class="col-md-4">
                                                                                <input class="form-control" id="inputEmail1" placeholder="Filter By" type="email"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="pull-right">
                                                                            <div class="form-group">
                                                                                <label for="inputEmail1" class="col-md-2 control-label">Search</label>
                                                                                <div class="col-md-8">
                                                                                    <input class="form-control" id="inputEmail1" placeholder="Search" type="email"> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <div class="portlet-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th> S.No </th>
                                                                                <th> First Name </th>
                                                                                <th> Last Name </th>
                                                                                <th> Company </th>
                                                                                <th> Role</th>
                                                                                <th> Contact Method</th>
                                                                                <th> Contact Detail </th>
                                                                                <th> Action</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td> 1 </td>
                                                                                <td> Peter </td>
                                                                                <td> Parker  </td>
                                                                                <td> Apple </td>
                                                                                <td> Admin</td>
                                                                                <td> Text</td>
                                                                                <td> 111111111  </td>
                                                                                <td> <a href="" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                    <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 2 </td>
                                                                                <td> Muybu </td>
                                                                                <td> Mjvfu7bg </td>

                                                                                <td> Vyvbujh </td>
                                                                                <td>  Fygujm </td>
                                                                                <td> Email</td>
                                                                                <td> xyz@gmail.com </td>
                                                                                <td> <a href="" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                    <a type="button" class="btn yellow  btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 3 </td>
                                                                                <td> Wedrf </td>
                                                                                <td> Ujihgt  </td>

                                                                                <td> Mkhbuj</td>
                                                                                <td>  Sedtguy</td>
                                                                                <td> Phone</td>
                                                                                <td> 222222222 </td>

                                                                                <td> <a href="" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                    <a type="button" class="btn yellow  btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td> 4 </td>
                                                                                <td> Sedtg </td>
                                                                                <td> Huhuhn  </td>
                                                                                <td> Bubiuk </td>
                                                                                <td> Gyhikok</td>
                                                                                <td> Phone</td>
                                                                                <td>888888888 </td>
                                                                                <td> <a href="" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                    <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
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