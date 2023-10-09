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
                'description' => 'Hệ sinh thái phần mềm hỗ trợ Nông nghiệp',
                'type' => CategoryTypeEnum::getValue('PRODUCT'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NextX AI',
                'description' => 'Nền tảng trí tuệ nhân tạo nextX AI',
                'type' => CategoryTypeEnum::getValue('PRODUCT'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Giải pháp IOT',
                'description' => 'Các giải pháp Internet vạn vật',
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
                'name' => 'FERTIKIT 4G',
                'description' => 'Máy châm phân đinh dưỡng',
                'type' => CategoryTypeEnum::getValue('PRICE'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NMC',
                'description' => 'Hệ thống quan trắc và điều khiển',
                'type' => CategoryTypeEnum::getValue('PRICE'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'QR CHECK',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('PRICE'),
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
                'name' => 'HỆ THỐNG TƯỚI',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'KIẾN THỨC NÔNG NGHIỆP',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'LĨNH VỰC',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'THIẾT BỊ',
                'description' => 'Các hệ thống sản phẩm khác',
                'type' => CategoryTypeEnum::getValue('POST'),
                'status' => CategoryStatusEnum::getValue('ACTIVE'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TRUYỀN THÔNG',
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
