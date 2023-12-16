<?php

namespace Database\Seeders;

use App\Enums\Order\OrderStatusEnum;
use App\Enums\Transaction\TransactionStatusEnum;
use App\Models\OrderModel;
use App\Models\TransactionModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        TransactionModel::factory()->count(100)->create()->each(function ($transaction) {
            if ($transaction->status == TransactionStatusEnum::SUCCESS) {
                $order = OrderModel::find($transaction->order_id);
                $order->update([
                    'status' => OrderStatusEnum::PAYED
                ]);
            }
        });

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
