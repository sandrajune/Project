<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\herbalists;

class HerbalistsController extends Controller
{
public function index(){
    return view("herbalists.index");
}

public function create(){
    return view("herbalists.create");
}
public function store(Request $request){
    $data = $request->validate([
        "name"=> "required",
        "email"=> "required"
        ]);

        $newherbalists = herbalists::create($data);
        return redirect(route("herbalists.index"));
}
}