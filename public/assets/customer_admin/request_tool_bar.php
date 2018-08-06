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
    .margin-top-3{
        margin-top:3px;
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
                                        <span>Draft Tool Bar</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Request Draft</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Request Draft</span>

                                                        </div>
                                                        <div class="caption caption-md pull-right">
                                                            <span class="caption-subject bold uppercase clr-yellow">Need More Clarification</span>
                                                        </div>
                                                        <div class="row">

                                                            <div class="col-md-12">
                                                                <div class="caption caption-md pull-right">
                                                                    <a type="button"  class="btn default blue-stripe mt-sweetalert swtalert">Draft Transcript</a>
                                                                </div>
                                                                <div class="caption caption-md pull-right">
                                                                    <a type="button"  class="btn default red-stripe  mt-sweetalert swtalert">Draft Path</a>
                                                                </div>
                                                                <div class="caption caption-md pull-right">
                                                                    <a type="button"  class="btn default purple-stripe mt-sweetalert swtalert">Draft Metrics</a>
                                                                </div>
                                                                <div class="caption caption-md pull-right">
                                                                    <a type="button" class="btn default yellow-stripe  mt-sweetalert swtalert">Draft Analytics</a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label class="m-checkbox margin-top-3"> 
                                                                    <input checked="" type="checkbox"> Select All
                                                                    <span></span>
                                                                </label>

                                                            </div></div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="dataTables_length pull-right" id="sample_5_length">
                                                                <div id="sample_5_filter" class="dataTables_filter"><label>Search:<input class="form-control input-sm input-small input-inline" placeholder="" aria-controls="sample_5" type="search"></label></div></div></div>
                                                    </div>
                                                    <div class="portlet-body">

                                                        <div class="table-responsive">

                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Select</th>
                                                                        <th> S.No </th>
                                                                        <th> Session </th>
                                                                        <th> When </th>
                                                                        <th> Location </th>
                                                                        <th> Group </th>
                                                                        <th>  Client</th>
                                                                        <th> Owner</th>
                                                                        <th> Reports needed</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div></td>
                                                                        <td> 1 </td>
                                                                        <td> Test Session </td>
                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                        <td> Grand Rapids </td>
                                                                        <td> Toddler moms</td>
                                                                        <td> Lotika S</td>
                                                                        <td> Quick Transcript</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td> 2 </td>
                                                                        <td> Tesrtyu  </td>
                                                                        <td> 2014-05-3 <br> 03:00 PM <br> 1 Hours </td>
                                                                        <td> Mnhyui </td>
                                                                        <td> Srtyui</td>
                                                                        <td> Mbvgtyu</td>
                                                                        <td> Quick Transcript</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div></td>
                                                                        <td> 3 </td>
                                                                        <td> Adrtyu</td>
                                                                        <td> 2014-06-6 <br> 09:00 AM <br> 1/2 Hours </td>
                                                                        <td> Gmkoip </td>
                                                                        <td> Adrtyu</td>
                                                                        <td> John</td>
                                                                        <td> Quick Transcript</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div></td>
                                                                        <td> 4 </td>
                                                                        <td> Avfrty </td>
                                                                        <td> 2014-05-18 <br> 05:00  PM <br> 2 Hours </td>
                                                                        <td>Muio</td>
                                                                        <td> Ctyuio</td>
                                                                        <td> Aswerty</td>
                                                                        <td> Quick Transcript</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>
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
                title: "Would you like to Generate Draft Analytics?",
//                text: "Company will be deactivated !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Generate it !",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Generated!", "Download will begin in few seconds.", "success");
                        }
                    });
        });
        swal();

    </script>
    <?php include('include/footer.php'); ?>