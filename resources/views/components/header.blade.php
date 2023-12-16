<header class="main-header w-100 z-10">
    <nav class="navbar navbar-expand-xl navbar-light sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{asset('assets/img/logo.png')}}" alt="logo" width="200px" class="img-fluid logo-white">
                <img src="{{asset('assets/img/logo.png')}}" alt="logo" width="200px" class="img-fluid logo-color">
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0 " href="#offcanvasWithBackdrop" role="button">
                <span class="far fa-bars" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop"
                    aria-controls="offcanvasWithBackdrop"></span>
            </a>

            <div class="clearfix"></div>

            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="true">Sản phẩm</a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white" data-bs-popper="static">
                            <div class="dropdown-grid rounded-custom width-full homepage-dropdown">
                                @foreach ($products as $product)
                                    <div class="dropdown-grid-item">
                                        <h6 class="drop-heading text-uppercase font-20">{{ $product->name }}</h6>
                                        <span class="font-14"
                                            style="padding-left:1rem; font-size:14px">{{ $product->description }}</span>
                                        <hr class="mt-2 mb-2">
                                        @foreach ($product->products as $item)
                                            <a href="{{ route('product.detail', ['slug' => $item->slug]) }}"
                                                class="dropdown-link">
                                                <div class="d-flex align-items-center">
                                                    <span class="me-2"><i class="flaticon-menu"></i></span>
                                                    <div class="">
                                                        <div class="drop-title">{{ $item->name }}</div>
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 text-dark" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Tin tức</a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                            <div class="dropdown-grid rounded-custom width-full">
                                @foreach ($posts as $post)
                                    <div class="dropdown-grid-item">
                                        @foreach ($post as $item)
                                            <a href="{{route('category.detail', ['slug' => $item->slug])}}" class="dropdown-link px-0">
                                                <span class="me-2"><i class="flaticon-menu"></i></span>
                                                <div class="drop-title">{{ $item->name }}</div>
                                            </a>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li><a href="{{route('customer')}}" class="nav-link fs-6 text-dark">Khách hàng</a></li>
                    <li><a href="{{route('about')}}" class="nav-link fs-6 text-dark">Về NFarm</a></li>

                </ul>
            </div>

            <div class="action-btns me-5 me-lg-0 d-none d-md-block d-lg-block">
                @auth
                <div class="d-flex flex-row gap-3 align-items-center">
                    <div class="dropdown me-2">
                        <a class="" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="d-flex flex-row gap-1 align-items-center">
                                <i class="fa-solid fa-cart-shopping text-primary fs-4"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                    id="cart-count"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white dropdown-menu-start">
                            <div class="rounded-custom width-full">
                                <div class="p-4">
                                    <div id="cart"></div>
                                        <div class="dropdown-item d-flex align-items-middle" href="#">
                                            <div class="text pl-3">
                                                <p class = "fs-6 fw-bold">Tổng tiền: <span id="total-cart"></span></p>
                                            </div>
                                        </div>
                                        <hr>
                                    <div class="dropdown-item text-center mt-3">
                                       <a href="{{route('cart.get')}}">
                                        <button type="button" class="btn btn-danger">Xem giỏ hàng</button>
                                       </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="nav-link arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex flex-row gap-1 align-items-center">
                                <span class="account-user-avatar">
                                    <img src="https://nfarm.dev/assets/images/users/avatar-1.jpg" alt="user-image"
                                        width="32" class="rounded-circle">
                                </span>
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <h6 class="my-0">{{auth()->user()->name}}</h6>
                                </span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                            <!-- item-->
                            <!-- item-->
                            <a href="{{route('account.index')}}" class="dropdown-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>Tài khoản</span>
                            </a>
                            <!-- item-->
                            <a href="{{route('order.list')}}" class="dropdown-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>Đơn hàng</span>
                            </a>
                            <!-- item-->
                            <a href="{{route('logout')}}" class="dropdown-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Đăng xuất</span>
                            </a>
                        </div>
                    </div>

                </div>
                @endauth
                @guest
                <a href="{{route('login')}}" class="btn btn-outline-primary me-2">Đăng nhập</a>
                <a href="{{route('register')}}" class="btn btn-primary">Đăng ký</a>
            @endguest
            </div>
        </div>
    </nav>
    <!--offcanvas menu start-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
        <div class="offcanvas-header d-flex align-items-center mt-4">
            <a href="{{route('home')}}" class="d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="assets/img/logo.png" alt="logo" class="img-fluid ps-2">
            </a>
            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close"><i
                    class="far fa-close"></i></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Sản phẩm
                    </a>
                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                        <div class="dropdown-grid rounded-custom width-half">
                            @foreach ($products as $product)
                            <div class="dropdown-grid-item">
                                <h6 class="drop-heading">{{$product->name}}</h6>
                                @foreach ($product->products as $item)
                                <a href="{{ route('product.detail', ['slug' => $item->slug]) }}" class="dropdown-link">
                                    <span class="demo-list bg-primary rounded text-white fw-bold">1</span>
                                    <div class="dropdown-info">
                                        <div class="drop-title">{{$item->name}}</div>
                                        <p>{{$item->description}}</p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Tin tức</a>
                    <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                        <div class="dropdown-grid rounded-custom width-full-3">
                            @foreach ($posts as $post)
                            <div class="dropdown-grid-item">
                                @foreach ($post as $item)
                                <a href="{{route('category.detail', ['slug' => $item->slug])}}" class="dropdown-link">
                                    <span class="me-2"><i class="far fa-browser"></i></span>
                                    <div class="drop-title">{{$item->name}}</div>
                                </a>
                                @endforeach
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li>
                <li><a href="{{route('customer')}}" class="nav-link">Khách hàng</a></li>
                <li><a href="{{route('about')}}" class="nav-link">Về NFarm</a></li>
            </ul>
            @guest
            <div class="action-btns mt-4 ps-3">
                <a href="{{route('login')}}" class="btn btn-outline-primary me-2">Đăng nhập</a>
                <a href="{{route('register')}}" class="btn btn-primary">Đăng ký</a>
            </div>
            @endguest
        </div>

    </div>
    <!--offcanvas menu end-->
</header>
