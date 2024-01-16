<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\AccountBankUpdateRequest;
use App\Http\Requests\Account\AccountUpdateRequest;
use App\Services\UserInfoService\UserInfoService;
use App\Services\UserService\UserService;

class AccountController extends Controller
{
    protected $service;
    protected $userInfo;
    public function __construct(UserService $service, UserInfoService $userInfo)
    {
        $this->service = $service;
        $this->userInfo = $userInfo;
    }

    public function show()
    {
        return $this->service->show(auth()->user()->id);
    }

    public function update(AccountUpdateRequest $request)
    {
        return $this->service->update(auth()->user()->id, $request);
    }

    public function updateBank(AccountBankUpdateRequest $request)
    {
        return $this->userInfo->update(auth()->user()->id, $request->all());
    }

}
