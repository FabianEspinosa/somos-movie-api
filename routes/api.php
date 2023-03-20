<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\MovieController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/movie/create', [MovieController::class, 'store']);
    Route::post('/movie/update/{id}', [MovieController::class, 'update']);
    Route::get('/movie/{id}', [MovieController::class, 'show']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::delete('/movie/{id}', [MovieController::class, 'destroy']);
});

Route::post('/login', [AuthController::class, 'login']);
Route::get('/movies', [MovieController::class, 'index']);
