<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function index(){
        return view('kritik.index');
}
}
