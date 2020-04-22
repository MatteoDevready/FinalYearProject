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
//route for contacts data that redirect to the index view
//Route::get('/contacts', 'ContactsController@index');
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
//The shortcut below in line 38 allow to call all the function
//that I created in one go
//compared to the previous get method
Route:: resource('posts', 'PostsController');
//Route::put('edit', 'PostsController@update');
Route:: resource('projects', 'ProjectsController');
//route for the create post page
//Route:: get('create', 'PostsController@create');
Route::get('/home', 'HomeController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
