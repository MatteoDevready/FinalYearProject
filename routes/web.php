<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//the method below accept as the first argument the route
//we do not want to return a view from the route bu froma  controller instead

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
//creting route for user
//the @ call a method within the controller
Route::get('/layout', 'PagesController@index');
//Route for the application foundation view
Route::get('/found', 'PagesController@foundation');

Route::get('/backup', 'PagesController@backup');
//Route not yet supported
Route::get('/about', 'PagesController@about');
//Route that redirect to the user creation page
Route::get('/user', 'PagesController@user');
//Route that allow to call the user controller that will save and store the data
Route::resource('users', 'UserController');
//Route not implemented to the new project view
Route::get('/contacts', 'JoinTablesContactsAndGroups@index');

//Auth::routes();
Route:: resource('posts', 'PostsController');
//Route::put('edit', 'PostsController@update');
Route:: resource('projects', 'ProjectsController');
//route for the create post page
//Route:: get('create', 'PostsController@create');
Route::get('/home', 'HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//google login api
  
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

//routing StreamChatAPI
Route::get('/', 'HomeController@chat');

//google calendar APi routing
Route::name('google.index')->get('google', 'GoogleAccountController@index');
Route::name('google.store')->get('google/oauth', 'GoogleAccountController@store');
Route::name('google.destroy')->delete('google/{googleAccount}', 'GoogleAccountController@destroy');

//calendar events and meetings routing

// Venues
Route::delete('venues/destroy', 'VenuesController@massDestroy')->name('venues.massDestroy');
Route::resource('venues', 'VenuesController');

// Events
Route::delete('events/destroy', 'EventsController@massDestroy')->name('events.massDestroy');
Route::resource('events', 'EventsController');

// Meetings
Route::delete('meetings/destroy', 'MeetingsController@massDestroy')->name('meetings.massDestroy');
Route::resource('meetings', 'MeetingsController');

Route::get('calendars', 'SystemCalendarController@index');