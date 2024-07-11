<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['herbalist_id', 'topic_id', 'content'];

    public function herbalist()
    {
        return $this->belongsTo(Herbalist::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}

