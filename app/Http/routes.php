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
    return view('splash');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog/single/', function () {
    return view('blog_single');
});
Route::get('/scoreboard', function () {
    return view('scoreboard');
});
Route::get('/admin', function () {
    return view('admin.admin_login');
});
Route::get('/admin/login', function () {
    return view('admin.admin_login');
});
Route::get('/admin/home', function () {
    return view('admin.admin_home');
});
Route::get('/admin/scoreboard/newscore', function () {
    return view('admin.admin_scoreboard');
});
Route::get('/admin/events/newevent', function () {
    return view('admin.admin_events_new');
});
Route::get('/admin/blog/newpost', function () {
    return view('admin.admin_blog_newpost');
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
Route::post('/blog/getBlogById/','BlogController@getBlogById');
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
Route::post('/admin/blog/newpost', 'Admin\PanelBlog@newPost'); 