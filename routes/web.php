<?php

Route::get('/', function () { return view('index'); });
Route::get('/index2', function () { return view('index2'); });
Route::get('/pages/layout/top-nav', function () { return view('pages.layout.top-nav'); });
