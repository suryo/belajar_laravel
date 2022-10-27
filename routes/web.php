<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\CobaController;
use App\http\controllers\HomeController;

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
Route::get('/ayam', [CobaController::class, 'keren'])->name('ayam');