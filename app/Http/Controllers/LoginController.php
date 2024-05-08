<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function postlogin(request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('frontend/landing');
        }
        return redirect('login');
    }
}
