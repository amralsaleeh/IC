@section('title', 'الإشتراكات')

<!-- CSS -->
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/plugins/charts/chart-apex.css') }}">
@endsection

@section('page-style')

@endsection
{{-- /CSS --}}

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">الإشتراكات</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">الإدارة العامة</a></li>
                                <li class="breadcrumb-item active">الإشتراكات</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row mb-2">
                <div class="d-flex justify-content-end">
                    <button wire:click.prevent="showNewCouponModal" type="button" class="btn btn-primary mx-2">
                        <i class="fa-solid fa-tag mx-50"></i>إضافة كوبون
                    </button>
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square mx-50"></i>تعديل الباقات
                    </button>
                </div>
            </div>

            <div class="row match-height">
                <div class="col-md-8 col-12">
                    <div class="card">
                      <div class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start">
                            <div>
                                <h4 class="card-title">الإحصائيات</h4>
                            </div>
                        </div>
                        {{-- <div class="card-body">
                            <div class="d-inline-block me-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-small-3 me-50" style="color:#1fe076"></i>
                                    <h6 class="mb-0">الوزن</h6>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-small-3 me-50" style="color:#c9762c"></i>
                                    <h6 class="mb-0">نسبة الدهون</h6>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div style="text-align: center; cursor:pointer;">
                            <div class="btn-group mt-md-0 mt-1" role="group" aria-label="Basic radio toggle button group">
                                <input wire:click.prevent="showMonthlyStatics" type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" checked />
                                <label class="btn btn-outline-primary" for="radio_option2">شهري</label>

                                <input wire:click.prevent="showYearlyStatics" type="radio" class="btn-check" name="radio_options" id="radio_option3" autocomplete="off" />
                                <label class="btn btn-outline-primary" for="radio_option3">سنوي</label>
                            </div>
                        </div> --}}
                        <div class="card-body">
                            <div id="line-area-chart"></div>
                            <div id="line-area-chart-2"></div>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-end">
                            <h4>أعلى الدول تسجيلاً</h4>
                            <div class="dropdown chart-dropdown">
                                <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    أخر شهر
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem1">
                                    <a class="dropdown-item" href="#">أخر شهر</a>
                                    <a class="dropdown-item" href="#">أخر سنة</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="session-chart" class="my-1"></div>
                            @for ($i = 0; $i < 3; $i++)
                                <div class="d-flex justify-content-between mb-1">
                                    <div class="d-flex align-items-center">
                                        {{-- <i data-feather="monitor" class="font-medium-2 text-primary"></i> --}}
                                        <img src="{{ asset("app-assets/fonts/flag-icon-css/flags/4x3/".strtolower( $this->getCountryISO2($this->bestCountries->keys()->toArray()[$i]) ).".svg") }}" alt="avatar" width="20" height="15">
                                        <span class="fw-bold ms-75 me-25">{{ $this->getCountryNameAr($this->bestCountries->keys()->toArray()[$i]) }}</span>
                                    </div>
                                    <div>
                                        <span>{{ $this->bestCountries->values()->toArray()[$i] }}</span>
                                        <i data-feather="bar-chart-2" class="text-success"></i>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-employee-task">
                        <div class="card-header">
                            <h4 class="card-title">المتدربين المميزين</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($bestBuyers as $bestBuyer)
                                <div class="employee-task d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row">
                                        <div class="avatar me-75">
                                            @if ( $bestBuyer->gender == 1 )
                                                <img src="{{ asset('app-assets/images/avatars/male.svg') }}" class="rounded" alt="avatar" width="42" height="42">
                                            @else
                                                <img src="{{ asset('app-assets/images/avatars/female.svg') }}" class="rounded" alt="avatar" width="42" height="42">
                                            @endif
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0">{{ $bestBuyer->full_name }}</h6>
                                            <small>{{ $this->getCountryNameAr($bestBuyer->residence_country) }}</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="text-muted me-75" style="font-size: 16px;">{{ $bestBuyer->paymentSum }} $</small>
                                        <div class="employee-task-chart-primary-1"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Coupon Modal  -->
    <div wire:ignore.self class="modal fade" id="newCouponModal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">إضافة كوبون جديد</h1>
                    {{-- <p class="text-center">Add card for future billing</p> --}}

                    <form autocomplete="off" wire:submit.prevent="addNewCoupon" id="addNewCardValidation" class="row gy-1 gx-2 mt-75">
                        <div class="form-group col-md-12">
                            <label for="name">الأسم</label>
                            <input wire:model.defer="couponInfo.name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="COUPON123">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label for="discount">الحسم</label>
                            <div class="input-group input-group-lg mb-1">
                                <span class="input-group-text"><i class="fa-solid fa-percent"></i></span>
                                <input wire:model.defer="couponInfo.discount" type="text" class="form-control @error('discount') is-invalid @enderror" id="discount" placeholder="النسبة">
                                    @error('discount')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="expiration_date">الصلاحية</label>
                            <div class="input-group input-group-lg mb-1">
                                <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                    <input wire:model.defer="couponInfo.expiration_date" type="text" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date" placeholder="يوم - شهر - سنة">
                                    @error('expiration_date')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1">حفظ</button>
                            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
                                تجاهل
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--  /New Coupon Modal  -->

</div>

{{-- JS --}}
@section('vendor-script')
    <script src="{{ asset ('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-bottom-center",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            // Coupon
            window.addEventListener('show_new_coupon_modal', event => {
                $('#newCouponModal').modal('show');
            })
            window.addEventListener('hide_new_coupon_modal', event => {
                $('#newCouponModal').modal('hide');
                toastr.success(event.detail.message, 'نجحت العملية!');
            })
        })
    </script>

    {{-- Charts --}}
    <script>
        document.addEventListener('livewire:load', function () {

        'use strict';

        var sessionChart;
        var sessionChartOptions;

        // Line Chart - 1
        // --------------------------------------------------------------------
        var areaChartEl = document.querySelector('#line-area-chart'),
        areaChartConfig = {
            chart: {
                height: 400,
                type: 'line',
                toolbar: {
                show: false
                },
                zoom: {
                enabled: false
                }
            },
            grid: {
                borderColor: '#1fe076',
                strokeDashArray: 5,
                xaxis: {
                lines: {
                    show: true
                }
                },
                yaxis: {
                lines: {
                    show: false
                }
                },
                padding: {
                top: -30,
                bottom: 0
                }
            },
            stroke: {
                width: 3
            },
            colors: ['#c9762c','#1fe076'],
            series: [

                {
                    name: 'الإشتراكات ($)',
                    data: @json($payments->values()->toArray())
                },
                {
                    name: 'المشتركين',
                    data: @json($subscriptions->values()->toArray())
                }

            ],
            markers: {
                size: 5,
                colors: ['#c9762c','#1fe076'],
                strokeColors: '#1fe076',
                strokeWidth: 2,
                strokeOpacity: 1,
                strokeDashArray: 0,
                fillOpacity: 0,
                shape: 'circle',
                radius: 2,
                hover: {
                size: 9
                }
            },
            xaxis: {
                labels: {
                show: true,
                style: {
                    fontSize: '15px'
                }
                },
                axisBorder: {
                show: false
                },
                axisTicks: {
                show: false
                },
                categories: @json($subscriptions->keys()->toArray())
            },
            yaxis: {
                show: false
            },
            tooltip: {
                x: {
                show: false
                }
            }
        };
        if (typeof areaChartEl !== undefined && areaChartEl !== null) {
        var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
        areaChart.render();
        }

        // Line Chart - 2
        // --------------------------------------------------------------------
        // var areaChartEl = document.querySelector('#line-area-chart-2'),
        // areaChartConfig = {
        //     chart: {
        //         height: 200,
        //         type: 'line',
        //         toolbar: {
        //         show: false
        //         },
        //         zoom: {
        //         enabled: false
        //         }
        //     },
        //     grid: {
        //         borderColor: '#c9762c',
        //         strokeDashArray: 5,
        //         xaxis: {
        //         lines: {
        //             show: true
        //         }
        //         },
        //         yaxis: {
        //         lines: {
        //             show: false
        //         }
        //         },
        //         padding: {
        //         top: -30,
        //         bottom: -10
        //         }
        //     },
        //     stroke: {
        //         width: 3
        //     },
        //     colors: ['#c9762c','#c9762c'],
        //     series: [
        //         {
        //             name: 'الإشتراكات',
        //             data: @json($payments->values()->toArray())
        //         }
        //     ],
        //     markers: {
        //         size: 5,
        //         colors: '#c9762c',
        //         strokeColors: '#c9762c',
        //         strokeWidth: 2,
        //         strokeOpacity: 1,
        //         strokeDashArray: 0,
        //         fillOpacity: 0,
        //         discrete: [
        //         {
        //             seriesIndex: 0,
        //             dataPointIndex: 3,
        //             fillColor: '#ffffff',
        //             strokeWidth: 5,
        //             strokeOpacity: 1,
        //             size: 7
        //         }
        //         ],
        //         shape: 'circle',
        //         radius: 2,
        //         hover: {
        //         size: 9
        //         }
        //     },
        //     xaxis: {
        //         labels: {
        //         show: true,
        //         style: {
        //             fontSize: '5px'
        //         }
        //         },
        //         axisBorder: {
        //         show: false
        //         },
        //         axisTicks: {
        //         show: false
        //         },
        //     },
        //     xaxis: {
        //         categories: @json($subscriptions->keys()->toArray())
        //     },
        //     yaxis: {
        //         show: false
        //     },
        //     tooltip: {
        //         x: {
        //         show: false
        //         }
        //     }
        // };
        // if (typeof areaChartEl !== undefined && areaChartEl !== null) {
        // var areaChart = new ApexCharts(areaChartEl, areaChartConfig);
        // areaChart.render();
        // }

        // Session Chart
        // --------------------------------------------------------------------
        var $sessionChart = document.querySelector('#session-chart');
        sessionChartOptions = {
            chart: {
            type: 'donut',
            height: 300,
            toolbar: {
                show: false
            }
            },
            dataLabels: {
            enabled: false
            },
            series: @json($bestCountries->values()->toArray()),
            legend: { show: false },
            comparedResult: [2, -3, 8],
            labels: @json($bestCountries->keys()->toArray()),
            stroke: { width: 0 },
            colors: [window.colors.solid.primary, window.colors.solid.warning, window.colors.solid.danger]
        };
        sessionChart = new ApexCharts($sessionChart, sessionChartOptions);
        sessionChart.render();

        });

    </script>
@endsection
{{-- /JS --}}
