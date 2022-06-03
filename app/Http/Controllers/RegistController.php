<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegistController extends Controller 
{
    public function register () {
        return view('projek-pkl.register');
    }

    public function store (Request $request) { 
        $request->validate( [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => \Hash::make(request()->password)
        ]);

        return redirect('register')->with('toast_success', 'Successful Registration !');
        
    }
}
