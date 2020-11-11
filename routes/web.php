<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'GenreController@index')->name('home');
Route::get('/movie/{title}', 'EpisodeController@show')->name('movieDetail');
Route::get('/genre/{name}', 'MovieController@index')->name('movieCategory');

