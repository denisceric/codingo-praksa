<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Task;

class AdminController extends Controller
{
    public function show()
    {
    	$users = User::where('id', '!=', Auth::id())->get();
    	return view('admin/admin', compact('users'));
    }
    public function edit($id)
    {
        $users = User::where('id', '!=', Auth::id())->get();
    	$users2 = User::where('id','=', $id)->get();
    	$tasks = Task::where('user_id','=', $id)->get();
    	return view('admin.user', compact('users', 'users2' ,'tasks'));
    }
}
