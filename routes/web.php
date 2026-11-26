<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterMitraController;
use App\Http\Controllers\Auth\RegisterUserController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register/mitra', [RegisterMitraController::class, 'index'])->name('register.mitra');
Route::get('/register/user', [RegisterUserController::class, 'index'])->name('register.user');
