<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Contoh halaman setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

// Route About Us
Route::get('/about', function () {
    return view('about');
});

// Route Contact Us
Route::get('/contact', function () {
    return view('contact');
});

// Route Home
Route::get('/', function () {
    return view('dashboard');
});

// Route Services
Route::get('/services', function () {
    return view('services');
});

// Route Contact (POST)
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

