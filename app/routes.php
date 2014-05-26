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

Route::get('/',function(){
	return View::make('hello');
});

Route::resource('users','UsersController');
Route::resource('debits','DebitsController');
Route::resource('groups','GroupsController');
Route::resource('permissions','PermissionsController');
Route::resource('products','ProductsController');
Route::resource('settings','SettingsController');
Route::resource('throttles','ThrottlesController');
Route::resource('transactions','TransactionsController');
Route::resource('types','TypesController');
Route::resource('usergroups','UserGroupsController');

Route::get('/', array('as' => 'home', function () { }));
Route::get('login', array('as' => 'login', function () { }));
Route::post('login', function () { });
Route::get('logout', array('as' => 'logout', function () { }));
Route::get('profile', array('as' => 'profile', function () { }));