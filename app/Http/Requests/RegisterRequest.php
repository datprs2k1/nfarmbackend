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
            'phone' => 'required|max:255|unique:users',
            'password' => 'required|max:255|confirmed',
            'ref_code' => 'nullable|max:255',
        ];
    }
}
