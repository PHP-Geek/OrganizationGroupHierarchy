
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
    .btn-bluee, .btn-bluee:hover{
        color: #FFF !important;
        background-color: #3fc9d5 !important;
        border-color: #3fc9d5 !important;
    }
    .btn-green{
        background-color: #417d6b !important;
    }
    .text-white{
        color:#fff !important;
    }
    .margin-top-30{
        margin-top: 30px;
    }
    .font-18{
        font-size: 18px;
    }
    .margin-top-32{
        margin-top: 32px;
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
                                        <span>Create Company</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span> View Company</span>

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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Customer Details</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>
                                                        <!--                                                        <div class="caption caption-md pull-right">
                                                                                                                     <i class="fa fa-pencil"></i>
                                                                                                                </div>-->
                                                    </div>
                                                    <div class="portlet-body">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_1" data-toggle="tab">Basic Details</a>
                                                            </li>
<!--                                                            <li>
                                                                <a href="#tab_1_2" data-toggle="tab"> Capacity Limits </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_3" data-toggle="tab">Demographics</a>
                                                            </li>-->

                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade active in" id="tab_1_1">
                                                                <div class="portlet light bordered">
                                                                    <div class="portlet-title">
                                                                        <div class="caption font-red-sunglo">
<!--                                                                            <i class="icon-settings font-red-sunglo"></i>-->
                                                                            <span class="caption-subject bold uppercase"> Customer Details</span>
                                                                        </div>
                                                                        <div class="caption caption-md pull-right">
                                                                            <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                                                <i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="portlet-body form">
                                                                        <form role="form">
                                                                            <div class="form-body">

                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label>Name Of Company</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-user"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Name Of Company"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>First Name </label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="First Name"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Last Name</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
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
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Email"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Phone</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-8">
                                                                                        <div class="form-group">
                                                                                            <label>Username</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Username"> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <div class="form-group margin-top-30">
                                                                                            <a href=""> Check Availability</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Password</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="password" class="form-control" placeholder="Password"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Confirm Password</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="password" class="form-control" placeholder="Confirm Password"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label for="exampleInputPassword1">Line of Business</label>
                                                                                            <div class="input-group">
                                                                                                <input type="Text" class="form-control" id="exampleInputPassword1" placeholder="Line of Business">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-user font-red"></i>
                                                                                                </span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Extra Property 1</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Extra Property 1"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Extra Property 2</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Extra Property 2"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="form-actions">
                                                                        <button type="submit" class="btn blue btn-green">Submit</button>
                                                                        <button type="button" class="btn default">Next</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <!-- END SAMPLE FORM PORTLET-->
                                                            <div class="tab-pane fade" id="tab_1_2">
                                                                <div class="portlet light bordered">
                                                                    <div class="portlet-title">
                                                                        <div class="caption font-red-sunglo">
<!--                                                                            <i class="icon-settings font-red-sunglo"></i>-->
                                                                            <span class="caption-subject bold uppercase"> Company Capacity Limits</span>
                                                                        </div>
                                                                        <div class="caption caption-md pull-right">
                                                                            <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                                                <i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="portlet-body form">
                                                                        <form role="form">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Number of Participants </label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Number of Participants"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Hours of Storage</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Hours of Storage"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Number of Projects</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Number of Projects"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Number of Sessions</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Number of Sessions"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group margin-top-32">
                                                                                            <label class="font-18">Conduits</label>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-2">
                                                                                        <div class="form-group margin-top-30">

                                                                                            <input type="checkbox" class="make-switch" data-on-text="Yes" data-off-text="No">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="portlet-title">
                                                                        <div class="caption font-red-sunglo">
<!--                                                                            <i class="icon-settings font-red-sunglo"></i>-->
                                                                            <span class="caption-subject bold uppercase"> Hierarchy Management</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="portlet-body form">
                                                                        <form role="form">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="form-group">
                                                                                            <label>User Role</label>
                                                                                            <select class="form-control">
                                                                                                <option>Root</option>
                                                                                                <option>User 1</option>
                                                                                                <option>User 2</option>
                                                                                                <option>User 3</option>

                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Company</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="U&IC"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Customer</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Customer"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Line of business</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Line of business"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Division</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Division"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Product Line</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Product Line"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Product</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Product"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="form-actions">
                                                                        <button type="submit" class="btn blue btn-green">Submit</button>
                                                                        <button type="button" class="btn default">Next</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade in" id="tab_1_3">
                                                                <div class="portlet light bordered">
                                                                    <div class="portlet-title">
                                                                        <div class="caption font-red-sunglo">
<!--                                                                            <i class="icon-settings font-red-sunglo"></i>-->
                                                                            <span class="caption-subject bold uppercase"> Demographics Details</span>
                                                                        </div>
                                                                        <div class="caption caption-md pull-right">
                                                                            <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                                                                <i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                                                                        </div>
                                                                    </div>
                                                                    <div class="portlet-body form">
                                                                        <form role="form">
                                                                            <div class="form-body">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Age </label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Age"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Marital Status</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Marital Status"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Income</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Income"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Children</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Children"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Information Source</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Information Source"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Gender</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Gender"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Gender</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Gender"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                            <label>Ethnicity</label>
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="fa fa-envelope"></i>
                                                                                                </span>
                                                                                                <input type="text" class="form-control" placeholder="Ethnicity"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="form-actions">
                                                                        <button type="submit" class="btn blue btn-green">Submit</button>
                                                                        <button type="button" class="btn default">Next</button>
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
        <!-- END CONTAINER -->
    </div>
</div>
</div>


<?php include('include/footer.php'); ?>