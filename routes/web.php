<?php


Auth::routes();

Route::group(['middleware'=>'auth'], function() {
	Route::get('/', function () { 
		return view('index'); 
	});
	Route::get('/index2', function () { 
		return view('index2'); 
	});

	Route::get('/profile', 'ProfileController@index');	
	Route::post('/profile', 'ProfileController@update');	
});