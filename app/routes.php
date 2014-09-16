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

Route::group(array('domain' => 'admin.jfq.0x123.com'), function() {
	
	Route::get('/', function() {
		if (Input::get('elf') != 'xxc') {
			App::abort(404);
		}
		return 'admin root';
	});
});

Route::get('/', function()
{
	$timezone = date_default_timezone_get();
	return $timezone;
	return DateTimeZone::getName();
	return $_ENV['TEST_STRIPE_KEY'];
	return View::make('hello');
});
