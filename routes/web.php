<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('frontend.landing');
});


Route::get('/login', function () {
    return view('auth.login');
  })->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::get('registration', [AuthController::class, 'register']);


Route::get('/billing', function () {
    return view('Admin.billing');
});
