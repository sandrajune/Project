<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class herbalists extends Model
{
    use HasFactory;

    protected $fillable = [
        "firstname",
        "lastname",
        "email",
        "password",
        "usertype"

    ];

}
