<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\Models\adviser;
use Str;

class AdviserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adviser = adviser::all();
        return view('Admin.Advisers.index',['adviser' => $adviser]);
        // return view('Admin.Advisers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Advisers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $request->validated($request->all());

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filenameWithExt = $photo->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $photo->getClientOriginalExtension();
            $image = $filename . '_' . time() . '.' . $extension;
            $path = $photo->move('pictures', $image);

        $user = adviser::create([
            'account_code' => strtoupper(Str::random(10)),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'program' => $request->get('program'),
            'password' => bcrypt($request->get('password')),
            'photo' => $image,

        ]);

    } else {
        // Set default image filename or return an error message
    }

        return redirect()->route('adviser')->with([
            'success' => 'Adviser created!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = adviser::find($id);
        return view('Admin.Advisers.view', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = adviser::find($id);
        if (!$user) {
            return redirect()->route('adviser')->with('error', 'user not found.');
        }
        return view('Admin.Advisers.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, string $id)
    {
        $user = adviser::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect()->route('adviser')->with('success', 'Adviser updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        adviser::destroy($id);
        return back()->with('success', 'Deleted successfully.');
    }
}
