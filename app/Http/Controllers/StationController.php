<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationController extends Controller
{
    
    public function list()
    {
        return view('station/list');
    }

}