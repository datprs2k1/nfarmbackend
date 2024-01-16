<?php

namespace App\Http\Requests;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends ApiBaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password' => 'required|current_password',
            'new_password' => 'required|confirmed',
        ];
    }
}
