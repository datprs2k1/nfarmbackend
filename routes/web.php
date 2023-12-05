<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CategoryController as UserCategoryController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\PostController as UserPostController;
use App\Http\Controllers\User\PriceController as UserPriceController;
use App\Http\Controllers\User\ProductController as UserProductController;
use App\Http\Controllers\User\UserController;
use App\Models\PriceModel;
use Illuminate\Support\Facades\Route;
use Litespeed\LSCache\LSCache;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

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
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

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

            Route::group(['prefix' => 'order', 'as' => 'order.'], function () {
                Route::get('', [AdminOrderController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function () {
                Route::get('', [TransactionController::class, 'index'])->name('index');
            });
        });
    });
});

Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/login', function () {
        return view('admin.views.login.login');
    })->name('login');
});


Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('forgot-password', [UserController::class, 'recovery'])->name('recovery');
Route::get('/product/{slug}', [UserProductController::class, 'detail'])->name('product.detail');
Route::get('/price/{slug}', [UserPriceController::class, 'show'])->name('price.detail');
Route::get('/category/{slug}', [UserCategoryController::class, 'show'])->name('category.detail');
Route::get('/post/{slug}', [UserPostController::class, 'show'])->name('post.detail');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'cart', 'controller' => CartController::class, 'as' => 'cart.'], function () {
        Route::get('', 'get')->name('get');
    });

    Route::group(['prefix' => 'checkout', 'controller' => OrderController::class, 'as' => 'checkout.'], function () {
        Route::get('', 'checkout')->name('checkout');
    });

    Route::group(['prefix' => 'order', 'controller' => OrderController::class, 'as' => 'order.'], function () {
        Route::get('', 'list')->name('list');
        Route::get('{id}', 'show')->name('show');
        Route::get('/payment/{id}', 'payment')->name('payment');
    });

    Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
        Route::get('', [UserController::class, 'index'])->name('index');
    });
});

Route::group(['controller' => OrderController::class, 'as' => 'order.'], function () {
    Route::get('return-vnpay', 'completePayment')->name('completePayment');
});



Route::get('/createSitemap', function () {
    SitemapGenerator::create(config('app.url'))
        ->hasCrawled(function (Url $url) {
            if ($url->segment(1) === 'admin' || $url->segment(1) === 'clearCache' || $url->segment(1) === 'createSitemap') {
                return;
            }

            return $url;
        })
        ->writeToFile(public_path('sitemap.xml'));
});

Route::get('test', function () {
    $prices = PriceModel::get([
        "name",
        "price",
        "description",
        "note",
        "detail",
        "warranty",
        "product_id",
        "status",
    ]);

    return response()->json($prices);
});
