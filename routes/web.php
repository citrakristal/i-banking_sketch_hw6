<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalanceController;

Route::get('/balance', [BalanceController::class, 'index'])->name('balance');
Route::get('/balances', [BalanceController::class, 'index'])->name('balances.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); 
