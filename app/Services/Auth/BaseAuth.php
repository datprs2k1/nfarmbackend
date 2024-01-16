<?php

namespace App\Services\Auth;

use App\Enums\VerifyCode\VerifyCodeStatusEnum;
use App\Enums\VerifyCode\VerifyCodeTypeEnum;
use App\Models\PasswordResetModel;
use App\Models\UserModel;
use App\Models\VerifyCode;
use App\Repositories\PasswordReset\IPasswordResetRepo;
use App\Repositories\User\IUserRepository;
use App\Repositories\VerifyCode\IVerifyCodeRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\ApiResponse;
use App\Services\MailService\IMailService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Ramsey\Uuid\Uuid;

abstract class BaseAuth extends BaseService implements AuthContract
{
    use ApiResponse;
    protected string $guard;
    protected $mainRepository;
    protected $verifyCodeRepository;
    protected $mailService;

    function __construct(IUserRepository $mainRepository, IVerifyCodeRepository $verifyCodeRepository, IMailService $mailService)
    {
        $this->mainRepository = $mainRepository;
        $this->verifyCodeRepository = $verifyCodeRepository;
        $this->mailService = $mailService;
    }
    /**
     * @throws AppServiceException
     */
    public function login(array $attempt)
    {
        $attempt['email'] = $attempt['email'] ?? null;
        $attempt['phone'] = $attempt['phone'] ?? null;

        $user = $this->mainRepository
        ->where('email', $attempt['email'])
        ->orWhere('phone', $attempt['email'])
        ->first();

        if (!$user || !Hash::check($attempt['password'], $user->password)) {
            throw new AppServiceException(__("auth.failed"));
        }

        if (!$token = auth($this->guard)->login($user)) {
            throw new AppServiceException(__("auth.failed"));
        }
        $userData = auth($this->guard)->user();
        return $this->sendSuccessResponse([
            'user' => $userData,
            'token' => $token,
        ]);
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

        $user->info()->create([]);

        return $this->sendSuccessResponse($user);
    }

    public function submitForgetPasswordForm($request)
    {
        return DbTransactions()->addCallbackJson(function () use ($request) {

            $token =  Uuid::uuid4()->toString();

            $user = UserModel::where('email', $request['email'])->first();

            if (!$user) {
                throw new AppServiceException("Email không tồn tại.");
            }

            $codes = $user->verifyCodes()->where('type', VerifyCodeTypeEnum::FORGOT_PASSWORD);

            $codes->update([
                'status' => VerifyCodeStatusEnum::USED
            ]);

            $verifyCode = $user->verifyCodes()->create([
                'code' => $token,
                'type' => VerifyCodeTypeEnum::FORGOT_PASSWORD,
            ]);

            $url = route('resetPassword', [
                'code' => $verifyCode->code,
            ]);

            $this->mailService->sendForgotPassword($request['email'], $url);

            return $this->sendSuccessResponse("Vui lòng kiểm tra email");
        });
    }

    public function resetPassword($input)
    {
        return DbTransactions()->addCallbackJson(function () use ($input) {
            $code = $this->verifyCodeRepository->findWhere([
                'code' => $input['code'],
                'type' => VerifyCodeTypeEnum::FORGOT_PASSWORD,
                'status' => VerifyCodeStatusEnum::NOT_USE,
                ])->first();

            if(!$code)
            {
                throw new AppServiceException('Mã không tồn tại hoặc đã được dùng.');
            }

            $code = $code->load('user');

            $user = $code->user;

            $password = Hash::make($input['password']);
            $user->update(['password'=> $password]);

            $code->update([
                'status' => VerifyCodeStatusEnum::USED
            ]);

            return $this->sendSuccessResponse("Đổi mật khẩu thành công");
        });

    }

    public function changePassword($input)
    {
        return DbTransactions()->addCallbackJson(function () use ($input) {
            $password = Hash::make($input['new_password']);

            $user = auth()->user();

            $user->update(['password'=> $password]);

            return $this->sendSuccessResponse("Đổi mật khẩu thành công");
        });

    }
}
