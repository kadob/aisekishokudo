<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;
use App\Models\Nicemap;

class MapController extends Controller
{
    public function showMapspot(Map $map)
    { 
        //nicemapテーブルのmap_idと$mapのidが一致し、認証されたユーザーIDと一致するレコードの一番最初のレコードを代入。
        $nicemap=Nicemap::where('map_id',$map->id)->where('user_id',auth()->user()->id)->first();
        //mapとnicemapという変数を持たせてロケ詳細画面を返す
        return view('maps.map_spot_detail',compact('map','nicemap'));  
    }
}
