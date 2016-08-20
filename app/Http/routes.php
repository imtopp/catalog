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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/login', [
    'as' => 'login_admin', 'uses' => 'AdministratorController@showLogin'
]);

Route::get('admin', function() {
	return redirect()->route('login_admin');
});

