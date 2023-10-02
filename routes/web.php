<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'dashboard']);
Route::get('/user', [HomeController::class, 'index'])->name('tes');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/menyimpan', [HomeController::class, 'store'])->name('simpanData');