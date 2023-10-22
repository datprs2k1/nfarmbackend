<?php

namespace App\Http\Requests\Price;

use App\Enums\Price\PriceStatusEnum;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\CategoryModel;
use App\Models\PriceModel;
use App\Models\ProductModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PriceStoreRequest extends ApiBaseRequest
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
                'required',
                'string',
                'max:255',
            ],
            'price' => [
                'required',
                'string',
            ],
            'description' => [
                'required',
                'string',
            ],
            'detail' => [
                'required',
                'string',
            ],
            'note' => [
                'nullable',
                'string',
            ],
            'warranty' => [
                'required',
                'string',
            ],
            'status' => [
                'required',
                'string',
                Rule::in(PriceStatusEnum::getValues())
            ],
            'product_id' => [
                'required',
                Rule::exists(ProductModel::class, 'id')
            ]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên bài viết',
            'description' => 'Mô tả',
            'type' => 'Loại',
            'status' => 'Trạng thái'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Vui lòng nhập :attribute',
            'string' => ':attribute phải là chuỗi',
            'max' => ':attribute không được vượt quá 255 ký tự',
            'in' => ':attribute không hợp lệ',
        ];
    }
}
