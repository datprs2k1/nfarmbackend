<?php

namespace App\Http\Requests\Account;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use Illuminate\Foundation\Http\FormRequest;

class AccountBankUpdateRequest extends ApiBaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'bank_name' => [
                'required',
                'max:255'
            ],
            'bank_branch' => [
                'required',
                'max:255'
            ],
            'account_name' => [
                'required',
                'max:255'
            ],
            'account_number' => [
                'required',
                'max:255'
            ]
        ];
    }
}
