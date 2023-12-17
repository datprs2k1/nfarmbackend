@extends('admin.layouts.layout')

@section('title')
Giao dịch - NFarm
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
                    </div>
                    <table id="table" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã giao dịch</th>
                                <th>Tổng</th>
                                <th>Mã hoá đơn</th>
                                <th>Người dùng</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                            </tr>
                        </thead>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
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
                ajax: '{!! route('api.admin.transaction.get') !!}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'code',
                        name: 'code',
                        className: 'text-center align-middle'
                    },
                    {
                        data: 'total',
                        name: 'total',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'order.id',
                        name: 'order',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'user.name',
                        name: 'user',
                        className: 'text-center align-middle',
                    },
                    {
                        data: 'statusText',
                        name: 'statusText',
                        className: 'text-left align-middle',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        className: 'text-center align-middle'
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
