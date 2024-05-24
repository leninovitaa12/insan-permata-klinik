<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //ini akan menampilkan login page for client
    public function index(){
        return view('login');
    }

    //method ini untuk authenticate user
    public function authenticate(Request $request){

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()){
            if(Auth::attempt(['email'=> $request->email,'password' => $request->password])){
                return redirect()->route('account.dashboard');
            }else{
                return redirect()->route('account.login')->with('error', 'Either email and password is incorect.');
            }

        } else {
            return redirect()->route('account.login')
            ->withInput()
            ->withErrors($validator);
        }
    }


    //method ini akan menampilkan register pSaga
    public function register(){
        return view('register');
    }


    public function ProcessRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        if ($validator->passes()){

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'client';
            $user->save();

            return redirect()->route('account.login')->with('succes', 'You have registed successefully.');

        } else {
            return redirect()->route('account.register')
            ->withInput()
            ->withErrors($validator);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }
}
