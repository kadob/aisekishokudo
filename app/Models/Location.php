<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //６を上限にページネーションし、更新順に並べて返す。
    public function getPaginateByLimit(int $limit_count = 6)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    use HasFactory;
    
    //map：location＝多：１のリレーションを組む
    public function maps()
    {
        return $this->hasMany(Map::class);
    }
    
    //nicelocation：location＝多：１のリレーションを組む
    public function nicelocations()
    {
        return $this->hasMany(Nicelocation::class);    
    }
    
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
