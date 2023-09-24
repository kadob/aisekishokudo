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
        $nicelocation->location_id=$location->id;//nicelocationのlocation_idとlocationのidを一致させる。
        $nicelocation->user_id=Auth::user()->id;//nicelocationのuser_idと認証ユーザーのidを一致させる。
        $nicelocation->save();//今までの変更を保存
        return back();//location.blade.phpにリダイレクトする。
    }
    
    public function unniceLoca(Location $location, Request $request){
        $user=Auth::user()->id;//認証ユーザーのidを格納する
        $nicelocation=Nicelocation::where('location_id',$location->id)->where('user_id',$user)->first();//location_idとuser_idが最初に一致したものを格納
        $nicelocation->delete();//削除
        return back();//location.blade.phpにリダイレクトする。
    }
    
    //上記のniceLocaメソッドと同じ動きをする
    public function nicemap(Map $map, Request $request){
        $nicemap=New Nicemap();
        $nicemap->map_id=$map->id;
        $nicemap->user_id=Auth::user()->id;
        $nicemap->save();
        return back();
    }
    
    //上記のunnniceLocaメソッドと同じ動きをする
    public function unnicemap(Map $map, Request $request){
        $user=Auth::user()->id;
        $nicemap=Nicemap::where('map_id',$map->id)->where('user_id',$user)->first();
        $nicemap->delete();
        return back();
    }
    
    public function showNice(){
        $user=Auth::user()->id;
        $nicelocations=Nicelocation::where('user_id',$user)->get();
        $nicemaps=Nicemap::where('user_id',$user)->get();
        return view('nice.niced',compact('nicelocations','nicemaps'));
    }
}
