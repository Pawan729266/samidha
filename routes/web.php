<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/admin/logout', 'Auth\LoginController@logout');
Route::get('/admin', 'Admin\AdminController@index');
Route::post('/admin/store', 'Admin\AdminController@store');
Route::post('/admin/edit', 'Admin\AdminController@edit');

/*
| volunteer controller actions
*/
Route::get('/admin/volunteers', 'Admin\VolunteersController@index');
Route::get('/admin/volunteer/add', 'Admin\VolunteersController@add');
Route::post('/admin/volunteer/store', 'Admin\VolunteersController@store');
Route::get('/admin/volunteer/edit/{id}', 'Admin\VolunteersController@edit');
Route::post('/admin/volunteer/update/{id}', 'Admin\VolunteersController@update');
Route::get('/admin/volunteer/resetpassword/{id}', 'Admin\VolunteersController@resetpassword');
Route::post('/admin/volunteer/updatepassword/{id}', 'Admin\VolunteersController@updatepassword');

/*
| Team controller actions
*/
Route::get('/admin/teams', 'Admin\TeamsController@index');
Route::get('/admin/team/add', 'Admin\TeamsController@add');
Route::post('/admin/team/store', 'Admin\TeamsController@store');
Route::get('/admin/team/edit/{id}', 'Admin\TeamsController@edit');
Route::post('/admin/team/update/{id}', 'Admin\TeamsController@update');
Route::get('/admin/my-teams', 'Admin\TeamsController@myTeams');

/*
| notifications controller actions
*/
Route::get('/admin/notifications', 'Admin\NotificationsController@index');

/*
* User pages
*/
Route::get('/', 'HomeController@index');
Route::get('/initiatives', 'HomeController@initiatives');
Route::get('/samidhians', 'HomeController@samidhians');
Route::get('/about', 'HomeController@about');
Route::get('/contactus', 'HomeController@contactus');
Route::get('/services', 'HomeController@services');

Route::post('/contactus', 'HomeController@savecontactus');
