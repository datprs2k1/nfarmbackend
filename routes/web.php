<?php

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

Route::group(["prefix" => "admin", "as" => "admin."], function () {
    Route::get('/login', function () {
        return view('admin.views.login.login');
    })->name('login');

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::group(['middleware' => 'role:admin'], function () {
            Route::get('/', function () {
                $title = "DATPRS";
                return view('admin.views.dashboard.dashboard', compact('title'));
            })->name('dashboard');
        });
    });
});

Route::group(["prefix" => "user", "as" => "user."], function () {
    Route::get('/login', function () {
        return view('admin.views.login.login');
    })->name('login');
    Route::middleware('auth.user', 'role:customer')->group(function () {
        Route::group(['middleware' => 'role:admin'], function () {
            Route::get('/', function () {
                echo "Hellol";
            });
        });
    });
});
