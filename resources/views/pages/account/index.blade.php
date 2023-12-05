@extends('layouts.layout')

@section('content')
    <section class="masonary-blog-section ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">

                            <h4 class="mb-0 mt-2">{{ auth()->user()->name }}</h4>
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->

                </div> <!-- end col-->

                <div class="col-xl-8 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#settings" data-bs-toggle="tab" aria-expanded="true"
                                        class="nav-link rounded-0 active" aria-selected="true" role="tab">
                                        Thông tin
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#changepassword" data-bs-toggle="tab" aria-expanded="false"
                                        class="nav-link rounded-0" aria-selected="false" tabindex="-1" role="tab">
                                        Đổi mật khẩu
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane show active" id="settings" role="tabpanel">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="firstname" class="form-label">Tên</label>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Nhập tên" value="{{auth()->user()->name}}">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Địa chỉ email</label>
                                                    <input type="email" class="form-control" id="email"
                                                        placeholder="Nhập địa chỉ email" value="{{auth()->user()->email}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Số điện thoại</label>
                                                    <input type="text" class="form-control" id="phone"
                                                        placeholder="Nhập số điện thoại" value="{{auth()->user()->phone}}">
                                                </div>
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->



                                        <div class="text-end">
                                            <button type="submit" id="update" class="btn btn-success mt-2"><i
                                                    class="mdi mdi-content-save"></i>
                                                Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="changepassword" role="tabpanel">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Mật khẩu cũ</label>
                                                    <input type="password" class="form-control" id="password"
                                                        placeholder="Nhập mật khẩu cũ">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="newpassword" class="form-label">Mật khẩu mới</label>
                                                    <input type="password" class="form-control" id="newpassword"
                                                        placeholder="Nhập mật khẩu mới">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="newpassword_confirmation" class="form-label">Nhập lại mật
                                                        khẩu mới</label>
                                                    <input type="password" class="form-control"
                                                        id="newpassword_confirmation" placeholder="Nhập lại mật khẩu mới">
                                                </div>
                                            </div>
                                        </div> <!-- end row -->

                                        <div class="text-end">
                                            <button type="submit" id="changePassword" class="btn btn-success mt-2"><i
                                                    class="mdi mdi-content-save"></i> Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end settings content-->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            $('#update').on('click', function(e) {
                e.preventDefault();

                let name = $('#name').val();
                let phone = $('#phone').val();

                $.ajax({
                    url: '{{ route('api.user.account.update') }}',
                    type: 'POST',
                    data: {
                        name: name,
                        phone: phone,
                        _method: 'PUT'
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
                            title: "Cập nhật thành công"
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
                            title: e.responseJSON.hasOwnProperty('status') ?
                                "Tài khoản hoặc mật khẩu không chính xác" : e
                                .responseJSON.error_msg
                        })
                    }
                });
            });

            $('#changePassword').on('click', function(e) {
                e.preventDefault();
                let password = $('#password').val();
                let newpassword = $('#newpassword').val();
                let newpassword_confirmation = $('#newpassword_confirmation').val();

                $.ajax({
                    url: '{{ route('api.user.account.changePassword') }}',
                    type: 'POST',
                    data: {
                        password: password,
                        newpassword: newpassword,
                        newpassword_confirmation: newpassword_confirmation,
                        _method: 'PUT'
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
                            title: "Cập nhật thành công"
                        });

                        window.location.href = '{{ route('home') }}';
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
                            title: e.responseJSON.hasOwnProperty('status') ?
                                "Tài khoản hoặc mật khẩu không chính xác" : e
                                .responseJSON.message
                        })
                    }
                });
            });

        });
    </script>
@endpush
