<?php

namespace App\Http\Controllers\Adviser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advisoree;
use App\Http\Requests\AdvisoreeRequest;

class AdvisoreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $courses = Advisoree::paginate(10);
        // return view('Admin.course.index',['courses' => $courses]);
                return view('Adviser.Advisoree.index');
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
