<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return redirect()->route('login');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');


Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboard', function () {
    return "<div style='text-align:center; margin-top:80px; font-family:sans-serif;'>
                <h1 style='color:#16a34a;'>WellCome! You have successfully logged in to the dashboard
                </h1>
                <p style='font-size:18px;'>User Name: <b>".auth()->user()->name."</b></p>
                <p style='font-size:18px;'>Email: <b>".auth()->user()->email."</b></p>
                <form action='".route('logout')."' method='POST'>
                    ".csrf_field()."
                    <button type='submit' style='background:#dc2626; color:white; border:none; padding:10px 24px; font-size:16px; border-radius:6px; cursor:pointer;'>লগআউট করুন</button>
                </form>
            </div>";
})->middleware('auth')->name('dashboard');