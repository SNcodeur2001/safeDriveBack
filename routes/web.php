<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleQRcodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/QR1', function () {
    return view('QR1');
});

Route::get('/QR2', function () {
    return view('QR2');
});

Route::get('/QR3', function () {
    return view('QR3');
});
// Route::get('/codeqr', [SimpleQRcodeController::class, 'generate']);