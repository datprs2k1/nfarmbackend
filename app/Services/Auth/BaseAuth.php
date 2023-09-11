<?php

namespace App\Services\Auth;

use App\Models\PasswordResetModel;
use App\Models\UserModel;
use App\Repositories\PasswordReset\IPasswordResetRepo;
use App\Repositories\User\IUserRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\MailService\IMailService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Ramsey\Uuid\Uuid;

abstract class BaseAuth extends BaseService implements AuthContract
{
    protected string $guard;
    protected $mainRepository;
    protected $passwordResetRepo;
    protected $mailService;

    function __construct(IUserRepository $mainRepository, IPasswordResetRepo $passwordResetRepo, IMailService $mailService)
    {
        $this->mainRepository = $mainRepository;
        $this->passwordResetRepo = $passwordResetRepo;
        $this->mailService = $mailService;
    }
    /**
     * @throws AppServiceException
     */
    public function login(array $attempt)
    {
        if (!$token = auth($this->guard)->attempt($attempt)) {
            throw new AppServiceException(__("auth.failed"));
        }
        $userData = auth($this->guard)->user();
        return [
            'user' => $userData,
            'token' => $token,
        ];
    }

    function register(array $dataRegister)
    {
        if ($this->guard === GUARD_ADMIN_API) {
            $dataRegister['role_id'] = UserModel::ROLE_USER;
        }
        $dataRegister['password'] = Hash::make($dataRegister['password']);
        if ($this->mainRepository->findWhere(['email' => $dataRegister['email'], "deleted_at" => null])->first()) {
            throw new AppServiceException("Địa chỉ email đã tồn tại !");
        }
        $user = $this->mainRepository->create($dataRegister);
        $role = Role::findByName(ROLE_CUSTOMER);
        $user->assignRole($role);

        return $user;
    }

    public function submitForgetPasswordForm($request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token =  Uuid::uuid4()->toString();

        $this->passwordResetRepo->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $url = config('domain.url_forgot_password') . '?token=' .$token;

        $this->mailService->sendForgotPassword($request->email, $url);
    }

    public function resetPassword($input)
    {
        $passReset = $this->passwordResetRepo->findWhere(['email' => $input['email'], 'token' => $input['token'], "deleted_at" => null])->first();
        if(!$passReset)
        {
            return $this->sendErrorResponse('Không thành công!');
        }
        $user = $this->mainRepository->findWhere(['email' => $input['email'], "deleted_at" => null])->first();
        if(!$user)
        {
            return $this->sendErrorResponse('Email không tồn tại!');
        }
        $password = Hash::make($input['password']);
        $user->update(['password'=> $password]);
        if ($user->update(['password'=> $password])) {
            PasswordResetModel::where('email', $input['email'])->where('token', $input['token'])->update(['deleted_at' => date('Y-m-d H:i:s')]);
            return $this->sendSuccessResponse($user,'Đổi mật khẩu thành công');
        }else{
            return $this->sendErrorResponse('Đổi mật khẩu không thành công');
        }

    }
}
