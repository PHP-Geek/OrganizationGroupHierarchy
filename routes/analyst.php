<?php

Route::group(array('prefix' => 'analyst', 'middleware' => 'analyst'), function() {
//    Project Controller routes
    Route::get('/create-project', 'analyst\ProjectController@createProject');
    Route::get('/clone-project', 'analyst\ProjectController@cloneProject');
    Route::get('/framing-guide', 'analyst\ProjectController@framingGuide');
    Route::get('/create-template', 'analyst\ProjectController@createTemplate');
    Route::get('/setup-deliverables', 'analyst\ProjectController@setupDeliverables');
    Route::get('/manage-product', 'analyst\ProjectController@manageProduct');

//    Session Controller routes
    Route::get('/create-session', 'analyst\SessionController@createSession');
    Route::get('/copy-session', 'analyst\SessionController@copySession');
    Route::get('/show-session', 'analyst\SessionController@showSession');
    Route::get('/add-participant', 'analyst\SessionController@addParticipant');
    Route::get('/define-device', 'analyst\SessionController@defineDevice');
    Route::get('/recording-monitor', 'analyst\SessionController@recordingMonitor');

//     User Management Controller Routes
    Route::get('/add-role', 'analyst\UserManagementController@addRole');
    Route::get('/assign-permission', 'analyst\UserManagementController@assignPermission');
});
