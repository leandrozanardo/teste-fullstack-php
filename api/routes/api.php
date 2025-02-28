<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

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

Route::get('/vehicles', [VehicleController::class, 'index']);
Route::get('/vehicles/{id}', [VehicleController::class, 'show']);
Route::post('/vehicles', [VehicleController::class, 'store']);
Route::patch('/vehicles/{id}/', [VehicleController::class, 'update']);
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy']);
Route::get('search/{vehicle}', [VehicleController::class, 'search']);