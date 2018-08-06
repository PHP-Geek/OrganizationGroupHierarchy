
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
    .tabbable-line > .nav-tabs > li.active  {
        background: 0 0;
        border-bottom: 4px solid #417D6B !important;
        position: relative;
    }
    .tabbable-line > .nav-tabs > li:hover {
        background: 0 0;
        border-bottom: 4px solid #417D6B !important;
    }
    .tabbable-line > .nav-tabs > li > a {

        padding-left: 70px !important;
        padding-right: 70px !important;
    }
    .tabbable-line > .tab-content{
        padding: 13px 0px !important;
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
                                                         BEGIN PAGE TITLE 
                                                        <div class="page-title">
                                                            <h1>Dashboard
                                                                <small>dashboard & statistics</small>
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
                                        <span>Customer Administrator</span>
                                    </li>
                                </ul>
                                <!-- END PAGE BREADCRUMBS -->
                                <!-- BEGIN PAGE CONTENT INNER -->
                                <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="portlet light ">
                                                    <div class="margin-top-20"></div>
                                                    <div class="portlet box red">
                                                        <div class="portlet-title">
                                                            <div class="caption">
                                                                Customer Administration </div>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="tabbable-line">
                                                            <ul class="nav nav-tabs ">
                                                                <li class="active">
                                                                    <a href="#tab_15_1" data-toggle="tab"> User  </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab_15_2" data-toggle="tab"> Session </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab_15_3" data-toggle="tab"> Assign </a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">

                                                                <div class="tab-pane active" id="tab_15_1">

                                                                    <div class="portlet-body">

                                                                        <div class="table-responsive">
                                                                            <div class="caption caption-md pull-right margin-bottom-20">
                                                                                <a type="button" href="add_superadmin.php" class="btn blue-madison text-white"> Add Super Admin</a>
                                                                                <a type="button" href="add_user.php" class="btn default btn-green text-white"> Add User</a>
                                                                            </div>

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
                                                                                        <td> 9876543210  </td>
                                                                                        <td> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                            <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                            </a>
                                                                                            <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                            </a>
                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 2 </td>
                                                                                        <td> Peter </td>
                                                                                        <td> Parker  </td>

                                                                                        <td> Apple </td>
                                                                                        <td>  Project Manager </td>
                                                                                        <td> Email</td>
                                                                                        <td> abc@gmail.com </td>
                                                                                        <td> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                            <a type="button" class="btn yellow  btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                            </a>
                                                                                            <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                            </a>
                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 3 </td>
                                                                                        <td> Peter </td>
                                                                                        <td> Parker  </td>

                                                                                        <td> Apple </td>
                                                                                        <td>  Participant</td>
                                                                                        <td> Phone</td>
                                                                                        <td> 9876543210 </td>

                                                                                        <td> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                                            <a type="button" class="btn yellow  btn-outline" data-toggle="modal" href="#basic"><i class="fa fa-key" aria-hidden="true"></i>
                                                                                            </a>
                                                                                            <a class="btn btn-default mt-sweetalert swtalert"><i class="fa fa-ban" aria-hidden="true"></i>
                                                                                            </a>
                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 4 </td>
                                                                                        <td> Peter </td>
                                                                                        <td> Parker  </td>
                                                                                        <td> Apple </td>
                                                                                        <td>  Participant</td>
                                                                                        <td> Phone</td>
                                                                                        <td> 9876543210 </td>
                                                                                        <td> <a href="view_company.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
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
                                                                <div class="tab-pane" id="tab_15_2">
                                                                    <div class="portlet-body">

                                                                        <div class="table-responsive">
                                                                            <div class="caption caption-md pull-right margin-bottom-20">

                                                                                <a type="button" href="Create_session.php" class="btn default btn-green text-white"> Create Session</a>
                                                                            </div>
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th> S.No </th>
                                                                                        <th> Session </th>
                                                                                        <th> When </th>
                                                                                        <th> Location </th>
                                                                                        <th> Group </th>
                                                                                        <th>  Client</th>
                                                                                        <th> Owner</th>
                                                                                        <th> Reports needed</th>
                                                                                        <th> Status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   <a type="button" class="btn blue btn-outline" data-toggle="modal" href="#basic1"><i class="fa fa-eye"></i></a>

                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   <a type="button" class="btn blue btn-outline" data-toggle="modal" href="#basic1"><i class="fa fa-eye"></i></a>

                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   <a type="button" class="btn blue btn-outline" data-toggle="modal" href="#basic1"><i class="fa fa-eye"></i></a>

                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   <a type="button" class="btn blue btn-outline" data-toggle="modal" href="#basic1"><i class="fa fa-eye"></i></a>

                                                                                            <a class="btn red btn-outline mt-sweetalert swtalertt"><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>                                                                             </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab_15_3">
                                                                    <div class="portlet-body">

                                                                        <div class="table-responsive">
                                                                            <!--                                                                            <div class="caption caption-md pull-right margin-bottom-20">
                                                                            
                                                                                                                                                            <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic"> Create Assign</a>
                                                                                                                                                        </div>-->
                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th> S.No </th>
                                                                                        <th> Session </th>
                                                                                        <th> When </th>
                                                                                        <th> Location </th>
                                                                                        <th> Group </th>
                                                                                        <th>  Client</th>
                                                                                        <th> Owner</th>
                                                                                        <th> Reports needed</th>
                                                                                        <th> Status</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   
                                                                                            <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic3">Assign</a></td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   
                                                                                            <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic3">Assign</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   
                                                                                            <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic3">Assign</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> Test Session </td>
                                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                                        <td> Grand Rapids </td>
                                                                                        <td> Toddler moms</td>
                                                                                        <td> Lotika S</td>
                                                                                        <td> Quick Transcript</td>
                                                                                        <td> Transcript - completed</td>
                                                                                        <td>   
                                                                                            <a type="button" class="btn yellow btn-outline" data-toggle="modal" href="#basic3">Assign</a></td>
                                                                                    </tr>                                                                             </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

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
    <div class="modal fade" id="basic1" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h3 class="modal-title text-center clr-green"><b>Session Details</b></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b> Name </b></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> Test Session </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b>Start Time</b> </h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> 2014-08-10 at 05:00 AM </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b>End Time  </b></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> 2014-08-10 at 06:00 AM </h5>
                            </div>
                        </div>
                    </div><div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b> Project Name </b> </h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> Test Project </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b>Session ID </b></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> UI1234</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b>Audio ID </b></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> 1234</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b>Audio Size </b></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5> 500Kb</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2">
                            <div class="form-group">
                                <h5><b>Session Duration </b></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>02:66</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group text-center">
                                <button type="button" class="btn green">Download Audio</button>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal" text-center>Close</button>

                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
    <div class="modal fade" id="basic3" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h3 class="modal-title text-center clr-green"><b>Assign Participants</b></h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Session Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                    <input class="form-control" disabled="" placeholder="Test Session" type="Text"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Session leader</label>
                                <select class="form-control">
                                    <option>Root</option>
                                    <option>User 1</option>
                                    <option>User 2</option>
                                    <option>User 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Participant</label>
                                <select class="form-control">
                                    <option>Root</option>
                                    <option>User 1</option>
                                    <option>User 2</option>
                                    <option>User 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                    <button type="button" class="btn green">Add Participant</button>
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