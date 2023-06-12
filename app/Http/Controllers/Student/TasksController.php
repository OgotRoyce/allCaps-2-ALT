<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('Student.Task.index', ['tasks' => $tasks]);
    }

    public function show($taskId)
    {
        $tasks = Task::find($taskId);
        return view('Student.Task.view', ['tasks' => $tasks]);
    }
}
