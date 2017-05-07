<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('home', compact('tasks'));
    }
}
