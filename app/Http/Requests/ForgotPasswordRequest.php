<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\_Abstract\ApiBaseRequest;

class ForgotPasswordRequest extends ApiBaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
        ];
    }
}
