<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;


// Route::middleware(['guest'])->group(function () {
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [PageController::class, 'register'])->name('register');
// });

Route::post('/login/proses', [UserController::class, 'login'])->name('login-proses');
Route::post('/register/proses', [UserController::class, 'register'])->name('register-proses');
Route::post('/member/proses', [UserController::class, 'member'])->name('member-proses');
Route::get('/member/edit/{id}', [UserController::class, 'editMember'])->name('edit.member');
Route::post('/member/update/{id}', [UserController::class, 'updateMember'])->name('update.member');
Route::get('/member/delete/{id}', [UserController::class, 'deleteMember'])->name('delete.member');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');


