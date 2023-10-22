<?php

namespace Database\Seeders;

use App\Enums\Category\CategoryStatusEnum;
use App\Enums\Category\CategoryTypeEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();

        $data = [
            [
                'name' => 'Giải pháp IOT',
                'description' => 'Các giải pháp Internet vạn vật',
                'type' => CategoryTypeEnum::getValue('PRODUCT'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Phần mềm',
                'description' => 'Hệ sinh thái phần mềm',
                'type' => CategoryTypeEnum::getValue('PRODUCT'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NextX AI',
                'description' => 'Nền tảng trí tuệ nhân tạo',
                'type' => CategoryTypeEnum::getValue('PRODUCT'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sản phẩm khác',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('PRODUCT'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Câu chuyện thành công',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chuyển đổi số',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hệ thống tưới',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kiến thức nông nghiệp',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lĩnh vực',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thiết bị',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Truyền thông',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('categories')->insert($data);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }
}
