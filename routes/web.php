<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'loginSubmit'])->name('login.submit');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');