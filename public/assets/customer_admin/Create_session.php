
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
                                        <span>Customer Administration</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Session</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Create Session</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Session Details</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>
                                                        <div class="caption caption-md pull-right">
                                                            <a class="btn btn-default mt-sweetalert swtalert">Save As Template</a>

                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <form role="form">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Project Name </label>
                                                                            <select class="form-control">
                                                                                <option>Project 1</option>
                                                                                <option>Project 2</option>
                                                                                <option>Project 3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Number of speakers</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Number of speakers">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Participants </label>

                                                                            <select class="form-control">
                                                                                <option>Participant 1</option>
                                                                                <option>Participant 2</option>
                                                                                <option>Participant 3</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Length of session</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Length of session">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Date</label>
                                                                            <div class="input-group" id="defaultrange">
                                                                                <input type="text" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn default date-range-toggle" type="button">
                                                                                        <i class="fa fa-calendar"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label> start Time </label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Start Time">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Location</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Location">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label> Group Name</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Group Name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Owner</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Owner">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label> Client</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" placeholder="Client">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Reports Needed </label>
                                                                            <select class="form-control">
                                                                                <option>Quick</option>
                                                                                <option>Transcript</option>
                                                                                <option>Graphics</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> 

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Participant List </label>
                                                                            <select class="form-control">
                                                                                <option>My List 1</option>
                                                                                <option>My List 2</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <div class="form-actions margin-top-23 text-center">
                                                                                <button type="submit" class="btn blue-madison text-white text-center">Create</button>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Session ID</label>
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="fa fa-user"></i>
                                                                                </span>
                                                                                <input type="text" class="form-control" disabled="" placeholder="UI1234"r>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <!--                                                                <div class="form-actions margin-bottom-10">
                                                                                                                                    <button type="submit" class="btn blue btn-green">Submit</button>
                                                                
                                                                                                                                </div>-->
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
                    <!--                                <div class="page-content-inner">
                                                        <div class="mt-content-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="portlet box red">
                                                                        <div class="portlet-title">
                                                                            <div class="caption">
                                                                                <i class="fa fa-picture"></i>Projects </div>
                                                                            <div class="tools">
                                                                                <button type="button" class="btn dark"> <i class="fa fa-plus" aria-hidden="true"></i> Create Project</button>
                                                                                <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="portlet-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-condensed">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th> # </th>
                                                                                            <th> First Name </th>
                                                                                            <th> Last Name </th>
                                                                                            <th> Username </th>
                                                                                            <th> Status </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td> Fitkit </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> mbehaviour </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> Nestle fitkitch </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> Pacfic </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> tuesworkshop </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td> wow part 2 </td>
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
                                                    <div class="page-content-inner">
                                                        <div class="mt-content-body">
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="portlet box blue">
                                                                        <div class="portlet-title">
                                                                            <div class="caption caption-md">
                                                                                <i class="icon-bar-chart font-dark hide"></i>
                                                                                <span class="caption">Tasks</span>
                                                                                <span class="caption-helper hide">weekly stats...</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="portlet-body">
                                                                            <div class="table-responsive">
                                                                                <table class="table table-bordered">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th> Task Name </th>
                                                                                            <th> Task Description </th>
                                                                                            <th> Action </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td> Clean Up Interface </td>
                                                                                            <td> Do More thing to keep Nicer </td>
                                                                                            <td> <a href="javascript:;" class="btn btn-sm btn-outline grey-salsa"><i class="fa fa-search"></i> View</a>
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
                                                    </div>-->
                    <!-- END PAGE CONTENT INNER -->
                </div>
            </div>
            <!-- END PAGE CONTENT BODY -->
            <!-- END CONTENT BODY -->
        </div>
        <!-- END QUICK SIDEBAR -->
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