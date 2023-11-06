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
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck1">
                                                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Payment Status</th>
                                            <th>Total</th>
                                            <th>Payment Method</th>
                                            <th>Order Status</th>
                                            <th style="width: 125px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($entries as $entry)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customCheck2">
                                                        <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td><a href="{{ route('order.show', ['id' => $entry->id]) }}"
                                                        class="text-body fw-bold">{{ $entry->id }}</a> </td>
                                                <td>
                                                    {{ $entry->created_at }}
                                                </td>
                                                <td>
                                                    <h5>{{ $entry->statusText }}
                                                    </h5>
                                                </td>
                                                <td>
                                                    {{ $entry->total }}
                                                </td>
                                                <td>
                                                    Mastercard
                                                </td>
                                                <td>
                                                    <h5><span class="badge badge-info">Shipped</span></h5>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-eye"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-square-edit-outline"></i></a>
                                                    <a href="javascript:void(0);" class="action-icon"> <i
                                                            class="mdi mdi-delete"></i></a>
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
