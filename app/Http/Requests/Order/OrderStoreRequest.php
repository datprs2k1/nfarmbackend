<?php

namespace App\Http\Requests\Order;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends ApiBaseRequest
{
    public function rules()
    {
        return [
            'first_name' => [
                'required',
                'string'
            ],
            'last_name' => [
                'required',
                'string'
            ],
            'email' => [
                'required',
                'email'
            ],
            'phone' => [
                'required',
                'string',
                'digits:10'
            ],
            'address' => [
                'required',
                'string'
            ],
            'district' => [
                'required',
                'string'
            ],
            'ward' => [
                'required',
                'string'
            ],
            'province' => [
                'required',
                'string'
            ],
            'note' => [
                'nullable',
                'string'
            ],
        ];
    }

    public function attributes() {
        return [
            'first_name' => 'Tên',
            'last_name' => 'Họ',
            'email' => 'Địa chỉ email',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'district' => 'Xã/Phường',
            'ward' => 'Quận/Huyện',
            'province' => 'Tỉnh/Thành phố',
            'note' => 'Ghi chủ'
        ];
    }

    public function messages() {
        return [
            'required' => ':attribute không được để trống',
            'max' => ':attribute tối đa :max ký tự',
            'string' => ':attribute phải là kiểu ký tự',
            'min' => ':attribute phải có ít nhất :min ký tự',
            'email' => ':attribute phải là dạng email',
            'digits' => ':attribute phải có :digits số',
        ];
    }
}
