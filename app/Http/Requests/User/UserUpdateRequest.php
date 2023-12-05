<?php

namespace App\Http\Requests\User;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends ApiBaseRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'phone' => [
                'required',
                'string',
                'min:10',
                'max:15',
                Rule::unique('users')->ignore(auth()->user()->id)
            ]
        ];
    }

    public function attributes() {
        return [
            'name' => 'Tên',
            'phone' => 'Số điên thoại'
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'string' => ':attribute phải là ký tự',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'max' => ':attribute tối đa :max ký tự',
            'unique' => ':attribute đã tồn tại'
        ];
    }
}
