

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
                if (in_array($route, ['group-manager/trait/templates','group-manager/trait/template/create','group-manager/group/add','group-manager/group/edit/{group}','group-manager/group/hierarchy/{group}', 'group-manager/group/list', 'group-manager/trait'])) {
                    echo'active';
                }
                ?>">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> User Management<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/group-manager/trait/templates')}}">Trait Templates</a></li>
                                    <li><a href="{{url('/group-manager/trait')}}">Trait</a></li>
                                    <li><a href="{{url('/group-manager/group/list')}}">Groups</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php
                if (in_array($route, ['group-manager/project/list','group-manager/project/add','group-manager/project/edit/{project}','group-manager/project/copy/{project}','group-manager/project/project-types', 'group-manager/project/project-type/add','group-manager/project/project-type/edit/{projectTypeData}','group-manager/project/templates','group-manager/project/template/create','group-manager/project/template/edit/{projectTemplate}','group-manager/project/template/edit/{projectTemplate}','group-manager/project/request-deliverable','group-manager/project/audit-trail','group-manager/products'])) {
                    echo'active';
                }
                ?>">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                      
                                    <li><a href="{{url('/group-manager/project/list')}}">Manage Project</a></li>
                                    <li><a href="{{url('/group-manager/project/project-types')}}">Project Types</a></li> 
                                    <li><a href="{{url('/group-manager/project/templates')}}">Project Template</a></li> 
                                    <li><a href="{{url('/group-manager/project/request-deliverable')}}">Setup Deliverables</a></li>
                                   
                                    <li><a href="{{url('/group-manager/project/audit-trail')}}">Audit Trails</a></li>
                                </ul>
                            </li>
                            <li class="dropdown <?php
                if (in_array($route, ['group-manager/session/list','group-manager/session/create','group-manager/session/edit/{session}','group-manager/session/copy/{session}/{type}','group-manager/session/list/participants/{session?}','group-manager/session/list/participant/{list}/{session}'])) {
                    echo'active';
                }
                ?>">
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Sessions
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/group-manager/session/list')}}">Manage Sessions</a></li>
                                    <li><a href="{{url('/group-manager/set-parameter-device')}}">Set Device Parameters</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Device Setting</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('/group-manager/define-devices')}}">Define Devices</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/group-manager/create-quick-session')}}">Create Quick Session</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="test" href="#">Draft Tool Bar (Need More clarification)</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Recording Monitor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Recording Monitor</a></li>
                                </ul>
                            </li>

                        </ul>
                        <form class="pull-right margin-top-10">
                            <div class="input-group">
                                <a href="#">
                                  <!--  <button type="button" class="btn btn-orange">Upgrade</button> -->
                                </a>
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
<!----
            END MEGA MENU 
        </div>
    </div>
    END HEADER MENU 
</div>
 END HEADER 
<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });


</script> -->
