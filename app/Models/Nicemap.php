<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nicemap extends Model
{
    use HasFactory;
    
    //nicemap：map＝多：１のリレーションを組む
    public function map()
    {
        return $this->belongsTo(Map::class);    
    }
    
    //nicemap：user＝多：１のリレーションを組む
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
