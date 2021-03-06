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

Route::get('/', function () {
	return view('welcome');
});

Route::get('/tasks', 'TaskController@index');

Route::get('/task/{task}', 'TaskController@show');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/post/{post}', 'PostController@show');
