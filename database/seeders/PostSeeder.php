<?php

namespace Database\Seeders;

use App\Enums\Post\PostStatusEnum;
use App\Enums\Post\PostTypeEnum;
use App\Models\PostModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!File::isDirectory(public_path('storage/posts'))) {
            File::makeDirectory(public_path('storage/posts'), 0777, true, true);
        }

        File::copy(public_path('images/posts/nextX-AI-ki-ket-hop-tac-voi-Atrocast.png'), public_path('storage/posts/nextX-AI-ki-ket-hop-tac-voi-Atrocast.png'));
        File::copy(public_path('images/posts/nong-nghiep-cong-nghe-cao-thailan.jpg'), public_path('storage/posts/nong-nghiep-cong-nghe-cao-thailan.jpg'));
        File::copy(public_path('images/posts/machinelearning.jpg'), public_path('storage/posts/machinelearning.jpg'));

        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
        DB::table("posts")->truncate();

        $data = [
            [
                'name' => 'Việt Nam tham dự triển lãm công nghệ lớn nhất Châu Á 2023',
                'image' => 'nextX-AI-ki-ket-hop-tac-voi-Atrocast.png',
                'description' => 'Ngày 6/6, lễ khai mạc triển lãm công nghệ lớn nhất Châu Á Asia Tech X Singapore (trong khuôn khổ Hội nghị thượng đỉnh Công nghệ châu Á năm 2023) đã chính thức diễn ra tại Sentosa, Singapore với sự tham dự của hàng trăm doanh nghiệp công nghệ toàn cầu. Sự kiện mở ra cơ hội hợp tác, kết nối kinh doanh và nắm bắt kịp thời các xu hướng công nghệ mới nhất giữa các doanh nghiệp trên toàn thế giới.',
                'content' => '<p style="text-align: justify;">Tại sự kiện, Bộ Thông tin và Truyền thông Việt Nam cùng đại diện 16 doanh nghiệp công nghệ số Việt đã tham gia gian hàng triển lãm quốc gia giới thiệu các sản phẩm dịch vụ công nghệ tiên tiến Make in Việt Nam tới bạn bè quốc tế. Theo đó, gian hàng quốc gia Việt Nam (Vietnam Pavillion) do Bộ Thông tin và Truyền thông chủ trì với đã tổ chức giới thiệu và trình diễn trên 40 sản phẩm công nghệ, dịch vụ Make in Việt Nam đến từ 26 doanh nghiệp Việt tiêu biểu có độ phủ sóng lớn trên thị trường toàn cầu như Nhật Bản, Châu Âu, Châu Mỹ và các khu vực khác như VNPT, FPT và TMA, Rạng Đông, HANET, SageGate…</p>
                <div style="text-align: justify;">Các sản phẩm và dịch vụ &nbsp;công nghệ Make in Viet Nam được giới thiệu tại triển lãm được phát triển và ứng dụng phần lớn trong các lĩnh vực CNTT bao gồm viễn thông, phần cứng, phần mềm, nội d­­ung số, bảo mật và dịch vụ CNTT. Không chỉ vậy, nhiều sản phẩm và dịch vụ có tính ứng dụng cao trong đời sống như năng lượng, y tế, giáo dục, tài chính, ngân hàng, nông nghiệp, logistics. Đặc biệt, các doanh nghiệp công nghệ số Việt Nam tham gia triển lãm lần này đã làm chủ và tích hợp hầu hết các công nghệ hiện đại nhất trên thế giới hiện nay vào sản phẩm như 5G, IoT, AI, robotics, dữ liệu lớn, đám mây, VR.</div>
                <div style="width: 100%;"><img class="alignnone wp-image-15424 size-full fade show" src="https://www.nextfarm.vn/wp-content/uploads/2023/06/gian-hang-cua-vn.png" alt="các đối tác nước ngoài tại gian hàng của VN" width="800" height="450" srcset="https://www.nextfarm.vn/wp-content/uploads/2023/06/gian-hang-cua-vn.png 800w, https://www.nextfarm.vn/wp-content/uploads/2023/06/gian-hang-cua-vn-300x169.png 300w, https://www.nextfarm.vn/wp-content/uploads/2023/06/gian-hang-cua-vn-768x432.png 768w" sizes="(max-width: 800px) 100vw, 800px"></div>
                <div style="text-align: justify;">Đại sứ nước CHXHCN Việt Nam tại Singapore, ông Mai Phước Dũng và Thứ trưởng Bộ Công nghệ thông tin và Truyền thông Lào đã đến thăm quan khu vực triển lãm của Việt Nam tại sự kiện và bày tỏ sự ấn tượng với sự phát triển ngành ICT Việt.</div>
                <p style="text-align: justify;">Theo thống kê sơ bộ, trong 4 ngày diễn ra Triển lãm, gian hàng quốc gia của Việt Nam thu hút hơn 1000 lượt khách tham quan và quan tâm đến sản phẩm, dịch vụ; qua đó góp phần mở rộng quan hệ hợp tác quốc tế, đối ngoại, tạo dựng lòng tin giữa Việt Nam và các nước trên thế giới; quảng bá, tuyên truyền năng lực, tiềm lực công nghệ, sản phẩm, dịch vụ Việt Nam đến bạn bè quốc tế.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone wp-image-15428 size-full" src="https://www.nextfarm.vn/wp-content/uploads/2023/06/nextX-AI-ki-ket-hop-tac-voi-Atrocast.png" alt="Ông Trần Quang Cường ký bản kí kết hợp tác với Astrocast" width="800" height="450" srcset="https://www.nextfarm.vn/wp-content/uploads/2023/06/nextX-AI-ki-ket-hop-tac-voi-Atrocast.png 800w, https://www.nextfarm.vn/wp-content/uploads/2023/06/nextX-AI-ki-ket-hop-tac-voi-Atrocast-300x169.png 300w, https://www.nextfarm.vn/wp-content/uploads/2023/06/nextX-AI-ki-ket-hop-tac-voi-Atrocast-768x432.png 768w" sizes="(max-width: 800px) 100vw, 800px"></p>
                <p style="text-align: justify;">Trong khuôn khổ&nbsp;<em>Tri</em>ển lãm, Bộ Thông tin và Truyền thông đã hỗ trợ các doanh nghiệp CNTT Việt Nam (VNPT, Rikkeisoft, Vsec, Vitex, NextVision…) kết nối với nhiều đối tác quốc tế tham dự triển lãm.</p>
                <p style="text-align: justify;">Tại sự kiện, nhiều doanh nghiệp Việt Nam đã tìm được đối tác phù hợp, mở ra nhiều cơ hội hợp tác kinh doanh và mở rộng thị trường sản phẩm tại nước ngoài. Trong đó nổi bật là hoạt động nhất ký kết thỏa thuận hợp tác kinh doanh giữa Công ty NextVision và Công ty Astrocast dưới sự chứng kiến của Bộ Thông tin và Truyền thông và các doanh nghiệp sau khi thảo luận trực tiếp tại Quầy hàng của Việt Nam.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone wp-image-15423 size-full" src="https://www.nextfarm.vn/wp-content/uploads/2023/06/trien-lam-cong-nghe-chau-a.png" alt="lãnh đạo BTTTT tại Asia Tech" width="800" height="450" srcset="https://www.nextfarm.vn/wp-content/uploads/2023/06/trien-lam-cong-nghe-chau-a.png 800w, https://www.nextfarm.vn/wp-content/uploads/2023/06/trien-lam-cong-nghe-chau-a-300x169.png 300w, https://www.nextfarm.vn/wp-content/uploads/2023/06/trien-lam-cong-nghe-chau-a-768x432.png 768w" sizes="(max-width: 800px) 100vw, 800px"></p>
                <p style="text-align: justify;">Triển lãm công nghệ châu Á là một trong những sự kiện công nghệ lớn nhất châu Á được tổ chức thường niên tại Singpore. Triển lãm năm nay diễn ra từ ngày 7/6/2023 và sẽ kết thúc vào ngày 9/6/2023./.­</p>
                <blockquote>
                <p style="text-align: right;">Nguồn: mic.gov.vn</p>
                </blockquote>',
                'status' => PostStatusEnum::getValue('ACTIVE'),
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nông nghiệp công nghệ cao trên thế giới phát triển kinh ngạc',
                'image' => 'nong-nghiep-cong-nghe-cao-thailan.jpg',
                'description' => 'Nông nghiệp công nghệ cao trên thế giới đang phát triển đáng kinh ngạc. Những thiết bị hiện đại, những kỹ thuật mới nhất rất đáng học hỏi.',
                'content' => '<p><strong><em>Nông nghiệp công nghệ cao trên thế giới đang phát triển đáng kinh ngạc. Những thiết bị hiện đại, những kỹ thuật mới nhất rất đáng học hỏi.&nbsp;</em></strong></p>
                <p>Hãy cùng NextFarm tìm hiểu về nông nghiệp công nghệ cao ở các quốc gia đi đầu hiện nay:</p>
                <h3><strong>1. Nông nghiệp công nghệ cao ở Irasel<br>
                </strong></h3>
                <p>Irasel là gương mặt đáng gờm đi đầu đạt được nhiều thành công trong ứng dụng nông nghiệp công nghệ cao trên thế giới. Một trong số những phát minh tuyệt vời phải kể đến như:</p>
                <ul>
                <li><em><span id="He_thong_tuoi_nho_giot"><strong>Hệ thống tưới nhỏ giọt</strong></span></em></li>
                </ul>
                <p>Irasel là cái nôi phát minh ra hệ thống tưới nhỏ giọt, kích thích khả năng tăng trưởng gấp nhiều lần.</p>
                <p>Đến nay, nhiều quốc gia đã học hỏi và sử dụng phương pháp của Irasel để đem lại hiệu quả phát triển vượt bậc cho nông nghiệp nước mình.</p>
                <p style="width: 100%;"><img class="alignnone size-full wp-image-8460 aligncenter fade show" src="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-1.jpg" alt="nong-nghiep-cong-nghe-cao" width="607" height="404" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-1.jpg 607w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-1-300x200.jpg 300w" sizes="(max-width: 607px) 100vw, 607px"></p>
                <blockquote><p><a href="https://www.nextfarm.vn/nextfarm-tiep-tuc-cung-tap-doan-viettel-trien-khai-thanh-cong-giai-phap-nong-nghiep-thong-minh-he-thong-tuoi-cham-phan-dinh-duong-tich-hop-kiem-soat-canh-bao-som-moi-truong-khi-tuong"><strong><em>[Hà Giang] Nextfarm tiếp tục cùng Tập đoàn Viettel triển khai thành công giải pháp Nông nghiệp thông minh – Hệ thống tưới châm phân dinh dường tích hợp kiểm soát cảnh báo sớm môi trường khí tượng</em></strong></a></p></blockquote>
                <ul>
                <li><em><span id="Nong_Nghiep_Truc_Tuyen"><strong>Nông nghiệp trực tuyến&nbsp;</strong></span></em></li>
                </ul>
                <p>Nhờ các diễn đàn Nông nghiệp trực tuyến, người nông dân dễ dàng tiếp cận kho kiến thức khổng lồ, cùng học tập, trao đổi kinh nghiệm hoặc xin sự giúp đỡ tư vấn từ các chuyên gia.</p>
                <p>Đây cũng là chìa khóa phát triển yếu tố con người, giúp Nông nghiệp của Irasel đạt được nhiều thành tựu như hiện nay.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-8461 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao3.jpg" alt="nong-nghiep-cong-nghe-cao" width="640" height="360" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao3.jpg 640w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao3-300x169.jpg 300w" sizes="(max-width: 640px) 100vw, 640px"></p>
                <ul>
                <li><em><span id="San_xuat_thuc_pham_tu_khi_nha_kinh"><strong>Sản xuất thực phẩm từ khí nhà kính</strong></span></em></li>
                </ul>
                <p>Khí nhà kính chính là nguyên nhân gây biến đổi khí hậu hiện nay nhưng Israel đã nghiên cứu và sử dụng nó để nuôi trồng nông nghiệp. Người Israel nuôi trồng tảo – là nhân tố chủ chốt trong việc tạo ra phần lớn lượng oxy cho chúng ta hít thở hàng ngày. Thức ăn tảo chính là CO2 và ánh sáng.</p>
                <p>Hệ thống Seambiotic mà Israel phát minh ra sẽ đem CO2 được phát thải từ các nhà máy biến thành nguồn cung cấp thức ăn cho tảo. Một trong những thành tựu đáng nể trong việc vừa sản xuất nông nghiệp vừa bảo vệ môi trường khỏi hiệu ứng nhà kính.</p>
                <p>Hiện nay, công nghệ nhà kính đang tạo ra tiềm năng phát triển vượt bậc cho nông nghiệp của quốc gia này.</p>
                <ul>
                <li><em><span id="Ken_ton_tru_luong_thuc"><strong>Kén tồn trữ lương thực</strong></span></em></li>
                </ul>
                <p>Một phát minh đến từ Giáo sư công nghệ thực phẩm quốc tế Shlomo Navarro. Túi giúp lương thực tránh tiếp xúc với không khí và độ ẩm, giải quyết các vấn đề về sức nóng và độ ẩm cao, giúp người dân tồn trữ lương thực an toàn, hiệu quả.</p>
                <ul>
                <li><em><span id="Hat_giong_chat_luong_cao_cho_mua_vu_boi_thu"><strong>Hạt giống chất lượng cao cho mùa vụ bội thu</strong></span></em></li>
                </ul>
                <p>Công nghệ TraitUP được nghiên cứu và ứng dụng thành công trong việc cấy ghép vật liệu di truyền vào hạt giống mà không sửa đổi cấu trúc DNA gốc. Điều này giúp đảm bảo nâng cao chất lượng của hạt giống, nâng cao khả năng thích nghi của giống với thổ nhưỡng và khí hậu mang lại năng suất cao trong sản xuất nông nghiệp. Nhưng vẫn đảm bảo được an ninh lương thực và sức cạnh tranh công bằng.</p>
                <p>&nbsp;</p>
                <h3><strong>2. Nông nghiệp công nghệ cao ở Nhật Bản</strong></h3>
                <p>Đề cập đến nông nghiệp công nghệ cao trên thế giới không thể không kể điểm danh Nhật Bản.&nbsp;Những thành tựu khoa học – công nghệ bậc nhất đều được đưa vào để giải quyết bài toán Nông nghiệp.</p>
                <p>Người dân toàn cầu đều biết người Nhật Bản cực kì sáng tạo, họ luôn cải tiến khắc phục những nhược điểm mà vẫn đảm bảo được năng suất, sản lượng sản xuất hàng năm dù chỉ có 2% dân số Nhật làm nông nghiệp.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-8462 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-caonhatban.jpg" alt="nong-nghiep-cong-nghe-cao" width="1600" height="417" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-caonhatban.jpg 1600w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-caonhatban-300x78.jpg 300w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-caonhatban-1024x267.jpg 1024w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-caonhatban-768x200.jpg 768w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-caonhatban-1536x400.jpg 1536w" sizes="(max-width: 1600px) 100vw, 1600px"></p>
                <p><strong>Một vài phương pháp của Nhật Bản:&nbsp;</strong></p>
                <ul>
                <li>Để khắc phục nhược điểm diện tích đất hạn chế, họ tiến hành trồng trong nhà kính các loại rau củ quả, cây nông nghiệp. Hiện nay, Việt Nam đã học hỏi và áp dụng mô hình này trong sản xuất.</li>
                <li>Trong chăn nuôi cũng sử dụng các thiết bị hiện đại từ khâu ăn uống đến theo dõi, chăm sóc sức khỏe, phối giống, xử lý chất thải, bảo vệ môi trường.</li>
                <li>Phòng ngừa sâu bệnh nhờ công nghệ mới nhất.</li>
                <li>Phát triển sản xuất có chọn lọc.</li>
                </ul>
                <h3><strong>3. Nông nghiệp công nghệ cao ở Thái Lan</strong></h3>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-8463 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-thailan.jpg" alt="nong-nghiep-cong-nghe-cao" width="1336" height="835" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-thailan.jpg 1336w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-thailan-300x188.jpg 300w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-thailan-1024x640.jpg 1024w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-thailan-768x480.jpg 768w" sizes="(max-width: 1336px) 100vw, 1336px"></p>
                <p>Trong các quốc gia Đông Nam Á nói riêng và Châu Á nói chung cũng như nông nghiệp công nghệ cao trên thế giới, Thái Lan đã ghi điểm vượt bậc. Họ phát triển các hệ thống cảm biến, điều khiển và kết nối với điện thoại.</p>
                <p>Người dân dù không có mặt tại trang tại cũng có thể kiểm tra nhiệt độ,&nbsp;độ ẩm và bức xạ mặt trời, cũng như kích hoạt hệ thống tưới nhỏ giọt và tưới phân từ xa.</p>
                <p>Ngoài ra, họ còn sử dụng drone tự động để phun hóa chất, ứng dụng IoT và máy học AI để điều khiển việc trồng trọt.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-8459 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao.jpg" alt="nong-nghiep-cong-nghe-cao" width="1280" height="960" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao.jpg 1280w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-300x225.jpg 300w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-1024x768.jpg 1024w, https://www.nextfarm.vn/wp-content/uploads/2022/03/nong-nghiep-cong-nghe-cao-768x576.jpg 768w" sizes="(max-width: 1280px) 100vw, 1280px"></p>
                <blockquote><p><em><a href="https://dantri.com.vn/nhan-tai-dat-viet/san-pham-he-thong-nong-nghiep-thong-minh-nextfarm-20190820452018128.htm"><strong>Sản phẩm Nông nghiệp thông minh Nextfarm là giải pháp đầu tiên tại Việt Nam có đủ phân hệ từ kiểm soát môi trường, dĩnh dưỡng đến châm phân.</strong></a></em></p></blockquote>
                <p>Nếu bạn đang quan tâm đến Nông nghiệp công nghệ cao trên thế giới và Việt&nbsp; Nam, hãy liên hệ ngay tới NextFarm!</p>
                <p>Bạn có thể tham khảo thêm phần mềm chăm sóc khách hàng<a href="http://nextcrm.vn">&nbsp;<b>NextX CRM</b></a>,&nbsp; phần mềm bán hàng <strong><a href="https://posx.vn/">NextX POS</a></strong> trên nền tảng<a href="http://nextx.vn"> <b>NextX</b></a> giúp cho doanh nghiệp lựa chọn được phần mềm phù hợp để phát huy hiệu quả tối đa trong kinh doanh.</p>',
                'status' => PostStatusEnum::getValue('ACTIVE'),
                'category_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ứng dụng trí tuệ nhân tạo cho Nông nghiệp là gì? Nền tảng học máy DeepX Nextfarm Machine Learning Computer Vision Platform',
                'image' => 'machinelearning.jpg',
                'description' => 'Để phát triển mạnh mẽ ngành nông nghiệp, cũng như đưa vị thế nghành xuất khẩu nông nghiệp và sản xuất nông nghiệp sạch và chất lượng là nghành chủ lực cho Việt Nam, những vấn đề như biến đổi khí hậu, thay đổi giống làm cho nghành nông nghiệp gặp không ít khó khăn trong nông nghiệp, hậu quả là các bệnh dịch nghành nông nghiệp chết hàng loạt.',
                'content' => '<p style="text-align: justify;">Để phát triển mạnh mẽ ngành nông nghiệp, cũng như đưa vị thế nghành xuất khẩu nông nghiệp và sản xuất nông nghiệp sạch và chất lượng là nghành chủ lực cho Việt Nam, những vấn đề như biến đổi khí hậu, thay đổi giống làm cho nghành nông nghiệp gặp không ít khó khăn trong nông nghiệp, hậu quả là các bệnh dịch nghành nông nghiệp chết hàng loạt.</p>
                <p style="text-align: justify;">Chính vì vậy nền tảng trí tuệ nhân tạo trong Nông nghiệp ra đời, thực tế trong Nông nghiệp có rất nhiều bài toán có thể áp dụng được trí tuệ nhân tạo vào nhưng công nghệ thì mới, những người thực sự làm được trí tuệ nhân tạo đội ngũ kỹ sư chúng ta chưa có nhiều hoặc phạm vi bài toán còn rất rộng khiến rất khó tiếp cận. Chính vì thể để rõ hơn Nextfarm chúng tôi đưa bài toán ra, khái niệm thực tế trí tuệ nhân tạo, hay computer vision AI Big Data Machine Learning Platform hay rất nhiều khái niệm khác là gì, rồi sau đó chúng tôi đưa ra bài toán các giải pháp áp dụng của trí tuệ nhân tạo vào các giải pháp Nextfarm có tên là DeepX</p>
                <p style="width: 100%;"><img class="alignnone size-full wp-image-14392" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/machinelearning.jpg" alt="" width="1000" height="612" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/machinelearning.jpg 1000w, https://www.nextfarm.vn/wp-content/uploads/2022/12/machinelearning-300x184.jpg 300w, https://www.nextfarm.vn/wp-content/uploads/2022/12/machinelearning-768x470.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px"></p>
                <div id="ez-toc-container" class="ez-toc-v2_0_25_1 counter-hierarchy counter-decimal ez-toc-grey">
                <div class="ez-toc-title-container">
                <p class="ez-toc-title">Danh mục bài viết</p>
                <span class="ez-toc-title-toggle"><a class="ez-toc-pull-right ez-toc-btn ez-toc-btn-xs ez-toc-btn-default ez-toc-toggle" style="display: inline;"><label for="item" aria-label="Table of Content"><i class="ez-toc-glyphicon ez-toc-icon-toggle"></i></label><input type="checkbox" id="item"></a></span></div>
                <nav><ul class="ez-toc-list ez-toc-list-level-1"><li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-1" href="#TRI_TUE_NHAN_TAO_LA_GI" title="TRÍ TUỆ NHÂN TẠO LÀ GÌ?">TRÍ TUỆ NHÂN TẠO LÀ GÌ?</a></li><li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-2" href="#VAY_THI_MACHINE_LEARNING_HOC_MAY_THUC_TE_LA_GI" title="VẬY THÌ MACHINE LEARNING (HỌC MÁY) THỰC TẾ LÀ GÌ">VẬY THÌ MACHINE LEARNING (HỌC MÁY) THỰC TẾ LÀ GÌ</a></li><li class="ez-toc-page-1 ez-toc-heading-level-2"><a class="ez-toc-link ez-toc-heading-3" href="#CAC_GIAI_PHAP_UNG_DUNG_TRI_TUE_NHAN_TAO_DeepX_NEXTFARM_TRONG_NONG_NGHIEP" title="CÁC GIẢI PHÁP ỨNG DỤNG TRÍ TUỆ NHÂN TẠO DeepX NEXTFARM TRONG NÔNG NGHIỆP">CÁC GIẢI PHÁP ỨNG DỤNG TRÍ TUỆ NHÂN TẠO DeepX NEXTFARM TRONG NÔNG NGHIỆP</a><ul class="ez-toc-list-level-3"><li class="ez-toc-heading-level-3"><a class="ez-toc-link ez-toc-heading-4" href="#PHAT_HIEN_DI_THUONG_CHO_CAY_TRONG_ANOMALY_DETECTION_Nextfarm_DeepX_Platform" title="PHÁT HIỆN DỊ THƯỜNG CHO CÂY TRỒNG (ANOMALY DETECTION) Nextfarm DeepX Platform">PHÁT HIỆN DỊ THƯỜNG CHO CÂY TRỒNG (ANOMALY DETECTION) Nextfarm DeepX Platform</a></li><li class="ez-toc-page-1 ez-toc-heading-level-3"><a class="ez-toc-link ez-toc-heading-5" href="#PHAN_TICH_SAU_BENH_CAY_TRONG_VAT_NUOI_Nextfarm_DeepX_Platform" title="PHÂN TÍCH SÂU BỆNH CÂY TRỒNG VẬT NUÔI Nextfarm DeepX Platform">PHÂN TÍCH SÂU BỆNH CÂY TRỒNG VẬT NUÔI Nextfarm DeepX Platform</a></li><li class="ez-toc-page-1 ez-toc-heading-level-3"><a class="ez-toc-link ez-toc-heading-6" href="#NEN_TANG_DU_BAO_SAN_LUONG_Nextfarm_DeepX_Platform" title="NỀN TẢNG DỰ BÁO SẢN LƯỢNG Nextfarm DeepX Platform">NỀN TẢNG DỰ BÁO SẢN LƯỢNG Nextfarm DeepX Platform</a></li></ul></li></ul></nav></div>
                <h2 style="text-align: justify;"><span class="ez-toc-section" id="TRI_TUE_NHAN_TAO_LA_GI"></span>TRÍ TUỆ NHÂN TẠO LÀ GÌ?<span class="ez-toc-section-end"></span></h2>
                <p style="text-align: justify;">Trí tuệ nhân tạo hay trí thông minh nhân tạo (Artificial intelligence – viết tắt là AI) là một ngành thuộc lĩnh vực khoa học máy tính. Đây là công nghệ mô phỏng các quá trình suy nghĩ và học tập của con người cho máy móc, đặc biệt là các hệ thống máy tính. Qua đó, trí tuệ nhân tạo giúp máy tính có được những trí tuệ của con người như: Biết suy nghĩ và lập luận để giải quyết vấn đề, biết giao tiếp do hiểu ngôn ngữ, tiếng nói, biết học và tự thích nghi… Trí tuệ nhân tạo sử dụng dữ liệu lớn Big Data để phân tích một bài toán cụ thể nào đó qua các học thuật học máy machine learning platform. Trên thế giới có rất nhiều các nền tảng hỗ trợ machine learning platform như Sage Maker, Tensor Flow, PyTorch…</p>
                <p style="text-align: justify;">Đây là sẽ xu hướng của toàn bộ các ngành.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-14391" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/deeplearning.png" alt="" width="1024" height="538" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/deeplearning.png 1024w, https://www.nextfarm.vn/wp-content/uploads/2022/12/deeplearning-300x158.png 300w, https://www.nextfarm.vn/wp-content/uploads/2022/12/deeplearning-768x404.png 768w" sizes="(max-width: 1024px) 100vw, 1024px"></p>
                <h2 style="text-align: justify;"><span class="ez-toc-section" id="VAY_THI_MACHINE_LEARNING_HOC_MAY_THUC_TE_LA_GI"></span>VẬY THÌ MACHINE LEARNING (HỌC MÁY) THỰC TẾ LÀ GÌ<span class="ez-toc-section-end"></span></h2>
                <p style="text-align: justify;">Hầu hết các bạn đã quá quen thuộc với giao diện tìm kiếm của Google, và rất có khả năng là bạn tìm đến bài viết này thông qua Google. Đã qua rất lâu cái thời mà kết quả tìm kiếm được sắp xếp dựa theo mật độ xuất hiện từ khóa, giờ đây các cỗ máy tìm kiếm cần phải hiểu các trang web viết về điều gì, liệu nó có liên quan đến cụm từ người dùng tìm kiếm hay không. Vì sứ mệnh của Google là mang thông tin hữu ích tới người dùng, nó sử dụng Machine Learning để sắp xếp kết quả một cách “con người” nhất. Thuật toán Machine Learning được Google sử dụng gọi là RankBrain.</p>
                <p style="width: 100%;"><img loading="lazy" class="size-full wp-image-14395 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/google.png" alt="" width="500" height="256" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/google.png 500w, https://www.nextfarm.vn/wp-content/uploads/2022/12/google-300x154.png 300w" sizes="(max-width: 500px) 100vw, 500px"></p>
                <p>Một ứng dụng khác của Machine Learning là tính năng gợi ý trên các website bán hàng như Amazon. Rõ ràng Amazon không để đưa ra các gợi ý một cách ngẫu nhiên hoặc máy móc. Nó cần gợi ý các sản phẩm liên quan thông qua lịch sử hoạt động của người dùng. Bằng cách này, khách hàng sẽ chi nhiều tiền hơn và đương nhiên, Amazon sẽ càng thu nhiều lợi nhuận.</p>
                <p style="width: 100%;"><img loading="lazy" class="size-full wp-image-14394 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/amazon.jpg" alt="" width="500" height="256" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/amazon.jpg 500w, https://www.nextfarm.vn/wp-content/uploads/2022/12/amazon-300x154.jpg 300w" sizes="(max-width: 500px) 100vw, 500px"></p>
                <p>Các thuật toán trong trí tuệ nhân tạo gồm:</p>
                <ul>
                <li>Thuật Toán Linear Regression Một Biến</li>
                <li>Thuật Toán Linear Regression Nhiều Biến</li>
                <li>Thuật Toán Nonlinear Regression</li>
                <li>Thuật Toán Gradient Descent</li>
                <li>Thuật Toán Logistic Regression</li>
                <li>Thuật Toán Support Vector Machine</li>
                <li>Thuật Toán Neural Network</li>
                <li>Thuật Toán K-Means Clustering</li>
                <li>Thuật Toán Anomaly Detection</li>
                <li>Thuật Toán Collaborative Filtering</li>
                </ul>
                <h2 style="text-align: justify;"><span class="ez-toc-section" id="CAC_GIAI_PHAP_UNG_DUNG_TRI_TUE_NHAN_TAO_DeepX_NEXTFARM_TRONG_NONG_NGHIEP"></span>CÁC GIẢI PHÁP ỨNG DỤNG TRÍ TUỆ NHÂN TẠO DeepX NEXTFARM TRONG NÔNG NGHIỆP<span class="ez-toc-section-end"></span></h2>
                <p style="text-align: justify;">Nextfarm chúng tôi tập trung nhiều vào nền tảng đưa trí tuệ nhân tạo vào nông nghiệp để giải quyết một số bài toán cụ thể, bài toán tập trung vào một phạm vi ngành hẹp trong nông nghiệp, không mang tính phổ quát toàn bộ ngành vì thực tế Nông nghiệp là ngành rộng nhưng phân mảnh, mỗi loại cây, mỗi loại mô hình thì lại là một vấn đề khác nhau.</p>
                <h3 style="text-align: justify;"><span class="ez-toc-section" id="PHAT_HIEN_DI_THUONG_CHO_CAY_TRONG_ANOMALY_DETECTION_Nextfarm_DeepX_Platform"></span><strong>PHÁT HIỆN DỊ THƯỜNG CHO CÂY TRỒNG (ANOMALY DETECTION) Nextfarm DeepX Platform</strong><span class="ez-toc-section-end"></span></h3>
                <p style="text-align: justify;">Bài toán giải quyết: Phát hiện các cây có vấn đề bất thường thường thì áp dụng với các cây giá trị kinh tế cao như dưa lưới, dâu tây, dưa kim hoàng hậu và hoa.</p>
                <p>Đầu vào bài toán:</p>
                <ol>
                <li>Hệ thống phần mềm số hóa quy trình sản xuất trang trại</li>
                <li>Hệ thống IoT giám sát nông nghiệp thông minh</li>
                <li>Tập ảnh qua camera và smartphone gắn tại vườn</li>
                <li>Tập mẫu gán nhán 100.000 tập mẫu</li>
                </ol>
                <p>Thuật toán: Supervised learning dự đoán đầu ra (outcome) của một dữ liệu mới (new input) dựa trên các cặp (input, outcome) đã biết từ trước. Cặp dữ liệu này còn được gọi là (data, label), tức (dữ liệu, nhãn).</p>
                <p>Đầu ra bài toán: Phát hiện điểm dị thường trong cây trồng như thiếu nước, thừa nước, sâu bệnh, các vấn đề dinh dưỡng các hàm lượng trong cây.</p>
                <p style="width: 100%;"><img loading="lazy" class="size-full wp-image-14393 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/Structure-of-plant-monitoring-using-Kinect-camera-in-the-green-house.png" alt="" width="701" height="460" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/Structure-of-plant-monitoring-using-Kinect-camera-in-the-green-house.png 701w, https://www.nextfarm.vn/wp-content/uploads/2022/12/Structure-of-plant-monitoring-using-Kinect-camera-in-the-green-house-300x197.png 300w" sizes="(max-width: 701px) 100vw, 701px"></p>
                <h3 style="text-align: justify;"><span class="ez-toc-section" id="PHAN_TICH_SAU_BENH_CAY_TRONG_VAT_NUOI_Nextfarm_DeepX_Platform"></span><strong>PHÂN TÍCH SÂU BỆNH CÂY TRỒNG VẬT NUÔI </strong><strong>Nextfarm DeepX Platform</strong><span class="ez-toc-section-end"></span></h3>
                <p style="text-align: justify;">Bài toán giải quyết: Phát hiện các vật nuôi có vấn đề bất thường thường hoặc đếm số lượng vật nuôi qua camera, phân tích nguồn nước cho thủy hải sản.</p>
                <p>Đầu vào bài toán:</p>
                <ol>
                <li>Hệ thống phần mềm số hóa quy trình sản xuất trang trại</li>
                <li>Hệ thống IoT giám sát nông nghiệp thông minh</li>
                <li>Tập ảnh qua camera và smartphone gắn tại trang trại</li>
                <li>Tập mẫu gán nhán 10.000 tập mẫu</li>
                </ol>
                <p>Thuật toán: Supervised learning dự đoán đầu ra (outcome) của một dữ liệu mới (new input) dựa trên các cặp (input, outcome) đã biết từ trước. Cặp dữ liệu này còn được gọi là (data, label), tức (dữ liệu, nhãn).</p>
                <p>Đầu ra bài toán: Phát hiện điểm dị thường trong nguồn nước với thủy hải sản, hay dị thường về dáng đi con lợn con gà trong 1 khoảng thời gian, chẩn đoán nguồn nước cho ngành thủy hải sản.</p>
                <p style="width: 100%;"><img loading="lazy" class="size-full wp-image-9473 aligncenter" src="https://www.nextfarm.vn/wp-content/uploads/2022/05/channuoilontruyenthong.jpg" alt="" width="640" height="444" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/05/channuoilontruyenthong.jpg 640w, https://www.nextfarm.vn/wp-content/uploads/2022/05/channuoilontruyenthong-300x208.jpg 300w" sizes="(max-width: 640px) 100vw, 640px"></p>
                <h3 style="text-align: justify;"><span class="ez-toc-section" id="NEN_TANG_DU_BAO_SAN_LUONG_Nextfarm_DeepX_Platform"></span>NỀN TẢNG DỰ BÁO SẢN LƯỢNG <strong>Nextfarm DeepX Platform</strong><span class="ez-toc-section-end"></span></h3>
                <p style="text-align: justify;">Bài toán giải quyết: Dự báo sản lượng nông nghiệp qua drone flycam hoặc qua hình ảnh vệ tinh</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-14390" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite.jpg" alt="" width="2274" height="1088" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite.jpg 2274w, https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite-300x144.jpg 300w, https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite-1024x490.jpg 1024w, https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite-768x367.jpg 768w, https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite-1536x735.jpg 1536w, https://www.nextfarm.vn/wp-content/uploads/2022/12/satelite-2048x980.jpg 2048w" sizes="(max-width: 2274px) 100vw, 2274px"></p>
                <p>Đầu vào bài toán:</p>
                <ol>
                <li>Hình ảnh qua Flycam và Vệ tinh</li>
                <li>Hệ thống IoT giám sát nông nghiệp thông minh</li>
                <li>Tập mẫu gán nhán 10.000 tập mẫu</li>
                </ol>
                <p>Đầu ra bài toán: Dự báo sản lượng của một vùng qua flycam hoặc phân tích dữ liệu hình ảnh từ vệ tinh đẩy xuống.</p>
                <p style="width: 100%;"><img loading="lazy" class="alignnone size-full wp-image-14389" src="https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam.jpg" alt="" width="2560" height="1705" srcset="https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam.jpg 2560w, https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam-300x200.jpg 300w, https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam-1024x682.jpg 1024w, https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam-768x512.jpg 768w, https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam-1536x1023.jpg 1536w, https://www.nextfarm.vn/wp-content/uploads/2022/12/Huong-dan-bay-flycam-2048x1364.jpg 2048w" sizes="(max-width: 2560px) 100vw, 2560px"></p>
                <p style="text-align: justify;">Ngoài ra, NextVision còn cung cấp&nbsp;<strong><a href="https://nextcrm.vn/crm-la-gi-tai-sao-can-su-dung-phan-mem-crm">phần mềm CRM</a>&nbsp;NextX CRM</strong>&nbsp;hỗ trợ doanh nghiệp quản lý và chăm sóc khách hàng toàn diện.&nbsp;<a href="https://nextcrm.vn/top-7-phan-mem-quan-ly-va-cham-soc-khach-hang-crm"><strong>Phần mềm quản lý và chăm sóc khách hàng</strong></a> NextX CRM là giải pháp giải quyết bài toán chuyển đổi số hoạt động kinh doanh của doanh nghiệp, hợp tác xã…</p>
                <p><span style="font-weight: 400;">Bạn có thể tham khảo thêm phần mềm chăm sóc khách hàng</span><a href="http://nextcrm.vn"> <b>NextX CRM</b></a><span style="font-weight: 400;"> trong nền tảng</span><a href="http://nextx.vn"> <b>NextX</b></a><span style="font-weight: 400;"> giúp cho doanh nghiệp lựa chọn được phần mềm phù hợp để phát huy hiệu quả tối đa trong kinh doanh.</span></p>',
                'status' => PostStatusEnum::getValue('ACTIVE'),
                'category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        foreach (collect($data) as $item) {
            PostModel::create($item);
        }

        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
    }
}
