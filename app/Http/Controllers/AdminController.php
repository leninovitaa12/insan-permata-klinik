<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function dashboard()
    // {
    //     if (Auth::User()->role == 'admin') {
    //         $data['admin'] = User::find(Auth::User()->id);

    //         return view('admin_laman.admin_dashboard', $data);
    //     }
    // }

    function klien()
    {
        if (Auth::User()->role == 'user') {
            $data['user'] = User::find(Auth::User()->id);

            return view('frontend.dashboard_klien', $data);
        }
    }
}
