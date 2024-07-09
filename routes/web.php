<?php

use App\Http\Controllers\HerbalistsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/herbalists',[HerbalistsController::class,"index"] )->name("herbalists.index");
Route::get ('/herbalists/create',[HerbalistsController::class,"create"] )->name("herbalists.create");
Route::post ('/herbalists',[HerbalistsController::class,"store"] )->name("herbalists.store");