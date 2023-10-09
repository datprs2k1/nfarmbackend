<?php

namespace App\Providers;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\ICategoryRepository;
use App\Repositories\PasswordReset\IPasswordResetRepo;
use App\Repositories\PasswordReset\PasswordResetRepo;
use App\Repositories\Post\IPostRepository;
use App\Repositories\Post\PostRepository;
use App\Repositories\Prefix\IPrefixRepo;
use App\Repositories\Prefix\PrefixRepository;
use App\Repositories\Price\IPriceRepository;
use App\Repositories\Price\PriceRepository;
use App\Repositories\Product\IProductRepository;
use App\Repositories\Product\ProductRepository;
use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Services\MailService\IMailService;
use App\Services\MailService\MailService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{


    public function register()
    {
        // $this->app->singleton(IAdminRepository::class, AdminRepository::class);
        $this->app->singleton(IUserRepository::class, UserRepository::class);
        $this->app->singleton(IPasswordResetRepo::class, PasswordResetRepo::class);
        $this->app->singleton(IMailService::class, MailService::class);
        $this->app->singleton(ICategoryRepository::class, CategoryRepository::class);
        $this->app->singleton(IPostRepository::class, PostRepository::class);
        $this->app->singleton(IProductRepository::class, ProductRepository::class);
        $this->app->singleton(IPriceRepository::class, PriceRepository::class);
    }
}
