<?php

use App\Http\Controllers\Api\Admin\PrefixController;
use App\Http\Controllers\Api\User\AccountController;
use App\Http\Controllers\Api\User\AuthController;
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

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
    Route::middleware(['auth:admin','role:customer'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('change-password', [AuthController::class, 'changePassword']);
    });
});

Route::middleware(['auth:admin', 'role:customer'])->group(function () {
    Route::group(['prefix' => 'account', 'controller' => AccountController::class], function()
    {
        Route::get('', 'show');
        Route::post('', 'update');
        Route::post('bank', 'updateBank');
    });
});
