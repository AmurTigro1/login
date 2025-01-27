<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function login(Request $request){
        //validation

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            //dashboard

            return view('dashboard');
        }

        return view('login-error');

    }
}
