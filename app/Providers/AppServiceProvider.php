<?php

namespace App\Providers;

use App\Http\Controllers\Api\Admin\AuthController;
use App\Services\_Abstract\TransactionService;
use App\Services\Auth\Admin\AuthService as AdminAuthService;
use App\Services\Auth\AuthContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->when(AuthController::class)
            ->needs(AuthContract::class)
            ->give(AdminAuthService::class);

        $this->app->singleton("app.transactions", function () {
            return new TransactionService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
