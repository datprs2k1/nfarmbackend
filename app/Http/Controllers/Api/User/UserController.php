<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Http\Requests\User\UserChangePasswordRequest;
use App\Http\Requests\User\UserForgotPasswordRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\UserModel;
use App\Services\_Trait\ApiResponse;
use App\Services\MailService\MailService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    use ApiResponse;
    protected $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }
    public function update(UserUpdateRequest $request)
    {
        $data = $request->fillData();

        Auth::user()->update($data);

        return $this->sendSuccessResponse("Cập nhật thành công");
    }
    public function changePassword(UserChangePasswordRequest $request)
    {
        $newPassword = Hash::make($request->get('newpassword'));

        Auth::user()->update([
            'password' => $newPassword,
        ]);

        Auth::logout();

        return $this->sendSuccessResponse("Cập nhật thành công");
    }

    public function recovery(UserForgotPasswordRequest $request)
    {
        $newPassword = Str::random(6);

        $user = UserModel::where('email', $request->get('email'))->first();

        $user->update([
            'password' => Hash::make($newPassword)
        ]);

        $this->mailService->sendPassword($user->email, $newPassword);

        return $this->sendSuccessResponse("Cập nhật thành công");
    }
}
