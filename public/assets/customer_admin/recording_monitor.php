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
    .margin-top-5{
        margin-top: 5px !important;
    }
    .clr-blue{
        color:#32c5d2;
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
                                        <span>session Management</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Recording Monitor</span>

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
                                                            <span class="caption-subject bold uppercase"> View Monitior</span>
                                                        </div>
                                                        <div class="caption caption-md pull-right">
                                                            <span class="caption-subject bold uppercase clr-yellow">Need More Clarification</span>
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
                                                                        <th> Device </th>
                                                                        <th> Participant </th>
                                                                        <th> Mic </th>
                                                                        <th> S/Rec </th>
                                                                        <th> S/Sent </th>
                                                                        <th> S/ Ack </th>
                                                                        <th> Gap </th>
                                                                        <th> Attack </th>
                                                                        <th> Decay</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td> 1 </td>
                                                                        <td> 1002 </td>
                                                                        <td> Washington, G  </td>
                                                                        <td> BT </td>
                                                                        <td> 152 </td>
                                                                        <td> 152 </td>
                                                                        <td> 151 </td>
                                                                        <td> 1.2 </td>
                                                                        <td> 1.0 </td>
                                                                        <td> 2.0 </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> 2 </td>
                                                                        <td> 1008 </td>
                                                                        <td> John, G  </td>
                                                                        <td> FT </td>
                                                                        <td> 131 </td>
                                                                        <td> 176 </td>
                                                                        <td> 189 </td>
                                                                        <td> 2.2 </td>
                                                                        <td> 4.0 </td>
                                                                        <td>6.0 </td>
                                                                    </tr>
                                                                  <tr>
                                                                        <td> 3 </td>
                                                                        <td> 1004 </td>
                                                                        <td> Mike, G  </td>
                                                                        <td> DT </td>
                                                                        <td> 176 </td>
                                                                        <td> 987 </td>
                                                                        <td> 654 </td>
                                                                        <td> 3.2 </td>
                                                                        <td> 5.0 </td>
                                                                        <td> 8.0 </td>
                                                                    </tr>
                                                                   <tr>
                                                                        <td> 4 </td>
                                                                        <td> 1003 </td>
                                                                        <td> Doer, G  </td>
                                                                        <td> PT </td>
                                                                        <td> 122 </td>
                                                                        <td> 562 </td>
                                                                        <td> 241 </td>
                                                                        <td> 6.2 </td>
                                                                        <td> 8.0 </td>
                                                                        <td> 2.0 </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!--                                                    <div class="form-actions">
                                                                                                            <button type="submit" class="btn blue btn-green">Add Device</button>
                                                                                                            <button type="button" class="btn default">Next</button>-->
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