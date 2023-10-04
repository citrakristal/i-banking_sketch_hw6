<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('login-proses',[LoginController::class, 'login_proses'])->name('login-proses');
Route::get('logout', [LoginController::class, 'logout'])->name('logoutUser');
Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/user', [HomeController::class, 'index'])->name('user.index');
Route::get('/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/menyimpan', [HomeController::class, 'store'])->name('simpanData');

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('editData');
// {} artinya parameter 

Route::put('/update/{id}', [HomeController::class, 'update'])->name('updateData');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('deleteData');

