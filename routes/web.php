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

Route::get('/', [
    "uses" => "MovieController@index",
    "as"    => "home"
]);

Route::get('movie/{id}', [
    "uses" => "MovieController@movieDetails",
    "as"   => "movieDetails"
]);

Route::get('movie/edit/{id}', [
    "uses" => "MovieController@editMovieDetail",
    "as"   => "editMovie"
]);

Route::post("/movie", [
    "uses" => "MovieController@postAddMovie",
    "as" => "addMovie"
]);

Route::post('movie/edit/{id}', [
    "uses" => "MovieController@updateMovieDetail",
    "as"   => "updateMovie"
]);

Route::post("/search", [
    "uses" => "MovieController@findMovie",
    "as" => "findMovie"
]);
