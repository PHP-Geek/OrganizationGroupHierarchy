<style>
    .clr-bar{
        background: #444d58;
        border-color: #444d58;
        color: #f1f1f1;
    } 
    .clr-bar:hover{
        color: #f1f1f1;

    }
    .navbar-default .navbar-brand,  .navbar-default .navbar-brand:hover {
        color: #f1f1f1;
    }
    .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
        color: #f1f1f1;
        background-color: transparent;
    }
    .navbar-default .navbar-nav > li > a, .navbar-default .navbar-text {
        color: #f1f1f1;
    }
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .btn.btn-default.dropdown-toggle{
        background-color: #444d58;
        border-color: #444d58;
        color: #f1f1f1;

    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover {
        background-color: #444d58;
        color: #f1f1f1;
        border-color:#444d58;
    }
    .clr-yellow{
        color:#F7BB01 !important;
    }
    .btn.btn-default.dropdown-toggle {
        text-align: left;
    }
    /*    .page-header .top-menu, .page-header .top-menu .navbar-nav > li.dropdown-user .dropdown-toggle, .page-header-fixed-mobile .page-header .top-menu {
            background-color: #417D6B;
        }
    */


</style>
<div class="page-wrapper-row">
    <div class="page-wrapper-top">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <div class="row">
                        <div class="col-md-6">
                            <!--                            <div class="page-logo">
                                                            <a href="index.php">
                                                                <img src="images/logo-vadi.png" alt="logo" class="logo-default">
                                                            </a>
                                                        </div>-->
                        </div>
                        <div class="col-md-6">
                            <div class="top-menu">
                                <ul class="nav navbar-nav pull-right">

                                    <!--                              
                                    <!--                                    BEGIN INBOX DROPDOWN -->
                                    <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                        <!--                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                                    <span class="circle">3</span>
                                                                                    <span class="corner"></span>
                                                                                </a>-->
                                        <ul class="dropdown-menu">
                                            <!--                                            <li class="external">
                                                                                            <h3>You have
                                                                                                <strong>7 New</strong> Messages</h3>
                                                                                            <a href="app_inbox.html">view all</a>
                                                                                        </li>-->
                                            <li>
                                                <ul class="dropdown-menu-list scroller">
                                                    <li>
                                                        <a href="#">
                                                            <span class="photo">
                                                                <img src="../assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                            <span class="subject">
                                                                <span class="from"> Lisa Wong </span>
                                                                <span class="time">Just Now </span>
                                                            </span>
                                                            <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="photo">
                                                                <img src="./assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                            <span class="subject">
                                                                <span class="from"> Richard Doe </span>
                                                                <span class="time">16 mins </span>
                                                            </span>
                                                            <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="photo">
                                                                <img src="./assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                            <span class="subject">
                                                                <span class="from"> Bob Nilson </span>
                                                                <span class="time">2 hrs </span>
                                                            </span>
                                                            <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="photo">
                                                                <img src="./assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                            <span class="subject">
                                                                <span class="from"> Lisa Wong </span>
                                                                <span class="time">40 mins </span>
                                                            </span>
                                                            <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <span class="photo">
                                                                <img src="./assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                            <span class="subject">
                                                                <span class="from"> Richard Doe </span>
                                                                <span class="time">46 mins </span>
                                                            </span>
                                                            <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown dropdown-user dropdown-dark">
                                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                            <img alt="" class="img-circle" src="../assets/layouts/layout3/img/avatar9.jpg">
                                            <span class="username username-hide-mobile font-white">Nick</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-default">
                                            <li>
                                                <a href="">
                                                    <i class="icon-user"></i> My Profile </a>
                                            </li>
                                            <li>
                                                <a href="edit-profile.php">
                                                    <i class="fa fa-edit"></i> Edit 
                                                </a>
                                            </li>

                                            <li class="divider"> </li>

                                            <li>
                                                <a href="">
                                                    <i class="icon-key"></i> Log Out </a>
                                            </li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <nav class="navbar navbar-default clr-bar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class=""> 
                                <a href="index.php"> Home
                                    <span class="arrow"></span>
                                </a>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Customer Administrator<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <!--                                    <li class="dropdown-submenu">
                                                                            <a class="test" href="#" >Hierarchy Management</a>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a href="hierarchy_management.php">Create Hierarchy</a></li>
                                                                                <li><a href="edit_hierarchy_management.php">Edit Hierarchy</a></li>
                                                                            </ul>
                                                                        </li>-->

                                    <!--<li><a href="#" class="font-red-sunglo">Establish Conduits (Not Clear) </a></li>-->
                                    <li><a href="demographics.php">Special Demographics</a></li>
                                    <!--<li class="font-red-sunglo"><a href="#" class="font-red-sunglo">Dictionaries (Not Clear)</a></li>-->


                                    <!--                                    <li><a href="capacity_limits.php">Define Capacity</a></li>-->
                                    <li><a href="add_edit_user.php">Add/Edit User</a></li>
                                    <!--                                    <li><a href="add_participants.php">Add Participants</a></li>-->
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Groups</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="new_group.php">New Group</a></li>
                                            <li><a href="view_group.php">View Group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="manage_project.php">Manage Projects</a></li>
                                    <li><a href="Create_project.php">Create Project</a></li>
                                    <li><a href="clone_Project.php">Copy/Clone Project</a></li>
                                    <li><a href="framing_guide.php">Create and Modify Framing Guide</a></li>
                                    <li class="dropdown-submenu"><a>Project Template</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="create_template.php">Create Template</a></li>
                                            <li><a href="view_template.php">View Templates</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="setup_deliverables.php">Setup Deliverables</a></li>
                                    <li><a href="import-asset.php">Manage Assets</a></li>
                                    <li class="font-red-sunglo"><a href="audit-trail.php">Audit Trails</a></li>
                                    <li><a href="manage_product.php">Manage Product Table</a></li>
                                    <!--                                    <li><a href="manage_product.php">Create Project for Template</a></li>-->

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Session
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="Show_session.php">Manage Session</a></li>
                                    <li><a href="Create_session.php">Create Session</a></li>
                                    <li><a href="copy_session.php">Copy Session</a></li>
                                    <li><a href="edit_session.php">Edit Session</a></li>
                                    <li><a href="session-task-calendar.php">Session Task Calendar</a></li>
                                    <li><a href="participant_list.php">Participants</a></li>
                                    <li><a href="create_phone_kit_participants.php">Create Phone KIT Participants</a></li>
                            </li>

                            <li class="dropdown-submenu">
                                <a class="test" href="#">Device Setting</a>
                                <ul class="dropdown-menu">
                                    <li><a href="define_devices.php">Define Devices</a></li>
                                    <li><a href="edit-parameter-devices.php">Set Device Parameters</a></li>
                                </ul>
                            </li>

                            <li><a href="create_quick_session.php">Create Quick Session</a></li>
                            <li><a href="recording_monitor.php">Recording Monitor</a></li>

                            <!--                            <li class="dropdown-submenu clr-yellow">
                                                            <a class="test clr-yellow" href="#">Draft Tool Bar (Need More clarification)</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="request_tool_bar.php">Request Draft</a></li>
                                                                                                            <li><a href="#">Draft Transcript</a></li>
                                                                                                            <li><a href="#">Draft Path</a></li>
                                                                                                            <li><a href="#">Draft Metrics</a></li>
                                                                                                            <li><a href="#">Draft Analytics</a></li>
                                                                                                            <li><a href="#">Draft Metrics</a></li>
                                                            </ul>
                                                        </li>-->
                            <!--                                    <li class="dropdown-submenu">
                                                                    <a class="test clr-yellow" href="#" class="clr-yellow">Session Tool Bar (Need More clarification)</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a href="start_session.php">Start/Stop Session</a></li>
                                                                        <li><a href="edit_session.php">Edit Session</a></li>
                                                                        <li><a href="Run.php">Re-Run Old Sessions</a></li>
                                                                    </ul>
                                                                </li>-->


                        </ul>
                        </li>
                        <li class="dropdown">
                            <a class="btn btn-default dropdown-toggle font-red-sunglo" type="button" data-toggle="dropdown">Reporting 
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="test" href="#">Manage Report</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Word Clouds</a></li>
                                        <li><a href="#">Bar Graphs</a></li>
                                        <li><a href="#">VADI Path Diagrams</a></li>
                                        <li><a href="#">Customized Reports</a></li>
                                        <li><a href="#">Interact Report Definition</a></li>
                                        <li><a href="#">Q&A Report</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a class="test" href="#">Re-Run Reports</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="test" href="#">Tool Bar</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Favorite Report </a></li>
                                        <li><a href="#">Single Page Report</a></li>
                                        <li><a href="#">Reports by Demographics</a></li>
                                        <li><a href="#">Analytics</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">User Management
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="submenu">
                                    <a class="test" href="add_role.php">User Role</a>

                                </li>
                                <li class="submenu">
                                    <a class="test" href="Permissions.php">Assign Permissions</a>
                                </li>

                            </ul>
                        </li>
                        <!--                            <li class=""> 
                                                        <a href="plans_pricing.php"> Plans & Pricing
                                                            <span class="arrow"></span>
                                                        </a>
                                                    </li>-->
                        </ul>
                        <form class="pull-right margin-top-10">
                            <div class="input-group">
                                <a href="plans_pricing.php">
                                    <button type="button" class="btn blue-madison">Upgrade</button>
                                </a>
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });


</script>