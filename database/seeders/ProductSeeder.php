<?php

namespace Database\Seeders;

use App\Models\ProductModel;
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
        File::copy(public_path('images/products/5.png'), public_path('storage/products/5.png'));
        File::copy(public_path('images/products/6.png'), public_path('storage/products/6.png'));
        File::copy(public_path('images/products/7.png'), public_path('storage/products/7.png'));
        File::copy(public_path('images/products/8.png'), public_path('storage/products/8.png'));
        File::copy(public_path('images/products/9.png'), public_path('storage/products/9.png'));
        File::copy(public_path('images/products/10.png'), public_path('storage/products/10.png'));
        File::copy(public_path('images/products/11.png'), public_path('storage/products/11.png'));
        File::copy(public_path('images/products/12.png'), public_path('storage/products/12.png'));
        File::copy(public_path('images/products/13.png'), public_path('storage/products/13.png'));
        File::copy(public_path('images/products/14.png'), public_path('storage/products/14.png'));
        File::copy(public_path('images/products/15.png'), public_path('storage/products/15.png'));
        File::copy(public_path('images/products/16.png'), public_path('storage/products/16.png'));
        File::copy(public_path('images/products/17.png'), public_path('storage/products/17.png'));
        File::copy(public_path('images/products/18.png'), public_path('storage/products/18.png'));
        File::copy(public_path('images/products/19.png'), public_path('storage/products/19.png'));
        File::copy(public_path('images/products/20.png'), public_path('storage/products/20.png'));
        File::copy(public_path('images/products/21.png'), public_path('storage/products/21.png'));
        File::copy(public_path('images/products/22.png'), public_path('storage/products/22.png'));
        File::copy(public_path('images/products/23.png'), public_path('storage/products/23.png'));
        File::copy(public_path('images/products/24.png'), public_path('storage/products/24.png'));
        File::copy(public_path('images/products/25.png'), public_path('storage/products/25.png'));


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
                'detail' => '<ul><li>Trên 1000 khách hàng trên toàn quốc đang sử dụng NextFarm Fertikit 4G</li><li>Hệ thống điều tiết dinh dưỡng phổ biến nhất tại Việt Nam.</li><li>Phù hợp với cây giá trị kinh tế cao với phiên bản Nextfarm Fertikit 4G đặc biệt, với cây dài ngày, lâu năm thì sử dụng Nextfarm Fertikit 4G bản nâng cao</li><li>Định lượng phân và nước cam kết nhỏ hơn 2%</li><li>Điều chỉnh tưới theo chỉ số PH và EC</li><li>Thu thập dữ liệu môi trường, điều khiển vi khí hậu nhà màng, thiết bị ngoại vi đầu ra</li><li>Trộn inline ngay trong đường ống, đảm bảo tính không kết tủa các loại phân hòa tan như AB.... tiết kiệm phân và nước.</li><li>Tích hợp dữ liệu cây trồng Nextfarm Insight Data</li><li>Tích hợp phần mềm quản lý trang trại NextX Farm</li><li>Toàn bộ thao tác qua điện thoại, cấu hình tưới, cấu hình máy.</li><li>Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</li></ul>',
                'future' => '<h3>Định lượng chính xác</h3><p>Nextfarm Fertikit 4G áp dụng được cho nhiều loại cây trồng, trồng ngoài trời và trong nhà màng, nhà kính, cây ngắn ngày và cây lâu năm, cây có giá trị kinh tế cao ….</p><h3>Biểu đồ phân tích lưới</h3><p>Các hệ thống báo cáo biểu đồ phân tích dữ liệu tưới qua việc thu thập dữ liệu môi trường, tính toán chính xác định lượng theo cảm biến EC và PH</p><h3>Cấu hình tưới qua điện thoại</h3><p>Hệ thống có thể cấu hình tưới, đặt lịch tưới qua điện thoại smartphone qua các chế độ định lượng, theo thời gian, theo các khu vực tưới và cả theo loại cây trồng</p><h3>Tối ưu cho thị trường Việt Nam</h3><p>Tưới chính xác ngay cả khu vực tưới nhỏ, tối ưu theo thị trường Việt Nam, nguyên lý Nextfarm Fertikit 4G tương tự nguyên lý các bộ của Israel như Netafim, Naan nhưng giá bằng 1/3, phần mềm tối ưu mạnh mẽ riêng cho khi hậu cây trồng tại Việt Nam.</p><h3>Nextfarm Fertikit 4G đặc biệt</h3><p>Chế độ mix inline, bypass, phù hợp với các loại cây ngắn ngày, giá trị kinh tế cao</p><h3>Nextfarm Fertikit 4G nâng cao</h3><p>Chế độ mix inline, phù hợp các cây dài ngày.</p>',
                'status' => 1,
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm NMC",
                "image" => collect([
                    "1.png",
                    "5.png",
                    "6.png"
                ]),
                "description" => "Hệ thống giám sát nông nghiệp thông minh",
                "detail" => "<ul><li>Trên 1000 khách hàng trên toàn quốc đang sử dụng NextFarm Fertikit 4G và NextFarm NMC</li><li>Hệ thống điều khiển vi khí hậu nhà màng với trong nhà màng, giám sát nông nghiệp thông minh với ngoài trời</li><li>Phù hợp cây giá tri kinh tế cao như hoa, dược liệu, cần điều tiết vi khí hậu</li><li>Quan trắc môi trường các thông số cảm biến: nhiệt độ, độ ẩm, cường độ ánh sáng, CO2,....</li><li>Quan trắc môi trường nước như: PH, EC, DO, ORP.. với thủy hải sản</li><li>Dựa vào đầu vào để từ đó điều khiển các thiết bị đầu ra</li><li>Tích hợp Nextfarm IoT Gateway trong việc truyền thông dũ liệu đẩy lên mạng</li><li>Tích hợp dữ liệu cây trồng Nextfarm Insight Data</li><li>Tích hợp phần mềm quản lý trang trại NextX Farm</li><li>Toàn bộ thao tác qua điện thoại, cấu hình điều khiển thiết bị ngoại vi, cấu hình máy.</li><li>Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</li></ul>",
                "future" => "<h3>Điều khiển chính xác</h3><p>Nextfarm NMC áp dụng được cho nhiều loại cây trồng, trồng ngoài trời và trong nhà màng, nhà kính, cây ngắn ngày và cây lâu năm, cây có giá trị kinh tế cao ….</p><h3>Biểu đồ phân tích lích sử bật tắt cùng cảm biến</h3><p>Các hệ thống báo cáo biểu đồ phân tích dữ liệu bật tắt, điều kiện môi trường…&nbsp;</p><h3>Cấu hình hệ thống điều khiển qua điện thoại</h3><p>Cấu hình hệ thống điều khiển ngay trên điện thoại, thiết lập các ngưỡng bật tắt tích hợp cùng cảm biến dữ liệu môi trường.</p><h3>Tích hợp camera nhận diện</h3><p>Với phiên bản Nextfarm NMC V22023 còn tích hợp bộ nhận diện camera giám sát, tự động chụp ảnh, phân tích điểm dị thường qua nền tảng Reddas</p>",
                "category_id" => 1,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm Breeding",
                "image" => collect([
                    "7.png",
                    "7.png",
                    "8.png",
                    "9.png"
                ]),
                "description" => "Hệ thống giám sát trang trại",
                "detail" => "<ul><li>Trên 1000 khách hàng trên toàn quốc đang sử dụng</li><li>Hệ thống quản lý vật nuôi tốt nhất tại Việt Nam.</li><li>Phù hợp với các mô hình chăn nuôi</li><li>Thu thập, lưu trữ các dữ liệu chính xác</li><li>Nắm bắt được tình hình sức khỏe trên từng các thể nhằm đưa ra các phương án chăm sóc và điều trị khi gặp vấn đề</li><li>Tích hợp phần mềm quản lý trang trại Next Farm</li><li>Toàn bộ thao tác qua điện thoại,</li><li>Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</li></ul>",
                "future" => "<h3>Thu thập dữ liệu</h3><p>Hệ thống giúp các chủ doanh nghiệp nắm bắt được tình hình thực tế tại trang trại nhằm đưa ra các phương án khắc phục và xử lý khi gặp vấn đề</p><h3>Định vị</h3><p>Nắm bắt được lộ trình di chuyển của từng cá thể theo thời gian thực một cách chính xác nhằm bảo vệ tài sản</p><h3>Giám sát từng cá thể vật nuôi qua điện thoại</h3><p>Hệ thống có thể giám sát hành trình di chuyển của vật nuôi theo thời gian thực qua điện thoại smartphone</p><h3>Bảo vệ tài sản cho khách hàng</h3><p>Cập nhật hành trình và vị trí vật nuôi chính xác ngay cả các khu vực có địa hình phức tạp thông qua GPS tích hợp trên hệ thống</p><h3>Bản nâng cao</h3><p>Phù hợp với mô hình nuôi nhốt lẫn chăn thả</p><h3>Bản cơ bản</h3><p>Phù hợp với các trang trại</p>",
                "category_id" => 1,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm QR Check",
                "image" => collect([
                    "10.png",
                    "11.png",
                    "11.png",
                    "12.png"
                ]),
                "description" => "Giải pháp truy xuất ngồn gốc",
                "detail" => "<ul><li>Truy xuất nguồn gốc của Nextfarm là một giải pháp tổng thể, tích hợp phần mềm quản lý trang trại NextX Farm chuyên cho Nông nghiệp, truy xuất mùa vụ công việc cây trồng</li><li>Tích hợp truy xuất nguồn gốc nông sản, minh bạch hóa quá trình sản xuất</li><li>Truy xuất quản lý mùa vụ, công việc, dự báo sản lượng qua các mùa vụ dựa vào diện tích trồng, thời gian thu hoạch theo từng mùa vụ khác nhau</li><li>Thống kế scan mà truy xuất nguồn gốc</li><li>Có 2 gói: Truy xuất Blockchain và truy xuất bình thường</li><li>In mã QR code ngay trên mobile app</li><li>Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</li></ul>",
                "future" => "<h3>Quản lý mùa vụ</h3><p>Quản lý mùa vụ trồng, cây trồng, số luống, thời điểm gieo, dự báo sản lượng qua từng mùa vụ</p><h3>Quản lý công việc</h3><p>Quản lý công việc trồng, theo dõi quá trình trồng, báo cáo các công việc hoàn thành hay chưa hoàn thành…</p><h3>Truy xuất nguồn gốc Nông sản</h3><p>Hệ thống truy xuất nguồn gốc nông sản tích hợp quy trình trồng, minh bạch hóa toàn bộ hoạt động trang trại trồn</p><h3>Dự báo sản lượng hợp tác xã, trang trại</h3><p>Hệ thống tổng hợp toàn bộ dữ liệu trang trại để thống kế ra sản lượng trang trại, thời điểm thu hoạch ước tính</p><h3>Mobile App mạnh mẽ - Toàn bộ hoạt động qua mobile</h3><p>NextX Farm tự hào là một trong các bên cung cấp phần mềm quản lý trang trại, dự báo sản lượng và truy xuất nguồn gốc có mobile app đầy đủ nhất, khi toàn bộ hoạt động kinh doanh có thể được số hóa và thao tác trên mobile app: Báo cáo, tác vụ…</p>",
                "category_id" => 2,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm quản lý",
                "image" => collect([
                    "13.png",
                    "14.png",
                    "14.png",
                    "14.png",
                    "15.png"
                ]),
                "description" => "Phần mềm quản lý trang trại và dự báo sản lượng",
                "detail" => "<ul><li>Trên 1.000 khách hàng trên toàn quốc, mọi hoạt động chức năng trên phần mềm quản lý trang trại Nextfarm toàn bộ sử dụng ngay trên điện thoại.</li><li>Tích hợp truy xuất nguồn gốc nông sản, minh bạch hóa quá trình sản xuất</li><li>Quản lý vật tư, nguyên vật liệu, công cụ dụng cụ trong trang trại</li><li>Quản lý mùa vụ, công việc, dự báo sản lượng qua các mùa vụ dựa vào diện tích trồng, thời gian thu hoạch theo từng mùa vụ khác nhau</li><li>Quản lý bán hàng, doanh số, số lượng hàng bán</li><li>Quản lý nhập hàng, nhập vật tư nguyên liệu đầu vào, kho hàng, tồn kho</li><li>Sổ quỹ, tình hình thu chi trong trang trại</li><li>Tích hợp đa kênh, bán hàng đa sàn thương mại điện tử</li><li>Tích hợp với các đơn vị vận chuyển khác như GHN, GHTK... hay tự vận chuyển</li><li>Tích hợp Facebook Chat, Zalo Chat</li><li>Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</li></ul>",
                "future" => "<h3>Quản lý mùa vụ</h3><p>Quản lý mùa vụ trồng, cây trồng, số luống, thời điểm gieo, dự báo sản lượng qua từng mùa vụ</p><h3>Quản lý công việc</h3><p>Quản lý công việc trồng, theo dõi quá trình trồng, báo cáo các công việc hoàn thành hay chưa hoàn thành…</p><h3>Truy xuất nguồn gốc Nông sản</h3><p>Hệ thống truy xuất nguồn gốc nông sản tích hợp quy trình trồng, minh bạch hóa toàn bộ hoạt động trang trại trồn</p><h3>Dự báo sản lượng hợp tác xã, trang trại</h3><p>Hệ thống tổng hợp toàn bộ dữ liệu trang trại để thống kế ra sản lượng trang trại, thời điểm thu hoạch ước tính</p><h3>Quản lý bán hàng</h3><p>Thống kê doanh số bán hàng nông sản, phiếu bán hàng, phiếu đặt hàng và các trạng thái đơn hàng, phiếu trả hàng… tích hợp các đơn vị vận chuyển như GHN, GHTK, bán hàng đa kênh trên Facebook, Zalo hay các sàn TMD</p><h3>Quản lý vật tư, tồn kho, nhập hàng</h3><p>Quản lý tồn kho, vật tư, công cụ dụng cụ trong trang trại, quản lý nhập hàng như phân bón, thuốc bảo vệ thực vật…</p><h3>Mobile App mạnh mẽ - Toàn bộ hoạt động qua mobile</h3><p>NextX Farm tự hào là một trong các bên cung cấp phần mềm quản lý trang trại, dự báo sản lượng và truy xuất nguồn gốc có mobile app đầy đủ nhất, khi toàn bộ hoạt động kinh doanh có thể được số hóa và thao tác trên mobile app: Báo cáo, tác vụ…</p>",
                "category_id" => 2,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "NextX.Ai sâu bệnh",
                "image" => collect([
                    "16.png",
                    "17.png",
                    "18.png"
                ]),
                "description" => "Giải pháp nhận diện sâu bệnh bằng trí tuệ nhân tạo",
                "detail" => "<ul><li>Hệ thống gán nhãn dữ liệu tự động nextX.ai Gateway qua hình ảnh cây trồng</li><li>Nhận diện sâu bệnh cây trồng qua hình ảnh + Mobile app.</li><li>Tuỳ chỉnh theo từng loại cây trồng khác nhau</li><li>Chia các lớp đa thực thể, sâu bệnh khác nhau</li><li>Cảnh báo sớm cây trồng hết dinh dưỡng, nước chỉ bằng hình ảnh</li><li>Thu thập dữ liệu môi trường, điều khiển vi khí hậu nhà màng, thiết bị ngoại vi đầu ra</li><li>Giải pháp đầu tiên sử dụng trí tuệ nhân tạo trong việc nhân diện sâu bệnh cây trồng</li><li>Tích hợp dữ liệu cây trồng Nextfarm Insight Data</li><li>Tích hợp phần mềm quản lý trang trại NextX Farm</li><li>Tích hợp hệ thống châm phân dinh dưỡng tự động Nextfarm Fertikit 4G</li><li>Hệ thống Mobile App mạnh mẽ, tích hợp đầy đủ toàn bộ chức năng qua điện thoại</li></ul>",
                "future" => "<h3>Gán nhãn dữ liệu qua mobile app</h3><p>Hệ thống có thể gán nhãn dữ liệu qua Mobile app của Nextfarm. Việc phân lớp dữ liệu dựa trên dữ liệu nông học cây trồng mặc định trên app của Nextfarm</p><h3>Phân tích sâu bệnh, đưa ra loại thuốc phù hợp</h3><p>Hệ thống dựa trên nền tảng gán nhãn dữ liệu, sử dụng thị giác máy tính (Computer Vision) để đưa ra các lớp sâu bện</p><h3>Thiết bị Gateway</h3><p>Gán nhãn dữ liệu tự động qua Gateway của nextX.ai, tích hợp cùng nền tảng dữ liệu nông học của Nextfarm: thu thập và gán nhãn gồm các dữ liệu hình ảnh camera từ nextX.ai, các dữ liệu cảm biến thu thập được như PH, EC, nhiệt độ, độ ẩm..</p><h3>Tự động nhận diện sâu bệnh, cảnh báo qua thiết bị</h3><p>Dữ liêụ sẽ được chuyển từ thiết bị lên server và server sẽ trả về phân tích dữ liệu sâu bệnh cây trồng sau khi học được. Nền tảng trí tuệ nhân tạo nextX.ai có thể phân được theo các lớp sâu bệnh khác nhau, theo từng loại cây</p>",
                "category_id" => 3,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm Landscape",
                "image" => collect([
                    "19.png",
                    "20.png",
                    "21.jpg"
                ]),
                "description" => "Hệ thống tưới cảnh quan tự động",
                "detail" => "<ul><li>Hệ thống béc tưới đa dạng mẫu mã phù hợp nhu cầu khách hàng cả về chất lượng lẫn chi phí.</li><li>Dễ dàng điều chỉnh lịch tưới</li><li>Kết hợp với báo cáo dữ liệu từ các cảm biến, cài đặt chế độ tưới theo độ ẩm, nhiệt độ, thời tiết</li><li>Với ngôn ngữ Tiếng Việt, giao diện Nextfarm vô cùng thân thiện với người dùng tại Việt Nam.</li><li>Tích hợp cùng với các thiệt bị ngoại vi khác trong cảnh quan. (ví dụ đèn chiếu sáng, phun sương dập bụi…)</li><li>Hệ thống béc tưới đa dạng mẫu mã phù hợp nhu cầu khách hàng cả về chất lượng lẫn chi phí.</li><li>Dễ dàng điều chỉnh lịch tưới</li><li>Kết hợp với báo cáo dữ liệu từ các cảm biến, cài đặt chế độ tưới theo độ ẩm, nhiệt độ, thời tiết</li><li>Với ngôn ngữ Tiếng Việt, giao diện Nextfarm vô cùng thân thiện với người dùng tại Việt Nam.</li><li>Tích hợp cùng với các thiệt bị ngoại vi khác trong cảnh quan. (ví dụ đèn chiếu sáng, phun sương dập bụi…)</li></ul>",
                "future" => "<h3>Hệ thống tưới cảnh quan thông minh mang lại cho khách hàng</h3><p>Giảm chi phí, tối ưu được nguồn nước và điện năng sử dụng.Dễ dàng theo dõi, quản lý từ xa qua điện thoại thông minh, máy tính.Tính thẩm mỹ cao.</p><h3>Tích hợp các cảm biến</h3><p><span style=\"color: rgb(33, 37, 41);\">Ngoài ra, người dùng có thể tích hợp các cảm biến để điều khiển tưới cảnh quan tự động. Các cảm biến như: nhiệt độ, độ ẩm, lượng mưa,..</span></p><h3>Tưới tự động theo điều kiện thời tiết</h3><p>Người dùng có thể cài đặt tưới tự động theo điều kiện thời tiết. Ví dụ: Trời mưa nhiều thì không tưới, đất khô thì tưới nhiều,…</p>",
                "category_id" => 4,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm Dust Surpression",
                "image" => collect([
                    "21.png",
                    "22.png",
                    "23.jpg"
                ]),
                "description" => "Hệ thống dập bụi môi trường",
                "detail" => "<ul><li>Không khí trong lành</li><li>An toàn cho máy móc và con người</li><li>Tối ưu chi phí</li><li>Dễ dàng mở rộng</li><li>Hoạt động ổn định</li><li>Kiểm soát dễ dàng</li><li>Tích hợp cảm biến</li><li>Tính thẩm mỹ cao</li></ul>",
                "future" => "<h3>Không khí trong lành</h3><p>Hệ thống phun sương kiểm soát bụi, làm sạch không khí, tạo môi trường làm việc trong lành, mát mẻ cho công nhân.</p><h3>An toàn cho máy móc và con người</h3><p>Được thiết kế hiện đại, kết cấu và hoạt động thông minh giúp xử lý bụi nhưng vẫn không làm ẩm ướt nên rất an toàn cho máy móc và cả nhân viên sản xuất.</p><h3>Tối ưu chi phí</h3><p>Sử dụng hệ thống&nbsp;này tiết kiệm nước và điện năng sử dụng. Đồng thời chi phí lắp đặt, bảo trì, bảo dưỡng máy thấp.</p><h3>Dễ dàng mở rộng</h3><p>Hệ thống dập bụi nhà máy sử dụng béc thiết kế đa dạng, dễ dàng lắp đặt và mở rộng khi cần thiết.</p>",
                "category_id" => 4,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "name" => "Nextfarm Broadcast",
                "image" => collect([
                    "23.png",
                    "24.png",
                    "25.png"
                ]),
                "description" => "Hệ thống truyền thanh thông minh",
                "detail" => "<ul><li>Hệ thống phần mềm chuyển đổi từ text (văn bản) sang giọng nói, có thể tùy chỉnh các giọng nói theo người dùng</li><li>Phát thanh không dây trên nền tảng 3G, 4G Internet</li><li>Tích hợp Zalo hoắc SMS để phát nhanh truyền thanh</li><li>Tiếp sóng thông minh (không cần dùng thiết bị)</li><li>Sử dụng công nghệ IoT – quản lý từng thiết bị phát thành</li><li>Có thể chỉnh sửa phần mềm, thiết bị theo yêu cầu đặc thù bằng việc làm chủ công nghệ phần mềm và phần cứng</li></ul>",
                "future" => "<h3>Chuyển đổi giọng nói</h3><p>Hệ thống phần mềm có thể chuyển đổi giọng nói từ text (văn bản) sang audio</p><h3>Phần mềm quản lý các thiết bị phát</h3><p>Hệ thống quản lý các thiết bị phát sóng theo thời gian thực, tiếp đài phát thanh mà không cần phần cứng đi cùng</p><h3>Tích hợp Zalo</h3><p>Đây là tính năng đặc biệt của truyền thanh thông minh Nextfarm khi hệ thống có thể phát sóng trực tiếp nếu người dùng có quyền nhắn tin qua Zalo để phát sóng</p><h3>Module quản trị viên biên tập viên</h3><p>Phần mềm tích hợp module quản trị lịch phát sóng, lịch phát thanh theo từng thiết bị, và nội dung phát thanh có thể đươc phân quyền duyệt trước khi được phép phát</p>",
                "category_id" => 4,
                "status" => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach (collect($data) as $item) {
            ProductModel::create($item);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }
}
