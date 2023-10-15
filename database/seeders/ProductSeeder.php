<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!File::isDirectory(public_path('storage/products'))) {
            File::makeDirectory(public_path('storage/products'), 0777, true, true);
        }

        File::copy(public_path('images/products/1.png'), public_path('storage/products/1.png'));
        File::copy(public_path('images/products/2.png'), public_path('storage/products/2.png'));
        File::copy(public_path('images/products/3.png'), public_path('storage/products/3.png'));
        File::copy(public_path('images/products/4.png'), public_path('storage/products/4.png'));

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();

        $data = [
            [
                'name' => 'Nextfarm Fertikit 4G',
                'description' => 'Hệ thống châm phân dinh dưỡng tự động',
                'image' => collect([
                    '1.png',
                    '2.png',
                    '3.png',
                    '4.png',
                ]),
                'detail' => '<ul><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Trên 1000 khách hàng trên toàn quốc đang sử dụng NextFarm Fertikit 4G</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Hệ thống điều tiết dinh dưỡng phổ biến nhất tại Việt Nam.</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Phù hợp với cây giá trị kinh tế cao với phiên bản Nextfarm Fertikit 4G đặc biệt, với cây dài ngày, lâu năm thì sử dụng Nextfarm Fertikit 4G bản nâng cao</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Định lượng phân và nước cam kết nhỏ hơn 2%</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Điều chỉnh tưới theo chỉ số PH và EC</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Thu thập dữ liệu môi trường, điều khiển vi khí hậu nhà màng, thiết bị ngoại vi đầu ra</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Trộn inline ngay trong đường ống, đảm bảo tính không kết tủa các loại phân hòa tan như AB.... tiết kiệm phân và nước.</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Tích hợp dữ liệu cây trồng Nextfarm Insight Data</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Tích hợp phần mềm quản lý trang trại NextX Farm</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Toàn bộ thao tác qua điện thoại, cấu hình tưới, cấu hình máy.</span></li><li><span style="color: rgb(0, 0, 0); background-color: transparent;">Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</span></li></ul>',
                'future' => '<h3>Định lượng chính xác</h3><p>Nextfarm Fertikit 4G áp dụng được cho nhiều loại cây trồng, trồng ngoài trời và trong nhà màng, nhà kính, cây ngắn ngày và cây lâu năm, cây có giá trị kinh tế cao ….</p><h3>Biểu đồ phân tích lưới</h3><p>Các hệ thống báo cáo biểu đồ phân tích dữ liệu tưới qua việc thu thập dữ liệu môi trường, tính toán chính xác định lượng theo cảm biến EC và PH</p><h3>Cấu hình tưới qua điện thoại</h3><p>Hệ thống có thể cấu hình tưới, đặt lịch tưới qua điện thoại smartphone qua các chế độ định lượng, theo thời gian, theo các khu vực tưới và cả theo loại cây trồng</p><h3>Tối ưu cho thị trường Việt Nam</h3><p>Tưới chính xác ngay cả khu vực tưới nhỏ, tối ưu theo thị trường Việt Nam, nguyên lý Nextfarm Fertikit 4G tương tự nguyên lý các bộ của Israel như Netafim, Naan nhưng giá bằng 1/3, phần mềm tối ưu mạnh mẽ riêng cho khi hậu cây trồng tại Việt Nam.</p><h3>Nextfarm Fertikit 4G đặc biệt</h3><p>Chế độ mix inline, bypass, phù hợp với các loại cây ngắn ngày, giá trị kinh tế cao</p><h3>Nextfarm Fertikit 4G nâng cao</h3><p>Chế độ mix inline, phù hợp các cây dài ngày.</p>',
                'status' => 1,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('products')->insert($data);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }
}
