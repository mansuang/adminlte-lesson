<?php

use DB;

Auth::routes();


Route::get('/ajax', function() {
	return view('ajax');
});

Route::post('/ajax', function($email) {
	
	$result = DB::table('users')->where('email', $email)->get();


	if( $result )
	{
		return ['response'=>'ok'];
	}

	return ['response' => 'not ok'];


});


Route::group(['middleware'=>'auth'], function() {
	Route::get('/', function () { 
		return view('index'); 
	});
	Route::get('/index2', function () { 
		return view('index2'); 
	});

	Route::get('/profile', 'ProfileController@index');	
	Route::post('/profile', 'ProfileController@update');	
	Route::get('/lang/{lang}', 'LanguageController@change');
});