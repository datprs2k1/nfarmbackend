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
                                    <button class="btn btn-info btn-round" data-toggle="modal" data-target="#noticeModal">
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
        <div class="modal-dialog modal-notice">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Thêm danh mục</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">close</i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="instruction">
                        <h1>Hello</h1>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Thêm</button>
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
        });
    </script>
@endpush
