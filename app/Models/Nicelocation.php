<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nicelocation extends Model
{
    use HasFactory;
    
    //nicelocation：user＝多：１のリレーションを組む
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    //nicelocation：location＝多：１のリレーションを組む
    public function location(){
        return $this->belongsTo(Location::class);    
    }
}
