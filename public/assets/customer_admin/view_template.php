
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
                                        <span>Project Management</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>View Template</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Project Details</span>
                                                            <span class="caption-helper hide">View Template</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-md-4">
                                                                <div class="thumbnail">

                                                                    <div class="caption">
                                                                        <a class="btn btn-circle btn-icon-only btn-default" href="create_template.php">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <h3 class="text-center">Template-1</h3>
                                                                    </div>
                                                                    <div class="text-center margin-bottom-10">
                                                                        <button type="submit" class="btn blue btn-green">View</button>
                                                                        <button type="button" class="btn default">Use</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-md-4">
                                                                <div class="thumbnail">

                                                                    <div class="caption">
                                                                        <a class="btn btn-circle btn-icon-only btn-default" href="create_template.php">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <h3 class="text-center">Template-1</h3>
                                                                    </div>
                                                                    <div class="text-center margin-bottom-10">
                                                                        <button type="submit" class="btn blue btn-green">View</button>
                                                                        <button type="button" class="btn default">Use</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-md-4">
                                                                <div class="thumbnail">

                                                                    <div class="caption">
                                                                        <a class="btn btn-circle btn-icon-only btn-default" href="create_template.php">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <h3 class="text-center">Template-1</h3>
                                                                    </div>
                                                                    <div class="text-center margin-bottom-10">
                                                                        <button type="submit" class="btn blue btn-green">View</button>
                                                                        <button type="button" class="btn default">Use</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4 col-md-4">
                                                                <div class="thumbnail">

                                                                    <div class="caption">
                                                                        <a class="btn btn-circle btn-icon-only btn-default" href="create_template.php">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <h3 class="text-center">Template-1</h3>
                                                                    </div>
                                                                    <div class="text-center margin-bottom-10">
                                                                        <button type="submit" class="btn blue btn-green">View</button>
                                                                        <button type="button" class="btn default">Use</button>
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

<script>
    $(".swtalert").on('click', function () {
        swal({
            title: "Would you like to save this template?",
            text: "Template will be saved !",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, save it !",
            cancelButtonText: "No, cancel!",
            closeOnConfirm: false,
            closeOnCancel: true
        },
                function (isConfirm) {
                    if (isConfirm) {
                        swal("Saved!", "Template has been saved.", "success");
                    }
                });
    });
    swal();
</script>

<?php include('include/footer.php'); ?>