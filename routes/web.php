<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CobaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/ayam', [CobaController::class, 'keren'])->name('ayam');
Auth::routes();

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('beranda');

Route::get('/coba', [CobaController::class, 'index'])->name('coba');
Route::get('/ayam', [CobaController::class, 'keren'])->name('ayam');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
Route::get('/produk', [App\Http\Controllers\ProdukController::class, 'index'])->middleware(['auth', 'verified'])->name('produk');

// require __DIR__ . '/auth.php';
