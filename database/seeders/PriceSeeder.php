<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('prices')->truncate();

        $data = [
            [
                "name" => "Cơ bản",
                "price" => "29500000",
                "description" => "Phù hợp với cây lâu năm",
                "note" => "Kênh châm phân rời: 5.900.000/kênh",
                "detail" => "<ul><li>10 chế độ tưới</li><li>Cài đặt qua App/Web</li><li>Định lượng nước theo tính toán</li><li>Định lượng phân theo tính toán</li><li>Tối đa 2 khu vược tưới</li><li>Có sẵn 2 kênh châm phân</li><li>Mở rộng tối đa 4 kênh châm phân</li><li>Báo cáo lịch sử tưới</li><li>Tặng miễn phí phần mềm truy xuất 1 năm</li></ul>",
                "warranty" => 1,
                "product_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "Nâng cao",
                "price" => "49500000",
                "description" => "Phù hợp cho diện tích <6000m2",
                "note" => "Kênh châm phân rời: 10.000.000/kênh",
                "detail" => "<ul><li>20 chế độ tưới</li><li>Cài đặt trên Web/App</li><li>Định lượng nước theo tính toán</li><li>Định lượng phân tự động</li><li>Tối đa 6 khu vực tưới</li><li>Có sẵn 2 kênh châm phân</li><li>Mở rộng tối đa 6 kênh</li><li>Báo cáo lịch sử tưới</li><li>Tặng miễn phí phần mềm truy xuất 1 năm</li></ul>",
                "warranty" => 1,
                "product_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "Đặc biệt",
                "price" => "99000000",
                "description" => "Dành cho tất cả các loại cây",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>60 chế độ tưới</li><li>Cài đặt qua Web/App</li><li>Định lượng phân tự động</li><li>Định lượng nước tự động</li><li>Tối đa 12 khu vực tưới</li><li>Có sẵn 2 kênh châm phân</li><li>Mở rộng tối đa 11 kênh</li><li>Báo cáo lịch sử tưới</li><li>Tặng miễn phí phần mềm truy xuất 1 năm</li><li>Tưới tự động theo mùa vụ</li><li>Tích hợp điều khiển vi khí hậu</li><li>Đã có sẵn: Hệ thống lọc lớn, bảo vệ đường ống, phần mềm cảnh báo khi hết nước, hết phân, quá tải,..</li></ul>",
                "warranty" => 1,
                "product_id" => 1,
                "status" => 1,
            ],
            [
                "name" => "Junior",
                "price" => "27900000",
                "description" => "Bộ cơ bản",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>6 cảm biến đầu vào</li><li>Cài đặt điều khiển tự động qua App/Web</li><li>Điều khiển 6 thiết bị đầu ra</li><li>Ngôn ngữ tiếng Việt / tiếng Anh</li><li>Báo cáo lịch sử hoạt động</li><li>Tặng miễn phí phần mềm truy xuất 1 năm</li></ul>",
                "warranty" => 1,
                "product_id" => 2,
                "status" => 1,
            ],
            [
                "name" => "Pro 16",
                "price" => "29900000",
                "description" => "Bộ nâng cao",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>16 cảm biến đầu vào</li><li>Cài đặt điều khiển tự động trên Web/App</li><li>Điều khiển 16 thiết bị đầu ra</li><li>Ngôn ngữ tiếng Việt / tiếng Anh</li><li>Báo cáo lịch sử hoạt động</li><li>Tặng miễn phí phần mềm truy xuất 1 năm</li></ul>",
                "warranty" => 1,
                "product_id" => 2,
                "status" => 1,
            ],
            [
                "name" => "Pro 32",
                "price" => "40000000",
                "description" => "Bộ cao cấp",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>32 cảm biến đầu vào</li><li>Cài đặt điều khiển qua Web/App</li><li>Điều khiển 32 thiết bị đầu ra</li><li>Ngôn ngữ tiếng Việt / tiếng Anh</li><li>Báo cáo lịch sử hoạt động</li><li>Tặng miễn phí phần mềm truy xuất 1 năm</li><li>Tặng 1 bộ cảm biến nhiệt độ, độ ẩm và cường độ ánh sáng</li></ul>",
                "warranty" => 2,
                "product_id" => 2,
                "status" => 1,
            ],
            [
                "name" => "Truy xuất nguồn gốc cơ bản",
                "price" => "3900000",
                "description" => "Cơ bản",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>Không giới hạn sản phẩm</li><li>Phạm vi cho 1 farm</li><li>20-30 user</li><li>Quản lý số lượng quét mã QR</li><li>Sử dụng Form truy xuất có sẵn của Nextfarm</li><li>Miễn phí năm thứ 2</li></ul>",
                "warranty" => 2,
                "product_id" => 4,
                "status" => 1,
            ],
            [
                "name" => "Nâng cao",
                "price" => "11900000",
                "description" => "Tích hợp quản lý farm",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>Quản lý trang trại</li><li>Số hóa nhật ký</li><li>Quản lý quy trình sản xuất</li><li>Giao việc nhân viên</li><li>Cảnh báo sâu bệnh</li><li>Dự báo sâu bệnh</li><li>Đẩy dữ liệu lên Blockchain tăng tính minh bạch</li></ul>",
                "warranty" => 2,
                "product_id" => 4,
                "status" => 1,
            ],
            [
                "name" => "Tuỳ chỉnh",
                "price" => "29900000",
                "description" => "Tùy chỉnh theo yêu cầu",
                "note" => "Kênh châm phân rời: 19.000.000/kênh",
                "detail" => "<ul><li>Tích hợp phần mềm bán hàng</li><li>Tích hợp phần mềm CRM</li><li>Dự báo sản lượng</li><li>Tùy chỉnh báo cáo</li><li>Tùy chỉnh nghiệp vụ quản lý</li></ul>",
                "warranty" => 2,
                "product_id" => 4,
                "status" => 1,
            ]
        ];

        DB::table('prices')->insert($data);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
