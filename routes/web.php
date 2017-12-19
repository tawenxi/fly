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

Route::get('/', ['as' => 'home_path', 'uses' => 'PagesController@home']);

// Authentication routes...
Route::get('login', 'Auth\loginController@getLogin');
Route::post('login', 'Auth\loginController@postLogin');
Route::get('logout', 'Auth\loginController@getLogout');

// Registration routes...
Route::get('register', 'Auth\loginController@getRegister');
Route::post('register', 'Auth\loginController@postRegister');

// Password reset link request routes...



Route::post('{bangfuID}/flyers', ['as' => 'store_photo_path', 'uses' => 'FlyersController@addPhoto']);
Route::resource('flyers', 'FlyersController');
Route::get('{zip}/{street}', 'FlyersController@show');

Route::get('ff', function(){
	echo 4;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
