<?php

namespace App\Services\MailService;

use App\Jobs\SendVerifyEmailJob;
use App\Mail\ForgetPassword;
use App\Services\_Abstract\BaseService;

class MailService extends BaseService implements IMailService
{
    function sendForgotPassword($email, $url){
        return SendVerifyEmailJob::dispatch($email, new ForgetPassword($url));
    }
}
