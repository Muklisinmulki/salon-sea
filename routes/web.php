<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::post('/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');
