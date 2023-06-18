<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Output;
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
    //     $acts = Output::where('output.task_code', $task_code)
    //         ->join('tasks', 'output.task_code', '=', 'tasks.task_code')
    //         ->select('output.*', 'tasks.task')
    //         ->get();

    //     return view('Admin.Submission.index', ['acts' => $acts]);
    // }
    public function index($task_code)
    {
        $acts = Output::where('output.task_code', $task_code)
            ->join('tasks', 'output.task_code', '=', 'tasks.task_code')
            ->leftJoin('student', 'output.student_id', '=', 'student.account_code')
            ->leftJoin('projects', 'student.id', '=', 'projects.user_id')
            ->select('output.*', 'tasks.task', 'projects.group_name')
            ->orderBy('output.created_at', 'desc')
            ->get();

        return view('Admin.Submission.index', ['acts' => $acts]);
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
        //
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
