<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Members;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Members::all();
        return view('Admin.Students.index', ['students' => $students]);
    }
}
