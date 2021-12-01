<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home.index');
});

//Admin
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home')->middleware('auth');

Route::get('/admin/login',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck',[\App\Http\Controllers\Admin\HomeController::class,'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
