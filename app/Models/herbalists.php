<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Herbalist extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['firstname','lastname', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = ['email_verified_at' => 'datetime'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

   

    public function followers()
    {
        return $this->belongsToMany(Herbalist::class, 'follows', 'following_user_id', 'follower_user_id');
    }

    public function followings()
    {
      
        return $this->belongsToMany(Herbalist::class, 'follows', 'follower_user_id', 'following_user_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
