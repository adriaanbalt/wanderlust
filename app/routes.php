<?php

Route::get('/', 'HomeController@index');
Route::get('/some-girls', 'SomegirlsController@index');
Route::get('/rookies', 'RookiesController@index');
Route::get('/backstage-pass', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/join-the-band', 'JoinController@index');