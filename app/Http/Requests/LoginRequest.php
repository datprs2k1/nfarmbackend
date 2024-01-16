<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends ApiBaseRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'email' => [
                'nullable',
                'max:255',
],
            'password' => [
                'required',
                'string',
                'max:50',
                'min:6'
            ]
        ];
    }
}
