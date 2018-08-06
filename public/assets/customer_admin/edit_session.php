
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
                                        <span>Session Tool Bar</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Edit Session</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Edit Sessions</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
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
                                                                        <th> Session </th>
                                                                        <th> When </th>
                                                                        <th> Location </th>
                                                                        <th> Group </th>
                                                                        <th>  Client</th>
                                                                        <th> Owner</th>
                                                                        <th> Reports needed</th>
                                                                        <th> Action</th>
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
                                                                        <td> Sertuyok</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>
                                                                        <td> 
                                                                            <a href="" type="button" class="btn green btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Transcript">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                            <a href="" type="button" class="btn yellow btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vadi Graph">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 2 </td>
                                                                        <td> Myuito</td>
                                                                        <td> 2014-08-5 <br> 03:00 AM <br> 2 Hours </td>
                                                                        <td> Mtyuiio </td>
                                                                        <td> Avgyui</td>
                                                                        <td> Axftyu</td>
                                                                        <td> Sertyu</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>
                                                                        <td> 
                                                                            <a href="" type="button" class="btn green btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Transcript">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                            <a href="" type="button" class="btn yellow btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vadi Graph">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 3 </td>
                                                                        <td> Sertyiu </td>
                                                                        <td> 2014-03-3 <br> 05:00 AM <br> 2 Hours </td>
                                                                        <td> Kuiytre </td>
                                                                        <td> Asfhkuim </td>
                                                                        <td> Kuytrer </td>
                                                                        <td> Vghjyuio</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>
                                                                        <td> 
                                                                            <a href="" type="button" class="btn green btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Transcript">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                            <a href="" type="button" class="btn yellow btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vadi Graph">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 4 </td>
                                                                        <td> Drtyu</td>
                                                                        <td> 2014-08-10 <br> 05:00 AM <br> 2 Hours </td>
                                                                        <td> Bgyui </td>
                                                                        <td> Todyuio</td>
                                                                        <td>Jyuio</td>
                                                                        <td> Gyuio</td>
                                                                        <td> Transcript - <span class="clr-green"><b> Completed</b> </span></td>
                                                                        <td> 
                                                                            <a href="" type="button" class="btn green btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Transcript">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
                                                                            <a href="" type="button" class="btn yellow btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vadi Graph">
                                                                                <i class="fa fa-edit"></i>
                                                                            </a>
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
                title: "Do you want to Stop session?",
                text: "Session will be stopped !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Stop it !",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Stopped!", "Session has been Stopped.", "success");
                        }
                    });
        });
        swal();
        $(".swtalertt").on('click', function () {
            swal({
                title: "Do you want to Start Session Again?",
                text: "Session will be Started !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Start it !",
                cancelButtonText: "No, cancel!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Started!", "Session has been started in few minutes.", "success");
                        }
                    });
        });
        swal();

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>
    <?php include('include/footer.php'); ?>