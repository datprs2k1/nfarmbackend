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

Route::prefix('auth')->as("api.admin.")->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name("login");
    Route::post('register', [AuthController::class, 'register']);
});

Route::middleware('auth:admin')->as("api.admin.")->group( function () {
    Route::middleware('role:admin')->group(function () {
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('', [CategoryController::class, 'get'])->name('get');
            Route::get('{id}', [CategoryController::class, 'show'])->name('show');
            Route::post('', [CategoryController::class,'store'])->name('store');
            Route::put('{id}', [CategoryController::class, 'update'])->name('update');
            Route::delete('{id}', [CategoryController::class, 'destroy'])->name('destroy');
        });
    });
});
