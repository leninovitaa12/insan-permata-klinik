<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('frontend.landing');
});

//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

//registration
Route::get('registration', [AuthController::class, 'registration']);
