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

use Illuminate\Support\Facades\App;

// Guest home
Route::get('/', 'MovieController@home')->name('movie.home');

// Search path
Route::get('/search', 'MovieController@search')->name('user.search');

// User REST
Route::resource('user', 'UserController');

// Movies REST
Route::resource('movie', 'MovieController');

// Genres REST
Route::resource('genre', 'GenreController');

// People REST
Route::resource('person', 'PersonController');

// Authentication system routes
Auth::routes();
