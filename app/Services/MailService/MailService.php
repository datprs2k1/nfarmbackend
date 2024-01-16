<?php

namespace App\Services\MailService;

use App\Jobs\SendEmail;
use App\Mail\ForgetPassword;
use App\Mail\VerifyCodeSend;
use App\Services\_Abstract\BaseService;

class MailService extends BaseService implements IMailService
{
    function sendForgotPassword($email, $url){
        return SendEmail::dispatch($email, new ForgetPassword($url));
    }

    function sendVerifyCode($email, $url){
        return SendEmail::dispatch($email, new VerifyCodeSend($url))->onQueue('sendVerifyCode');
    }
}
