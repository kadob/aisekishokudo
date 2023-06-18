<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Nicelocation;

class LocationController extends Controller
{
    public function showLocalist(Location $location)
    {   
        return view('locations/localist')->with(['locations'=> $location->getPaginateByLimit()]);
    }
    
    public function searchLocation(Request $request)
    {
        $locations = Location::paginate(6);
        $search = $request->input('search');
        $query = Location::query();

        if ($search) {

            $spaceConversion = mb_convert_kana($search, 's');

            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

            foreach($wordArraySearched as $value) {
                $query->where('celebrity', 'like', '%'.$value.'%');
            }

            $locations = $query->paginate(6);

        }

            return view('locations.localist')->with([
                'locations' => $locations,
                'search' => $search,
            ]);
    }
    
    public function showLocadetail(Location $location)
    {
        $nicelocation=Nicelocation::where('location_id',$location->id)->where('user_id',auth()->user()->id)->first();
        return view('locations.location',compact('location','nicelocation')); 
    }
}
