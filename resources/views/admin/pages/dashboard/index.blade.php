@extends('admin.layouts.layout')
@section('title')
Tổng quan - NFarm
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">CRM</li>
                    </ol>
                </div>
                <h4 class="page-title">CRM</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">
                                Sản phẩm</h5>
                            <h3 class="my-2 py-1">{{ $product }}</h3>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Bài viết</h5>
                            <h3 class="my-2 py-1">{{ $post }}</h3>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <div id="new-leads-chart" data-colors="#0acf97"></div>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Đơn hàng
                            </h5>
                            <h3 class="my-2 py-1">{{ $order }}</h3>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <div id="deals-chart" data-colors="#727cf5"></div>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">
                                Người dùng</h5>
                            <h3 class="my-2 py-1">{{ $user }}</h3>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Đơn hàng</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Today</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                        </div>
                    </div>
                </div>

                <div class="card-body pt-0">
                    <div id="orders" class="apex-charts" data-colors="#ffbc00,#727cf5,#0acf97"></div>
                    <div class="row text-center mt-3">
                        <div class="col-sm-4">
                            <i class="mdi mdi-send widget-icon rounded-circle bg-warning-lighten text-warning"></i>
                            <h3 class="fw-normal mt-3">
                                <span>{{ $order }}</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                Tổng đơn hàng
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-primary-lighten text-primary"></i>
                            <h3 class="fw-normal mt-3">
                                <span>{{ $paid }}</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                Đã thanh toán</p>
                        </div>
                        <div class="col-sm-4">
                            <i class="mdi mdi-email-open widget-icon rounded-circle bg-success-lighten text-success"></i>
                            <h3 class="fw-normal mt-3">
                                <span>{{ $pending }}</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i>
                                Chờ thanh toán</p>
                        </div>
                    </div>
                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->

        <div class="col-lg-7">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Doanh thu</h4>
                </div>

                <div class="card-body pt-0">
                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-sm-6">
                                <p class="text-muted mb-0 mt-3">Tháng này</p>
                                <h2 class="fw-normal mb-3">
                                    <span>{{ number_format((float) $revenueMonth, 0, ',', '.') }} VNĐ</span>
                                </h2>
                            </div>
                            <div class="col-sm-6">
                                <p class="text-muted mb-0 mt-3">Tổng</p>
                                <h2 class="fw-normal mb-3">
                                    <span>{{ number_format((float) $revenueTotal, 0, ',', '.') }} VNĐ</span>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div dir="ltr">
                        <div id="revenue" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                    </div>

                </div>
                <!-- end card body-->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->
    <!-- end row-->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '{{ route('api.admin.report.getOrder') }}',
                type: 'GET',
                success: function(data) {
                    let key = Object.keys(data);
                    let value = Object.values(data);
                    let r = {
                        chart: {
                            height: 314,
                            type: "donut"
                        },
                        legend: {
                            show: !1
                        },
                        stroke: {
                            width: 0
                        },
                        series: value,
                        labels: key,
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                chart: {
                                    width: 200
                                },
                                legend: {
                                    position: "bottom"
                                }
                            }
                        }]
                    };
                    new ApexCharts(document.querySelector("#orders"), r).render();
                }
            });

            $.ajax({
                url: '{{ route('api.admin.report.getRevenue') }}',
                type: 'GET',
                success: function(data) {
                    let key = Object.keys(data);
                    let value = Object.values(data);

                    console.log(key, value);

                    var options = {
                        chart: {
                            height: 309,
                            type: "area"
                        },
                        dataLabels: {
                            enabled: !1
                        },
                        stroke: {
                            curve: "smooth",
                            width: 4
                        },
                        series: [{
                            name: "Doanh thu",
                            data: value
                        }],
                        zoom: {
                            enabled: !1
                        },
                        legend: {
                            show: !1
                        },
                        xaxis: {
                            type: "string",
                            tooltip: {
                                enabled: !1
                            },
                            axisBorder: {
                                show: !1
                            },
                            labels: {},
                            categories: key
                        },
                        yaxis: {
                            labels: {
                                formatter: function(e) {
                                    return e.toLocaleString('it-IT', {style : 'currency', currency : 'VND'});
                                },
                                offsetX: -15
                            }
                        },
                        fill: {
                            type: "gradient",
                            gradient: {
                                type: "vertical",
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: .45,
                                opacityTo: .05,
                                stops: [45, 100]
                            }
                        }
                    };

                    new ApexCharts(document.querySelector("#revenue"), options).render();
                }
            });
        });
    </script>
@endpush
