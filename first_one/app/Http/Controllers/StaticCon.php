<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticCon extends Controller
{
    public function index () {
        return view('index');
    }
    public function one () {
        return "one";
    }

}
