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
	$user = Auth::user();
    return view('home', compact('user'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('tasks/index', 'TasksController@index');

Route::get('/tasks/create', 'TasksController@create');

Route::post('/tasks', 'TasksController@store');

Route::get('tasks/{task}', 'TasksController@show');