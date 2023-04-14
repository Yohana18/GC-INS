<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeranController extends Controller
{
    public function index(){
        return view('peran.index');
}
}