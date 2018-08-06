
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
        <?php
        $route = Route::getFacadeRoot()->current()->uri();
        ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ $route == 'home' ? 'active':''}}"> 
                    <a href="{{url('/home')}}"> Home
                        <span class="arrow"></span>
                    </a>
                </li>


                <li class="dropdown <?php
                if (in_array($route, ['admin/demographics', 'admin/users', 'admin/groups', 'admin/add-role', 'admin/assign-permission'])) {
                    echo'active';
                }
                ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> User Management<span class="caret"></span></a>
                    <ul class="dropdown-menu ">
                        <li><a href="{{url('/admin/trait/templates')}}">Trait Templates</a></li>
                        <li><a href="{{url('/admin/traits')}}">Traits</a></li>
                        <li><a href="{{url('/admin/users')}}">Users</a></li>
                        <li>
                            <a class="test clr-yellow" href="{{url('/admin/groups')}}" class="clr-yellow">Groups</a>
                        </li>
                        <li><a class="test" href="{{url('/admin/add-role')}}">User Role</a></li>
                        <li> <a class="test" href="{{url('/admin/assign-permission')}}">Assign Permissions</a></li>
                    </ul>
                </li>

                <li class="dropdown <?php
                if (in_array($route, ['admin/project-types', 'admin/projects', 'admin/framing-guide', 'admin/create-template', 'admin/view-template', 'admin/request-deliverable', 'admin/import-assets', 'admin/audit-trail', 'admin/manage-product', 'admin/project/templates'])) {
                    echo'active';
                }
                ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/admin/project-types')}}">Project Types</a></li>
                        <li><a href="{{url('/admin/projects')}}">Manage Project</a></                    li>
                        <li><a href="{{url('/admin/framing-guide')}}">Create and Modify Framing Guide</a></li>
                        <li>
                            <a class="test clr-yellow" href="{{url('/admin/project/templates')}}" >Project Template</a>
                        </li>

                        <li><a href="{{url('/admin/request-deliverable')}}">Setup Deliverables</a></li>
                        <li><a href="{{url('/admin/import-assets')}}">Manage Assets</a></li>
                        <li><a href="{{url('/admin/audit-trail')}}">Audit Trails</a></li>

                        <!--                                    <li><a href="manage_product.php">Create Project for Template</a></li>-->
                    </ul>
                </li>

                <li class="dropdown <?php
                if (in_array($route, ['admin/show-session', 'admin/create-session', 'admin/copy-session', 'admin/edit-session', 'admin/participant-list', 'admin/participant-list', 'admin/set-parameter-device', 'admin/define-devices', 'admin/create-quick-session', 'admin/recording-monitor'])) {
                    echo'active';
                }
                ?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sessions <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/admin/session/list')}}">Manage Sessions</a></li>
                        <li><a href="{{url('/admin/set-parameter-device')}}">Set Parameter Device</a></li>


                        <li class="dropdown-submenu">
                            <a class="test" href="#">Device Setting</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/admin/define-devices')}}">Define Devices</a></li>

                            </ul>
                        </li>

                        <li><a href="{{url('/admin/create-quick-session')}}">Create Quick Session</a></li>

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
                        <!--                                    <li class="dropdown-submenu">
                                                                <a class="test clr-yellow" href="#" class="clr-yellow">Session Tool Bar (Need More clarification)</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a href="start_session.php">Start/Stop Session</a></li>
                                                                    <li><a href="edit_session.php">Edit Session</a></li>
                                                                    <li><a href="Run.php">Re-Run Old Sessions</a></li>
                                                                </ul>
                                                            </li>-->
                        <li><a href="{{url('/admin/recording-monitor')}}">Recording Monitor</a></li>

                    </ul>
                </li>
                <li class="dropdown ">
                    <a class=" dropdown-toggle" type="button" data-toggle="dropdown">Reporting 
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


            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- END HEADER MENU -->

<!-- END HEADER -->
<!--<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });


</script>-->