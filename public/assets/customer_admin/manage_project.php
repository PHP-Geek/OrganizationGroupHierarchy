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
                        <div class="page-head">
                            <div class="container">
                                <!-- BEGIN PAGE TITLE -->
                                <div class="page-title">
                                    <h1>Dashboard
                                        <small>dashboard & statistics</small>
                                    </h1>
                                </div>
                            </div>
                        </div>
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
                                        <span>Dashboard</span>
                                    </li>
                                </ul>
                                <!-- END PAGE BREADCRUMBS -->
                                <!-- BEGIN PAGE CONTENT INNER -->
                                <div class="page-content-inner">
                                    <div class="mt-content-body">
                                        <div class="portlet light">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart font-dark hide"></i>
                                                    <span class="caption-subject font-red-sunglo uppercase bold">Project listing</span>
                                                    <span class="caption-helper hide">weekly stats...</span>
                                                </div>
                                                <!--                                                        <div class="caption caption-md pull-right">
                                                                                                            <a type="button" href="add_company.php" class="btn default btn-green text-white"> Add Company</a>
                                                                                                        </div>-->
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th> S.No </th>
                                                                <th> Project Name </th>
                                                                <th> Project Type </th>
                                                                <th> Owner </th>
                                                                <th> Client </th>
                                                                <th> Number of sessions </th>
                                                                <th> Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td> 1 </td>
                                                                <td> Vadi </td>
                                                                <td> Monologue </td>
                                                                <td> John doe </td>
                                                                <td>Steve  </td>
                                                                <td> 10</td>
                                                                <td>
                                                                    <a href="view_project.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                    <a type="button" class="btn yellow btn-outline" href="Create_project.php">Establish Conduits</a>

                                                                </td>
                                                            </tr><tr>
                                                                <td> 2 </td>
                                                                <td> Test Project</td>
                                                                <td> Ortyu </td>
                                                                <td> Mike </td>
                                                                <td>John  </td>
                                                                <td> 5</td>
                                                                <td>
                                                                    <a href="view_project.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                    <a type="button" class="btn yellow btn-outline" href="Create_project.php">Establish Conduits</a>

                                                                </td>
                                                            </tr><tr>
                                                                <td> 3 </td>
                                                                <td> Pyio</td>
                                                                <td> Poiuyt </td>
                                                                <td> Dirk </td>
                                                                <td>Luht  </td>
                                                                <td> 2</td>
                                                                <td>
                                                                    <a href="view_project.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                    <a type="button" class="btn yellow btn-outline" href="Create_project.php">Establish Conduits</a>

                                                                </td>
                                                            </tr><tr>
                                                                <td> 4 </td>
                                                                <td> Adrty</td>
                                                                <td> Ptyuli </td>
                                                                <td> Ertyiu </td>
                                                                <td>Poyu  </td>
                                                                <td> 9</td>
                                                                <td>
                                                                    <a href="view_project.php" type="button" class="btn green btn-outline"><i class="fa fa-eye"></i></a>
                                                                    <a type="button" class="btn yellow btn-outline" href="Create_project.php">Establish Conduits</a>

                                                                </td>

                                                            </tr></tbody>
                                                    </table>
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
        </div>
    </div>
    <?php include('include/footer.php'); ?>