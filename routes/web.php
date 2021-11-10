<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home');

Route::get('/', function () {
    return view('home.index', ['name' => 'Onur Cevik']);
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');


Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->
where(['id' => '[0-9]+' , 'name' => '[A-Za-z]+']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
