@extends('layouts.layout')

@section('title')
Giỏ hàng - NFarm
@endsection

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
                                    <th style="width: 50px;"></th>
                                </tr>
                            </thead>
                            <tbody id="cart-data">
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                    <!-- action buttons-->
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <a href="apps-ecommerce-products.html"
                                class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                <i class="mdi mdi-arrow-left"></i> Tiếp tục mua </a>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <div class="text-sm-end">
                                <a href="{{route('checkout.checkout')}}" class="btn btn-danger">
                                    <i class="mdi mdi-cart-plus me-1"></i> Đặt hàng </a>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
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
                                        <td id="grand-total"></td>
                                    </tr>
                                    <th>Tổng :</th>
                                    <th id="total"></th>
                                    </tr>
                                </tbody>
                            </table>
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
        async function getCartData() {
            var html = ``;
            var total = 0;
            $.ajax({
                url: '{{ route('api.user.cart.get') }}',
                type: 'GET',
                success: function(data) {
                    data.data.map(item => {
                        var route = '{{ route('product.detail', ['slug' => ':slug']) }}';
                        route = route.replace(':slug', item.price.product.slug);
                        html += `<tr>
                                    <td>
                                        <img src="assets/images/products/product-1.jpg" alt="contact-img" title="contact-img"
                                            class="rounded me-3" height="64">
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <a href="${route}" class="text-body">${item.price.name} - ${item.price.product.name}</a>
                                        </p>
                                    </td>
                                    <td class="d-flex align-items-center font-16" height="80px">
                                        <p class="m-0">
                                            <span>${item.price.price}</span>
                                        </p>
                                    </td>
                                    <td>
                                        <input type="number" min="1" value="${item.quantity}" class="form-control btn-update"
                                            placeholder="Qty" data-id="${item.price.id}" style="width: 90px;">
                                    </td>
                                    <td class="d-flex align-items-center font-16" height="80px">
                                        <p class="m-0">
                                            <span>${item.totalText}</span>
                                        </p>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon btn-delete" data-id="${item.id}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr><hr>`
                    })

                    $('#cart-data').html(html);

                    $('#grand-total').html(data.total);
                    $('#total').html(data.total);

                    $('.btn-update').on('change', function() {
                        console.log($(this).val());
                        var id = $(this).data('id');
                        var quantity = $(this).val();

                        $.ajax({
                            url: '{{ route('api.user.cart.update') }}',
                            type: 'POST',
                            data: {
                                price_id: id,
                                quantity: quantity,
                            },
                            success: async function() {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'bottom-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    showCloseButton: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer)
                                        toast.addEventListener('mouseleave',
                                            Swal
                                            .resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Thêm vào giỏ hàng thành công'
                                })

                                await getCart();
                                await getCartData();
                            }
                        });
                    })

                    $('.btn-delete').on('click', function() {
                        var id = $(this).data('id');

                        var route = '{{ route('api.user.cart.destroy', ['id' => ':id']) }}';
                        route = route.replace(':id', id);

                        console.log(route);
                        $.ajax({
                            url: route,
                            type: 'DELETE',
                            success: async function() {
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'bottom-end',
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true,
                                    showCloseButton: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer)
                                        toast.addEventListener('mouseleave',
                                            Swal
                                            .resumeTimer)
                                    }
                                })

                                Toast.fire({
                                    icon: 'success',
                                    title: 'Thêm vào giỏ hàng thành công'
                                })

                                await getCart();
                                await getCartData();
                            }
                        });
                    })
                }
            });

        }


        $(document).ready(function() {
            getCartData();
        })
    </script>
@endpush
