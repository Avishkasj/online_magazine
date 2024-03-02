<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ActivityImgController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::get('/users', [AuthController::class, 'getUsers']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/images', [ImageController::class, 'store']);
Route::post('/uimages', [ActivityImgController::class, 'store']);
Route::get('/getuimages', [ActivityImgController::class, 'getData']);
Route::post('/test', [ImageController::class, 'test']);