<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//  Homepage route (will remain the same)
Route::get('/', function () {
    return redirect()->route('login');
});

//  Route for the login view (will remain the same)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Login Submit Route (will remain the same)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

//  Logout route (will remain the same)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard route (only this part will change: it will return a view instead of text)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');