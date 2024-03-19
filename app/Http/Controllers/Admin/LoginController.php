<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController
{
    public function login(){
        return view('admin.login');
    }

    public function doLogin(Request $request){
        $credentials = $request->only('username', 'password');
        if(auth()->guard('admin')->attempt($credentials,request('remember_me'))){
            return redirect()->route('admin.dashboard');
        }
        else{
            return "login failed";
        }
    }

    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login.form');
    }

}
