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
@endsection
