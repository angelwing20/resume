<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::controller(ViewController::class)->group(function(){
    Route::get('/login','login_page')->name('login_page');
    Route::get('/','index')->name('index');
    Route::get('/qualification','qualification')->name('qualification');
    Route::get('/qualification_two','qualification_two')->name('qualification_two');
});

Route::controller(UserController::class)->group(function(){
    Route::post('/login','login')->name('login');
});

