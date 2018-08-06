
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
                                    </li >
                                    <li>
                                        <span>Manage Session</span>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Session Task Calendar</span>

                                    </li>


                                </ul>
                                <!-- END PAGE BREADCRUMBS -->
                                <!-- BEGIN PAGE CONTENT INNER -->

                                <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="portlet light portlet-fit calendar">
                                                    <div class="portlet-title">
                                                        <div class="caption caption-md font-red-sunglo ">
                                                            <i class=" icon-layers font-green hide"></i>
                                                            <span class="caption-subject font-red-sunglo uppercase bold">Session Task Calendar</span>
                                                        </div>

                                                    </div>

                                                    <div class="portlet-body">
                                                        <div class="row">
                                                            <div class="col-md-3 col-sm-12">
                                                                <!-- BEGIN DRAGGABLE EVENTS PORTLET-->
                                                                <h3 class="event-form-title margin-bottom-20">Draggable Events</h3>
                                                                <div id="external-events">
                                                                    <form class="inline-form">
                                                                        <input type="text" value="" class="form-control" placeholder="Event Title..." id="event_title" />
                                                                        <br/>
                                                                        <a href="javascript:;" id="event_add" class="btn green"> Add Event </a>
                                                                    </form>
                                                                    <hr/>
                                                                    <div id="event_box" class="margin-bottom-10"></div>
                                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline" for="drop-remove"> remove after drop
                                                                        <input type="checkbox" class="group-checkable" id="drop-remove" />
                                                                        <span></span>
                                                                    </label>
                                                                    <hr class="visible-xs" /> </div>
                                                                <!-- END DRAGGABLE EVENTS PORTLET-->
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div id="calendar" class="has-toolbar"> </div>
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
        </div>
    </div>


    <?php include('include/footer.php'); ?>