<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat'); // Mengarahkan ke chat.blade.php
});

// Route ke halaman deleteUser
Route::get('/delete-user', function () {
    return view('deleteUser'); // Mengarahkan ke deleteUser.blade.php
});

// Route ke halaman welcome
Route::get('/welcome', function () {
    return view('welcome'); // Mengarahkan ke welcome.blade.php
});
