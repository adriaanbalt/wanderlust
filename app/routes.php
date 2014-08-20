<?php

// Event::listen( 'illuminate.query', function( $sql ){
// 	var_dump($sql);
// });

Route::get('/', 'WomenController@index');
Route::get('/women', 'WomenController@index');
Route::get('/women/{id}', 'WomenController@details');
Route::get('/rookies', 'DevelopmentController@index');
Route::get('/rookies/{id}', 'DevelopmentController@details');
Route::get('/backstage', 'AboutController@index');
Route::get('/join', 'JoinController@index');