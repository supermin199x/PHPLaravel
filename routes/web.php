<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/regismember', function () {
    return view('regismember');
});

Route::get('/regisorg', function () {
    return view('regisorg');
});

Route::get('/login', function () {
    return view('login');
});