
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
    .magin-top-30{
        margin-top: 30px;
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
                                        <span>Manage Session</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Copy Session</span>
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
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Create Phone KIT Participants</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>KIT Name</label>
                                                                                <input class="form-control" placeholder="" type="text">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label>Default Name Prefix</label>
                                                                                <input class="form-control" placeholder="" type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="control-label">Number of Speakers</label>
                                                                                <div data-role="rangeslider">
                                                                                    <div data-role="rangeslider" style="top:-20px; position: relative;">
                                                                                        <input type="range" name="price-min" id="price-min" class="js-range-slider" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label>Speakers GAP</label>
                                                                                <!---<input class="form-control" placeholder="" type="text">-->
                                                                                <div data-role="rangeslider">
<!--                                                                                    <input type="range" name="price-min" id="price-min">
                                                                                    <label class="pull-left" for="price-min">0.1</label>
                                                                                    <label class="pull-right" for="price-max">5.0</label>-->

                                                                                    <div data-role="rangeslider" style="top:-20px; position: relative;">
                                                                                        <input type="range" name="price-min" id="price-min" class="js-range-slider" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label>Microphone</label>
                                                                                <select class="form-control">
                                                                                    <option>Phone </option>
                                                                                    <option>Front</option>
                                                                                    <option>Bluetooth</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label>Onset</label>
                                                                                <div data-role="rangeslider">
                                                                                    <div data-role="rangeslider" style="top:-20px; position: relative;">
                                                                                        <input type="range" name="price-min" id="price-min" class="js-range-slider" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label>Decay</label>
                                                                                <div data-role="rangeslider">
                                                                                    <div data-role="rangeslider" style="top:-20px; position: relative;">
                                                                                        <input type="range" name="price-min" id="price-min" class="js-range-slider" >
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 margin-bottom-30 text-center magin-top-30">
                                                                    <button type="submit" class="btn blue text-white text-center">Display kit list</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th> S.No </th>
                                                                        <th> Name  </th>
                                                                        <th> GAP </th>
                                                                        <th> Microphone </th>
                                                                        <th> Onset </th>
                                                                        <th> Decay</th>
                                                                        <th> Kit name</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td> 1 </td>
                                                                        <td> My Crop 1 </td>
                                                                        <td> 0.2</td>
                                                                        <td> bluetooth </td>
                                                                        <td> 0.1</td>
                                                                        <td>0.2</td>
                                                                        <td> My Crop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 2 </td>
                                                                        <td> My Crop 2 </td>
                                                                        <td> 0.2</td>
                                                                        <td> bluetooth </td>
                                                                        <td> 0.1</td>
                                                                        <td>0.2</td>
                                                                        <td> My Crop</td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td> 3 </td>
                                                                        <td> My Crop 3 </td>
                                                                        <td> 0.2</td>
                                                                        <td> bluetooth </td>
                                                                        <td> 0.1</td>
                                                                        <td>0.2</td>
                                                                        <td> My Crop</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> 4 </td>
                                                                        <td> My Crop 4 </td>
                                                                        <td> 0.2</td>
                                                                        <td> bluetooth </td>
                                                                        <td> 0.1</td>
                                                                        <td>0.2</td>
                                                                        <td> My Crop</td>
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

    <!-- END THEME LAYOUT SCRIPTS -->
    <script>
        $(document).ready(function () {
            var $range = $(".js-range-slider");
            $range.ionRangeSlider({
                type: "single",
                min: 0.1,
                max: 5.0,
                grid: true,
                step: 1,
                hide_min_max: true,
                hide_from_to: true,
            });
        });

    </script>

    <?php include('include/footer.php'); ?>