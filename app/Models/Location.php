<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function getPaginateByLimit(int $limit_count = 6)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    
    }
    use HasFactory;
}
