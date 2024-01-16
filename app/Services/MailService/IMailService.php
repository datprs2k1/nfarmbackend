<?php

namespace App\Services\MailService;

interface IMailService
{
    function sendForgotPassword($email, $url);
}
