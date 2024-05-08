<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.landing');
});


Route::get('/login', function () {
    return view('auth.login');
  })->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::get('/billing', function () {
    return view('frontend.billing');
});
