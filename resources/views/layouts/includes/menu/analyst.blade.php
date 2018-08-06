
<nav class="navbar navbar-default custom-navbar">
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
                                <a href="{{url('/home')}}"> Home
                                    <span class="arrow"></span>
                                </a>
                            </li>
                           
<!--                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Customer Administrator<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="capacity_limits.php">Define Capacity</a></li>
                                    <li><a href="add_edit_user.php">Add/Edit User</a></li>
                                                                        <li><a href="add_participants.php">Add Participants</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="test clr-yellow" href="#" class="clr-yellow">Groups (Need More Clarification)</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="new_group.php">New Group</a></li>
                                            <li><a href="view_group.php">View Group</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>-->

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Project Management <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/analyst/create-project')}}">Create Project</a></li>
                                    <li><a href="{{url('/analyst/clone-project')}}">Copy/Clone Project</a></li>
                                    <li><a href="{{url('/analyst/framing-guide')}}">Create and Modify Framing Guide</a></li>
                                    <li><a href="{{url('/analyst/create-template')}}">Create Project Template</a></li>
                                    <li><a href="{{url('/analyst/setup-deliverables')}}">Setup Deliverables</a></li>
                                    <li><a href="#" class="font-red-sunglo">Manage Assets (Not Clear)</a></li>
                                    <li><a href="{{url('/analyst/manage-product')}}">Manage Product Table</a></li>
                                    <!--                                    <li><a href="manage_product.php">Create Project for Template</a></li>-->

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a class=" dropdown-toggle" type="button" data-toggle="dropdown">Session Management
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Manage Session </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/analyst/create-session')}}">Create Session</a></li>
                                            <li><a href="{{url('/analyst/copy-session')}}">Copy Session</a></li>
                                            <li><a href="{{url('/analyst/show-session')}}">Show Session</a></li>
                                            <li><a href="{{url('/analyst/add-participant')}}">Add Participants</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Manage Devices</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/analyst/define-device')}}">Define Devices</a></li>
                                            <li><a href="#" class="font-red-sunglo">Set Device Parameters (Not Clear)</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu clr-yellow">
                                        <a class="test clr-yellow" href="#">Draft Tool Bar (Need More clarification)</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="request_tool_bar.php">Request Draft</a></li>
                                            <!--                                            <li><a href="#">Draft Transcript</a></li>
                                                                                        <li><a href="#">Draft Path</a></li>
                                                                                        <li><a href="#">Draft Metrics</a></li>
                                                                                        <li><a href="#">Draft Analytics</a></li>
                                                                                        <li><a href="#">Draft Metrics</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="test clr-yellow" href="#" class="clr-yellow">Session Tool Bar (Need More clarification)</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="start_session.php">Start/Stop Session</a></li>
                                            <li><a href="edit_session.php">Edit Session</a></li>
                                            <li><a href="Run.php">Re-Run Old Sessions</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/analyst/recording-monitor')}}">Recording Monitor</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class=" dropdown-toggle font-red-sunglo" type="button" data-toggle="dropdown">Reporting 
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
                                <a class="dropdown-toggle" type="button" data-toggle="dropdown">User Management
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="submenu">
                                        <a class="test" href="{{url('/analyst/add-role')}}">User Role</a>

                                    </li>
                                    <li class="submenu">
                                        <a class="test" href="{{url('/analyst/assign-permission')}}">Assign Permissions</a>
                                    </li>

                                </ul>
                            </li>
<!--                              <li class=""> 
                                <a href="plans_pricing.php"> Plans & Pricing
                                    <span class="arrow"></span>
                                </a>
                            </li>-->
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>