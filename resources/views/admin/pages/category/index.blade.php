@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Danh sách danh mục</h4>
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
                                            aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending">
                                            ID</th>
                                        <th class="sorting_asc font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1" aria-sort="ascending">
                                            Tên danh mục</th>
                                        <th class="sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1">
                                            Mô tả</th>
                                        <th class="sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1">
                                            Loại</th>
                                        <th class="sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1">
                                            Trạng thái</th>
                                        <th class="disabled-sorting sorting font-weight-bold text-center" tabindex="0"
                                            aria-controls="datatables" rowspan="1" colspan="1">
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

    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-notice modal-lg">
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
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Mô tả
                            <small>*</small>
                        </label>
                        <textarea class="form-control" name="description" type="text" id="description" required="true" aria-required="true"></textarea>
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Loại
                            <small>*</small>
                        </label>
                        <select class="form-control" name="type" type="text" id="type" required="true"
                            aria-required="true">
                            @foreach ($types as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
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
            $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('api.admin.category.get') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center',
                    },
                    {
                        data: 'name',
                        name: 'name',
                        className: 'text-center',
                    },
                    {
                        data: 'description',
                        name: 'description',
                        className: 'text-center',
                    },
                    {
                        data: 'type_text',
                        name: 'type_text',
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
