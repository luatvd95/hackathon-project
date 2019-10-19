<?php

Auth::routes();

// user
Route::group(['namespace' => 'User'], function () {
	Route::get('/', 'HomeController@index');
});

//Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
	Route::get('/', 'AdminController@index');
});

Route::get('suggestions', function () {
	return view('user.firsttime');
});