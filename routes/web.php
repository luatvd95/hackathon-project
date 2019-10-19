<?php

Auth::routes();

// user
Route::group(['namespace' => 'User'], function () {
	Route::get('/', 'HomeController@index');
	Route::get('/home', 'HomeController@index');
});

//Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
	Route::get('/', 'AdminController@index');
});
