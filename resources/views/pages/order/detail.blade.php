@extends('layouts.layout')

@section('content')
    <div class="ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table table-borderless table-nowrap table-centered mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Tên</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <tbody id="cart-data">
                                @foreach ($entry->orderDetails as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('assets/images/products/product-1.jpg') }}" alt="contact-img"
                                                title="contact-img" class="rounded me-3" height="64">
                                            <p class="m-0 d-inline-block align-middle font-16">
                                                <a href="${route}" class="text-body">{{ $item->price->name }} -
                                                    {{ $item->price->product->name }}</a>
                                            </p>
                                        </td>
                                        <td class="d-flex align-items-center font-16" height="80px">
                                            <p class="m-0">
                                                <span>{{ number_format((float) $item->price->price, 0, ',', '.') }}
                                                    VNĐ</span>
                                            </p>
                                        </td>
                                        <td>
                                            <input type="number" min="1" value="{{ $item->quantity }}"
                                                class="form-control btn-update" placeholder="Qty" data-id="${item.price.id}"
                                                style="width: 90px;" disabled>
                                        </td>
                                        <td class="d-flex align-items-center font-16" height="80px">
                                            <p class="m-0">
                                                <span>{{ number_format((float) $item->total, 0, ',', '.') }} VNĐ</span>
                                            </p>
                                        </td>
                                    </tr>
                                @endforeach
                                <hr>
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Địa chỉ</h4>

                                    <h5>{{ $entry->first_name }} {{ $entry->last_name }}</h5>

                                    <address class="mb-0 font-14 address-lg">
                                        {{ $entry->address }}<br>
                                        {{ $entry->ward }}, {{ $entry->district }}, {{ $entry->province }}<br>
                                        <abbr title="Mobile">Email:</abbr> {{ $entry->email }} <br>
                                        <abbr title="Phone">Số điện thoại:</abbr> {{ $entry->phone }} <br>
                                    </address>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                        <h4 class="header-title mb-3">Tóm tắt</h4>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <th>Tổng :</th>
                                    <th id="total">{{ number_format((float) $entry->total, 0, ',', '.') }} VNĐ</th>
                                    </tr>
                                    <th>Trạng thái :</th>
                                    <th id="total">{{ $entry->statusText }}</th>
                                    </tr>
                                </tbody>
                            </table>
                            @if ($entry->status == 0)
                                <div class="mt-4 d-flex justify-content-center">
                                    <a href="{{ route('order.payment', ['id' => $entry->id]) }}" class="btn btn-danger"
                                        id="order">
                                        <i class="mdi mdi-truck-fast me-1"></i> Thanh toán VNPay</a>
                                </div>
                            @endif
                        </div>
                        <!-- end table-responsive -->
                    </div>

                </div> <!-- end col -->

            </div>
        </div>
    </div>
@endsection
