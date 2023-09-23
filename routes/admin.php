<?php

use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\Admin\PrefixController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('auth')->as("api.admin.")->group( function () {
    Route::post('login', [AuthController::class, 'login'])->name("login");
    Route::post('register', [AuthController::class, 'register']);
    Route::middleware('auth:admin','role:admin')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
    });
});

