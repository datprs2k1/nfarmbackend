@extends('layouts.layout')

@section('content')
    <!--hero section start-->
    <section class="hero-section ptb-120 text-white bg-gradient"
        style="background: url('assets/img/hero-dot-bg.png')no-repeat center right">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-10">
                    <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                        <h1 class="display-6">Nextfarm - Hệ sinh thái Nông nghiệp thông minh Nextfarm </h1>
                        <p class="lead">Sứ mệnh của chúng tôi là đóng góp một phần công sức trong công cuộc hiện
                            đại hóa Nông nghiệp tại Việt Nam, Nextfarm là sản phẩm tập trung cho thị trường trong
                            nước, nextX.ai là sản phẩm tập trung vào thị trường nước ngoài.
                        </p>
                        <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                            <a href="request-demo.html" class="btn btn-primary me-3">Request For Demo</a>
                            <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0">
                                <i class="fas fa-play"></i> Watch Demo </a>
                        </div>
                        <div class="row justify-content-lg-start mt-70">
                            <h6 class="text-white-70 mb-2">Our Top Clients:</h6>
                            <div class="col-4 col-sm-3 my-2 ps-lg-0">
                                <img src="{{ asset('assets/img/clients/client-1') }}.svg" alt="client" class="img-fluid">
                            </div>
                            <div class="col-4 col-sm-3 my-2">
                                <img src="{{ asset('assets/img/clients/client-2') }}.svg" alt="client" class="img-fluid">
                            </div>
                            <div class="col-4 col-sm-3 my-2">
                                <img src="{{ asset('assets/img/clients/client-3') }}.svg" alt="client" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8 mt-5">
                    <div class="hero-img position-relative circle-shape-images">
                        <!--animated shape start-->
                        {{-- <ul class="position-absolute animate-element parallax-element circle-shape-list">
                                <li class="layer" data-depth="0.03">
                                    <img src="{{ asset('assets/img/shape/circle-1') }}.svg" alt="shape"
                                        class="circle-shape-item type-0 hero-1">
                                </li>
                                <li class="layer" data-depth="0.02">
                                    <img src="{{ asset('assets/img/shape/circle-1') }}.svg" alt="shape"
                                        class="circle-shape-item type-1 hero-1">
                                </li>
                                <li class="layer" data-depth="0.04">
                                    <img src="{{ asset('assets/img/shape/circle-1') }}.svg" alt="shape"
                                        class="circle-shape-item type-2 hero-1">
                                </li>
                                <li class="layer" data-depth="0.04">
                                    <img src="{{ asset('assets/img/shape/circle-1') }}.svg" alt="shape"
                                        class="circle-shape-item type-3 hero-1">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{ asset('assets/img/shape/circle-1') }}.svg" alt="shape"
                                        class="circle-shape-item type-4 hero-1">
                                </li>
                                <li class="layer" data-depth="0.03">
                                    <img src="{{ asset('assets/img/shape/circle-1') }}.svg" alt="shape"
                                        class="circle-shape-item type-5 hero-1">
                                </li>
                            </ul> --}}
                        <!--animated shape end-->
                        <img src="{{ asset('assets/img/banner.png') }}" alt="hero img"
                            class="img-fluid position-relative z-5">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <!--feature promo section start-->
    <section class="feature-promo ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h2>Với tất cả lĩnh vực mà bạn cần</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-promo p-lg-5 p-4 text-center mt-3">
                        <div class="feature-icon icon-center pb-5 rounded-custom bg-primary">
                            <img src="{{ asset('assets/img/sprout.png') }}" alt="client" class="img-fluid">
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h4">Trồng trọt</h3>
                            <p>Các giải pháp chuyển đổi số trong lĩnh vực trồng trọt. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-promo p-lg-5 p-4 text-center mt-3">
                        <div class="feature-icon icon-center pb-5 rounded-custom bg-danger">
                            <img src="{{ asset('assets/img/livestock.png') }}" alt="client" class="img-fluid">
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h4">Chăn nuôi</h3>
                            <p>Hệ sinh thái giải pháp chuyển đổi số trong lĩnh vực chăn nuôi. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-promo p-lg-5 p-4 text-center mt-3">
                        <div class="feature-icon icon-center pb-5 rounded-custom bg-secondary">
                            <img src="{{ asset('assets/img/seafood.png') }}" alt="client" class="img-fluid">
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h4">Thuỷ hải sản</h3>
                            <p>Hệ sinh thái giải pháp chuyển đổi số trong lĩnh vực thủy hải sản. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature-promo p-lg-5 p-4 text-center mt-3">
                        <div class="feature-icon icon-center pb-5 rounded-custom bg-success">
                            <img src="{{ asset('assets/img/climate.png') }}" alt="client" class="img-fluid">
                        </div>
                        <div class="feature-info-wrap">
                            <h3 class="h4">Cảnh quan</h3>
                            <p>Các giải pháp liên quan đến tưới cảnh quan, dập bụi môi trường. </p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="services-icon ptb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-10">
                            <div class="section-heading text-center">
                                <h2>Các giải pháp tiêu biểu</h2>
                                <p>Tất cả các ứng dụng đều được tích hợp toàn diện với nhau, dễ dàng sử dụng
                                    trên trình duyệt và thiết bị Mobile.</p>
                            </div>
                            ,
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                                <div class="service-icon icon-center">
                                    <img src="assets/img/service/coding.png" alt="service icon" width="65"
                                        height="65">
                                </div>
                                <div class="service-info-wrap">
                                    <h3 class="h5">Nextfarm Fertikit 4G</h3>
                                    <p>
                                        Điều khiển dinh dưỡng cây trồng tự động.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                                <div class="service-icon icon-center">
                                    <img src="assets/img/service/app-development.png" alt="service icon" width="65"
                                        height="65">
                                </div>
                                <div class="service-info-wrap">
                                    <h3 class="h5">Nextfarm NMC</h3>
                                    <p>
                                        Hệ thống giám sát Nông nghiệp thông minh
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom">
                                <div class="service-icon icon-center">
                                    <img src="assets/img/service/shield.png" alt="service icon" width="65"
                                        height="65">
                                </div>
                                <div class="service-info-wrap">
                                    <h3 class="h5">Nextfarm Breeding</h3>
                                    <p>
                                        Hệ thống cho ăn tự động chăn nuôi lợn gà
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center border-end">
                                <div class="service-icon icon-center">
                                    <img src="assets/img/service/curve.png" alt="service icon" width="65"
                                        height="65">
                                </div>
                                <div class="feature-info-wrap">
                                    <h3 class="h5">Nextfarm QR Check</h3>
                                    <p>
                                        Phần mềm truy xuất nguồn gốc
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center border-end">
                                <div class="service-icon icon-center">
                                    <img src="assets/img/service/graphic-design.png" alt="service icon" width="65"
                                        height="65">
                                </div>
                                <div class="feature-info-wrap">
                                    <h3 class="h5">Nextfarm Quản lý</h3>
                                    <p>
                                        Phần mềm quản lý trang trại
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center">
                                <div class="service-icon icon-center">
                                    <img src="assets/img/service/promotion.png" alt="service icon" width="65"
                                        height="65">
                                </div>
                                <div class="feature-info-wrap">
                                    <h3 class="h5">NextX</h3>
                                    <p>
                                        Phần mềm quản lý hợp tác xã tông thể
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading text-center">
                            <h2>Câu chuyện khách hàng
                            </h2>
                            <p>Hãy cùng chúng tôi khám phá câu chuyện chuyển đổi số thành công trong Nông nghiệp tại Việt
                                Nam
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-warning badge bg-warning-soft">Design</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Do you really understand the concept
                                        of product value?</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                    reality, you have infinite upside and opportunity. In the other reality, you’ll
                                    continue to see the gap between your standard of living and those at the top grow
                                    more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/6.jpg" alt="avatar" width="40"
                                                class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Jane Martin</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-2.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-primary badge bg-primary-soft">Customer</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build
                                        better products for your business</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                    reality, you have infinite upside and opportunity. In the other reality, you’ll
                                    continue to see the gap between your standard of living and those at the top grow
                                    more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/1.jpg" alt="avatar" width="40"
                                                class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Veronica P. Byrd</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-article rounded-custom mb-4 mb-lg-0 mb-md-0">
                            <a href="blog-single.html" class="article-img">
                                <img src="assets/img/blog/blog-3.jpg" alt="article" class="img-fluid">
                            </a>
                            <div class="article-content p-4">
                                <div class="article-category mb-4 d-block">
                                    <a href="javascript:;"
                                        class="d-inline-block text-danger badge bg-danger-soft">Development</a>
                                </div>
                                <a href="blog-single.html">
                                    <h2 class="h5 article-title limit-2-line-text">Why communities help you build
                                        better products</h2>
                                </a>
                                <p class="limit-2-line-text">Society is fragmenting into two parallel realities. In one
                                    reality, you have infinite upside and opportunity. In the other reality, you’ll
                                    continue to see the gap between your standard of living and those at the top grow
                                    more and more.</p>

                                <a href="javascript:;">
                                    <div class="d-flex align-items-center pt-4">
                                        <div class="avatar">
                                            <img src="assets/img/testimonial/3.jpg" alt="avatar" width="40"
                                                class="img-fluid rounded-circle me-3">
                                        </div>
                                        <div class="avatar-info">
                                            <h6 class="mb-0 avatar-name">Martin Gilbert</h6>
                                            <span class="small fw-medium text-muted">April 24, 2021</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="text-center mt-5">
                        <a href="blog.html" class="btn btn-primary">View All Article</a>
                    </div>
                </div>
            </div>

            <div class="row pt-lg-5 pt-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="section-heading text-center">
                                <h2>Hệ sinh thái khác tích hợp
                                </h2>
                                <p>Các sản phẩm khác ngoài Nông nghiệp tích hợp Nextfarm
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mt-4">
                            <div
                                class="position-relative d-flex flex-column h-100 flex-wrap bg-danger-soft p-5 rounded-custom">
                                <div class="cta-left-info mb-2">
                                    <h5>nextX.ai</h5>
                                    <p>THƯƠNG HIỆU NEXTFARM HƯỚNG ĐẾN THỊ TRƯỜNG TOÀN CẦU
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                                </div>
                                <div class="cta-img position-absolute right-0 bottom-0">
                                    <img src="{{ asset('assets/img/cta-img-1') }}.png" alt="cta img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4">
                            <div
                                class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                                <div class="cta-left-info mb-2">
                                    <h5>NextX Farm</h5>
                                    <p>PHẦN MỀM QUẢN LÝ TỔNG THỂ TRANG TRẠI, NÔNG TRẠI
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                                </div>
                                <div class="cta-img position-absolute right-0 bottom-0">
                                    <img src="{{ asset('assets/img/cta-img-2') }}.png" alt="cta img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-4">
                            <div
                                class="position-relative d-flex flex-column h-100 flex-wrap bg-primary-soft p-5 rounded-custom">
                                <div class="cta-left-info mb-2">
                                    <h5>nextX.ai</h5>
                                    <p>GIẢI PHÁP ÁP DỤNG TRÍ TUỆ NHÂN TẠO VÀO NÔNG NGHIỆP
                                    </p>
                                </div>
                                <div class="mt-auto">
                                    <a href="request-demo.html" class="btn btn-outline-primary btn-sm">Start For Free</a>
                                </div>
                                <div class="cta-img position-absolute right-0 bottom-0">
                                    <img src="{{ asset('assets/img/cta-img-2') }}.png" alt="cta img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--feature promo section end-->

    <!--feature left right content start-->
    <!--why choose us section start-->
    <section class="why-choose-us ptb-120">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="why-choose-content">
                        <div class="icon-box rounded-custom bg-primary shadow-sm d-inline-block">
                            <i class="fas fa-bug fa-2x text-white"></i>
                        </div>
                        <h2>Advanced Analytics, Understand Business</h2>
                        <p>Distinctively promote parallel vortals with ubiquitous e-markets. Proactively benchmark
                            turnkey optimize next-generation strategic leadership without resource sucking ideas.
                        </p>
                        <ul class="list-unstyled d-flex flex-wrap list-two-col mt-4 mb-4">
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Thought
                                leadership</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Personal
                                branding</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Modernized
                                prospecting</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Better win
                                rates</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Showcasing
                                success</li>
                            <li class="py-1"><i class="fas fa-check-circle me-2 text-primary"></i>Sales
                                compliance</li>
                        </ul>
                        <a href="about-us.html" class="read-more-link text-decoration-none">Know More About Us <i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                        <img src="{{ asset('assets/img/screen/widget-11') }}.png" class="img-fluid" alt="feature-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--why choose us section end-->

    <!--image feature section start-->
    <section class="image-feature pt-60 pb-120">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-12 order-lg-1">
                    <div class="feature-img-content">
                        <div class="icon-box rounded-custom bg-dark shadow-sm d-inline-block">
                            <i class="fas fa-fingerprint fa-2x text-white"></i>
                        </div>
                        <h2>Match Everything to Brand and Style</h2>
                        <p>Intrinsicly pontificate reliable metrics with enabled. Holisticly maintain
                            clicks-and-mortar manufactured products empower viral customer service through resource
                            deliverables.</p>
                        <p>Customer service through resource pontificate reliable metrics with enabled expedite
                            resource maximizing information maintain manufactured products.</p>

                        <a href="about-us.html" class="read-more-link text-decoration-none d-block mt-4">Know More
                            About
                            Us <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-12 order-lg-0">
                    <div class="feature-img-holder mt-4 mt-lg-0 mt-xl-0">
                        <img src="{{ asset('assets/img/screen/widget-12') }}.png" class="img-fluid" alt="feature-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--image feature section end--> <!--feature left right content end-->

    <!--customer review tab section start-->
    <section class="customer-review-tab ptb-120 bg-gradient text-white  position-relative z-2">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-warning text-primary">Testimonial</h4>
                        <h2>What They Say About Us</h2>
                        <p>Uniquely promote adaptive quality vectors rather than stand-alone e-markets. pontificate
                            alternative architectures whereas iterate.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="testimonial-tabContent">
                        <div class="tab-pane fade active show" id="testimonial-tab-1" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('assets/img/testimonial/quotes-left') }}.svg"
                                            alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">The Best Template You Got to Have it!
                                            </h3>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>

                                        <blockquote class="blockquote">
                                            <p>Globally network long-term high-impact schemas vis-a-vis distinctive
                                                e-commerce
                                                cross-media infrastructures rather than ethical sticky alignments
                                                rather
                                                than global. Plagiarize technically sound total linkage for
                                                leveraged value media web-readiness and premium processes.</p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Joe Richard</h6>
                                            <span>Visual Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('assets/img/testimonial/t-1') }}.jpg"
                                                class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                                    class="video-icon popup-youtube text-decoration-none"><i
                                                        class="fas fa-play"></i> <span class="text-white ms-2 small">
                                                        Watch Video</span></a>
                                            </div>
                                            <div
                                                class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-2" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('assets/img/testimonial/quotes-left') }}.svg"
                                            alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">Embarrassed by the First Version.</h3>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>Energistically streamline robust architectures whereas distributed
                                                mindshare. Intrinsicly leverage other's backend growth strategies
                                                through 24/365 products. Conveniently pursue revolutionary
                                                communities for compelling process improvements. </p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Rupan Oberoi</h6>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('assets/img/testimonial/t-2') }}.jpg"
                                                class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                                    class="video-icon popup-youtube text-decoration-none"><i
                                                        class="fas fa-play"></i> <span class="text-white ms-2 small">
                                                        Watch Video</span></a>
                                            </div>
                                            <div
                                                class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-3" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('assets/img/testimonial/quotes-left') }}.svg"
                                            alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">Amazing Quiety template!</h3>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>
                                                Appropriately negotiate interactive niches rather orchestrate
                                                scalable
                                                benefits whereas flexible systems. Objectively grow quality
                                                outsourcing
                                                without vertical methods of empowerment. Assertively negotiate just
                                                in time innovation after client-centered thinking.
                                            </p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Jon Doe</h6>
                                            <span>Software Engineer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('assets/img/testimonial/t-3') }}.jpg"
                                                class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                                    class="video-icon popup-youtube text-decoration-none"><i
                                                        class="fas fa-play"></i> <span class="text-white ms-2 small">
                                                        Watch Video</span></a>
                                            </div>
                                            <div
                                                class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-4" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('assets/img/testimonial/quotes-left') }}.svg"
                                            alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">Best Template for SAAS Company!</h3>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>Competently repurpose cost effective strategic theme areas and
                                                customer
                                                directed meta-services. Objectively orchestrate orthogonal
                                                initiatives
                                                after enterprise-wide bandwidth. Dynamically generate extensive
                                                through cooperative channels time partnerships. </p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Hanry Luice</h6>
                                            <span>App Developer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('assets/img/testimonial/t-4') }}.jpg"
                                                class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                                    class="video-icon popup-youtube text-decoration-none"><i
                                                        class="fas fa-play"></i> <span class="text-white ms-2 small">
                                                        Watch Video</span></a>
                                            </div>
                                            <div
                                                class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="testimonial-tab-5" role="tabpanel">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-md-6">
                                    <div class="testimonial-tab-content mb-5 mb-lg-0 mb-md-0">
                                        <img src="{{ asset('assets/img/testimonial/quotes-left') }}.svg"
                                            alt="testimonial quote" width="65" class="img-fluid mb-32">
                                        <div class="blockquote-title-review mb-4">
                                            <h3 class="mb-0 h4 fw-semi-bold">It is Undeniably Good!</h3>
                                            <ul class="review-rate mb-0 list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <blockquote class="blockquote">
                                            <p>Appropriately disintermediate one-to-one vortals through cross
                                                functional
                                                infomediaries. Collaboratively pursue multidisciplinary systems
                                                through
                                                stand-alone architectures. Progressively transition covalent
                                                architectures whereas vertical applications procrastinate
                                                professional.</p>
                                        </blockquote>
                                        <div class="author-info mt-4">
                                            <h6 class="mb-0">Ami Nijai</h6>
                                            <span>Customer Support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="author-img-wrap pt-5 ps-5">
                                        <div class="testimonial-video-wrapper position-relative">
                                            <img src="{{ asset('assets/img/testimonial/t-5') }}.jpg"
                                                class="img-fluid rounded-custom shadow-lg" alt="testimonial author">
                                            <div class="customer-info text-white d-flex align-items-center">
                                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                                    class="video-icon popup-youtube text-decoration-none"><i
                                                        class="fas fa-play"></i> <span class="text-white ms-2 small">
                                                        Watch Video</span></a>
                                            </div>
                                            <div
                                                class="position-absolute bg-primary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills testimonial-tab-menu mt-60" id="testimonial" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link active"
                                data-bs-toggle="pill" data-bs-target="#testimonial-tab-1" role="tab"
                                aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('assets/img/testimonial/1.jpg') }}" width="50"
                                        class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Joe Richard</h6>
                                    <span>Visual Designer</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link"
                                data-bs-toggle="pill" data-bs-target="#testimonial-tab-2" role="tab"
                                aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('assets/img/testimonial/2.jpg') }}" width="50"
                                        class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Rupan Oberoi</h6>
                                    <span>Web Designer</span>
                                </div>
                            </div>

                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link"
                                data-bs-toggle="pill" data-bs-target="#testimonial-tab-3" role="tab"
                                aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('assets/img/testimonial/3.jpg') }}" width="50"
                                        class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Jon Doe</h6>
                                    <span>Software Engineer</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link"
                                data-bs-toggle="pill" data-bs-target="#testimonial-tab-4" role="tab"
                                aria-selected="false">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('assets/img/testimonial/4.jpg') }}" width="50"
                                        class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Hanry Luice</h6>
                                    <span>App Developer</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center rounded-custom border border-light border-2 testimonial-tab-link"
                                data-bs-toggle="pill" data-bs-target="#testimonial-tab-5" role="tab"
                                aria-selected="true">
                                <div class="testimonial-thumb me-3">
                                    <img src="{{ asset('assets/img/testimonial/5.jpg') }}" width="50"
                                        class="rounded-circle" alt="testimonial thumb">
                                </div>
                                <div class="author-info">
                                    <h6 class="mb-0">Ami Nijai</h6>
                                    <span>Customer Support</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!--customer review tab section end-->

    <!--our work process start-->
    <section class="work-process ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Process</h4>
                        <h2>We Follow Our Work Process</h2>
                        <p>Enthusiastically engage cross-media leadership skills for alternative experiences.
                            Proactively drive vertical systems than intuitive architectures.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-md-12 order-1 order-lg-0">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/img/office-img-1') }}.jpg" alt="work process"
                            class="img-fluid rounded-custom">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-0 order-lg-1">
                    <ul class="work-process-list list-unstyled">
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-folder-tree fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Step 1</span>
                                <h3 class="h5 mb-2">Research and Content Planing</h3>
                                <p>Progressively foster enterprise-wide systems whereas equity invested
                                    web-readiness harness installed base bandwidth.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-bezier-curve fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Step 2</span>
                                <h3 class="h5 mb-2">Publishing and Execution</h3>
                                <p>Dramatically administrate progressive metrics without error-free globally
                                    simplify
                                    standardized alignments plagiarize distributed.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-layer-group fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Step 3</span>
                                <h3 class="h5 mb-2">Product Prototyping</h3>
                                <p>Interactively whiteboard transparent testing procedures before
                                    bricks-and-clicks initiatives administrate competencies.
                                </p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-4 mb-lg-0">
                            <div class="process-icon-2 border border-2 rounded-custom bg-white me-4 mt-2">
                                <i class="fas fa-truck fa-2x"></i>
                            </div>
                            <div class="icon-content">
                                <span class="text-primary h6">Step 4</span>
                                <h3 class="h5 mb-2">Deliver the Final Product</h3>
                                <p>Dramatically plagiarize distributed progressive metrics without error-free
                                    globally simplify
                                    standardized alignments.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> <!--our work process end-->

    <!--pricing section start-->
    <section class="pricing-section pt-60 pb-120  position-relative z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">Pricing</h4>
                        <h2>Check Our Valuable Price</h2>
                        <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow value
                            whereas accurate e-commerce vectors. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-3">
                    <div class="media d-flex align-items-center py-2 p-sm-2">
                        <div class="icon-box mb-0 bg-primary-soft rounded-circle d-block me-3">
                            <i class="fas fa-credit-card text-primary"></i>
                        </div>
                        <div class="media-body fw-medium h6 mb-0">
                            No credit card required
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="media d-flex align-items-center py-2 p-sm-2">
                        <div class="icon-box mb-0 bg-success-soft rounded-circle d-block me-3">
                            <i class="fas fa-calendar-check text-success"></i>
                        </div>
                        <div class="media-body fw-medium h6 mb-0">
                            Get 30 day free trial
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="media d-flex align-items-center py-2 p-sm-2">
                        <div class="icon-box mb-0 bg-danger-soft rounded-circle d-block me-3">
                            <i class="fas fa-calendar-times text-danger"></i>
                        </div>
                        <div class="media-body fw-medium h6 mb-0">
                            Cancel anytime
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div
                        class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                        <div class="pricing-header mb-32">
                            <h3 class="package-name text-primary d-block">Stater</h3>
                            <h4 class="display-6 fw-semi-bold">$25<span>/month</span></h4>
                        </div>
                        <div class="pricing-info mb-4">
                            <ul class="pricing-feature-list list-unstyled">
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 1 Team</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 1 Installed Agent</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Real-Time Feedback</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Video Dedicated Support
                                </li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 1 Attacked Targets Per
                                    Month</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Team Collaboration
                                    Tools</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Automated Updated
                                    Features</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 24/7 Life time Support
                                </li>
                            </ul>
                        </div>
                        <a href="request-demo.html" class="btn btn-outline-primary mt-2">Buy Now</a>

                        <!--pattern start-->
                        <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                            <img src="{{ asset('assets/img/shape/dot-big') }}-square.svg" alt="shape">
                        </div>
                        <!--pattern end-->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div
                        class="position-relative single-pricing-wrap rounded-custom bg-gradient text-white p-5 mb-4 mb-lg-0">
                        <div class="pricing-header mb-32">
                            <h3 class="package-name text-warning d-block">Advanced</h3>
                            <h4 class="display-6 fw-semi-bold">$45<span>/month</span></h4>
                        </div>
                        <div class="pricing-info mb-4">
                            <ul class="pricing-feature-list list-unstyled">
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> 5 Team</li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> 3 Installed Agent</li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Real-Time Feedback</li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Video Dedicated Support
                                </li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> 24 Attacked Targets Per
                                    Month</li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Team Collaboration
                                    Tools</li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> Automated Updated
                                    Features</li>
                                <li><i class="fas fa-circle fa-2xs text-warning me-2"></i> 24/7 Life time Support
                                </li>
                            </ul>
                        </div>
                        <a href="request-demo.html" class="btn btn-primary mt-2">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div
                        class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                        <div class="pricing-header mb-32">
                            <h3 class="package-name text-primary d-block">Premium</h3>
                            <h4 class="display-6 fw-semi-bold">$75<span>/month</span></h4>
                        </div>
                        <div class="pricing-info mb-4">
                            <ul class="pricing-feature-list list-unstyled">
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 6 Team</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 8 Installed Agent</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Real-Time Feedback</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Video Dedicated Support
                                </li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 40 Attacked Targets Per
                                    Month</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Team Collaboration
                                    Tools</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> Automated Updated
                                    Features</li>
                                <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> 24/7 Life time Support
                                </li>
                            </ul>
                        </div>
                        <a href="request-demo.html" class="btn btn-outline-primary mt-2">Buy Now</a>

                        <!--pattern start-->
                        <div class="dot-shape-bg position-absolute z--1 right--40 top--40">
                            <img src="{{ asset('assets/img/shape/dot-big') }}-square.svg" alt="shape">
                        </div>
                        <!--pattern end-->
                    </div>
                </div>
            </div>
        </div>
    </section> <!--pricing section end-->

    <!--faq section start-->
    <section class="faq-section ptb-120 bg-light-subtle">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6">
                    <div class="section-heading text-center">
                        <h4 class="h5 text-primary">FAQ</h4>
                        <h2>Frequently Asked Questions</h2>
                        <p>Conveniently mesh cooperative services via magnetic outsourcing. Dynamically grow value
                            whereas accurate e-commerce vectors. </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 col-12">
                    <div class="faq-wrapper">
                        <div class="faq-item mb-5">
                            <h5><span class="h3 text-primary me-2">1.</span> How does back pricing work?</h5>
                            <p>Progressively e-enable collaborative inexpensive supply chains. Efficiently maintain
                                economically methods of empowerment for synergistic sound scenarios.</p>
                        </div>
                        <div class="faq-item mb-5">
                            <h5><span class="h3 text-primary me-2">2.</span> How do I calculate how much price?
                            </h5>
                            <p>Globally benchmark customized mindshare before clicks-and-mortar partnerships.
                                Efficiently maintain economically sound scenarios and whereas client-based
                                progressively. </p>
                        </div>
                        <div class="faq-item">
                            <h5><span class="h3 text-primary me-2">3.</span> Can you show me an example?</h5>
                            <p> Dynamically visualize whereas competitive relationships. Progressively benchmark
                                customized partnerships generate interdependent benefits rather sound scenarios and
                                robust alignments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-center mt-4 mt-lg-0 mt-md-0">
                        <img src="{{ asset('assets/img/faq.svg') }}" alt="faq" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> <!--faq section end-->

    <!--integration section start-->
    <section class="integration-section ptb-120">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-3">
                    <div class="integration-list-wrap">
                        <a href="integration-single.html" class="integration-1" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Your Brand Name">
                            <img src="{{ asset('assets/img/integations/1.png') }}" alt="integration"
                                class="img-fluid rounded-circle">
                        </a>
                        <a href="integration-single.html" class="integration-2" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Your Brand Name">
                            <img src="{{ asset('assets/img/integations/2.png') }}" alt="integration"
                                class="img-fluid rounded-circle">
                        </a>
                        <a href="integration-single.html" class="integration-3" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Your Brand Name">
                            <img src="{{ asset('assets/img/integations/3.png') }}" alt="integration"
                                class="img-fluid rounded-circle">
                        </a>

                        <a href="integration-single.html" class="integration-4" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Your Brand Name">
                            <img src="{{ asset('assets/img/integations/4.png') }}" alt="integration"
                                class="img-fluid rounded-circle">
                        </a>
                        <a href="integration-single.html" class="integration-5" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Your Brand Name">
                            <img src="{{ asset('assets/img/integations/5.png') }}" alt="integration"
                                class="img-fluid rounded-circle">
                        </a>
                        <a href="integration-single.html" class="integration-6" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Your Brand Name">
                            <img src="{{ asset('assets/img/integations/6.png') }}" alt="integration"
                                class="img-fluid rounded-circle">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="section-heading text-center my-5 my-lg-0 my-xl-0">
                        <h4 class="text-primary h5">Integration</h4>
                        <h2>We Collaborate with Top Software Company</h2>
                        <a href="integrations.html" class="mt-4 btn btn-primary">View all Integration</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="col-lg-4">
                        <div class="integration-list-wrap">
                            <a href="integration-single.html" class="integration-7" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Your Brand Name">
                                <img src="{{ asset('assets/img/integations/7.png') }}" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a href="integration-single.html" class="integration-8" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Your Brand Name">
                                <img src="{{ asset('assets/img/integations/8.png') }}" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a href="integration-single.html" class="integration-9" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Your Brand Name">
                                <img src="{{ asset('assets/img/integations/9.png') }}" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>

                            <a href="integration-single.html" class="integration-10" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Your Brand Name">
                                <img src="{{ asset('assets/img/integations/10.png') }}" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a href="integration-single.html" class="integration-11" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Your Brand Name">
                                <img src="{{ asset('assets/img/integations/11.png') }}" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                            <a href="integration-single.html" class="integration-12" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Your Brand Name">
                                <img src="{{ asset('assets/img/integations/12.png') }}" alt="integration"
                                    class="img-fluid rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-100">
                <div class="col-lg-5 col-md-12">
                    <a href="integration-single.html"
                        class="mb-4 mb-lg-0 mb-xl-0 position-relative text-decoration-none connected-app-single border border-light border-2 rounded-custom d-block overflow-hidden p-5">
                        <div class="position-relative connected-app-content">
                            <div class="integration-logo bg-custom-light rounded-circle p-2 d-inline-block">
                                <img src="{{ asset('assets/img/integations/4.png') }}" width="40" alt="integration"
                                    class="img-fluid">
                            </div>
                            <h5>Google Drive</h5>
                            <p class="mb-0 text-body">Competently generate unique e-services and client-based
                                models.
                                Globally engage tactical niche</p>
                        </div>
                        <span
                            class="position-absolute integration-badge badge px-3 py-2 bg-primary-soft text-primary">Connect</span>
                    </a>
                </div>

                <div class="col-lg-5 col-md-12">
                    <a href="integration-single.html"
                        class="position-relative text-decoration-none connected-app-single border border-light border-2 rounded-custom d-block overflow-hidden p-5">
                        <div class="position-relative connected-app-content">
                            <div class="integration-logo bg-custom-light rounded-circle p-2 d-inline-block">
                                <img src="{{ asset('assets/img/integations/9.png') }}" width="40" alt="integration"
                                    class="img-fluid">
                            </div>
                            <h5>Google Drive</h5>
                            <p class="mb-0 text-body">Globally engage tactical niche markets rather than
                                client-based
                                competently generate services</p>
                        </div>
                        <span
                            class="position-absolute integration-badge badge px-3 py-2 bg-danger-soft text-danger">Connected</span>
                    </a>
                </div>
            </div>
        </div>
    </section> <!--integration section end-->

    <!--cat subscribe start-->
    <section class="cta-subscribe pt-60 pb-120 ">
        <div class="container">
            <div class="bg-gradient ptb-120 position-relative overflow-hidden rounded-custom">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading">
                                <h4 class="h5 text-warning">Let's Try! Get Free Support</h4>
                                <h2>Start Your 14-Day Free Trial</h2>
                                <p>We can help you to create your dream website for better business revenue.</p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5">
                                <a href="contact-us.html" class="btn btn-primary">Contact with Us</a>
                                <a href="http://www.youtube.com/watch?v=hAP2QF--2Dg"
                                    class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0">
                                    <i class="fas fa-play"></i> Watch Demo </a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4">
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Free 14-day
                                        trial</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>No credit card
                                        required</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Support 24/7</span>
                                </li>
                                <li class="nav-item">
                                    <span><i class="far fa-check-circle text-primary me-2"></i>Cancel
                                        anytime</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </div>
    </section> <!--cat subscribe end-->
@endsection