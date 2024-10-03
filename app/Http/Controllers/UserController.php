<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $user=$request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);
        if (Auth::attempt($user)) {
            return redirect()->route('index');
        }else{
            return back()->with('message','Login Failed');
        }
    }

    public function send(Request $request){
        Mail::to('chunteng9674@gmail.com')->send(new UserMail($request));
        return back()->with('message','The email has been sent, thank you for your reply');
    }
}
