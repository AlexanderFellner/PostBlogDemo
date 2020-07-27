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
    return view('layouts.welcome');
});
Route::get('/posts','PostController@index');
Route::post('/store_post','PostController@store')->name('store_post');
Route::get('/post/{id}','PostController@show')->name('post_id');
Route::get('/create_post','PostController@create')->name('create_post');
Route::get('/edit_post/{id}','PostController@edit')->name('edit_post');
Route::put('update_post/{id}','PostController@update')->name('update_post');
Route::delete('delete_post/{id}','PostController@destroy')->name('delete_post');
