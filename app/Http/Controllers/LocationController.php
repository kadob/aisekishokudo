<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function showLocalist(Location $location)
    {   
        return view('locations/localist')->with(['locations'=> $location->getPaginateByLimit()]);
    }
    
    public function showLocadetail(Location $location)
    {
        return view('locations/location')->with([ 'location' => $location]); 
    }
}
