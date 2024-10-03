<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //
    public function login_page(){
        return view('login');
    }

    public function index(){
        return view('index');
    }

    public function qualification(){
        return view('qualification');
    }

    public function qualification_two(){
        return view('qualification_two');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login_page');
    }
}
