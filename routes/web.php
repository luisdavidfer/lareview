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

Route::get('/', function(){
    return "<ul>
                <li><a href='http://localhost:3000/user'>Usuarios</a></li>
                <li><a href='http://localhost:3000/movie'>Películas</a></li>
                <li><a href='http://localhost:3000/genre'>Géneros</a></li>
                <li><a href='http://localhost:3000/person'>Gente</a></li>
            </ul>";
});

// User REST
Route::get('user', 'UserController@index')->name('user.index');
Route::post('user', 'UserController@store')->name('user.store');
Route::get('user/create', 'UserController@create')->name('user.create');
Route::get('user/{id}', 'UserController@show')->name('user.show');
Route::put('user/{id}', 'UserController@update')->name('user.update');
Route::delete('user/{id}', 'UserController@destroy')->name('user.destroy');
Route::get('user/{id}/edit', 'UserController@edit')->name('user.edit');

// Movies REST
Route::resource('movie', 'MovieController');

// Genres REST
Route::resource('genre', 'GenreController');

// People REST
Route::resource('person', 'PersonController');
