<?php

namespace App\Http\Requests\User;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\UserModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserForgotPasswordRequest extends ApiBaseRequest
{
    public function rules()
    {
        return [
            'email' => [
                'required',
                'email',
                Rule::exists(UserModel::class)
            ]
        ];
    }

    public function attributes() {
        return [
            'email' => 'Địa chỉ email'
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'email'=> ':attribute phải là dạng email',
            'exists' => ':attribute không tồn tại'
        ];
    }
}
