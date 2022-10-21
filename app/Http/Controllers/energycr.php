<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\energy;

class energycr extends Controller
{
    
    public function index(){
        $energy = energy::all();

        $data = [
            'energy' => $energy
        ];
        return view ('bensin.index',$data);
    }
}
