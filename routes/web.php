<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\http\Controllers\testcontroller;
=======
use App\http\controllers\CobaController;

>>>>>>> web/malam-ana

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
    return view('coba');
});

Route::get('/coba', [CobaController::class, 'index']);
Route::get('/ayam', [CobaController::class, 'keren']);