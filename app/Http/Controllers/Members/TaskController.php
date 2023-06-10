<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        $tasks = Task::all();
        return view('Members.Task.index', ['tasks' => $tasks]);
    }

    public function show($taskId)
    {
        $tasks = Task::find($taskId);
        return view('Members.Task.view', ['tasks' => $tasks]);
    }
}
