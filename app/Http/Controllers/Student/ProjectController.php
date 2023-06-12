<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth('student')->user(); // Get the authenticated user
        // dd($user);
        $projects = Projects::where('user_id', $user->id)
            ->with('user') // Eager load the user details
            ->get(); // Retrieve projects associated with the user

        return view('Student.Project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Student.Project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
        if ($request->hasFile('logo')) {
            $photo = $request->file('logo');
            $filenameWithExt = $photo->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $photo->getClientOriginalExtension();
            $image = $filename . '_' . time() . '.' . $extension;
            $path = $photo->move('pictures', $image);

        $projects = Projects::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'logo' => $image,
            'user_id' => auth('student')->user()->id,

        ]);

    } else {
        // Set default image filename or return an error message
    }

        Session::flash('success', 'Task created!');
        return redirect()->route('project');
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
