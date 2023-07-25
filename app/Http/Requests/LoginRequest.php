<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

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
            'email' => 'required|max:255|required|email',
            'password' => 'required|string|max:50|min:6'
        ];
    }
}
