<?php

namespace Database\Seeders;

use App\Models\CartModel;
use App\Models\PriceModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        CartModel::factory()->count(100)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
