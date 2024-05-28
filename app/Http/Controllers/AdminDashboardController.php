<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    
       // Fungsi untuk menampilkan tampilan "index"
        public function index() : View
        {
           // Mengembalikan tampilan "index.blade.php" dari direktori resources/views
            return view('admin.admin_dashboard');
        }
}
