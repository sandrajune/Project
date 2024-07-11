<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerbController extends Controller
{
    public function index()
    {
        // Fetch herbs from an API or database
        $herbs = []; // Replace with actual data fetching logic

        return view('herbs.index', compact('herbs'));
    }
}
