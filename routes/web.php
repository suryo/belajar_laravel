<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;

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


Route::get('/login', [LoginController::class, 'index'])->name('');

Route::get('/getnews', [NewsController::class, 'index'])->name('getnews');
Route::post('/postnews', [NewsController::class, 'create'])->name('postnews');
Route::get('/editnews/{id}', [NewsController::class, 'edit'])->name('editnews');
Route::post('/updatenews', [NewsController::class, 'update'])->name('updatenews');

Route::get('/deletenews/{id}', [NewsController::class, 'destroy'])->name('deletenews');


Route::get('/getcategory', [CategoryController::class, 'index'])->name('getcategory');

Route::post('/postnews', [NewsController::class, 'store'])->name('postnews');
Route::post('/postcategory', [CategoryController::class, 'store'])->name('postcategory');

