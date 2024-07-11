<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HerbalistsController;

use App\Http\Controllers\HerbController;
use App\Http\Controllers\RemedyController;

use App\Http\Controllers\FollowController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::get('remedies', [RemedyController::class, 'index'])->name('remedies.index');


Route::get('herbs', [HerbController::class, 'index'])->name('herbs.index');


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/herbalists', [HerbalistsController::class, 'index'])->name('herbalists.index');
Route::get('/herbalists/create', [HerbalistsController::class, 'create'])->name('herbalists.create');
Route::post('/herbalists', [HerbalistsController::class, 'store'])->name('herbalists.store');
Route::get('/herbalists/{herbalist}', [HerbalistsController::class, 'show'])->name('herbalists.show');
Route::get('/herbalists/{herbalist}/edit', [HerbalistsController::class, 'edit'])->name('herbalists.edit');
Route::put('/herbalists/{herbalist}', [HerbalistsController::class, 'update'])->name('herbalists.update');
Route::delete('/herbalists/{herbalist}', [HerbalistsController::class, 'destroy'])->name('herbalists.destroy');




Route::resource('topics', TopicController::class);
Route::post('topics/{topic}/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('topics/{topic}/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');



Route::post('/follow/{herbalist}', [FollowController::class, 'follow'])->name('follow');
Route::post('/unfollow/{herbalist}', [FollowController::class, 'unfollow'])->name('unfollow');



// Topic routes
Route::resource('topics', TopicController::class);

// Question routes
Route::get('topics/{topic}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('topics/{topic}/questions', [QuestionController::class, 'store'])->name('questions.store');
Route::get('questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
Route::delete('questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');

// Answer routes
Route::post('questions/{question}/answers', [AnswerController::class, 'store'])->name('answers.store');
Route::delete('questions/{question}/answers/{answer}', [AnswerController::class, 'destroy'])->name('answers.destroy');

// Post routes
Route::get('topics/{topic}/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('topics/{topic}/posts', [PostController::class, 'store'])->name('posts.store');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
