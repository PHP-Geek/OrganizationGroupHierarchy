@extends('./layouts.admin')
@section('content')     
<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="container">
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="{{url('/home')}}">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><a href="{{url('/admin/groups')}}">Groups</a></span>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add</span>
                            </li>
                        </ul>
                        <div class="page-content-inner">
                            <div class="mt-content-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <span class="caption-subject font-red-sunglo bold uppercase"> New Group</span>
                                                </div>
                                                <div class="caption caption-md pull-right">

                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form" id="addGroupForm" method="post" action="">
                                                    {{csrf_field()}}
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Name of Group</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-group"></i>
                                                                        </span>
                                                                        <input type="text" name="groupName" id="groupName" class="form-control" placeholder="Name of Group" value="{{isset($groupDetail->groupName) ? $groupDetail->groupName:''}}"> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Parent Group</label>
                                                                    <select class="form-control" name="groupParentId" id="groupParentId">
                                                                        <option selected="selected" disabled="disabled" value="">Select Parent Group</option>
                                                                        @foreach($groupName as $groups)
                                                                        <option  value="{{$groups->id}}" {{(isset($groupDetail->groupParentId) && $groupDetail->groupParentId == $groups->id) ? 'selected="selected"':''}}>{{$groups->groupName}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Group Manager</label>
                                                                    <select  class="form-control" id="groupManagerId" name="groupManagerId" >
                                                                        @if(isset($groupDetail->groupManagerId) && count($groupDetail->groupManager) > 0)
                                                                        <option value="{{$groupDetail->groupManager->id}}" selected="selected">{{$groupDetail->groupManager->firstName.' '.$groupDetail->groupManager->lastName}}</option>  
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Description</label>
                                                                        <div class="input-group">
                                                                            <textarea name="groupDescription" id="groupDescription" class="form-control" placeholder="Desription" rows="3" cols="70">{{isset($groupDetail->groupDescription) ? $groupDetail->groupDescription:''}}</textarea> 
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Users</label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                            <i class="fa fa-clock-o"></i>
                                                                        </span>
                                                                        <select  class="form-control" id="userId" name="userId[]" multiple="multiple">
                                                                            @if(isset($groupDetail) && count($groupDetail->groupUser) > 0)
                                                                            @foreach($groupDetail->groupUser as $groupUser)
                                                                            <option value="{{$groupUser->userId}}" selected="selected">{{$groupUser->firstName}}</option>
                                                                            @endforeach
                                                                            @endif
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button type="submit" id="addGroupBtn" class="btn blue btn-green">Submit</button>
                                                            <button id="cancelButton" type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
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
<script src="{{url('/js/admin/userManagement/addGroup.js')}}"></script>
@endsection