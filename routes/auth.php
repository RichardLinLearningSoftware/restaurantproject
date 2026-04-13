<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

// Allows the user to acces the register and login page if they arent loggedin
Route::middleware('guest')->group(function () {
    //Register
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');
    //Login
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
});

// Receive post request from /register
Route::post('/register', [RegisteredUserController::class, 'store']);

// Receive post request from /login
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');