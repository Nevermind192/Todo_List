<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/register', [RegisterController::class, 'ShowRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
