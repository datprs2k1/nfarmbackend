<!DOCTYPE html>
<html lang="vi">

<!-- Mirrored from quiety.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Oct 2023 07:21:35 GMT -->

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R4FZ23HEY7"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-R4FZ23HEY7');
    </script>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta name="twitter:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Quiety - Creative SAAS Technology & IT Solutions Bootstrap 5 HTML Template">
    <meta property="og:description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description"
        content="Quiety creative Saas, software technology, Saas agency & business Bootstrap 5 Html template. It is best and famous software company and Saas website template.">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>@yield('title')</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--custom css end-->

</head>

<body data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">
    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="{{ asset('assets/img/favicon.png') }}" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <!--header start-->
        <x-header />
        <!--header end--> <!--header section end-->

        @yield('content')
        <!--footer section start-->
        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top  bg-gradient text-white pt-120"
                style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="{{ asset('assets/img/logo-white.png') }}" alt="logo"
                                        class="img-fluid logo-white">
                                    <img src="{{ asset('assets/img/logo-color.png') }}" alt="logo"
                                        class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                    <input type="text" class="input-newsletter form-control me-2"
                                        placeholder="Enter your email" name="email" required="" autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..."
                                        class="btn btn-primary mt-3 mt-lg-0 mt-md-0">
                                </form>
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Primary Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="index.html" class="text-decoration-none">Home</a></li>
                                            <li><a href="about-us.html" class="text-decoration-none">About Us</a>
                                            </li>
                                            <li><a href="services.html" class="text-decoration-none">Services</a>
                                            </li>
                                            <li><a href="career.html" class="text-decoration-none">Career</a></li>
                                            <li><a href="integrations.html"
                                                    class="text-decoration-none">Integrations</a>
                                            </li>
                                            <li><a href="integration-single.html"
                                                    class="text-decoration-none">Integration Single</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-8 mt-8 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Công ty Cổ phần NextVision </h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li>Phòng 816, Tòa nhà CT5, Khu đô thị Mỹ Đình – Mễ Trì, Phạm Hùng, Nam Từ
                                                Liêm, Hà Nội
                                            </li>
                                            <li>90/28 Trần Văn ơn, Phường Tân Sơn Nhì, Quận Tân Phú, TP Hồ Chí Minh
                                            </li>
                                            <li>Tổng đài tư vấn và hỗ trợ khách hàng: 1900 61 29 </li>
                                            <li>Hotline: 090 224 3822 (24/7)
                                            </li>
                                            <li>Từ 8h00 – 22h00 các ngày từ thứ 2 đến Chủ nhật
                                            </li>
                                            <li>Mã code: nextx.vn
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <x-footer />
            <!--footer bottom end-->
        </footer>
        <!--footer section end--> <!--footer section end-->

    </div>



    <!--build:js-->
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/massonry.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        async function getCart() {
            var html = '';

            var x = `<div class="dropdown-item d-flex align-items-start" href="#"> <
            div class = "text pl-3" >
            <
            p class = "fs-6 fw-bold" > NEXTFARM FERTIKIT 4 G - Cơ bản < /p> <
            p class = "mb-0" > < span class = "text-primary" > 29.500 .000 VNĐ <
                /span><span class="quantity ms-3">Số lượng:
            01 < /span></p >
                <
                /div> < /
            div > <a
                hr >`


            $.ajax({
                url: '{{ route('api.user.cart.get') }}',
                type: 'GET',
                success: function(data) {
                    data.data.map(item => {
                        var route = '{{ route('product.detail', ['slug' => ':slug']) }}';
                        route = route.replace(':slug', item.price.product.slug);
                        html += `<a href="${route}"><div class="dropdown-item d-flex align-items-start" href="#"><div class="text pl-3" >
            <p class = "fs-6 fw-bold" > ${item.price.name} - ${item.price.product.name}   </p> <p class = "mb-0" > <span class = "text-primary"> ${item.price.price} </span><span class="quantity ms-3">Số lượng:
            ${item.quantity} </span></p>
                </div></div><hr></a>`
                    })

                    $('#cart').html(html);
                    $('#cart-count').html(data.data.length);
                }
            });
        }

        $(document).ready(function() {
            getCart();


        });
    </script>
    @stack('js')
    <!--endbuild-->
</body>


<!-- Mirrored from quiety.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Oct 2023 07:22:11 GMT -->

</html>
