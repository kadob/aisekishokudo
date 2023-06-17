<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function showMapspot(Map $map)
    { 
        return view('maps/map_spot_detail')->with([ 'map' => $map ]); 
    }
}
