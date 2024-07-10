<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'user_id'];

    public function herbalist()
    {
        return $this->belongsTo(Herbalist::class, 'user_id');
    }
}
