@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header card-header-primary card-header-icon">
            <div class="card-icon">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Danh sách sản phẩm</h4>
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
                                            Tên sản phẩm</th>
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

    <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        data-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title"></h5>
                    <button type="button" class="close btn-lg" data-dismiss="modal" aria-hidden="true">
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
                            Tổng quan
                            <small>*</small>
                        </label>
                        <textarea name="detail" type="text" id="detail" required="true" aria-required="true"></textarea>
                        <span class="material-input"></span>
                    </div>
                    <div class="form-group label-floating is-empty">
                        <label class="control-label">
                            Chức năng
                            <small>*</small>
                        </label>
                        <textarea name="future" type="text" id="future" required="true" aria-required="true"></textarea>
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
                        <div id="actions" class="row">
                            <div class="col-lg-6">
                                <div id="actions" class="row">
                                    <div class="col-lg-6">
                                        <div class="btn-group w-100">
                                            <span class="btn btn-success col fileinput-button">
                                                <i class="fas fa-plus"></i>
                                                <span>Add files</span>
                                            </span>
                                            <button type="submit" class="btn btn-primary col start">
                                                <i class="fas fa-upload"></i>
                                                <span>Start upload</span>
                                            </button>
                                            <button type="reset" class="btn btn-warning col cancel">
                                                <i class="fas fa-times-circle"></i>
                                                <span>Cancel upload</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="table table-striped files" id="previews">
                                    <div id="template" class="row mt-2">
                                        <div class="col-auto">
                                            <span class="preview"><img src="data:," alt data-dz-thumbnail /></span>
                                        </div>
                                        <div class="col d-flex align-items-center">
                                            <p class="mb-0">
                                                <span class="lead" data-dz-name></span>
                                                (<span data-dz-size></span>)
                                            </p>
                                            <strong class="error text-danger" data-dz-errormessage></strong>
                                        </div>
                                        <div class="col-auto d-flex align-items-center">
                                            <div class="btn-group">
                                                <button class="btn btn-primary start">
                                                    <i class="fas fa-upload"></i>
                                                    <span>Start</span>
                                                </button>
                                                <button data-dz-remove class="btn btn-warning cancel">
                                                    <i class="fas fa-times-circle"></i>
                                                    <span>Cancel</span>
                                                </button>
                                                <button data-dz-remove class="btn btn-danger delete">
                                                    <i class="fas fa-trash"></i>
                                                    <span>Delete</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info btn-round mr-3" data-dismiss="modal"
                            id="submit">Lưu
                            lại
                            <div class="ripple-container"></div>
                        </button>
                        <button type="button" class="btn btn-secondary btn-round" data-dismiss="modal"
                            id="submit">Đóng
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
                // DropzoneJS Demo Code Start
                Dropzone.autoDiscover = false

                // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                var previewNode = document.querySelector("#template")
                previewNode.id = ""
                var previewTemplate = previewNode.parentNode.innerHTML
                previewNode.parentNode.removeChild(previewNode)

                var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                    thumbnailWidth: 80,
                    thumbnailHeight: 80,
                    parallelUploads: 20,
                    previewTemplate: previewTemplate,
                    autoQueue: false, // Make sure the files aren't queued until manually added
                    previewsContainer: "#previews", // Define the container to display the previews
                    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
                })

                myDropzone.on("addedfile", function(file) {
                    // Hookup the start button
                    file.previewElement.querySelector(".start").onclick = function() {
                        myDropzone.enqueueFile(file)
                    }
                })



                // Setup the buttons for all transfers
                // The "add files" button doesn't need to be setup because the config
                // `clickable` has already been specified.
                document.querySelector("#actions .start").onclick = function() {
                    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
                }
                document.querySelector("#actions .cancel").onclick = function() {
                    myDropzone.removeAllFiles(true)
                }
                // DropzoneJS Demo Code End
                $('#detail').summernote({


                });
                $('#future').summernote({


                });
                $('#description').summernote({


                });
                $('#datatables').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('api.admin.product.get') !!}',
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
                                var a = data.length > 100 ? data.substr(0, 100) + '...' : data;
                                return $("<div/>").html(a).text();
                            }
                        },
                        {
                            data: 'category.name',
                            name: 'category.name',
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
                var detail = $('#detail');
                var future = $('#future');
                var category_id = $('#category_id');
                var status = $('#status');
                var image = $('#image');
                var submit = $('#submit');
                var preview = $('#preview');
                var select = $('#select');

                $(document).on('click', '#detail', function(e) {
                    title.text('Chi tiết sản phẩm');

                    id = $(this).data('id');

                    var route = '{{ route('api.admin.product.show', ['id' => ':id']) }}';
                    route = route.replace(':id', id);

                    $.ajax({
                        url: route,
                        method: "GET",
                        success: function(data) {
                            name.val(data.name);
                            description.summernote('code', data.description);
                            detail.summernote('code', data.detail);
                            future.summernote('code', data.future);
                            category_id.val(data.category_id);
                            status.val(data.status);
                            preview.attr('src', data.image);

                            name.prop('disabled', true);
                            description.prop('disabled', true);
                            detail.prop('disabled', true);
                            future.prop('disabled', true);
                            category_id.prop('disabled', true);
                            status.prop('disabled', true);
                            select.hide();
                            submit.hide();

                            modal.modal('show', {
                                backdrop: 'static',
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
                    detail.prop('disabled', false);
                    future.prop('disabled', false);
                    category_id.prop('disabled', false);
                    status.prop('disabled', false);
                    submit.show();
                    select.show();

                    title.text('Thêm sản phẩm');
                    mode = 'add';

                    modal.modal('show', {
                        backdrop: 'static',
                        keyboard: false
                    });
                });

                $(document).on('click', '#edit', function(e) {
                    name.prop('disabled', false);
                    description.prop('disabled', false);
                    detail.prop('disabled', false);
                    future.prop('disabled', false);
                    category_id.prop('disabled', false);
                    status.prop('disabled', false);
                    submit.show();
                    select.show();

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
                            description.summernote('code', data.description);
                            detail.summernote('code', data.detail);
                            future.summernote('code', data.future);
                            category_id.val(data.category_id);
                            status.val(data.status);
                            preview.attr('src', data.image);

                            modal.modal('show', {
                                backdrop: 'static',
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
                        route = '{{ route('api.admin.product.store') }}';
                    } else {
                        route = '{{ route('api.admin.product.update', ['id' => ':id']) }}';
                        route = route.replace(':id', id);
                    }

                    const data = new FormData();
                    data.append('name', name.val());
                    data.append('description', description.val());
                    data.append('detail', detail.val());
                    data.append('future', future.val());
                    data.append('category_id', category_id.val());
                    data.append('status', status.val());
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

                    route = '{{ route('api.admin.product.destroy', ['id' => ':id']) }}';
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
                                success: function(data) {
                                    $('#datatables').DataTable().ajax.reload();
                                    modal.modal('hide');
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
