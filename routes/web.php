<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
//convert file into speech 
Route::match(['get', 'post'], '/speech/convert', 'CommonController@convertSpeechToText');
Route::get('/logout', function() {
    Auth::logout();
    return redirect('/login');
});
Route::get('/', function () {
    return redirect('/login');
});

Route::match(['post', 'get'], '/login', 'AuthController@login');
Route::match(['post', 'get'], '/signup', 'AuthController@signup');
Route::get('select-package', 'AuthController@selectPackage');
Route::match(['post', 'get'], 'forgot-password', 'AuthController@forgotPassword');
Route::match(['post', 'get'], '/recover', 'AuthController@recover');
Route::post('/savePackage', 'AuthController@savePackage');
Route::post('/validateUserNameOrEmail', 'AjaxController@validateUserNameOrEmail');
Route::post('/validateEditUserNameOrEmail', 'AjaxController@validateEditUserNameOrEmail');
Route::post('/validateEditCompanyName', 'AjaxController@validateEditCompanyName');
Route::group(['middleware' => 'web'], function () {
    Route::get('/home', 'HomeController@home');
    Route::match(['post', 'get'], '/profile', 'CommonController@editProfile');
    Route::get('/get-states', 'CommonController@getStateData');
    Route::get('/getTrait', 'AjaxController@getTrait');
    Route::get('/template/get-form/{template}', 'AjaxController@getTemplateForm');
});


//get the user data
Route::get('/get-company-user', 'AjaxController@searchCompanyUsers');
Route::get('/getUserById', 'AjaxController@getUserById');
Route::post('/add-brand', 'AjaxController@addBrand');
Route::post('/add-category', 'AjaxController@addCategory');

 Route::get('/search-project', 'AjaxController@searchProjects');
 Route::get('/search-group', 'AjaxController@searchGroups');

Route::get('/get-company-groupManager', 'AjaxController@searchCompanygroupManager');
