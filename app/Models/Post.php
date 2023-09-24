<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    public function getPaginateByLimit(int $limit_count = 6)
    {
        $user_id = auth()->id();
        return $this::where('user_id', $user_id)
            ->with('location')
            ->orderBy('updated_at', 'DESC')
            ->paginate($limit_count);
    }
    
    protected $fillable = [
        'user_id',
        'location_id',
        'content',
    ];
    
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);   
    }
    
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
