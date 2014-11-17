<?php

// Event::listen( 'illuminate.query', function( $sql ){
// 	var_dump($sql);
// });


Route::get('/', 'ModelsController@index');

Route::get('/models', 'ModelsController@index');
Route::get('/models/{category}', 'ModelsController@category');
Route::get('/models/image/{id}', 'ModelsController@details');
Route::get('/models/commercial/{id}', 'ModelsController@details');
Route::get('/models/develop/{id}', 'ModelsController@details');

Route::get('/artists', 'ArtistController@index');
Route::get('/artists/{category}', 'ArtistController@category');
Route::get('/artists/dj/{id}', 'ArtistController@details');
Route::get('/artists/photographer/{id}', 'ArtistController@details');
Route::get('/artists/artist/{id}', 'ArtistController@details');

Route::get('/about', 'AboutController@index');

Route::get('/join', 'JoinController@index');