<?php

namespace Database\Factories;

use App\Enums\Order\OrderStatusEnum;
use App\Enums\Transaction\TransactionStatusEnum;
use App\Models\OrderModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TransactionModel>
 */
class TransactionModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $order = OrderModel::where('status', OrderStatusEnum::PENDING)->inRandomOrder()->first();
        return [
            'code' => fake()->numerify('######'),
            'status' => TransactionStatusEnum::getRandomValue(),
            'message' => "Thanh toan hoa don $order->id",
            'total' => $order->total,
            'order_id' => $order->id,
            'user_id' => $order->user_id
        ];
    }
}
