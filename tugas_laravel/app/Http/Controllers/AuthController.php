<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public function register()
    {
        return view('register');
    }

public function welcome(Request $request)
    {
       $First_name = $request['First name'];
       $Last_name = $request['Last name'];

       return view('welcome', compact('First name','Last name'));
    }
}
