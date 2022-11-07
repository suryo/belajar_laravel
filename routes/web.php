<?php

use Illuminate\Support\Facades\Route;
//jangan lupa untuk memanggil controller yang telah dibuat disini
use App\Http\Controllers\CobaController;
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

//apa yang di munculkan pada browser, dapat dilihat pada folder resources/views
Route::get('/', function () {
    return view('welcome');
});

//tambahkan route seperti dibawah ini untuk membuat url /cobacontroller
Route::get('/cobacontroller', [CobaController::class, 'index'])->name('coba');