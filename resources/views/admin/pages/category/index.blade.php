@extends('admin.layouts.layout')

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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#fullscreeexampleModal">
                                <i class=" uil-plus font-16"></i>
                            </button>
                        </div>
                    </div>
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
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

    <div class="modal fade" id="fullscreeexampleModal" tabindex="-1" aria-labelledby="fullscreeexampleModalLabel"
        aria-hidden="true">
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
                        <input type="text" name="description" class="form-control font-16" id="name"
                            placeholder="Mô tả" />
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label font-20">Loại</label>
                        <input type="text" name="type" class="form-control font-16" id="name"
                            placeholder="Mô tả" />
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-light" data-bs-dismiss="modal">Close</a>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {

            $('#basic-datatable').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    paginate: {
                        previous: "<i class='mdi mdi-chevron-left'>",
                        next: "<i class='mdi mdi-chevron-right'>"
                    }
                },
                drawCallback: function() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
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
                        data: 'status_text',
                        name: 'status_text',
                        className: 'text-center',
                        render: function(data, type, row, meta) {
                            return row.status === 1 ?
                                '<h4><span class="badge bg-success">Hoạt động</span></h4>' :
                                '<h4><span class="badge bg-danger">Không hoạt động</span></h4>'
                        }
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

            var modal = $('#noticeModal');
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
                        $('#datatables').DataTable().ajax.reload();
                        modal.modal('hide');

                        Swal.fire({
                            title: "Thành công!",
                            text: "Thành công!",
                            type: "success",
                            button: "OK!",
                        })
                    },
                    error: function(error) {
                        console.log(error.responseJSON.message)
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
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Vâng, tôi muốn xóa!",
                    cancelButtonText: "Không, hủy xóa!"
                }).then((result) => {
                    if (result) {
                        $.ajax({
                            url: route,
                            method: 'DELETE',
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                $('#datatables').DataTable().ajax.reload();
                            },
                            error: function(error) {
                                console.log(error)
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
