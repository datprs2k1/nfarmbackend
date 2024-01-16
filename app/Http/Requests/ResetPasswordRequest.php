<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\_Abstract\ApiBaseRequest;

class ResetPasswordRequest extends ApiBaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'token' => 'string|required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }
}
