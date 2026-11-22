<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// ১. হোমপেজ রাউট (আগেরটাই থাকবে)
Route::get('/', function () {
    return redirect()->route('login');
});

// ২. লগইন দেখার রাউট (আগেরটাই থাকবে)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// ৩. লগইন সাবমিট রাউট (আগেরটাই থাকবে)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// ৪. লগআউট রাউট (আগেরটাই থাকবে)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ৫. ড্যাশবোর্ড রাউট (শুধু এই অংশটুকু পরিবর্তন হবে: টেক্সটের বদলে ভিউ রিটার্ন করবে)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');