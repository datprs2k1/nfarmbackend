<?php

namespace Database\Seeders;

use App\Enums\Order\OrderStatusEnum;
use App\Http\Controllers\Admin\OrderController;
use App\Models\UserModel;
use App\Services\OrderService\OrderService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Log\Logger;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     protected $orderService;

     public function __construct(OrderService $orderService) {
        $this->orderService = $orderService;
     }
    public function run()
    {
        //
        $users = UserModel::where('role_id', 2)->get();

        $users->each(function($user) {
            Auth::attempt([
                'email' => $user->email,
                'password' => 'Hoangdat9a'
            ]);

            $this->orderService->create([
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'address' => fake()->secondaryAddress(),
                'district' => fake()->city(),
                'ward' => fake()->city(),
                'province' => fake()->city(),
                'note' => fake()->word()
            ]);

            Auth::logout();
        });
    }
}
