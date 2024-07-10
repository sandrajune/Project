<?php

namespace App\Http\Controllers;

use App\Models\Herbalist;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    public function follow(Herbalist $herbalist)
    {
        auth()->user()->followings()->attach($herbalist->id);
        return redirect()->back();
    }

    public function unfollow(Herbalist $herbalist)
    {
        auth()->user()->followings()->detach($herbalist->id);
        return redirect()->back();
    }
}

