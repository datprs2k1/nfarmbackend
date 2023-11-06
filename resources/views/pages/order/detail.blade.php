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
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th style="width: 50px;"></th>
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
                                                <span>{{ $item->price->price }}</span>
                                            </p>
                                        </td>
                                        <td>
                                            <input type="number" min="1" value="{{ $item->quantity }}"
                                                class="form-control btn-update" placeholder="Qty" data-id="${item.price.id}"
                                                style="width: 90px;" disabled>
                                        </td>
                                        <td class="d-flex align-items-center font-16" height="80px">
                                            <p class="m-0">
                                                <span>{{ $item->total }}</span>
                                            </p>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon btn-delete"
                                                data-id="${item.id}"><i class="fas fa-trash"></i></a>
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
                                    <h4 class="header-title mb-3">Shipping Information</h4>

                                    <h5>{{ $entry->first_name }} {{ $entry->last_name }}</h5>

                                    <address class="mb-0 font-14 address-lg">
                                        {{ $entry->address }}<br>
                                        {{ $entry->ward }}, {{ $entry->district }}, {{ $entry->province }}<br>
                                        <abbr title="Phone">P:</abbr> {{ $entry->phone }} <br>
                                        <abbr title="Mobile">M:</abbr> {{ $entry->email }}
                                    </address>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-4">
                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                        <h4 class="header-title mb-3">Order Summary</h4>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                    <tr>
                                        <td>Grand Total :</td>
                                        <td id="grand-total">{{ $entry->total }}</td>
                                    </tr>
                                    <th>Total :</th>
                                    <th id="total">{{ $entry->total }}</th>
                                    </tr>
                                    <th>Trạng thái :</th>
                                    <th id="total">{{ $entry->statusText }}</th>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="mt-4 d-flex justify-content-center">
                                <a href="{{ route('order.payment', ['id' => $entry->id]) }}" class="btn btn-danger"
                                    id="order">
                                    <i class="mdi mdi-truck-fast me-1"></i> Thanh toán VNPay</a>
                            </div>
                        </div>
                        <!-- end table-responsive -->
                    </div>

                </div> <!-- end col -->

            </div>
        </div>
    </div>
@endsection
