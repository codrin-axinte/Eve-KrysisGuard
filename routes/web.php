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


// PUBLIC ROUTES
Route::get('/', 'PageController@index');
Route::view('/privacy', 'privacy');
Route::view('/donate', 'donate');
Route::view('/killboard', 'killboard');
Route::get('/ores', 'OreController@index')->name('ores.index');
Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/blog/{category?}', 'Blog\\PostController@index')->name('posts.index');
Route::get('/blog/{category}/{post}', 'Blog\\PostController@show')->name('posts.show');
Route::get('/proposals', 'TaskController@index')->name('tasks.index');
Route::get('/proposals/{task}', 'TaskController@show')->name('tasks.show');
//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

// ADMIN ROUTES
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get("/{page}", 'PageController@show')->name('pages.show');
