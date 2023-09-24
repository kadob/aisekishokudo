<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //nicelocation：user＝多：１のリレーションを組む
    public function nicelocations()
    {
        return $this->hasMany(Nicelocation::class);   
    }
    
    //nicemap：user＝多：１のリレーションを組む
    public function nicemaps(){
        return $this->hasMany(Nicemap::class);
    }
    
    //post : user=多 : １のリレーションを組む
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
