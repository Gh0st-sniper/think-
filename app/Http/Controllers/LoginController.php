<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function create()
    {

        return view('login.create');
    }

    public function store(Request $request)
    {

        $creds = $request->validate([

            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
        ]);


        if (Auth::attempt($creds)) {

            $request->session()->regenerate();
            
            return redirect('/ideas');

        }else{

            return redirect('/login');
        }

    }
}
