
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
    .text-center{
        text-align: center !important;
    }
    .m-checkbox.m-checkbox--state-success.m-checkbox--solid > input:checked ~ span {
        background: #34bfa3;
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
                                        <span>Permissions</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Assign Permissions</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>

                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center"> <span class="magin-top-20">Features(100) </Span>/Roles</th>
                                                                        <th> Root System Administrator <br> <h5 class="text-center">(10/100) </h5></th>
                                                                        <th> Dialog Engineer <br> <h5 class="text-center">(50/100) </h5></th>
                                                                        <th> System Administrator <br> <h5 class="text-center">(20/100) </h5></th>
                                                                        <th>Product Manager <br> <h5 class="text-center">(10/100) </h5> </th>
                                                                        <th> Session leader <br> <h5 class="text-center">(10/100) </h5></th>
                                                                        <th> Reviewer  <br> <h5 class="text-center">(10/100) </h5></th>
                                                                        <th>Participants <br> <h5 class="text-center">(10/100) </h5></th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td><b> U&ID Admin Features</b> </td>
                                                                        <td>  </td>
                                                                        <td>  </td>
                                                                        <td>  </td>
                                                                        <td> </td>
                                                                        <td>  </td>
                                                                        <td>  </td>
                                                                        <td> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Create a Customer </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div></td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div></td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Set/Change Capacity Linits </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Establish Conduits </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Special Demographics </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Dictionaries </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> Audit Trails </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b> Customer (non-root) Administrator</b> </td> 
                                                                        <td>  </td>
                                                                        <td> </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td>  </td>
                                                                        <td> </td>
                                                                        <td> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Define Capacity </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> Add/Edit Users</td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> User Role Assignment </td> 
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td> <div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div>  </td>
                                                                        <td><div class="form-group text-center">
                                                                                <label class="m-checkbox">
                                                                                    <input checked="" type="checkbox"> 
                                                                                    <span></span>
                                                                                </label>

                                                                            </div> </td>

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