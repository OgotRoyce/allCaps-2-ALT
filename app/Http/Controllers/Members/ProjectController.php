<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth('member')->user(); // Get the authenticated user
        $projects = Projects::where('user_id', $user->customer_id)
            ->with('user') // Eager load the user details
            ->get(); // Retrieve projects associated with the user

        return view('Members.Project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Members.Project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $logo = $request->file('logo');

        if ($request->hasFile('logo')) {
            $filenameWithExt = $logo->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $logo->getClientOriginalExtension();
            $image = $filename . '_' . time() . '.' . $extension;
            $path = $logo->move('public/images', $image);
        } else {
            $image = 'default.png';
        }

        $projects = Projects::create([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'logo' => $request->logo,
            'user_id' => auth('member')->user()->customer_id,

        ]);

        $projects->logo = $image;
        $projects->save();
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
        //
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
