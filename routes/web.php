<?php

use App\Http\Controllers\HerbalistsController;
use App\Http\Controllers\FollowController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/herbalists',[HerbalistsController::class,"index"] )->name("herbalists.index");
Route::get ('/herbalists/create',[HerbalistsController::class,"create"] )->name("herbalists.create");
Route::post ('/herbalists',[HerbalistsController::class,"store"] )->name("herbalists.store");

Route::post('/follow/{herbalist}', [FollowController::class, 'follow'])->name('follow');
Route::post('/unfollow/{herbalist}', [FollowController::class, 'unfollow'])->name('unfollow');