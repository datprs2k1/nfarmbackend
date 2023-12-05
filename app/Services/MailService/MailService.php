<?php

namespace App\Services\MailService;

use App\Jobs\SendEmail;
use App\Jobs\SendVerifyEmailJob;
use App\Mail\ForgetPassword;
use App\Mail\OrderCreated;
use App\Mail\OrderPayment;
use App\Mail\Registered;
use App\Mail\UserPassword;
use App\Services\_Abstract\BaseService;

class MailService extends BaseService implements IMailService
{
    function sendForgotPassword($email, $url){
        return SendVerifyEmailJob::dispatch($email, new ForgetPassword($url));
    }

    function sendRegister($email, $url){
        return SendEmail::dispatch($email, new Registered($url))->onQueue('register');
    }

    function sendOrder($email, $entry){
        return SendEmail::dispatch($email, new OrderCreated($entry))->onQueue('orderCreated');
    }

    function sendPayment($email, $entry){
        return SendEmail::dispatch($email, new OrderPayment($entry))->onQueue('orderPayment');
    }

    function sendPassword($email, $entry){
        return SendEmail::dispatch($email, new UserPassword($entry))->onQueue('userPassword');
    }
}
