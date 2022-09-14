<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home', ['name' => 'James', 'cobahtml' => '<h1>test ini h1 </h1>']);
});

Route::apiResource('/papi', App\Http\Controllers\PapiController::class);


// Route::get('/', function () {
//     return view('welcome');
// });