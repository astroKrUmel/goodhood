<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return Redirect()->route('home');
////    return View('home');
//});

Route::get('/', ['uses' => 'HomeController@index']);
Route::get('/home', ['uses' => 'HomeController@index']);

// ARTISTS
Route::get('artists', ['uses' => 'ArtistController@getAllArtists']);
Route::get('artist/{name}', ['uses' => 'ArtistController@getArtist']);
Route::get('artist/{name}/download', ['uses' => 'ArtistController@getDownload']);

// LP
Route::get('/partner', ['uses' => 'HomeController@partner']);
Route::get('/impressum', ['uses' => 'HomeController@impressum']);


Auth::routes();

Route::get('/logout',  ['uses' => 'HomeController@logout']);