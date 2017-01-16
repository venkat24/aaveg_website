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
Route::get('/about', function () {
    return view('about');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog/single/{blog_id}', function () {
    return view('blog_single');
});
Route::get('/blog/archives', function () {
    return view('blog_archives');
});
Route::get('/scoreboard', function () {
    return view('scoreboard');
});
Route::get('/fun', function () {
    return view('fun');
});
//Route::get('/events', function () {
    //return view('events');
//});
Route::get('/admin', function () {
    return view('admin.admin_login');
});
Route::get('/admin/login', function () {
    return view('admin.admin_login');
});
Route::get('/events/online/dubsmash', function () {
    return view('dubsmash');
});
Route::get('/admin/login', function () {
    return view('admin.admin_login');
});
Route::group(['middleware' => 'checkSession'], function() {
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
	// Admin events
	Route::post('/admin/events/newevent', 'Admin\Events@newEvent');
	Route::post('/admin/blog/newpost', 'Admin\PanelBlog@newPost');
	Route::post('/admin/scoreboard/newscore', 'Admin\UpdateScoreboard@updateScores');
});

// Scoreboard routes
Route::post('/scoreboard/getall','ScoreboardController@getFullScoreboard');
Route::post('/scoreboard/getallungrouped','ScoreboardController@getFullScoreboardUngrouped');
Route::post('/scoreboard/getcategory','ScoreboardController@getCategoryScoreboard');
Route::post('/scoreboard/geteventscores','ScoreboardController@getEventScores');

//Blog routes
Route::post('/blog/getAllPosts','BlogController@getAllPosts');
Route::post('/blog/getAllBlogIds','BlogController@getAllBlogIds');
Route::post('/blog/getLatestPosts','BlogController@getLatestPosts');
Route::post('/blog/getBlogById','BlogController@getBlogById');
Route::post('/blog/getauthors','BlogController@getAuthors');
Route::post('/blog/getBlogTitles', 'BlogController@getBlogTitles');

// Events routes
Route::post('/events/getall','EventsController@getAllEvents');
Route::post('/events/getallungrouped','EventsController@getAllEventsUngrouped');
Route::post('/events/getallnames','EventsController@getAllEventNames');
Route::post('/events/geteventbyname','EventsController@getEventByName');
Route::post('/events/getclusterevents', 'EventsController@getEventsGroupedByCluster');

//Admin login and logout
Route::post('/admin/login', 'Admin\AdminAuth@adminAuthentication');
Route::post('/admin/logout', 'Admin\AdminAuth@adminLogout');

//Dubsmash Routes
Route::post('/events/online/dubsmash', 'DubsmashController@submitDubsmash');
