<?php

namespace App\Http\Controllers\User;
use Illuminate\Http\Request;

class HomepageController
{
    public function home(){
        $data=['131c213','123123'];
        return view('users.home',compact('data'));
    }
}
