<?php

namespace App\Http\Requests\Account;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class AccountUpdateRequest extends ApiBaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required'
            ],
            'email'=> [
                'required',
                'max:255',
                'email'
            ],
            'phone' => [
                'required',
                'max:15'
            ],
            'avatar' => [
                'nullable',
                'image'
            ],
            'dob' => [
                'required',
                'date'
            ],
            'address' => [
                'required',
                'max:255',
            ],
            'ward' => [
                'required',
                'max:255',
            ],
            'district' => [
                'required',
                'max:255',
            ],
            'province' => [
                'required',
                'max:255',
            ],
            'identity_number' => [
                'required',
                'max:15',
            ],
            'identity_front' => [
                'nullable',
                'image',
            ],
            'identity_back' => [
                'nullable',
                'image',
            ]
        ];
    }
}
