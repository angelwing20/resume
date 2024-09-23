<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::controller(UserController::class)->group(function(){
    Route::get('login','ViewLogin');
    Route::post('login','LoginFunction');
});