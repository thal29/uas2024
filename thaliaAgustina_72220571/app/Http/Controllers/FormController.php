<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('formA');
    }

    public function handleForm(Request $request)
    {
        $data = $request->all();
        
        return view('formB', compact('data'));
    }
}
