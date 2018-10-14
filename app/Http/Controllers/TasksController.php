<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::incomplete();

        $name = 'Ayho';
        return view('tasks.index    ', compact('tasks', 'name'));
    }

    public function show(Task $task)
    {
//        $task = Task::find($id); same as Task $task
        return view('tasks.show', compact('task'));
    }
}
