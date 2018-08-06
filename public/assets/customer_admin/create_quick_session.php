
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
                                        <span>Create Quick Session</span>

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
                                                        <div class="caption caption-md ">
                                                            <i class="icon-bar-chart font-dark hide"></i>
                                                            <span class="caption-subject font-red-sunglo uppercase bold ">Create Quick Session</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <form role="form">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Session Name </label>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Session Start Time</label>
                                                                            <div class="input-group" id="defaultrange">
                                                                                <input type="text" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn default date-range-toggle" type="button">
                                                                                        <i class="fa fa-clock-o"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Session Stop Time</label>
                                                                            <div class="input-group" id="defaultrange">
                                                                                <input type="text" class="form-control">
                                                                                <span class="input-group-btn">
                                                                                    <button class="btn default date-range-toggle" type="button">
                                                                                        <i class="fa fa-clock-o"></i>
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Session Topic </label>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="portlet-title">
                                                                                <div class="caption caption-md">
                                                                                    <h4 class="caption-subject font-blue bold">OR</h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="portlet-title">
                                                                                <div class="caption caption-md">
                                                                                    <span class="caption-subject font-green bold">Session Participants</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Select from know user lists (such as kit lists)</label>
                                                                            <select class="form-control">
                                                                                <option>Kit Lists </option>
                                                                                <option>Kit Lists 1</option>
                                                                                <option>Kit Lists 2</option>
                                                                                <option>Kit Lists 3</option>
                                                                                <option>Kit Lists 4</option>
                                                                                <option>Kit Lists 5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Select from  Customer's existing list of users</label>
                                                                            <select class="form-control">
                                                                                <option>Existing Users Lists </option>
                                                                                <option>Existing Users Lists 1</option>
                                                                                <option>Existing Users Lists 2</option>
                                                                                <option>Existing Users Lists 3</option>
                                                                                <option>Existing Users Lists 4</option>
                                                                                <option>Existing Users Lists 5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label>Add email OR mobile textable phone</label>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div> 

                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="form-actions margin-top-23 text-center">
                                                                                <button type="submit" class="btn blue-madison text-white text-center">Create</button>

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