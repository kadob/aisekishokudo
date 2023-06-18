<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Nicelocation;
use App\Models\Map;
use App\Models\Nicemap;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    public function niceLoca(Location $location, Request $request){
        $nicelocation=New Nicelocation();
        $nicelocation->location_id=$location->id;
        $nicelocation->user_id=Auth::user()->id;
        $nicelocation->save();
        return back();
    }
    
    public function unniceLoca(Location $location, Request $request){
        $user=Auth::user()->id;
        $nicelocation=Nicelocation::where('location_id',$location->id)->where('user_id',$user)->first();
        $nicelocation->delete();
        return back();
    }
    
    public function nicemap(Map $map, Request $request){
        $nicemap=New Nicemap();
        $nicemap->map_id=$map->id;
        $nicemap->user_id=Auth::user()->id;
        $nicemap->save();
        return back();
    }

    public function unnicemap(Map $map, Request $request){
        $user=Auth::user()->id;
        $nicemap=Nicemap::where('map_id',$map->id)->where('user_id',$user)->first();
        $nicemap->delete();
        return back();
    }
}
