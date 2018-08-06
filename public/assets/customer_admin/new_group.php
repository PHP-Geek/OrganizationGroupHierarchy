
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
    .margin-10{
        margin-top: 10px;
        margin-bottom: 10px;
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
                                        <span>Customer Administrator</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Groups</span>
                                        <i class="fa fa-circle"></i>
                                    </li> <li>
                                        <span>New Group</span>

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
                                                            <span class="caption-subject font-red-sunglo bold uppercase"> New Group</span>
                                                        </div>

                                                        <div class="caption caption-md pull-right">
                                                            <span class="caption-subject bold uppercase clr-yellow">Need More Clarification</span>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body form">
                                                        <form role="form">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Name of Group</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-group"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Name of Group"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Parent Group</label>
                                                                            <select class="form-control">
                                                                                <option>Group 1</option>
                                                                                <option>Group 2</option>
                                                                                <option>Group 3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>First Name</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="First Name"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Last Name</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Last Name"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Email"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Phone</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Extra Property #1</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Extra Property #1"> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Extra Property #2</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-clock-o"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Extra Property #2"> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn yellow btn-outline" data-toggle="modal" href="#basic">View Group Hierarchy</button>
                                                            <button type="submit" class="btn blue btn-outline">Add Staff</button>
                                                        </div>
                                                    </div>
                                                    <div class="margin-10"></div>
                                                    <!--                                                    <div class="row">
                                                                                                            <div class="col-md-12">
                                                                                                                <button type="submit" class="btn blue btn-outline" data-toggle="modal" href="#basic">Add Staff</button>
                                                                                                            </div>
                                                                                                        </div>-->
                                                    <div class="margin-10"></div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn blue btn-green">Submit</button>
                                                                <button type="button" class="btn default">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </form>
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
                <h3 class="modal-title text-center clr-green"><b>Group Hierarchy</b></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="box text-center">
                            <h5> Company Name <i class="fa fa-edit clr-blue"></i></h5>
                            <h5> Company Admin <i class="fa fa-edit clr-blue"></i></h5>
                        </div>

                    </div>
                </div>
                <div class="margin-top-5"></div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box text-center">
                            <h5> Group Name <i class="fa fa-edit clr-blue"></i></h5>
                            <h5> Group Admin <i class="fa fa-edit clr-blue"></i></h5>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box text-center">
                             <h5> Group Name <i class="fa fa-edit clr-blue"></i></h5>
                            <h5> Group Admin <i class="fa fa-edit clr-blue"></i></h5>
                        </div>

                    </div>
                </div>
                <div class="margin-top-5"></div>
               <div class="row">
                    <div class="col-md-6">
                        <div class="box text-center">
                             <h5> Sub Group Name <i class="fa fa-edit clr-blue"></i></h5>
                            <h5> Group Admin <i class="fa fa-edit clr-blue"></i></h5>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="box text-center">
                              <h5> Sub Group Name <i class="fa fa-edit clr-blue"></i></h5>
                            <h5> Group Admin <i class="fa fa-edit clr-blue"></i></h5>
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

    <?php include('include/footer.php'); ?>