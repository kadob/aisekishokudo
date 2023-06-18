<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Nicemap;

class MapController extends Controller
{
    public function showMapspot(Map $map)
    { 
        $nicemap=Nicemap::where('map_id',$map->id)->where('user_id',auth()->user()->id)->first();
        return view('maps.map_spot_detail',compact('map','nicemap'));  
    }
}
