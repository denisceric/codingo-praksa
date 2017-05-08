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
    public function index() //this function gets all of the events that belongs to user
    {
        $tasks = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->get();
        
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // I guess this could be done in a single route but I like it here
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //basic form validation and eloquent for inserting data
    {
        $this->validate($request, [
            'title' => 'required|max:40',
            'description' => 'required|max:255'
        ]);


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
    public function show($id) //this shows a single event if user clicks on it
    {
        $task = Task::findOrFail($id);
        if ($task === null) {
            return 'NE POSTOJI';
        }
        if ($task->user_id != Auth::id()) { //this is how I am checking if event belongs to user.
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
    public function edit($id) // Getting values of specific tasks that needs to be edited
    {
        $tasks = Task::where('id', '=', $id)->get();
        foreach ($tasks as $task) {
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
    public function update(Request $request, $id) //updating db table when user edits event
    {
        $this->validate($request, [
            'title' => 'required|max:40',
            'description' => 'required|max:255'
        ]);
        $task = Task::where('id', '=', $id)->first();

        $task->title = request('title');
        $task->description = request('description');
        $task->user_id = Auth::id();

        $task->update();
        return redirect('/')->with('message', 'Uspješno izmjenjeno!');
    }
    public function complete() // Getting completed events
    {
        $tasks = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->get();
        if ($tasks === null) {
            return 'NE POSTOJI';
        }
        return view('complete', compact('tasks'));
    }
    public function incomplete()
    //It seemed easier to make two functions instead of one ? I am a newbee tho
    {
        $tasks = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->get();
        if ($tasks === null) {
            return 'NE POSTOJI';
        }
        return view('incomplete', compact('tasks'));
    }

    public function completed($id) //Change the is_completed row to true if link is clicked
    {
        $task = Task::find($id);

        if ($task->user_id != Auth::id()) {
            return view('tasks.notuserstask');
        }
        
        $task->is_completed = true;

        $task->update();

        return redirect()->back()->with('message', 'Uspješno označeno!');
    }
    public function uncompleted($id) //Change the is_completed row to false if link is clicked
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
    public function destroy($id) //Event deletion
    {
        $task = Task::find($id);
        if ($task->user_id != Auth::id()) {
            return view('tasks.notuserstask');
        }
        $task->destroy($id);
        return redirect('/')->with('message', 'Uspješno izbrisano!');
    }
}
