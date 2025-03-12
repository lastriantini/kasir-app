<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login-auth', [UserController::class, 'loginAuth'])->name('login.auth');

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

// Route::post('/post-login', [UserController::class, 'store'])->name('login.post');
