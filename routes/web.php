<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterMitraController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/register/mitra', [RegisterMitraController::class, 'index'])->name('register.mitra');
Route::post('/register/mitra', [RegisterMitraController::class, 'register'])->name('register.mitra.post');

Route::get('/register/user', [RegisterUserController::class, 'index'])->name('register.user');
Route::post('/register/user', [RegisterUserController::class, 'register'])->name('register.user.post');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/costumer/dashboard', [CostumerController::class, 'index'])->name('costumer.dashboard');
    Route::post('/costumer/logout', [CostumerController::class, 'logout'])->name('costumer.logout');

});
    
Route::middleware(['auth', 'role:mitra', 'mitra.approved'])->group(function () {
    Route::get('/mitra/dashboard', [MitraController::class, 'index'])->name('mitra.dashboard');
    Route::post('/mitra/logout', [MitraController::class, 'logout'])->name('mitra.logout');

});