<?php

use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\User\CartController;
use App\Http\Controllers\Api\User\OrderController;
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
    Route::post('reset-password', [AuthController::class, 'resetPassword']);
    Route::middleware(['auth:admin', 'role:customer'])->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
    });
});

Route::group(['as' => 'api.user.'], function () {
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::group(['prefix' => 'cart', 'controller' => CartController::class, 'as' => 'cart.'], function () {
            Route::get('', 'get')->name('get');
            Route::post('', 'update')->name('update');
            Route::delete('{id}', 'destroy')->name('destroy');
        });

        Route::group(['prefix' => 'order', 'controller' => OrderController::class, 'as' => 'order.'], function () {
            Route::post('', 'create')->name('create');
        });
    });
});
