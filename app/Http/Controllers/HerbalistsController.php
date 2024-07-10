<?php

namespace App\Http\Controllers;

use App\Models\Herbalist;
use Illuminate\Http\Request;

class HerbalistsController extends Controller
{
    // Display a listing of the herbalists
    public function index()
    {
        $herbalists = Herbalist::all();
        return view('herbalists.index', compact('herbalists'));
    }

    // Show the form for creating a new herbalist
    public function create()
    {
        return view('herbalists.create');
    }

    // Store a newly created herbalist in the database
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:herbalists',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $herbalist = new Herbalist;
        $herbalist->firstname = $request->firstname;
        $herbalist->lastname = $request->lastname;
        $herbalist->email = $request->email;
        $herbalist->password = bcrypt($request->password);
        $herbalist->save();

        return redirect()->route('herbalists.index')->with('success', 'Herbalist created successfully.');
    }

    // Display the specified herbalist
    public function show(Herbalist $herbalist)
    {
        return view('herbalists.show', compact('herbalist'));
    }

    // Show the form for editing the specified herbalist
    public function edit(Herbalist $herbalist)
    {
        return view('herbalists.edit', compact('herbalist'));
    }

    // Update the specified herbalist in the database
    public function update(Request $request, Herbalist $herbalist)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:herbalists,email,' . $herbalist->id,
        ]);

        $herbalist->firstname = $request->firstname;
        $herbalist->lastname = $request->lastname;
        $herbalist->email = $request->email;
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'sometimes|string|min:8|confirmed',
            ]);
            $herbalist->password = bcrypt($request->password);
        }
        $herbalist->save();

        return redirect()->route('herbalists.index')->with('success', 'Herbalist updated successfully.');
    }

    // Remove the specified herbalist from the database
    public function destroy(Herbalist $herbalist)
    {
        $herbalist->delete();
        return redirect()->route('herbalists.index')->with('success', 'Herbalist deleted successfully.');
    }
}
