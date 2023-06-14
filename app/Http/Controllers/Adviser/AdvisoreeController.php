<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adviser;
use App\Models\Student;
use App\Models\Task;
use App\Models\Projects;
use App\Http\Requests\AdvisoreeRequest;

class AdvisoreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth('adviser')->user();
        $userID = $user->id;
        
        $adviser = Adviser::where('id', $userID)->first();
        $students = Student::whereIn('adviser_id', [$adviser->id])->get();
        // dd($adviser);
        return view('Adviser.Advisoree.index', ['adviser' => $adviser, 'students' => $students]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Adviser.Advisoree.create');
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students = Student::where('id', $id)->first();
        $projects = Projects::where('user_id', $id)->first();
        // dd($projects);
        return view('Adviser.Advisoree.view',['students'=>$students, 'projects'=>$projects]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
