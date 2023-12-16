@extends('admin.layouts.layout')

@section('title')
Sản phẩm - NFarm
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
                                <th>Ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>sản phẩm</th>
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
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="mb-3">
                                <label for="name" class="form-label font-20">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control font-16" id="name"
                                    placeholder="Tên sản phẩm" />
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label font-20">Mô tả</label>
                                <input type="text" name="description" class="form-control font-16" id="description"
                                    placeholder="Mô tả sản phẩm" />
                            </div>
                            <div class="mb-3">
                                <label for="detail" class="form-label font-20">Tổng quan</label>
                                <div id="detail" style="height: 200px;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="future" class="form-label font-20">Chức năng</label>
                                <div id="future" style="height: 300px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 mt-3 mt-xl-0">
                                <label for="image" class="form-label font-20">Ảnh</label>
                                <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>

                                <form action="/" method="post" class="dropzone" data-plugin="dropzone"
                                    data-previews-container="#file-previews"
                                    data-upload-preview-template="#uploadPreviewTemplate">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple id="image" />
                                    </div>

                                    <div class="dz-message needsclick">
                                        <i class="h3 text-muted ri-upload-cloud-2-line"></i>
                                        <h4>Drop files here or click to upload.</h4>
                                    </div>
                                </form>

                                <!-- Preview -->
                                <div class="dropzone-previews mt-3" id="file-previews"></div>

                                <!-- file preview template -->
                                <div class="d-none" id="uploadPreviewTemplate">
                                    <div class="card mt-1 mb-0 shadow-none border">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light"
                                                        alt="">
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-muted fw-bold"
                                                        data-dz-name></a>
                                                    <p class="mb-0" data-dz-size></p>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- Button -->
                                                    <a href="" class="btn btn-link btn-lg text-muted"
                                                        data-dz-remove>
                                                        <i class="ri-close-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end file preview template -->
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label font-20">Danh mục</label>
                                <select class="form-control select2" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label font-20">Trạng thái</label>
                                <select class="form-control select2" id="status">
                                    @foreach ($status as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
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

            var detail = new Quill("#detail", {
                theme: "snow",
                modules: {
                    toolbar: [
                        [{
                            font: []
                        }, {
                            size: []
                        }],
                        ["bold", "italic", "underline", "strike"],
                        [{
                            color: []
                        }, {
                            background: []
                        }],
                        [{
                            script: "super"
                        }, {
                            script: "sub"
                        }],
                        [{
                            header: [!1, 1, 2, 3, 4, 5, 6]
                        }, "blockquote", "code-block"],
                        [{
                            list: "ordered"
                        }, {
                            list: "bullet"
                        }, {
                            indent: "-1"
                        }, {
                            indent: "+1"
                        }],
                        ["direction", {
                            align: []
                        }],
                        ["link", "image", "video"],
                        ["clean"]
                    ]
                }
            });

            var future = new Quill("#future", {
                theme: "snow",
                modules: {
                    toolbar: [
                        [{
                            font: []
                        }, {
                            size: []
                        }],
                        ["bold", "italic", "underline", "strike"],
                        [{
                            color: []
                        }, {
                            background: []
                        }],
                        [{
                            script: "super"
                        }, {
                            script: "sub"
                        }],
                        [{
                            header: [!1, 1, 2, 3, 4, 5, 6]
                        }, "blockquote", "code-block"],
                        [{
                            list: "ordered"
                        }, {
                            list: "bullet"
                        }, {
                            indent: "-1"
                        }, {
                            indent: "+1"
                        }],
                        ["direction", {
                            align: []
                        }],
                        ["link", "image", "video"],
                        ["clean"]
                    ]
                }
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
                ajax: '{!! route('api.admin.product.get') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'image',
                        name: 'image',
                        className: 'text-center align-middle',
                        render: function(data, type, row, meta) {
                            return '<img src="' + row.image[0] +
                                '" class="avatar-lg rounded bg-light"" alt="">';
                        }
                    },
                    {
                        data: 'name',
                        name: 'name',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'description',
                        name: 'description',
                        className: 'text-left align-middle',
                        "render": function(data, type, row, meta) {
                            var a = data.length > 100 ? data.substr(0, 100) + '...' : data;
                            return $("<div/>").html(a).text();
                        }
                    },
                    {
                        data: 'category.name',
                        name: 'category.name',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'status_text',
                        name: 'status_text',
                        className: 'text-center align-middle'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: 'td-actions text-center align-middle'
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
            var status = $('#status');
            var category = $('#category');
            var image = $('[data-plugin="dropzone"]');
            var submit = $('#submit');
            var preview = $('#file-previews');

            $(document).on('click', '#show', function(e) {
                title.text('Chi tiết sản phẩm');

                id = $(this).data('id');

                var route = '{{ route('api.admin.product.show', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                $.ajax({
                    url: route,
                    method: "GET",
                    success: function(data) {
                        name.val(data.name);
                        description.val(data.description);
                        detail.clipboard.dangerouslyPasteHTML(data.detail);
                        future.clipboard.dangerouslyPasteHTML(data.future);
                        category.val(data.category);
                        status.val(data.status);

                        name.prop('disabled', true);
                        category.prop('disabled', true);
                        status.prop('disabled', true);
                        submit.hide();

                        description.prop('disabled', true);
                        detail.disable();
                        future.disable();

                        var html = "";

                        data.image.map(x => {
                            html += `<div class="card mt-1 mb-0 shadow-none border dz-image-preview">
                <div class="p-2">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <img data-dz-thumbnail src="${x}" class="avatar-sm rounded bg-light"
                                alt="">
                        </div>
                        <div class="col ps-0">
                            <a href="javascript:void(0);" class="text-muted fw-bold"
                                data-dz-name></a>
                            <p class="mb-0" data-dz-size></p>
                        </div>
                        <div class="col-auto">
                            <!-- Button -->
                            <div class="btn btn-link btn-lg text-muted" data-dz-remove>
                                <i class="ri-close-line"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
                        })

                        preview.html(html);
                        modal.modal('show', {
                            focus: false
                        });
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

            $(document).on('click', '#add', function(e) {
                name.val("");
                description.val("");
                detail.setContents("");
                future.setContents("");

                name.prop('disabled', false);


                category.prop('disabled', false);
                status.prop('disabled', false);
                submit.show();

                description.prop('disabled', false);
                detail.enable();
                future.enable();

                title.text('Thêm sản phẩm');
                mode = 'add';
                modal.modal('show');
            });

            $(document).on('click', '#edit', function(e) {
                name.prop('disabled', false);


                category.prop('disabled', false);
                status.prop('disabled', false);
                submit.show();

                description.prop('disabled', false);
                detail.enable();
                future.enable();

                title.text('Sửa sản phẩm');
                mode = 'edit';

                id = $(this).data('id');

                var route = '{{ route('api.admin.product.show', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                $.ajax({
                    url: route,
                    method: "GET",
                    success: function(data) {
                        name.val(data.name);
                        description.val(data.description);
                        detail.clipboard.dangerouslyPasteHTML(data.detail);
                        future.clipboard.dangerouslyPasteHTML(data.future);
                        category.val(data.category_id);
                        status.val(data.status);

                        var html = "";

                        data.image.map(x => {
                            html += `<div class="card mt-1 mb-0 shadow-none border dz-image-preview">
                                        <div class="p-2">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <img data-dz-thumbnail src="${x}" class="avatar-sm rounded bg-light"
                                                        alt="">
                                                </div>
                                                <div class="col ps-0">
                                                    <a href="javascript:void(0);" class="text-muted fw-bold"
                                                        data-dz-name></a>
                                                    <p class="mb-0" data-dz-size></p>
                                                </div>
                                                <div class="col-auto">
                                                    <!-- Button -->
                                                    <div class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                        <i class="ri-close-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>`;
                        })

                        preview.html(html);

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
                    route = '{{ route('api.admin.product.store') }}';
                } else {
                    route = '{{ route('api.admin.product.update', ['id' => ':id']) }}';
                    route = route.replace(':id', id);
                }

                const data = new FormData();
                data.append('name', name.val());
                data.append('description', description.val());
                data.append('detail', detail.root.innerHTML);
                data.append('future', future.root.innerHTML);
                data.append('category_id', category.val());
                data.append('status', status.val());

                image[0].dropzone.files.map((value, key) => {
                    data.append(`image[${key}]`, value);
                })

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
                    error: function(error) {
                        console.log(error.responseJSON.message)
                    }
                });
            });

            $(document).on('click', '#delete', function(e) {
                id = $(this).data('id');
                route = '{{ route('api.admin.product.destroy', ['id' => ':id']) }}';
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
