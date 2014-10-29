<?php

// Event::listen( 'illuminate.query', function( $sql ){
// 	var_dump($sql);
// });


Route::get('/', 'WomenController@index');

Route::get('/models', 'WomenController@index');
Route::get('/models/{category}', 'WomenController@category');
Route::get('/models/image/{id}', 'WomenController@details');
Route::get('/models/commercial/{id}', 'WomenController@details');
Route::get('/models/develop/{id}', 'WomenController@details');

Route::get('/artists', 'ArtistController@index');
Route::get('/artists/{category}', 'ArtistController@category');
Route::get('/artists/dj/{id}', 'ArtistController@details');
Route::get('/artists/photographer/{id}', 'ArtistController@details');
Route::get('/artists/artist/{id}', 'ArtistController@details');

Route::get('/about', 'AboutController@index');

Route::get('/join', 'JoinController@index');