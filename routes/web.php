<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class, 'start'])->name('home');

// About Us Page Route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Authentication routes handled by AuthController
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('Login'); // Capitalized
Route::post('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('Signup'); // Capitalized
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
