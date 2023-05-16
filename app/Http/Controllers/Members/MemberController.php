<?php

namespace App\Http\Controllers\Members;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('Members.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function authenticate(Request $request)
    {
         // dd($request->all());
         if (auth('member')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            $auth = auth('member')->user();
            // dd($auth);
            return redirect()->route('task');
        }
        // dd("warning", "wrong credentials");
        return redirect()->back()->with("warning", "wrong credentials");
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

    public function store(Request $request)
    {
        $photo = $request->file('photo');

        if($request->hasFile('photo')){
            $filenameWithExt = $photo->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $photo->getClientOriginalExtension();
            $image = $filename.'_'.time().'.'.$extension;
            $path = $photo->move('public/images/users', $image);

        }else{
            $image = 'default.png';
        }

        $members = Course::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'capacity' => $request->capacity,
            'photo' => $request->photo,
        ]);
        $members->photo = $image;
        $members->save();

        return redirect()->route('member')->with('success', 'User created!');

        // return back()->with('success', 'Course created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect()->route('login-member');
    }
}
