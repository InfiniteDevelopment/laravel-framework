<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('domain' => "admin.laravel-framework.com"), function() {
	Route::controller('/', 'AdminController');
});

Route::group(array('domain' => 'api.laravel-framework.com'), function() {
	Route::controller('/', 'APIBaseController');
});

Route::get('/', 'HomeController@showWelcome');

Route::get('test', function() {
	return 'test';
});