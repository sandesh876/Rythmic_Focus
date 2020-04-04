<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/create','PostsController@create')->name('create')->middleware('auth');
Route::post('/home', 'PostsController@store')->middleware('auth');
Route::get('/dashboard','PostsController@index')->name('dashboard')->middleware('auth');
Route::delete('home/dashboard/{id}','PostsController@destroy')->name('delete_post')->middleware('auth');
Route::get('/home/post/{id}','PostsController@show')->name('show_post')->middleware('auth');
Route::get('/home/dashboard/{id}/edit','PostsController@edit')->name('edit_post')->middleware('auth');
Route::put('/home/dashboard/{id}','PostsController@update')->name('update_post')->middleware('auth');
Route::post('/home/search','SearchController@index')->name('search')->middleware('auth');
Route::get('/home/profile/{id}','SearchController@show')->name('user_profile')->middleware('auth');
Route::post('/dashboard/update_profile','ProfileController@update')->name('update_profile')->middleware('auth');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
