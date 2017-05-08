<?php

/**
     I am enjoying coding in laravel really.. It is great as everyone says. 
     This project would take me 3x time if I was doing it in pure php and mysql.
     I didn't pay very much attention on frontend.. it's just basic bootstrap..
     Code is little messy, a lot can be shortened, but it works as far as I know.
     I tested it as much as I could at this moment.
*/

Route::get('/', function () {
    $user = Auth::user();
    return view('home', compact('user'));
});

Auth::routes();


Route::get('admin', ['middleware' => 'admin', 'uses'=>'AdminController@show']);
Route::get('admin/user/{user}', ['middleware' => 'admin', 'uses'=>'AdminController@edit']);

Route::get('adminerr', function () {
    return view('adminerr');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ 'as'=>'home','uses'=>'HomeController@index']);

    Route::get('/home', 'HomeController@index');

    Route::get('tasks/index', 'TasksController@index');

    Route::get('/tasks/create', 'TasksController@create');

    Route::post('/tasks', 'TasksController@store');

    Route::get('tasks/edit/{task}', 'TasksController@edit');

    Route::patch('/tasks/edit/task/{task}', 'TasksController@update');

    Route::get('tasks/{task}/delete', 'TasksController@destroy');

    Route::get('tasks/{task}', 'TasksController@show');

    Route::get('tasks/{task}/completed', 'TasksController@completed');

    Route::get('tasks/{task}/uncompleted', 'TasksController@uncompleted');

    Route::get('complete', 'TasksController@complete');

    Route::get('incomplete', 'TasksController@incomplete');
});

Route::get('dogadjaji', function () {
    return view('dog');
});
Route::get('aboutus', function () {
    return view('aboutus');
});
Route::get('contact', function () {
    return view('contact');
});
