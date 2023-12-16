@extends('layouts.layout')
@section('title')
    Về chúng tôi - NFarm
@endsection

@section('content')
    <section class="about-header-section ptb-120 position-relative overflow-hidden bg-dark"
        style="background: url('assets/img/page-header-bg.svg')no-repeat center right">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-wrap d-flex justify-content-between z-5 position-relative">
                        <div class="about-content-left">
                            <div class="about-info mb-5">
                                <h1 class="display-5">Công ty Cổ phần Tương Lai NextX.</h1>
                                <p class="lead">Là đơn vị đi tiên phong về lĩnh vực chuyển đổi số tại Việt Nam, với hệ sinh
                                    thái phần mềm quản lý kinh doanh NextX CRM, hệ sinh thái Nông nghiệp thông minh NextX
                                    Farm (Nextfarm), triển khai được 4 quốc gia ngoài lãnh thổ Việt Nam và NextX AI nền tảng
                                    giải phá trí tuệ nhân tạo (AI) tập trung thị trường toàn cầu.</p>

                            </div>
                            <img src="assets/img/about-img-1.jpg" alt="about"
                                class="img-fluid about-img-first mt-5 rounded-custom shadow">
                        </div>
                        <div class="about-content-right">
                            <img src="assets/img/about-img-2.jpg" alt="about"
                                class="img-fluid mb-5 rounded-custom shadow">
                            <img src="assets/img/about-img-3.jpg" alt="about"
                                class="rounded-custom about-img-last shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white position-absolute bottom-0 h-25 bottom-0 left-0 right-0 z-2 py-5">
        </div>
    </section>
    <section class="our-story-section pt-60 pb-120"
        style="background: url('assets/img/shape/dot-dot-wave-shape.svg')no-repeat left bottom">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-12 order-lg-1">
                    <div class="section-heading sticky-sidebar">
                        <h4 class="h5 text-primary">Về NFarm</h4>
                        <p>Là đơn vị đi tiên phong về lĩnh vực chuyển đổi số tại Việt Nam, với hệ sinh thái phần mềm quản lý kinh doanh NextX CRM, hệ sinh thái Nông nghiệp thông minh NextX Farm (Nextfarm), triển khai được 4 quốc gia ngoài lãnh thổ Việt Nam và NextX AI nền tảng giải phá trí tuệ nhân tạo (AI) tập trung thị trường toàn cầu.
                        </p>
                        <div class="mt-4">
                            <h6 class="mb-3">Giải thưởng nhận được</h6>
                            <img src="assets/img/awards-01.svg" alt="awards" class="me-4 img-fluid">
                            <img src="assets/img/awards-02.svg" alt="awards" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-lg-0">
                    <div class="story-grid-wrapper position-relative">
                        <!--animated shape start-->
                        <ul class="position-absolute animate-element parallax-element shape-service d-none d-lg-block"
                            style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                            <li class="layer" data-depth="0.02"
                                style="position: relative; display: block; left: 0px; top: 0px; transform: translate3d(-8.9365px, -2.39335px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                <img src="assets/img/color-shape/image-2.svg" alt="shape"
                                    class="img-fluid position-absolute color-shape-2 z-5">
                            </li>
                            <li class="layer" data-depth="0.03"
                                style="position: absolute; display: block; left: 0px; top: 0px; transform: translate3d(-13.4047px, -3.59003px, 0px); transform-style: preserve-3d; backface-visibility: hidden;">
                                <img src="assets/img/color-shape/feature-3.svg" alt="shape"
                                    class="img-fluid position-absolute color-shape-3">
                            </li>
                        </ul>
                        <!--animated shape end-->
                        <div class="story-grid rounded-custom bg-dark overflow-hidden position-relative">
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-success">10.000+</h3>
                                <h6 class="mb-0 text-dark">Khách hàng</h6>
                            </div>
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-primary">80+</h3>
                                <h6 class="mb-0">Nhân sự</h6>
                            </div>
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-dark">20+</h3>
                                <h6 class="mb-0">Đối tác</h6>
                            </div>
                            <div class="story-item bg-white border">
                                <h3 class="display-5 fw-bold mb-1 text-warning">8 năm</h3>
                                <h6 class="mb-0">Kinh nghiệm</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
