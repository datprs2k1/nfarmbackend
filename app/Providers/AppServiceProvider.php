<?php

namespace App\Providers;

use App\Http\Controllers\Api\User\AuthController;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Services\_Abstract\TransactionService;
use App\Services\Auth\User\AuthService;
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
            ->give(AuthService::class);


        $this->app->singleton("app.transactions", function () {
            return new TransactionService();
        });

        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
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
