<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class DashboardController
{
    public function dashboard(){
        return view('admin.dashboard');
    }
}
