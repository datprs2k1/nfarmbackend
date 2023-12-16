@extends('layouts.layout')

@section('content')
    <div class="ptb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Mã đơn hàng</th>
                                            <th>Ngày</th>
                                            <th>Trạng thái thanh toán</th>
                                            <th>Tổng</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entries as $entry)
                                            <tr style="vertical-align: middle">
                                                <td><a href="{{ route('order.show', ['id' => $entry->id]) }}"
                                                        class="text-body fw-bold">{{ $entry->id }}</a> </td>
                                                <td>
                                                    {{ $entry->created_at }}
                                                </td>
                                                <td>
                                                    @if ($entry->status == 0)
                                                    <h6><span class='badge bg-danger'>{{ $entry->statusText }}</span></h6>

                                                    @else
                                                    <h6><span class='badge bg-success'>{{ $entry->statusText }}</span></h6>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ number_format((float) $entry->total, 0, ',', '.') }} VNĐ
                                                </td>
                                                <td>
                                                    <a href="{{ route('order.show', ['id' => $entry->id]) }}">
                                                        <button type="button" class="btn btn-primary btn-sm">Xem</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
@endsection
