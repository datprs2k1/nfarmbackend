<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ProductController as UserProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', function () {
        return view('admin.pages.login.index');
    })->name('login');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::group(['middleware' => 'role:admin'], function () {
            Route::get('/', function () {
                $title = 'DATPRS';

                return view('admin.pages.dashboard.index', compact('title'));
            })->name('dashboard');

            Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
                Route::get('', [CategoryController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
                Route::get('', [PostController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
                Route::get('', [ProductController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'price', 'as' => 'price.'], function () {
                Route::get('', [PriceController::class, 'index'])->name('index');
            });
        });
    });
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/login', function () {
        return view('admin.views.login.login');
    })->name('login');
    Route::middleware('auth.user', 'role:customer')->group(function () {
        Route::group(['middleware' => 'role:admin'], function () {
            Route::get('/', function () {
                echo 'Hellol';
            });
        });
    });
});

Route::get('', [HomeController::class, 'index']);
Route::get('/product', [UserProductController::class, 'index']);
