<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\NewsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/getnewsapi', [NewsController::class, 'index'])->name('getnewsapi');
Route::post('/postnewsapi', [NewsController::class, 'store'])->name('postnewsapi');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});