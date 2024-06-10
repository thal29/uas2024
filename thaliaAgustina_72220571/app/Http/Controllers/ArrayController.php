<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function showArray()
    {
        $decimalArray = [1.1, 2.2, 3.3, 4.4, 5.5];
        return view('showArray', compact('decimalArray'));
    }
}
