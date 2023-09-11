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
            'email' => 'required|max:255|email',
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'password' => 'required|max:255',
            'ref_code' => 'required|max:255',
        ];
    }
}
