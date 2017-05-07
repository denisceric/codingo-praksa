<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('user_id','=', Auth::id())->get();
        
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;

        $task->title = request('title');
        $task->description = request('description');
        $task->user_id = Auth::id();

        $task->save();

        return redirect('/')->with('message', 'Uspješno dodato!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        if ($task === null) {
           return 'NE POSTOJI';
        }
        if ($task->user_id != Auth::id()) {
            return view('tasks.notuserstask');
        }
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = Task::where('id','=', $id)->get();
        foreach($tasks as $task) {
            if ($task->user_id != Auth::id()) {
                return view('tasks.notuserstask');
            }
        }
        return view('tasks.edit', compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::where('id','=', $id)->first();

        $task->title = request('title');
        $task->description = request('description');
        $task->user_id = Auth::id();

        $task->update();
        return redirect('/')->with('message', 'Uspješno izmjenjeno!');

    }
    public function complete()
    {
        $tasks = Task::where('user_id','=', Auth::id())->get();
        if ($tasks === null) {
           return 'NE POSTOJI';
        }
        return view('complete', compact('tasks'));
    }
    public function incomplete()
    {
        $tasks = Task::where('user_id','=', Auth::id())->get();
        if ($tasks === null) {
           return 'NE POSTOJI';
        }
        return view('incomplete', compact('tasks'));
    }

    public function completed($id)
    {
        $task = Task::find($id);

        if ($task->user_id != Auth::id()) {
            return view('tasks.notuserstask');
        }
        
        $task->is_completed = true;

        $task->update();

        return redirect()->back()->with('message', 'Uspješno označeno!');
    }
    public function uncompleted($id)
    {
        $task = Task::find($id);

        if ($task->user_id != Auth::id()) {
            return view('tasks.notuserstask');
        }

        $task->is_completed = false;

        $task->update();

        return redirect()->back()->with('message', 'Uspješno označeno!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if ($task->user_id != Auth::id()) {
            return view('tasks.notuserstask');
        }
        $task->destroy($id);
        return redirect()->back()->with('message', 'Uspješno izbrisano!');
    }
}
