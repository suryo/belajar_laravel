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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/coba', [CobaController::class, 'index']);
Route::get('/ayam', [CobaController::class, 'keren']);