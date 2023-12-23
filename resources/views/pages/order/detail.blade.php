@extends('layouts.layout')

@section('content')
    <div class="ptb-60">
        <div class="container" id="pdf">
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
                                    <tr>
                                        <td>Tổng :</td>
                                        <td id="total">{{ number_format((float) $entry->total, 0, ',', '.') }} VNĐ</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đặt hàng :</td>
                                        <td id="total">{{ $entry->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày cập nhật :</td>
                                        <td id="total">{{ $entry->updated_at }}</td>
                                    </tr>
                                    <tr style="vertical-align: middle">
                                        <td>Trạng thái :</td>
                                        <td id="total">
                                            @if ($entry->status == 1)
                                                <h6><span class='badge bg-success'>{{ $entry->statusText }}</span></h6>
                                            @else
                                                <h6><span class='badge bg-danger'>{{ $entry->statusText }}</span></h6>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @if ($entry->status == 0)
                                <div class="mt-4 d-flex justify-content-center">
                                    <a href="{{ route('order.payment', ['id' => $entry->id]) }}" class="btn btn-danger btn-sm"
                                        id="order">
                                        <i class="mdi mdi-truck-fast me-1"></i> Thanh toán VNPay</a>
                                </div>
                            @endif
                            <div class="mt-4 d-flex justify-content-center">
                                <button class="btn btn-primary btn-sm" id="create_pdf">Xuất hoá đơn</button>
                            </div>
                        </div>
                        <!-- end table-responsive -->
                    </div>

                </div> <!-- end col -->

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        var form = $('#pdf'),
            cache_width = form.width(),
            a4 = [595.28, 841.89]; // for a4 size paper width and height

        $('#create_pdf').on('click', function() {
            $('body').scrollTop(0);
            createPDF();
        });

        function createPDF() {
            getCanvas().then(function(canvas) {
                var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('{{ $entry->id }}.pdf');
                form.width(cache_width);
            });
        }

        function getCanvas() {
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }
    </script>
@endpush
