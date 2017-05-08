<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Task;

class AdminController extends Controller
{
    public function show() //get all users except current user(admin)
    {
        $users = User::where('id', '!=', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('admin/admin', compact('users'));
    }
    public function edit($id)
    // Now I don't know why I put this in edit function but it works so.. let it be? it's just a name
    {
        $users = User::where('id', '!=', Auth::id())->get();
        $users2 = User::where('id', '=', $id)->get();
        $tasks = Task::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get();
        return view('admin.user', compact('users', 'users2', 'tasks'));
    }
}