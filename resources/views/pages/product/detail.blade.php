@extends('layouts.layout')

@section('title')
    {{ $product->name }} - NFarm.Click
@endsection

@section('content')
    <section class="page-header position-relative overflow-hidden ptb-80 bg-dark"
        style="background: url('{{ asset('assets/img/page-header-bg.svg') }}'')no-repeat bottom left">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h1 class="display-6 text-uppercase">{{ $product->description }} <span
                            class="text-primary">{{ $product->name }}</span></h1>
                    <ul class="list-unstyled mb-0">
                        @foreach ($product->detail as $detail)
                            <li class="py-2 py-lg-1"><i class="fas fa-check-circle me-2 text-primary"></i>{{ $detail }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ $product->image[0] }}" class="img-fluid" />
                </div>
            </div>
            <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
        </div>
    </section>
    @foreach ($product->future as $future)
        <section class="feature-section {{ $loop->last ? 'ptb-80' : 'pt-80' }}">
            <div class="container">
                <div class="row align-items-lg-center justify-content-between">
                    <div class="col-lg-5 order-lg-{{ $loop->odd ? '2' : '1' }} mb-7 mb-lg-0">
                        <div class="mb-4">
                            <h2 class="text-uppercase">TÍNH NĂNG {{ $product->name }}</h2>
                        </div>
                        <ul class="list-unstyled">
                            @foreach ($future as $item)
                                <h3 class="h5 mt-5"> <span><i class="fas fa-check-circle text-primary me-1"></i></span>
                                    {{ $item['title'] }}</h3>
                                <p>{{ $item['content'] }}</p>
                                </li>
                            @endforeach
                        </ul>
                        <div class="d-flex justify-content-center mt-5"><a
                                href="{{ route('price.detail', ['slug' => $product->slug]) }}"
                                class="btn btn-primary btn-lg text-uppercase fw-bolder">Xem
                                bảng
                                giá</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-{{ $loop->odd ? '1' : '2' }}">
                        <div class="pr-lg-4 mt-md-4 position-relative">
                            <div class="bg-light-subtle text-center rounded-custom overflow-hidden p-lg-5 p-4 mx-lg-auto">
                                <img src="{{ isset($product->image[$loop->iteration]) ? $product->image[$loop->iteration] : $product->image[0] }}"
                                    alt="" class="img-fluid shadow-sm rounded-custom">
                                <div
                                    class="position-absolute bg-secondary-dark z--1 dot-mask dm-size-16 dm-wh-350 top--40 left--40 top-left">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
