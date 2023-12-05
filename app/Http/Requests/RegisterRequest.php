<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstract\ApiBaseRequest;

class RegisterRequest extends ApiBaseRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|max:255|email|unique:users',
            'name' => 'required|max:255',
            'phone' => 'required|max:15|unique:users',
            'password' => 'required|max:255|min:6',
        ];
    }

    public function attributes() {
        return [
            'email' => 'Địa chỉ email',
            'password' => 'Mật khẩu',
            'name' => 'Tên',
            'phone' => 'Số điện thoại'
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute tối đa :max ký tự',
            'string' => ':attribute phải là kiểu ký tự',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'email' => ':attribute phải là dạng email',
            'unique' => ':attribute đã tồn tại',
        ];
    }
}
