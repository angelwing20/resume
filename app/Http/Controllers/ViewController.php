<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function qualification(){
        return view('qualification');
    }

    public function qualification_two(){
        return view('qualification_two');
    }
}
