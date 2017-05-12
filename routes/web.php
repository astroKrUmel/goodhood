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

//Route::get('albums', ['uses' => 'AlbumController@index']);
//Route::get('users/create', ['uses' => 'UserController@create']);
//Route::post('users', ['uses' => 'UserController@store']);


Auth::routes();



Route::get('artists', ['uses' => 'ArtistController@getAllArtists']);
Route::get('artist/{name}', ['uses' => 'ArtistController@getArtist']);
