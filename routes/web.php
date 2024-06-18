<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

// Car routes
Route::get('/', [CarController::class, 'index']);
Route::get('/car/{id}', [CarController::class, 'show']);
Route::post('/book', [CarController::class, 'book']);

// Profile route with authentication middleware
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

// Contact route
Route::post('/contact', [ContactController::class, 'send']);

// Authentication routes
Auth::routes();

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
