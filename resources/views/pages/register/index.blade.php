<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="light" data-menu-color="brand" data-sidenav-user="true"
    data-sidenav-size="condensed" data-theme="light" data-layout-position="fixed">

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

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!--favicon icon-->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" sizes="16x16">

    <!--title-->
    <title>Đăng ký</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!--custom css end-->

</head>

<body data-aos-easing="ease-in-out" data-aos-duration="500" data-aos-delay="0">

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle" style="display: none;">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--register section start-->
        <section class="sign-up-in-section bg-dark ptb-60"
            style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat right bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-8 col-12">
                        <a href="index.html" class="mb-4 d-block text-center"><img src="{{asset('assets/img/logo.png')}}"
                                alt="logo" class="img-fluid"></a>
                        <div class="register-wrap p-5 bg-light-subtle shadow rounded-custom">
                            <form action="#" class="mt-4 register-form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Tên <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="name" class="form-control" placeholder="Tên"
                                                id="name" required="" aria-label="name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="email" class="mb-1">Email <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="email" class="form-control" placeholder="Địa chỉ email"
                                                id="email" required="" aria-label="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="password" class="mb-1">Mật khẩu <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" placeholder="Mật khẩu"
                                                id="password" required="" aria-label="Password">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="phone" class="mb-1">Số điện thoại <span
                                                class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" placeholder="Số điện thoại"
                                                id="phone" required="" aria-label="phone">
                                                <div class="invalid-feedback">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-3 d-block w-100"
                                            id="submit">Đăng ký</button>
                                    </div>
                                </div>
                                <p class="font-monospace fw-medium text-center text-muted mt-3 pt-4 mb-0">Đã có tài khoản? <a href="{{route('user.login')}}" class="text-decoration-none">Đăng nhập ngay</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->
    </div>

    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/parallax.min.js"></script>
    <script src="assets/js/vendors/aos.js"></script>
    <script src="assets/js/vendors/massonry.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--endbuild-->

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            $("#submit").on("click", function(e) {
                e.preventDefault();
                const email = $('#email').val();
                const password = $('#password').val();
                const name = $('#name').val();
                const phone = $('#phone').val();


                $.ajax({
                    url: '{{ route('api.admin.register') }}',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password,
                        name: name,
                        phone: phone
                    },
                    success: function() {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            showCloseButton: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'success',
                            title: 'Đăng ký thành công';
                        })
                    },
                    error: function(e) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'bottom-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            showCloseButton: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal
                                    .resumeTimer)
                            }
                        })
                        Toast.fire({
                            icon: 'error',
                            title: e.responseJSON.hasOwnProperty('status') ? "Tài khoản hoặc mật khẩu không chính xác" : e.responseJSON.error_msg
                        })
                    }
                });
            });
        });
    </script>


</body>


<!-- Mirrored from quiety.themetags.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Oct 2023 07:22:11 GMT -->

</html>
