<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Halaman Utama
Route::get('/', function () {
    return view('welcome'); // tampilkan halaman welcome.blade.php
});

// Halaman Daftar User
Route::get('/users', function () {
    $users = User::all();
    return view('users.index', compact('users'));
});

// Halaman Detail User
Route::get('/users/{id}', [UserController::class, 'show']);