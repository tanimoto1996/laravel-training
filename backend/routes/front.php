<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::resource('posts', PostController::class)->only(['index','show']);