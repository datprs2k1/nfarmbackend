<?php

namespace App\Http\Requests\Product;

use App\Enums\Product\ProductStatusEnum;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Illuminate\Validation\Rule;

class ProductStoreRequest extends ApiBaseRequest
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
                Rule::unique(ProductModel::class),
            ],
            'description' => [
                'required',
                'string',
            ],
            'detail' => [
                'required',
                'string',
            ],
            'future' => [
                'required',
                'string',
            ],
            'image' => 'required|array|min:1',
            'image.*' => [
                'required',
                'mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            'status' => [
                'required',
                'string',
                Rule::in(ProductStatusEnum::getValues()),
            ],
            'category_id' => [
                'required',
                Rule::exists(CategoryModel::class, 'id'),
            ],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên bài viết',
            'description' => 'Mô tả',
            'description' => 'Nội dung',
            'description' => 'Ảnh',
            'type' => 'Loại',
            'status' => 'Trạng thái',
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
