<?php

use App\Http\Controllers\DataTimf1Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/tabel', [datatimF1Controller::class, 'index']);

Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login'); // Menggunakan named route
})->name('logout');