<?php

namespace App\Providers;

use App\Repositories\User\IUserRepository;
use App\Repositories\User\UserRepository;
use App\Repositories\UserInfo\IUserInfoRepository;
use App\Repositories\UserInfo\UserInfoRepository;
use App\Repositories\VerifyCode\IVerifyCodeRepository;
use App\Repositories\VerifyCode\VerifyCodeRepository;
use App\Services\MailService\IMailService;
use App\Services\MailService\MailService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{


    public function register()
    {
        // $this->app->singleton(IAdminRepository::class, AdminRepository::class);
        $this->app->singleton(IUserRepository::class, UserRepository::class);
        $this->app->singleton(IMailService::class, MailService::class);
        $this->app->singleton(IVerifyCodeRepository::class, VerifyCodeRepository::class);
        $this->app->singleton(IUserInfoRepository::class, UserInfoRepository::class);
    }
}
