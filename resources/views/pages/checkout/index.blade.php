@extends('layouts.layout')
@section('title')
Đặt hàng - NFarm
@endsection
@section('content')
    <div class="ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4 class="mt-2">Địa chỉ</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="first-name" class="form-label">Tên</label>
                                    <input class="form-control" type="text" placeholder="Tên" id="first-name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="last-name" class="form-label">Họ</label>
                                    <input class="form-control" type="text" placeholder="Họ" id="last-name">
                                </div>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="email" placeholder="Email" id="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Số điện thoại <span
                                            class="text-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Số điện thoại" id="phone">
                                </div>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Địa chỉ</label>
                                    <input class="form-control" type="text" placeholder="Địa chỉ" id="address">
                                </div>
                            </div>
                        </div> <!-- end row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="town-city" class="form-label">Xã / Phường</label>
                                    <select class="form-control" type="text" placeholder="Xã / Phường" id="ward">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="town-city" class="form-label">Quận / Huyện</label>
                                    <select class="form-control" placeholder="Quận / Huyện" id="district">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="state" class="form-label">Tỉnh</label>
                                    <select class="form-control" placeholder="Tỉnh" id="province"></select>
                                </div>
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 mt-3">
                                    <label for="example-textarea" class="form-label">Order Notes:</label>
                                    <textarea class="form-control" id="note" rows="3" placeholder="Write some note.."></textarea>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                        <h4 class="header-title mb-3">Tóm tắt</h4>

                        <div class="table-responsive">
                            <table class="table table-nowrap table-centered mb-0">
                                <tbody>
                                    @foreach ($entries as $entry)
                                        <tr>
                                            <td>
                                                <p class="m-0 d-inline-block align-middle">
                                                    <a href="apps-ecommerce-products-details.html"
                                                        class="text-body fw-semibold">{{ $entry->price->name }} -
                                                        {{ $entry->price->product->name }}</a>
                                                    <br>
                                                    <small>{{ $entry->quantity }} x {{ $entry->price->price }}</small>
                                                </p>
                                            </td>
                                            <td class="">
                                                {{ $entry->totalText }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr class="">
                                        <td>
                                            <h6 class="m-0">Giao hàng:</h6>
                                        </td>
                                        <td class="">
                                            Miễn phí
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <h5 class="m-0">Tổng:</h5>
                                        </td>
                                        <td class=" fw-semibold">
                                            {{ $total }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="mt-4 d-flex justify-content-center">
                                <button class="btn btn-danger" id="order">
                                    <i class="mdi mdi-truck-fast me-1"></i> Đặt hàng </button>
                            </div>
                        </div>

                    </div>
                    <!-- end table-responsive -->
                </div> <!-- end .border-->

            </div> <!-- end col -->
        </div>
    </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            async function getProvinces() {
                $.ajax({
                    url: '{{ asset('assets/js/address/tinh_tp.json') }}',
                    type: 'GET',
                    success: async function(data) {
                        $('#province').empty();
                        $.each(data, function(key, value) {
                            $('#province').append(
                                `<option value="${value.code}">${value.name}</option>`
                            );
                        });

                        await getDistrict();
                    }
                });
            }

            async function getDistrict() {
                var province = $('#province').val();

                $.ajax({
                    url: `{{ asset('assets/js/address/quan-huyen') }}/${province}.json`,
                    type: 'GET',
                    success: async function(data) {
                        $('#district').empty();
                        $.each(data, function(key, value) {
                            $('#district').append(
                                `<option value="${value.code}">${value.name_with_type}</option>`
                            );
                        });

                        await getWard();
                    }
                });
            }

            async function getWard() {
                var district = $('#district').val();

                $.ajax({
                    url: `{{ asset('assets/js/address/xa-phuong') }}/${district}.json`,
                    type: 'GET',
                    success: function(data) {
                        $('#ward').empty();
                        $.each(data, function(key, value) {
                            $('#ward').append(
                                `<option value="${value.code}">${value.name_with_type}</option>`
                            );
                        });
                    }
                });
            }


            getProvinces();

            $('#province').on('change', function() {
                getDistrict();
            });

            $('#district').on('change', function() {
                getWard();
            });

            $('#order').on('click', function() {
                var firstName = $('#first-name').val();
                var lastName = $('#last-name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var address = $('#address').val();
                var ward = $('#ward option:selected').text();
                var district = $('#district option:selected').text();
                var province = $('#province option:selected').text();
                var note = $('#note').val();

                const data = new FormData();
                data.append('first_name', firstName);
                data.append('last_name', lastName);
                data.append('email', email);
                data.append('phone', phone);
                data.append('address', address);
                data.append('ward', ward);
                data.append('district', district);
                data.append('province', province);
                data.append('note', note);

                $.ajax({
                    url: "{{ route('api.user.order.create') }}",
                    type: 'POST',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: async function(data) {
                        route = '{{ route('order.show', ['id' => ':id']) }}';
                        route = route.replace(':id', data.id);
                        window.location.href = route;
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
            })
        });
    </script>
@endpush
