<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CarApiController;
use App\Http\Controllers\Api\RequestApiController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'API Dream Culture aktif.',
    ]);
});

Route::get('/cars', [CarApiController::class, 'index']);
Route::get('/cars/{slug}', [CarApiController::class, 'show']);

Route::get('/service-types', [RequestApiController::class, 'serviceTypes']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/service-appointments', [RequestApiController::class, 'storeServiceAppointment']);
    Route::post('/special-requests', [RequestApiController::class, 'storeSpecialRequest']);
    Route::post('/sell-car-requests', [RequestApiController::class, 'storeSellCarRequest']);
});
