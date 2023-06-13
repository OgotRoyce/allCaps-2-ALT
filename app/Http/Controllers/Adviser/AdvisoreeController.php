<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adviser;
use App\Models\Student;
use App\Models\Task;
use App\Http\Requests\AdvisoreeRequest;

class AdvisoreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adviser = Adviser::all();
        $adviseeIds = $adviser->pluck('id'); // Get an array of adviser IDs
        $students = Student::whereIn('adviser_id', $adviseeIds)->get(); // Retrieve students with adviser IDs in the array
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
        //
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
