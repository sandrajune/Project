<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemedyController extends Controller
{
    public function index()
    {
        // Fetch remedies from an API or database
        $remedies = []; // Replace with actual data fetching logic

        return view('remedies.index', compact('remedies'));
    }
}

