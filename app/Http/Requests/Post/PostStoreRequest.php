<?php

namespace App\Http\Requests\Post;

use App\Enums\Post\PostStatusEnum;
use App\Enums\Post\PostTypeEnum;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\PostModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostStoreRequest extends ApiBaseRequest
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
                Rule::unique(PostModel::class)
            ],
            'description' => [
                'required',
                'string',
            ],
            'content' => [
                'required',
                'string',
            ],
            'image' =>
                'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ,
            'status' => [
                'required',
                'string',
                Rule::in(PostStatusEnum::getValues())
            ],
            'category_id' => [
                'required',
                Rule::exists(CategoryModel::class, 'id')
            ]
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
