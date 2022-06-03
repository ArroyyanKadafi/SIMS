<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function hello () 
    {
        return view('hello');
    }

    public function satu () 
    {
        return view('hello');
    }
}
