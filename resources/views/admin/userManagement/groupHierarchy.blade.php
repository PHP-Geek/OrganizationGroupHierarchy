@extends('./layouts.admin')
@section('content') 
<style>

    .well-custom {
        min-height:20px;
        padding:19px;
        margin-bottom:20px;
        background-color:#fbfbfb;
        border:1px solid #999;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
        -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
    }
    .well-custom{
        min-width: 1140px;
        overflow-x: auto;
    }
    .tree {
        width: 3000px;
    }
    .tree ul { 
        padding-top: 20px; 
        position: relative; 
        /*padding-left: 10px; */
        transition: all 0.5s; 
        -webkit-transition: all 0.5s; 
        -moz-transition: all 0.5s; 
    } 

    .tree li { 
        float: left; text-align: center; 
        list-style-type: none; 
        position: relative; 
        padding: 20px 5px 0 5px; 

        transition: all 0.5s; 
        -webkit-transition: all 0.5s; 
        -moz-transition: all 0.5s; 
    } 

    /*We will use ::before and ::after to draw the connectors*/ 

    .tree li::before, .tree li::after{ 
        content: ''; 
        position: absolute; top: 0; right: 50%; 
        border-top: 1px solid #ccc; 
        width: 50%; height: 20px; 
    } 
    .tree li::after{ 
        right: auto; left: 50%; 
        border-left: 1px solid #ccc; 
    } 

    /*We need to remove left-right connectors from elements without  
    any siblings*/ 
    .tree li:only-child::after, .tree li:only-child::before { 
        display: none; 
    } 

    /*Remove space from the top of single children*/ 
    .tree li:only-child{ padding-top: 0; } 

    /*Remove left connector from first child and  
    right connector from last child*/ 
    .tree li:first-child::before, .tree li:last-child::after{ 
        border: 0 none; 
    } 
    /*Adding back the vertical connector to the last nodes*/ 
    .tree li:last-child::before{ 
        border-right: 1px solid #ccc; 
        border-radius: 0 5px 0 0; 
        -webkit-border-radius: 0 5px 0 0; 
        -moz-border-radius: 0 5px 0 0; 
    } 
    .tree li:first-child::after{ 
        border-radius: 5px 0 0 0; 
        -webkit-border-radius: 5px 0 0 0; 
        -moz-border-radius: 5px 0 0 0; 
    } 

    /*Time to add downward connectors from parents*/ 
    .tree ul ul::before{ 
        content: ''; 
        position: absolute; top: 0; left: 50%; 
        border-left: 1px solid #ccc; 
        width: 0; height: 20px; 
    } 
    .tree li a{ 
        border: 1px solid #ccc; 
        padding: 6px 24px; 
        text-decoration: none; 
        color: #666; 
        font-size: 16px; 
        display: inline-block; 

        border-radius: 5px; 
        -webkit-border-radius: 5px; 
        -moz-border-radius: 5px; 

        transition: all 0.5s; 
        -webkit-transition: all 0.5s; 
        -moz-transition: all 0.5s; 
    } 

    /*Time for some hover effects*/ 
    /*We will apply the hover effect the the lineage of the element also*/ 
    .tree li a:hover, .tree li a:hover+ul li a { 
        background: #c8e4f8; color: #000; border: 1px solid #94a0b4; 
    } 
    /*Connector styles on hover*/ 
    .tree li a:hover+ul li::after,  
    .tree li a:hover+ul li::before,  
    .tree li a:hover+ul::before,  
    .tree li a:hover+ul ul::before{ 
        border-color:  #94a0b4; 
    } 


</style>
<div class="page-wrapper-row full-height">
    <div class="page-wrapper-middle">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
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
                                <span><a href="{{url('/admin/groups')}}">Groups</a></span>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li><span>Hierarchy</span></li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <div class="page-content-inner">
                            <div class="mt-content-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption font-red-sunglo">
                                                    <span class="caption-subject bold uppercase"> Group Hierarchy</span>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="well-custom">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="tree"> 
                                                                <ul> 
                                                                    <?php

                                                                    function childRecur($group) {
                                                                        echo '<ul>';
                                                                        foreach ($group as $groupDetail) {
                                                                            echo '<li>  <a href="javascript:;" onclick="getGroupUsers(' . $groupDetail->id . ')">  ' . $groupDetail->groupName . '</a>';
                                                                            if (count($groupDetail->children) > 0) {
                                                                                childRecur($groupDetail->children);
                                                                            }
                                                                            echo '</li>';
                                                                        }
                                                                        echo '</ul>';
                                                                    }

                                                                    echo '<li> <a href="javascript:;" onclick="getGroupUsers(' . $groupDetails->id . ')">' . $groupDetails->groupName . '</a>';
                                                                    if (count($groupDetails->children) > 0) {
                                                                        childRecur($groupDetails->children);
                                                                    }
                                                                    echo '</li>'
                                                                    ?>
                                                                </ul>
                                                            </div> 
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="table-responsive margin-top-40">
                                                                <table class="table">
                                                                    <caption><h4>Group Users</h4></caption>
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Role</th>
                                                                            <th>
                                                                                Name
                                                                            </th>
                                                                            <th>
                                                                                Email
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="parseData">

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
<script>
    $(function () {
        getGroupUsers('{{$groupDetails->id}}');
    });
    //get the group users
    function getGroupUsers(groupId) {
        $.get(base_url + '/admin/group/get-group-users/' + groupId, function (data) {
            if (data.length <= 0) {
                html = '<tr><td colspan="3">No Data</td>';
            } else {
                html = '';
                $.each(data, function (i, v) {
                    html += '<tr>';
                    html += '<td>' + v.roleName + '</td>'
                    html += '<td>' + v.firstName + ' ' + v.lastName + '</td>'
                    html += '<td>' + v.email + '</td>'
                    html += '</tr>';
                });
            }
            $("#parseData").html(html);
        });
    }
</script>

@endsection
