<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', "HomeController@showWelcome");

Route::get('/x', "PagesController@show");

// Route::get('/users', "UsersController@index");
//
// Route::get('users/{username}', 'UsersController@show');

Route::get('/db', function() {

  return User::all();

});

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('users','UsersController');

Route::resource('sessions','SessionsController');


