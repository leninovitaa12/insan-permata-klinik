<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminFormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\EditBioController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('frontend.landing');
});

Route::middleware(['guest'])->group(function(){

});

Route::get('/', [SesiController::class, 'index'])->name('frontend.landing');
Route::post('/', [SesiController::class, 'login']); //Login route
Route::resource('admin_dashboard',AdminController::class); //dashboard yola


//

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'index']);
    Route::get('/admin/klien',[AdminController::class, 'klien']);
});

//
Route::get('/admin',[AdminController::class, 'dashboard']);

Route::view('/register', 'auth.register')->name('register');

Route::get('registration', [AuthController::class, 'register']);


Route::get('/billing', function () {
    return view('Admin.billing');
});

//admin profile triani
Route::resource('profile', \App\Http\Controllers\ProfilAdminController::class);
Route::get('/edit_profile', [ProfilAdminController::class, 'editProfile'])->name('edit_profile');


//membuat rute admin_klien
Route::resource('admin_klien', \App\Http\Controllers\KlienController::class);

Route::resource('admin_form', \App\Http\Controllers\AdminFormController::class);

