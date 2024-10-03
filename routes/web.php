<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\checkuser;
use Illuminate\Support\Facades\Route;

Route::controller(ViewController::class)->group(function(){
    Route::get('/','login_page')->name('login_page');
    Route::get('/index','index')->name('index')->middleware(checkuser::class);
    Route::get('/qualification','qualification')->name('qualification')->middleware(checkuser::class);
    Route::get('/qualification_two','qualification_two')->name('qualification_two')->middleware(checkuser::class);
    Route::get('/logout','logout')->name('logout')->middleware(checkuser::class);
});

Route::controller(UserController::class)->group(function(){
    Route::post('/login','login')->name('login');
    Route::post('/send','send')->name('send');
});

Route::get('/mail',function(){
    return view('emails.mail_page');
});