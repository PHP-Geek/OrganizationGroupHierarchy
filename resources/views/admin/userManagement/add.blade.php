@extends('./layouts.admin')
@section('content') 
<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->

                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="{{url('/home')}}">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><a href="{{url("/admin/users")}}">Users</a></span>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>{{ isset($userDetailArray->id)?'Edit':'Add' }}</span>

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
                                                    <span class="caption-subject font-red-sunglo uppercase bold">User Details</span>
                                                    <span class="caption-helper hide">weekly stats...</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <form id="addUserForm" method="post" action="" role="form">
                                                    {{csrf_field()}}
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>First Name </label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName" autocomplete="off" value="{{isset($userDetailArray->firstName)?$userDetailArray->firstName:''}}"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Last Name</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName" autocomplete="off" value="{{isset($userDetailArray->lastName)?$userDetailArray->lastName:''}}"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Email </label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-envelope"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" autocomplete="off" value="{{isset($userDetailArray->email)?$userDetailArray->email:''}}"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Phone</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-phone"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" autocomplete="off" value="{{isset($userDetailArray->phone)?$userDetailArray->phone:''}}"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Username</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-user"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Username" name="userName" id="userName" autocomplete="off"value="{{isset($userDetailArray->userName)?$userDetailArray->userName:''}}"> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <select name="roleId" id="roleId" class="form-control">
                                                                        <option value="" disabled="disabled" selected="selected">Select role</option>
                                                                        @foreach($userRoleArray as $role)
                                                                        <option {{ isset($userDetailArray->userRole[0]->id) && $userDetailArray->userRole[0]->id == $role->id ? 'selected="selected"':'' }} value="{{$role->id}}">{{$role->roleName}}</option>       
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if(!isset($userDetailArray->id))
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Password</label>
                                                                    <div class="input-group input-icon right">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-lock"></i>
                                                                        </span>
                                                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                                                        <i class="fa fa-question-circle" style="color:green;cursor: pointer" data-placement="left" data-toggle="popover" data-content="Password must be atleast 8 characters and maximum 14 characters, minimum one uppercase and one lowercase character, minimum one digit and one special character."></i>   </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Confirm Password</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-lock"></i>
                                                                        </span>
                                                                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword" autocomplete="off"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Extra Property 1</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-envelope"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Extra Property 1" name="extraProperty1" id="extraProperty1" autocomplete="off" value="{{ isset($userDetailArray->profile->extraProperty1)?$userDetailArray->profile->extraProperty1:'' }}"> </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Extra Property 2</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-envelope"></i>
                                                                        </span>
                                                                        <input type="text" class="form-control" placeholder="Extra Property 2" id="extraProperty2" name="extraProperty2" autocomplete="off"  value="{{ isset($userDetailArray->profile->extraProperty2)?$userDetailArray->profile->extraProperty2:'' }}"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions margin-bottom-10">
                                                            <button type="submit" class="btn blue btn-green">Submit</button>
                                                            <button class="btn grey btn-default" type="button" id="cancelButton">Cancel</button>
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
<script>
    var userId = '{{isset($userDetailArray->id)?$userDetailArray->id:0}}';</script>
<script src="{{url('/js/admin/userManagement/add.js')}}"></script>
@endsection
