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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts','BlogController@index')->name('posts.index');

Route::get('/posts/create','BlogController@create')->name('posts.create');

Route::post('/posts', 'BlogController@store')->name('posts.store');;

Route::get('/posts/{post}','BlogController@show')->name('posts.show');

Route::get('/posts/{post}/edit', 'BlogController@edit')->name('posts.edit');

Route::put('/posts/{post}', 'BlogController@update')->name('posts.update');

Route::delete('/posts/{post}', 'BlogController@destroy')->name('posts.destroy');
