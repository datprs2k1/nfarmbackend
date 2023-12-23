<?php

namespace App\GPT\Functions;

use App\Models\ProductModel;
use MalteKuhr\LaravelGPT\GPTFunction;
use Closure;
use Illuminate\Support\Facades\Log;

class KnowledgeProductGPTFunction extends GPTFunction
{
    /**
     * Specifies a function to be invoked by the model. The function is implemented as a
     * Closure which may take parameters that are provided by the model. If extra arguments
     * are included in the documentation to optimize model's performance (by allowing it more
     * thinking time), these can be disregarded by not including them within the Closure
     * parameters.
     *
     * If the Closure returns null, the chat interaction is paused until the 'send()' method in
     * the request is invoked again. For all other return values, the response is JSON encoded
     * and forwarded to the model for further processing.
     *
     * @return Closure
     */
    public function function(): Closure
    {
        return function (string $query) {
            $products = ProductModel::search($query)->take(1)->get()->load('prices');

            $a = [
                'results' => $products->map(fn ($product) => [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description' => $product->description,
                    'future' => strip_tags($product->future),
                    'detail' => strip_tags($product->detail),
                    'prices' => $product->prices->map(fn ($price) => [
                        'price' => $price->price,
                        'name' => $price->name,
                        'description' => $price->description,
                        'note' => $price->note,
                        'detail' => strip_tags($price->detail),
                        'warranty' => $price->warranty,
                    ])
                ])
            ];

            return $a;
        };
    }

    /**
     * Defines the rules for input validation and JSON schema generation. Override this
     * method to provide custom validation rules for the function. The documentation will
     * have the same order as the rules are defined in this method.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'query' => 'required|string|max:255',
        ];
    }

    /**
     * Describes the purpose and functionality of the GPT function. This is utilized
     * for generating the function documentation.
     *
     * @return string
     */
    public function description(): string
    {
        return 'Đưa ra câu trả lời đúng nhất';
    }
}
