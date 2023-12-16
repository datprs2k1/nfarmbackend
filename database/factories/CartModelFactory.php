<?php

namespace Database\Factories;

use App\Models\PriceModel;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartModel>
 */
class CartModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantity' => rand(1, 10),
            'price_id' => PriceModel::inRandomOrder()->first()->id,
            'user_id' => UserModel::inRandomOrder()->first()->id,
        ];
    }
}
