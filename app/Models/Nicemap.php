<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nicemap extends Model
{
    use HasFactory;
    
    public function map()
    {
        return $this->belongsTo(Map::class);    
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
