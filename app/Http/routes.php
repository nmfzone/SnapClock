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

Route::get('/', function(){
    return View::make('layouts.default');
});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['namespace' => 'API'], function()
{
    Route::get('departements', [
        'as' => 'departements.show',
        'uses' => 'DepartementsController@show'
    ]);

    Route::resource('religions', 'ReligionController', ['only' => 'index']);
    Route::resource('gender', 'GenderController', ['only' => 'index']);
});

Route::group(['namespace' => 'Snappy'], function()
{
    Route::get('login', [
        'as' => 'login.index',
        'uses' => 'SessionController@index'
    ]);

    Route::post('login', [
        'as' => 'login.store',
        'uses' => 'SessionController@store'
    ]);

    Route::resource('dashboard', 'DashboardController', ['only' => 'index']);
    Route::resource('employee', 'EmployeeController');
});

Route::get('user', function()
{
    \SnapClock\Employee::create([
        'username' => 'sugeng',
        'firstname' => 'Sugeng',
        'lastname' => 'Supriyadi',
        'email' => 'me@sugeng.me',
        'password' => Hash::make('secret')
    ]);
});

