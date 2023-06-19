<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Output;
use App\Models\Task;
use App\Models\Activity;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($task_code)
    // {
    //     $user = auth('adviser')->user();
    //     $userID = $user->id;

    //     $pending = Output::where('task_code', $task_code)->where('adviser_id', $userID)->where('status', 'Pending')->get();

    //     $review = Output::where('task_code', $task_code)->where('adviser_id', $userID)->where('status', 'Accepted')->get();
    //     // dd($acts);
    //     return view('Adviser.Submission.index', ['pending' => $pending, 'review' => $review]);
    // }
    // public function index($task_code)
    // {
    //     $user = auth('adviser')->user();
    //     $userID = $user->id;

    //     $pending = Output::where('output.task_code', $task_code)
    //         ->where('output.adviser_id', $userID)
    //         ->where('output.status', 'Pending')
    //         ->join('tasks', 'output.task_code', '=', 'tasks.task_code')
    //         ->select('output.*', 'tasks.task')
    //         ->get();

    //     $review = Output::where('output.task_code', $task_code)
    //         ->where('output.adviser_id', $userID)
    //         ->where('output.status', 'Accepted')
    //         ->join('tasks', 'output.task_code', '=', 'tasks.task_code')
    //         ->select('output.*', 'tasks.task')
    //         ->get();

    //     return view('Adviser.Submission.index', ['pending' => $pending, 'review' => $review]);
    // }
    public function index($task_code)
    {
        $user = auth('adviser')->user();
        $userID = $user->id;
        $pending = Output::where('output.task_code', $task_code)
            ->where('output.adviser_id', $userID)
            ->where('output.status', 'pending')
            ->join('tasks', 'output.task_code', '=', 'tasks.task_code')
            ->leftJoin('student', 'output.student_id', '=', 'student.account_code')
            ->leftJoin('projects', 'student.id', '=', 'projects.user_id')
            ->select('output.*', 'tasks.task', 'projects.group_name')
            ->orderBy('output.created_at', 'desc')
            ->get();

        $review = Output::where('output.task_code', $task_code)
            ->where('output.adviser_id', $userID)
            ->where('output.status', 'Accepted')
            ->join('tasks', 'output.task_code', '=', 'tasks.task_code')
            ->leftJoin('student', 'output.student_id', '=', 'student.account_code')
            ->leftJoin('projects', 'student.id', '=', 'projects.user_id')
            ->select('output.*', 'tasks.task', 'projects.group_name')
            ->orderBy('output.created_at', 'desc')
            ->get();



        $task = Task::where('task_code', $task_code)->first();

        return view('Adviser.Submission.index', ['pending' => $pending, 'review' => $review, 'task' => $task]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $acts = Output::find($id);
        $acts->status = 'Accepted';
        $acts->save();
        return back()->with('success', 'Updated successfully');
    }

    public function accept(Request $request, $id)
    {
        $acts = Output::find($id);
        $acts->status = 'Accepted';
        $acts->save();
        return back()->with('success', 'Updated successfully');
    }


    public function reject(Request $request, $id)
    {
        $acts = Output::find($id);
        $acts->status = 'Rejected';
        $acts->save();
        return back()->with('success', 'Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
