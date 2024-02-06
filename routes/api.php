<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RuleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware(['auth', 'role:manager'])->group(function () {
//     // Routes réservées aux gestionnaires
//     Route::get('/manage-users', 'UserController@manageUsers');
// });

Route::post('/login',[AuthController::class, 'login']);

Route::post('/inscription',[AuthController::class, 'inscription']);

Route::get('/getusers',[AuthController::class, 'getUsers']);

Route::get('/rules',[RuleController::class, 'index']);
