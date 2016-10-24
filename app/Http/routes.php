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

// Events routes
Route::post('/events/getall','EventsController@getAllEvents');
Route::post('/events/getallnames','EventsController@getAllEventNames');
Route::post('/events/geteventbyname','EventsController@getEventByName');

//Blog routes
Route::post('/blog/getAllPosts','BlogController@getAllPosts');
Route::post('/blog/getLatestPosts','BlogController@getLatestPosts');
Route::post('/blog/getBlogByTitle','BlogController@getBlogByTitle');
Route::post('/blog/getauthors','BlogController@getAuthors');
Route::post('/blog/getBlogTitles', 'BlogController@getBlogTitles');

// Events routes
Route::post('/events/getall','EventsController@getAllEvents');
Route::post('/events/getallnames','EventsController@getAllEventNames');
Route::post('/events/geteventbyname','EventsController@getEventByName');

//Admin login and logout
Route:;post('/admin/login', 'Admin\AdminAuth@adminAuthentication');
Route::post('/admin/logout', 'Admin\AdminAuth@adminLogout');

// Admin events
Route::post('/admin/events/newevent', 'Admin\Events@newEvent'); 
