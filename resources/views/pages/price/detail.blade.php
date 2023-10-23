@extends('layouts.layout')

@section('content')
    <section class="page-header position-relative overflow-hidden ptb-120 bg-dark"
        style="background: url('{{ asset('assets/img/page-header-bg.svg') }}')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1 class="display-5 fw-bold">{{ $prices->first()->first()->product->name }}</h1>
                    <p class="lead">{{ $prices->first()->first()->product->description }}</p>
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    <section class="pricing-section ptb-120 position-relative z-2">
        <div class="container">
            @foreach ($prices as $price)
                <div class="row">
                    @foreach ($price as $item)
                        <div class="col-lg-4 col-md-6">
                            <div
                                class="position-relative single-pricing-wrap rounded-custom bg-white custom-shadow p-5 mb-4 mb-lg-0">
                                <div class="pricing-header mb-32 text-center">
                                    <h3 class="package-name text-primary d-block text-uppercase font-24">
                                        {{ $item->name }}
                                    </h3>
                                    <h4 class="fw-semi-bold">{{ number_format($item->price, 0, ',', '.') }} VNĐ</span></h4>
                                </div>
                                <div class="pricing-info mb-4">
                                    @if ($item->note)
                                        <div class="alert alert-primary" role="alert">
                                            {{ $item->note }}
                                        </div>
                                    @endif

                                    <ul class="pricing-feature-list list-unstyled">
                                        @foreach ($item->detail as $detail)
                                            <li><i class="fas fa-circle fa-2xs text-primary me-2"></i> {{ $detail }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="alert alert-primary text-uppercase text-center" role="alert">
                                        Bảo hành {{ $item->warranty }} năm
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="request-demo.html" class="btn btn-outline-primary mt-2">Thêm vào giỏ hàng</a>
                                </div>

                                <!--pattern start-->
                                <div class="dot-shape-bg position-absolute z--1 left--40 bottom--40">
                                    <img src="{{ asset('assets/img/shape/dot-big-square.svg') }}" alt="shape">
                                </div>
                                <!--pattern end-->
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection