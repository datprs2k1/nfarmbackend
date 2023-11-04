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
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive-->

                    <!-- Add note input-->
                    <div class="mt-3">
                        <label for="example-textarea" class="form-label">Add a Note:</label>
                        <textarea class="form-control" id="example-textarea" rows="3" placeholder="Write some note.."></textarea>
                    </div>

                    <!-- action buttons-->
                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <a href="apps-ecommerce-products.html"
                                class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                <i class="mdi mdi-arrow-left"></i> Continue Shopping </a>
                        </div> <!-- end col -->
                        <div class="col-sm-6">
                            <div class="text-sm-end">
                                <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                    <i class="mdi mdi-cart-plus me-1"></i> Checkout </a>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
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
                                        <td>$1571.19</td>
                                    </tr>
                                    <tr>
                                        <td>Discount : </td>
                                        <td>-$157.11</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Charge :</td>
                                        <td>$25</td>
                                    </tr>
                                    <tr>
                                        <td>Estimated Tax : </td>
                                        <td>$19.22</td>
                                    </tr>
                                    <tr>
                                        <th>Total :</th>
                                        <th>$1458.3</th>
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
            $.ajax({
                url: '{{ route('api.user.cart.get') }}',
                type: 'GET',
                success: function(data) {
                    data.map(item => {
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
                                    <td>
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <span>${item.price.price}</span>
                                        </p>
                                    </td>
                                    <td>
                                        <input type="number" min="1" value="${item.quantity}" class="form-control btn-update"
                                            placeholder="Qty" data-id="${item.price.id}" style="width: 90px;">
                                    </td>
                                    <td>
                                        <p class="m-0 d-inline-block align-middle font-16">
                                            <span>${item.total}</span>
                                        </p>
                                    <td>
                                        <a href="javascript:void(0);" class="action-icon btn-delete" data-id="${item.price.id}"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr><hr>`
                    })

                    $('#cart-data').html(html);

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
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal
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
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal
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
