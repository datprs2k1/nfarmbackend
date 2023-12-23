@extends('admin.layouts.layout')

@section('title')
    Danh mục - NFarm
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Tables</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <button type="button" class="btn btn-primary" id="add">
                                <i class=" uil-plus font-16"></i>
                            </button>
                        </div>
                    </div>
                    <table id="table" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Mô tả</th>
                                <th>Loại</th>
                                <th>Trạng thái</th>
                                <th>Hành dộng</th>
                            </tr>
                        </thead>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-primary">
                    <h4 class="modal-title" id="primary-header-modalLabel">Modal Heading</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label font-20">Tên danh mục</label>
                        <input type="text" name="name" class="form-control font-16" id="name"
                            placeholder="Tên danh mục" />
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label font-20">Mô tả</label>
                        <input type="text" name="description" class="form-control font-16" id="description"
                            placeholder="Mô tả" />
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label font-20">Loại</label>
                        <select class="form-control select2" id="type">
                            @foreach ($types as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label font-20">Trạng thái</label>
                        <select class="form-control select2" id="status">
                            @foreach ($status as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Đóng</a>
                    <button type="button" class="btn btn-primary" id="submit">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $(".select2").select2({
                dropdownParent: $("#modal")
            });

            $('#table').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $('.table_paginate > .pagination').addClass('pagination-rounded');
                },
                ajax: '{!! route('api.admin.category.get') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'name',
                        name: 'name',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'description',
                        name: 'description',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'type_text',
                        name: 'type_text',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'statusText',
                        name: 'statusText',
                        className: 'text-center',
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: 'text-center align-middle',
                    }
                ],
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "pageLength": 10
            });

            var mode = 'add';
            var id = '';

            var modal = $('#modal');
            var title = $('#title');
            var name = $('#name');
            var description = $('#description');
            var type = $('#type');
            var status = $('#status');
            var submit = $('#submit');

            $(document).on('click', '#detail', function(e) {
                title.text('Chi tiết danh mục');

                id = $(this).data('id');

                var route = '{{ route('api.admin.category.show', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                $.ajax({
                    url: route,
                    method: "GET",
                    success: function(data) {
                        name.val(data.name);
                        description.val(data.description);
                        type.val(data.type);
                        status.val(data.status);

                        name.prop('disabled', true);
                        description.prop('disabled', true);
                        type.prop('disabled', true);
                        status.prop('disabled', true);
                        submit.hide();

                        modal.modal('show', {
                            focus: false
                        });
                    },
                    error: function(error) {
                        console.log(error.responseJSON.message)
                    }
                });
            });

            $(document).on('click', '#add', function(e) {
                name.prop('disabled', false);
                description.prop('disabled', false);
                type.prop('disabled', false);
                status.prop('disabled', false);
                submit.show();

                title.text('Thêm danh mục');
                mode = 'add';
                modal.modal('show');
            });

            $(document).on('click', '#edit', function(e) {
                name.prop('disabled', false);
                description.prop('disabled', false);
                type.prop('disabled', false);
                status.prop('disabled', false);
                submit.show();

                title.text('Sửa danh mục');
                mode = 'edit';

                id = $(this).data('id');

                var route = '{{ route('api.admin.category.show', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                $.ajax({
                    url: route,
                    method: "GET",
                    success: function(data) {
                        name.val(data.name);
                        description.val(data.description);
                        type.val(data.type);
                        status.val(data.status);

                        modal.modal('show');
                    },
                    error: function(error) {
                        console.log(error.responseJSON.message)
                    }
                });

            });

            $('#submit').on('click', function(e) {
                e.preventDefault();

                var route = '';

                if (mode == 'add') {
                    route = '{{ route('api.admin.category.store') }}';
                } else {
                    route = '{{ route('api.admin.category.update', ['id' => ':id']) }}';
                    route = route.replace(':id', id);
                }

                const data = new FormData();
                data.append('name', name.val());
                data.append('description', description.val());
                data.append('type', type.val());
                data.append('status', status.val());

                if (mode == 'edit') {
                    data.append('_method', 'PUT');
                }

                $.ajax({
                    url: route,
                    method: 'POST',
                    data: data,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        modal.modal('hide');

                        Swal.fire({
                            title: "Thành công!",
                            text: "Thành công!",
                            icon: "success",
                            button: "OK!",
                        });

                        $('#table').DataTable().ajax.reload();
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
                            title: e.responseJSON.error_msg
                        })
                    }
                });
            });

            $(document).on('click', '#delete', function(e) {
                id = $(this).data('id');
                route = '{{ route('api.admin.category.destroy', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                Swal.fire({
                    title: "Bạn có chắc chắn muốn xóa?",
                    text: "Sau khi xóa, sẽ lưu ở thùng rác!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Vâng, tôi muốn xóa!",
                    cancelButtonText: "Không, hủy xóa!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: route,
                            method: 'DELETE',
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                Swal.fire({
                                    title: "Thành công!",
                                    text: "Thành công!",
                                    icon: "success",
                                    button: "OK!",
                                });

                                $('#table').DataTable().ajax.reload();
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
                                        toast.addEventListener('mouseenter',
                                            Swal.stopTimer)
                                        toast.addEventListener('mouseleave',
                                            Swal
                                            .resumeTimer)
                                    }
                                })
                                Toast.fire({
                                    icon: 'error',
                                    title: e.responseJSON.error_msg
                                })
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
