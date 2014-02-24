<?php

Route::get('/', 'HomeController@index');
Route::get('/some-girls', 'WomenController@index');
Route::get('/some-girls/{id}', 'WomenController@details');
Route::get('/rookies', 'DevelopmentController@index');
Route::get('/rookies/{id}', 'DevelopmentController@details');
Route::get('/backstage-pass', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/join-the-band', 'JoinController@index');