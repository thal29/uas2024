<?php

namespace App\Http\Controllers;

use App\Models\Student571;
use Illuminate\Http\Request;

class Student571Controller extends Controller
{
    public function index()
    {
        $students = Student571::orderBy('student_number_571')->take(10)->get();
        return view('students.index', compact('students'));
    }

    public function topGpa()
    {
        $topStudent = Student571::orderBy('gpa_571', 'desc')->first();
        return view('students.topGpa', compact('topStudent'));
    }

    public function search(Request $request)
    {
        $name = $request->input('student_name_571');
        $students = Student571::where('student_name_571', 'like', '%' . $name . '%')->get();
        return view('students.search', compact('students', 'name'));
    }
}
