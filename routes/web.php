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

Route::get('/', 'PostsController@indexx');
Route::get('/add-post', 'PostsController@create');
Route::post('/store', 'PostsController@store');
Route::get('/post/{id}, PostsController@show');
Route::get('/edit/{post}', 'PostsController@edit');
Route::get('post/{post}','PostsController@show');
Route::get('/add-cat','PostsController@addcat');
