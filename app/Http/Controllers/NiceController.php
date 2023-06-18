<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Nicelocation;
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
}
