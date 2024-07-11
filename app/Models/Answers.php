<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'herbalist_id', 'content'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function herbalist()
    {
        return $this->belongsTo(Herbalist::class);
    }
}
