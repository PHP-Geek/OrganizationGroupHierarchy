<?php

Route::group(array('prefix' => 'admin', 'middleware' => 'userAdmin'), function () {

    Route::post('/add-participant', 'AjaxController@addParticipant');
    Route::post('/add-existing-participant', 'AjaxController@addExistingParticipant');
    Route::post('/remove-participant', 'AjaxController@removeSessionUser');
    Route::get('/get-session-by-project/{project}', 'AjaxController@getSessionByProject');

    Route::get('/get-company-participants', 'AjaxController@getCompanyParticipants');

    // UserManagementController routes
    Route::get('/demographics', 'admin\UserManagementController@demoGraphics');
    Route::get('/users', 'admin\UserManagementController@userListing');
    Route::match(['get', 'post'], '/user/add', 'admin\UserManagementController@addUser');
    Route::match(['get', 'post'], '/user/edit/{id}', 'admin\UserManagementController@addUser');
    Route::get('/user/view/{id}', 'admin\UserManagementController@viewUser');
    Route::post('/user-datatable', 'admin\UserManagementController@userDatatable');
    Route::post('/change-status', 'AjaxController@changeUserStatus');
    Route::match(['get', 'post'], '/group/add', 'admin\UserManagementController@addGroup');
    Route::match(['get', 'post'], '/group/edit/{group}', 'admin\UserManagementController@addGroup');
    Route::get('/groups', 'admin\UserManagementController@groups');
    Route::post('/group-datatable', 'admin\UserManagementController@groupDatatable');
    Route::post('/change-group-status', 'AjaxController@changeGroupStatus');
    Route::get('/group/hierarchy/{group}', 'admin\UserManagementController@groupHierarchy');
    Route::get('/group/get-group-users/{group}', 'admin\UserManagementController@getGroupUser');
    Route::get('/trait/templates', 'admin\DemographicController@templates');
    Route::match(['get', 'post'], 'trait/template/create', 'admin\DemographicController@createTemplate');
    Route::match(['get', 'post'], '/trait/create', 'admin\DemographicController@create');
    Route::get('/traits', 'admin\DemographicController@index');
    Route::post('/trait/makeSessionTemplateGrid', 'admin\DemographicController@makeSessionTemplateGrid');
    Route::post('/trait/save', 'admin\DemographicController@save');

    Route::get('/add-role', 'admin\UserManagementController@addRole');
    Route::get('/assign-permission', 'admin\UserManagementController@assignPermission');
    Route::match(['get', 'post'], '/user/import', 'admin\UserManagementController@import');



    //Project controller routes
    Route::get('/project-types', 'admin\ProjectController@Types');
    Route::post('/project-type-datatable', 'admin\ProjectController@typeDatatables');
    Route::match(['get', 'post'], '/project-type/add', 'admin\ProjectController@addType');
    Route::match(['get', 'post'], '/project-type/edit/{projectTypeData}', 'admin\ProjectController@addType');
    Route::post('/change-project-type-status', 'admin\ProjectController@changeProjectTypeStatus');
    Route::post('/change-project-type-status', 'admin\ProjectController@changeProjectTypeStatus');
    Route::get('/projects', 'admin\ProjectController@lists');
    Route::match(['get', 'post'], '/project/add', 'admin\ProjectController@add');
    Route::match(['get', 'post'], '/project/edit/{project}', 'admin\ProjectController@add');
    Route::post('/project-datatable', 'admin\ProjectController@projectDatatable');
    Route::match(['get', 'post'], 'project/copy/{project}', 'admin\ProjectController@copy');
//    Route::get('/framing-guide', 'admin\ProjectController@framingGuide');
    Route::get('/project/templates', 'admin\ProjectController@templates');
    Route::post('/project/templates/datatable', 'admin\ProjectController@templateDatatable');
    Route::match(['get', 'post'], '/project/template/create', 'admin\ProjectController@createTemplate');
    Route::match(['get', 'post'], '/project/template/edit/{projectTemplate}', 'admin\ProjectController@createTemplate');
    Route::match(['get', 'post'], '/project/template/use/{projectTemplate}/{type}', 'admin\ProjectController@createTemplate');
    Route::post('/delete-template/{projectTemplate}', 'admin\ProjectController@deleteTemplate');
    Route::get('/request-deliverable', 'admin\ProjectController@requestDeliverables');
    Route::get('/audit-trail', 'admin\ProjectController@auditTrail');

//Session Controller routes
    Route::group(array('prefix' => 'session'), function () {
        Route::get('/list', 'admin\SessionController@index');
        Route::post('/datatable', 'admin\SessionController@datatable');
        Route::match(['get', 'post'], '/create', 'admin\SessionController@create');
        Route::match(['get', 'post'], '/edit/{session}', 'admin\SessionController@create');
        Route::match(['get', 'post'], '/participants/{session}', 'admin\SessionController@participants');
        Route::match(['get', 'post'], '/copy/{session}/{type}', 'admin\SessionController@create');
        Route::get('/show-session', 'admin\SessionController@showSession');
        Route::get('/define-devices', 'admin\SessionController@defineDevices');
        Route::get('/create-quick-session', 'admin\SessionController@createQuickSession');
        Route::get('/recording-monitor', 'admin\SessionController@recordingMonitor');
        Route::get('/participant-list', 'admin\SessionController@ParticipantList');
        Route::get('/set-parameter-device', 'admin\SessionController@setParameterDevice');
        Route::post('/change-session-list', 'AjaxController@changeSessionList');

        //Lists routes
        Route::group(['prefix' => 'list'], function () {
            Route::get('/participants/{session?}', 'admin\ListController@sessionList');
            Route::get('/participant/{list}/{session}', 'admin\ListController@participants');
            Route::post('/save', 'admin\ListController@save');
            Route::post('/add-list-participant', 'AjaxController@addListParticipant');
            Route::post('/add-exiting-participant', 'AjaxController@addExistingUserToList');
            Route::get('/get-list/{list}', 'AjaxController@getList');
            Route::post('/delete-list-user', 'AjaxController@deleteListParticipant');
        });
    });
    //assets routes
    Route::group(['prefix' => 'asset'], function() {
        Route::get('/import', 'admin\AssetController@import');
        Route::post('/save', 'AjaxController@saveProjectAsset');
    });
    //Product Controller
    Route::get('/products', 'admin\ProductController@manageProduct');
    Route::match(['get', 'post'], '/product/add', 'admin\ProductController@add');
    Route::match(['get', 'post'], '/product/edit/{product}', 'admin\ProductController@add');
    Route::post('/product-datatable', 'admin\ProductController@productDtatable');
    Route::post('/change-product-status', 'AjaxController@changeProductStatus');
    Route::match(['get', 'post'], '/product/import', 'admin\ProductController@import');
    //Asset Controlleroller
    Route::match(['get', 'match'], '/framing-guide', 'admin\AssetController@framingGuide');
    Route::post('/upload-file', 'admin\AssetController@uploadAsset');
    Route::post('/framing-guide-datatable', 'admin\AssetController@framinGuideDtatable');
    Route::post('/change-framing-guide-status', 'AjaxController@changeframingGuideStatus');
});
