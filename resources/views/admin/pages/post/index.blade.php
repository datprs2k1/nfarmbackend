@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Danh sách bài viết</h4>
        </div>
        <div class="card-body">
            <div class="toolbar">

            </div>
            <div class="material-datatables">
                <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mt-3 mb-3 row">
                                <div class="col">
                                    <button class="btn btn-info btn-round" id="add">
                                        Thêm mới
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                            <table id="datatables"
                                class="table table-striped table-no-bordered table-hover dataTable dtr-inline"
                                cellspacing="0" width="100%" style="width: 100%;" role="grid"
                                aria-describedby="datatables_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending"
                                            width="5%">
                                            ID</th>
                                        <th class="sorting_asc font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending"
                                            width="10%">
                                            Ảnh</th>
                                        <th class="sorting_asc font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending"
                                            width="20%">
                                            Tên bài viết</th>
                                        <th class="sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" width="20%">
                                            Mô tả</th>
                                        <th class="sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" width="20%">
                                            Danh mục</th>
                                        <th class="sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" width="10%">
                                            Trạng thái</th>
                                        <th class="disabled-sorting sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" width="10%">
                                            Hành động</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false" data-backdrop="static"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Tên
                            <small>*</small>
                        </label>
                        <input class="form-control" name="name" type="text" id="name" required="true"
                            aria-required="true">
                        <span class="material-input"></span>
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Mô tả
                            <small>*</small>
                        </label>
                        <textarea name="description" type="text" id="description" required="true" aria-required="true"></textarea>
                        <span class="material-input"></span>
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Nội dùng
                            <small>*</small>
                        </label>
                        <textarea name="content" type="text" id="content" required="true" aria-required="true"></textarea>
                        <span class="material-input"></span>
                    </div>

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Danh mục
                            <small>*</small>
                        </label>
                        <select class="form-control" name="status" type="text" id="category_id" required="true"
                            aria-required="true">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <span class="material-input"></span>
                    </div>

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Trạng thái
                            <small>*</small>
                        </label>
                        <select class="form-control" name="status" type="text" id="status" required="true"
                            aria-required="true">
                            @foreach ($status as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        <span class="material-input"></span>
                    </div>

                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Ảnh
                            <small>*</small>
                        </label>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="..." id="preview">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                <span class="btn btn-rose btn-round btn-file" id="select">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="..." id="image" />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                        <span class="material-input"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-round mr-3" data-dismiss="modal" id="submit">Lưu
                        lại
                        <div class="ripple-container"></div>
                    </button>
                    <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal" id="submit">Đóng
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#content').summernote();
            $('#description').summernote();
            $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('api.admin.post.get') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center',
                    },
                    {
                        data: 'image',
                        name: 'image',
                        className: 'text-center',
                        render: function(data, type, row, meta) {
                            return '<img src="' + row.image +
                                '" class="img-thumbnail" style="height: 100px; width: 200px" alt="">';
                        }
                    },
                    {
                        data: 'name',
                        name: 'name',
                        className: 'text-center',
                    },
                    {
                        data: 'description',
                        name: 'description',
                        className: 'text-left',
                        "render": function(data, type, row, meta) {
                            return data.length > 100 ? data.substr(0, 100) + '...' : data;
                        }
                    },
                    {
                        data: 'category.name',
                        name: 'category',
                        className: 'text-center',
                    },
                    {
                        data: 'status_text',
                        name: 'status_text',
                        className: 'text-center'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false,
                        className: 'td-actions text-center'
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
            var content = $('#content');
            var status = $('#status');
            var image = $('#image');
            var category_id = $('#category_id');
            var submit = $('#submit');
            var preview = $('#preview');
            var select = $('#select');

            $(document).on('click', '#detail', function(e) {
                title.text('Chi tiết danh mục');

                id = $(this).data('id');

                var route = '{{ route('api.admin.post.show', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                $.ajax({
                    url: route,
                    method: "GET",
                    success: function(data) {
                        name.val(data.name);
                        description.summernote('code', data.description);
                        content.summernote('code', data.content);
                        category_id.val(data.category_id);
                        status.val(data.status);
                        preview.attr('src', data.image);

                        name.prop('disabled', true);
                        description.prop('disabled', true);
                        content.prop('disabled', true);
                        status.prop('disabled', true);
                        category_id.prop('disabled', true);
                        select.hide();
                        submit.hide();

                        modal.modal('show', {
                            backdrop:'static',
                            keyboard: false
                        });

                        demo.showNotification('bottom', 'right')
                    },
                    error: function(error) {
                        console.log(error.responseJSON.message)
                    }
                });
            });

            $(document).on('click', '#add', function(e) {
                name.prop('disabled', false);
                description.prop('disabled', false);
                content.prop('disabled', false);
                status.prop('disabled', false);
                category_id.prop('disabled', false);
                submit.show();
                select.show();

                title.text('Thêm danh mục');
                mode = 'add';

                modal.modal('show', {
                            backdrop:'static',
                            keyboard: false
                        });
            });

            $(document).on('click', '#edit', function(e) {
                name.prop('disabled', false);
                description.prop('disabled', false);
                content.prop('disabled', false);
                status.prop('disabled', false);
                category_id.prop('disabled', false);
                submit.show();
                select.show();

                title.text('Sửa danh mục');
                mode = 'edit';

                id = $(this).data('id');

                var route = '{{ route('api.admin.post.show', ['id' => ':id']) }}';
                route = route.replace(':id', id);

                $.ajax({
                    url: route,
                    method: "GET",
                    success: function(data) {
                        name.val(data.name);
                        description.summernote('code', data.description);
                        content.summernote('code', data.content);
                        category_id.val(data.category_id);
                        status.val(data.status);
                        preview.attr('src', data.image);

                        modal.modal('show', {
                            backdrop:'static',
                            keyboard: false
                        });
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
                    route = '{{ route('api.admin.post.store') }}';
                } else {
                    route = '{{ route('api.admin.post.update', ['id' => ':id']) }}';
                    route = route.replace(':id', id);
                }

                const data = new FormData();
                data.append('name', name.val());
                data.append('description', description.val());
                data.append('content', content.val());
                data.append('status', status.val());
                data.append('category_id', category_id.val());
                data.append('image', image[0].files[0]);

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

                route = '{{ route('api.admin.post.destroy', ['id' => ':id']) }}';
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
                                console.log(error.responseJSON.message)
                            }
                        });
                    }
                });
            });
        });
    </script>
@endpush
