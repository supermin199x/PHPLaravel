<?php

//การส้ราง Route

use Illuminate\Support\Facades\Route;
//import ไฟล์ controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegismemberController;
use App\Http\Controllers\RegisorgController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NavbarController;



//ระบุ path url พร้อมกำหนดชื่อของ route
Route::get('/', [HomeController::class,'home'])->name('home');
Route::get('/regismember', [RegismemberController::class,'regismember'])->name('regismember');
Route::get('/regisorg',[RegisorgController::class,'regisorg'])->name('regisorg');
Route::get('/login', [LoginController::class,'login'])->name('login');
Route::get('/navbar', [NavbarController::class, 'navbar'])->name('navbar');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
