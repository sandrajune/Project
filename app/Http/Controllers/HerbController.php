<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerbController extends Controller
{
    public function index()
    {
        // Fetch herbs from API or database
        $herbs = []; // Replace with actual data
        return view('herbs.index', compact('herbs'));
    }

    public function remedies()
    {
        // Fetch remedies from API or database
        $remedies = []; // Replace with actual data
        return view('remedies.index', compact('remedies'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        // Search herbs and remedies based on the query
        $results = []; // Replace with actual search results
        return view('search.results', compact('results'));
    }
}
