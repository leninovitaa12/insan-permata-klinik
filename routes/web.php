<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminFormController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\EditBioController;
use App\Http\Controllers\ProfilAdminController;
use App\Http\Controllers\SesiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('frontend.landing');
});

Route::middleware(['guest'])->group(function(){

});

Route::get('/', [SesiController::class, 'index'])->name('frontend.landing');

// Authentication routes
Route::get('/login', [SesiController::class, 'showLoginForm'])->name('login');
Route::post('/login', [SesiController::class, 'login']);
Route::view('/register', 'auth.register')->name('register');
Route::get('/registration', [AuthController::class, 'register']);

// Admin routes
Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::get('/admin/klien', [AdminController::class, 'klien'])->name('admin.klien');

    // Admin dashboard and profile routes
    Route::resource('admin_dashboard', AdminController::class)->only(['index']); // Hapus route yang tidak diperlukan
    Route::resource('profile', ProfilAdminController::class)->except(['create', 'store', 'destroy']);
    //Route::get('/edit_profile', [ProfilAdminController::class, 'editProfile'])->name('edit_profile');


    //sasa admin kehadiran
Route::get('/kehadiran', function () {
    return view('admin.presensi');
});

Route::get('/riwayatkehadiranklien', function () {
    return view('kehadiran.riwayatkehadiranklien');
});

    // Admin klien and form routes
    Route::resource('admin_klien', KlienController::class);
    Route::resource('admin_form', AdminFormController::class);

    // Other admin-specific routes
    Route::get('/billing', function () {
        return view('Admin.billing');
    })->name('billing');
});

// Fallback route
Route::fallback(function () {
    return view('errors.404');
});
