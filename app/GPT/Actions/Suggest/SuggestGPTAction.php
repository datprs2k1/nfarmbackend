<?php

namespace App\GPT\Actions\Suggest;

use App\Models\ProductModel;
use App\Models\UserModel;
use MalteKuhr\LaravelGPT\GPTAction;
use Closure;

class SuggestGPTAction extends GPTAction
{
    public function __construct(
    ) {}

    public function systemMessage(): ?string
    {
        return 'Tìm sản phẩm đáp ứng yêu cầu.';
    }

    public function function(): Closure
    {
        return function (string $query) {
            $products = ProductModel::with('prices')->search($query)->take(3)->get();

            return [
                'results' => $products
            ];
        };
    }

    public function rules(): array
    {
        return [
            'query' => 'required|string|max:255',
        ];
    }
}
