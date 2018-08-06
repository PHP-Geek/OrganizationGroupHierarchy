
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
                                        <span>Add Participant List</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold ">Add Participant List</span>
                                                        </div>

                                                    </div>

                                                    <div class="portlet-body">
                                                        <form role="form">
                                                            <div class="form-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>List Name </label>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 text-right">
                                                                        <button type="submit" class="btn blue text-white text-center">Save List</button>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Company Name </label>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6">  
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label>Participant Name</label>
                                                                                    <input type="text" class="form-control" placeholder="">
                                                                                </div>
                                                                            </div> 
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Contact Method</label>
                                                                            <select class="form-control">
                                                                                <option>E-Mail</option>
                                                                                <option>Phone Number</option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Contact Info</label>
                                                                            <input type="text" class="form-control" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label>Role</label>
                                                                            <select class="form-control">
                                                                                <option>Project Manager</option>
                                                                                <option>Participant</option>
                                                                                <option>Reviewer</option>
                                                                                <option>Session Leader</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="portlet-body">
                                                                         <div class="table-responsive">

                                                                            <table class="table table-bordered">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>S.No</th>
                                                                                        <th> Participant Name </th>
                                                                                        <th> Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td> 1 </td>
                                                                                        <td> John Deo </td>
                                                                                        <td>   
                                                                                           
                                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 2 </td>
                                                                                        <td> Greek</td>
                                                                                        <td>   
                                                                                            
                                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 3 </td>
                                                                                        <td> Tobey </td>
                                                                                        <td>   
                                                                                           
                                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 4 </td>
                                                                                        <td> Soddy </td>
                                                                                        <td>   
                                                                                           
                                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> 5 </td>
                                                                                        <td> Ruben </td>
                                                                                        <td>   
                                                                                            
                                                                                            <a class="btn red btn-outline" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                                                        </td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
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