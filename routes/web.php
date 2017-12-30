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


Route::get('/home', 'TasksController@home');

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{id}', 'TasksController@show');

/* Route::get('/', 'PostsController@store'); */

Route::get('/display', 'PostsController@display');

Route::get('/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/display', 'PostsController@show');





