<?php
Route::get('{flyer_id}/families', 'FamiliesController@index')->name('families.index');

Route::resource('families', 'FamiliesController', ['only' => ['show', 'index','create', 'store', 'update', 'edit', 'destroy']]);




Route::get('{flyer_id}/incomes', 'IncomesController@index')->name('incomes.index');

Route::resource('incomes', 'IncomesController', ['only' => ['show', 'index','create', 'store', 'update', 'edit', 'destroy']]);
Route::get('/', ['as' => 'home_path', 'uses' => 'PagesController@home']);

// Authentication routes...
Route::get('login', 'Auth\loginController@getLogin');
Route::post('login', 'Auth\loginController@postLogin');
Route::get('logout', 'Auth\loginController@getLogout');

// Registration routes...
Route::get('register', 'Auth\loginController@getRegister');
Route::post('register', 'Auth\loginController@postRegister');

// Password reset link request routes...



Route::post('{bangfuID}/{dir}/flyers', ['as' => 'store_photo_path', 'uses' => 'FlyersController@addPhoto']);
Route::resource('flyers', 'FlyersController');
Route::get('{zip}/{street}', 'FlyersController@show');

Route::get('ff', function(){
	echo 4;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


