<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('books', BookController::class);

Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'handleRegister')->name('register.handle');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'handleLogin')->name('login.handle');
    Route::delete('/logout', 'logout')->name('logout');
});
