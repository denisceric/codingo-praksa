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


Route::get('admin', ['middleware' => 'admin', 'uses'=>'AdminController@show']);
Route::get('admin/user/{user}', ['middleware' => 'admin', 'uses'=>'AdminController@edit']);

Route::get('adminerr', function() {
	return view('adminerr');
});


Route::group(['middleware' => 'auth'],function()
{
Route::get('/', [ 'as'=>'home','uses'=>'HomeController@index'] );

Route::get('/home', 'HomeController@index' );

Route::get('tasks/index', 'TasksController@index');

Route::get('/tasks/create', 'TasksController@create');

Route::post('/tasks', 'TasksController@store');

Route::get('tasks/{task}', 'TasksController@show');

Route::get('tasks/edit/{task}', 'TasksController@edit');

Route::patch('/tasks/edit/task/{task}', 'TasksController@update');

Route::get('tasks/{task}/completed', 'TasksController@completed');

Route::get('tasks/{task}/uncompleted', 'TasksController@uncompleted');
});

Route::get('dogadjaji', function() {
    		return view('dog');
});