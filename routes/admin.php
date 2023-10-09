<?php

use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\PostController;
use App\Http\Controllers\Api\User\AuthController;
use App\Http\Controllers\Api\Admin\PrefixController;
use App\Http\Controllers\Api\Admin\PriceController;
use App\Http\Controllers\Api\Admin\ProductController;
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
        Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
            Route::get('', [PostController::class, 'get'])->name('get');
            Route::get('{id}', [PostController::class, 'show'])->name('show');
            Route::post('', [PostController::class,'store'])->name('store');
            Route::put('{id}', [PostController::class, 'update'])->name('update');
            Route::delete('{id}', [PostController::class, 'destroy'])->name('destroy');
        });
        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('', [ProductController::class, 'get'])->name('get');
            Route::get('{id}', [ProductController::class, 'show'])->name('show');
            Route::post('', [ProductController::class,'store'])->name('store');
            Route::put('{id}', [ProductController::class, 'update'])->name('update');
            Route::delete('{id}', [ProductController::class, 'destroy'])->name('destroy');
        });
        Route::group(['prefix' => 'price', 'as' => 'price.'], function () {
            Route::get('', [PriceController::class, 'get'])->name('get');
            Route::get('{id}', [PriceController::class, 'show'])->name('show');
            Route::post('', [PriceController::class,'store'])->name('store');
            Route::put('{id}', [PriceController::class, 'update'])->name('update');
            Route::delete('{id}', [PriceController::class, 'destroy'])->name('destroy');
        });
    });
});
