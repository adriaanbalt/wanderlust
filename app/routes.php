<?php

Route::get('/', 'HomeController@index');
Route::get('/some-girls', 'SomegirlsController@index');
Route::get('/some-girls/{id}', 'SomegirlsController@details');
Route::get('/rookies', 'RookiesController@index');
Route::get('/rookies/{id}', 'RookiesController@details');
Route::get('/backstage-pass', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/join-the-band', 'JoinController@index');