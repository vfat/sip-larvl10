<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/users', [\App\Http\Controllers\Api\UserApiController::class, 'register']);
Route::post('/users/login', [\App\Http\Controllers\Api\UserApiController::class, 'login']);
Route::post('/users/hadir', [\App\Http\Controllers\Api\UserApiController::class, 'hadir']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
