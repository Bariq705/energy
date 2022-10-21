<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcr extends Controller
{
    // 
    public function index(){
        return view ('dashboard.index');
    }

}
