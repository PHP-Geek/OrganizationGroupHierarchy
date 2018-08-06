
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
    .margin-top-23{
        margin-top: 23px;
    }
    .font-16{
        font-size:16px;
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
                                        <span>Session Management</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Session Tool Bar</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Re-Run Old Session</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Re Run Session</span>

                                                        </div>
                                                        <div class="caption caption-md pull-right">
                                                            <span class="caption-subject bold uppercase clr-yellow">Need More Clarification</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <form role="form">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-16">What would you like to Re-Run? </label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Session
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Project
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-16">Available Dictionary </label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Dictionary 1
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Dictionary 2
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Dictionary 3
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Dictionary 4
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked=""> Dictionary 5
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>


                                                                </div>

                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="font-16">Extra Property </label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Value 1
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Value 2
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Value 3
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label class="m-checkbox">
                                                                                <input type="checkbox" checked="checked"> Value 4
                                                                                <span></span>
                                                                            </label>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="">
                                                                    <button type="submit" class="btn blue btn-green">Submit</button>

                                                                </div>
                                                            </div>
                                                        </form>
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



<?php include('include/footer.php'); ?>