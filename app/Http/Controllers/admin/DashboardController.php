<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //ini dashboard untuk client
    public function index(){
        return view('dashboard');
    }
}
