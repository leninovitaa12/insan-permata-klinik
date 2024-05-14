<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminFormController;
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

//admin yola
Route::resource('admin_dashboard',AdminDashboardController::class);

//membuat rute admin_klien
Route::resource('admin_klien', \App\Http\Controllers\KlienController::class);

Route::resource('admin_form', \App\Http\Controllers\AdminFormController::class);

