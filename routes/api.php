<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\V1\SectionController;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('user-profile', [AuthController::class, 'userProfile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::apiResource('sections', SectionController::class);
});

Route::get('users', [AuthController::class, 'allUsers']);

Route::get('not_logged', function() {
    return response()->json("You are not logged in", 404);
})->name("not_logged");