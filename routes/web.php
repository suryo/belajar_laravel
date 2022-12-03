<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::apiResource('/papi', App\Http\Controllers\PapiController::class);

Route::get('send-mail', function () {
    $details = [
        'title' => 'Mail from indraco',
        'body' => 'This is for testing email using smtp'
    ];
    \Mail::to('suryoatmojo@uwp.ac.id')->send(new \App\Mail\MyTestMail($details));
    dd("Email is Sent from indraco.");
});

// Route::get('/', function () {
//     return view('welcome');
// });