<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationController extends Controller
{
    
    public function list()
    {
        $station = $_POST['station'];
        //$items = \DB::table('stations')->select('station-name')->get();]
        $item = \DB::table('stations')->where('station-name',$station)->select('station-name')->get();
        return view('station/list',['item' => $item],['station' => $station],);
    }

}