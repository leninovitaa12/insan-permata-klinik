<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\EditBioController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\AuthController;



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

//admin profile triani
Route::resource('profile', \App\Http\Controllers\ProfilAdminController::class);
Route::get('/edit_profile', [ProfilAdminController::class, 'editProfile'])->name('edit_profile');
