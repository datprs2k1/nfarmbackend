<?php

namespace App\Providers;
use App\Repositories\Admin\AdminRepository;
use App\Repositories\Admin\IAdminRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(IAdminRepository::class, AdminRepository::class);
    }
}
