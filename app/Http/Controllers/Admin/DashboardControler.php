<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardControler extends Controller
{
    public function registered(){
        return view('admin.register');
    }
}
