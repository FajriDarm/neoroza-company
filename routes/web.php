<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Contoh halaman setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Route About Us
Route::get('/about', function () {
    return view('about');
})->name('about');

// Route Contact Us
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route Services
Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/test', action: function () {
    return view('test');
})->name('test');

// Route Contact (POST)
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

