<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;
    
    //map：location＝多：１のリレーションを組む
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    
    //nicemap：map＝多：１のリレーションを組む
    public function nicemaps()
    {
        return $this->hasMany(Nicemap::class);
    }
}
