<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Scoreboard routes
Route::post('/scoreboard/getall','ScoreboardController@getFullScoreboard');
Route::post('/scoreboard/getcategory','ScoreboardController@getCategoryScoreboard');

//Blog routes
Route::post('/blog/getAllPosts','BlogController@getAllPosts');
Route::post('/blog/getLatestPosts','BlogController@getLatestPosts');
Route::post('/blog/getBlogById','BlogController@getBlogById');

