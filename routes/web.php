<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/coba', [CobaController::class, 'index'])->name('coba');
<<<<<<< HEAD
Route::get('/ayam', [CobaController::class, 'keren'])->name('ayam');
=======
Route::get('/ayam', [CobaController::class, 'keren'])->name('ayam');
Auth::routes();

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');
>>>>>>> 9b9214acb2b5299f7563961b97978d432bd0aefb
