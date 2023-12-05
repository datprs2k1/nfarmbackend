<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserChangePasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'password' => [
                'required',
                'min:6',
                'current_password'
            ],
            'newpassword' => [
                'required',
                'min:6',
                'confirmed'
            ]
        ];
    }

    public function attributes() {
        return [
            'password' => 'Mật khẩu',
            'newpassword' => 'Mật khẩu mới'
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute không được để trống.',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'current_password' => 'Mật khẩu không chính xác',
            'confirmed' => 'Mật khẩu mới không khớp'
        ];
    }
}

