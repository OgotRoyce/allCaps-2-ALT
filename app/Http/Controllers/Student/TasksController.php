<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Activity;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $acts = Activity::all();
        return view('Student.Task.index', ['tasks' => $tasks, 'acts' => $acts]);
    }

    public function show($taskId)
    {
        $acts = Activity::find($taskId);
        return view('Student.Task.view', ['acts' => $acts]);
    }
}
