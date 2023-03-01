@section('title', 'الحمية الغذائية')

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
                        <h2 class="content-header-title float-start mb-0">الحمية الغذائية</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="dashboard">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item">الحمية الغذائية</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pb-50" style="position: relative;">
                            <h5>السعرات الحرارية</h5>
                            <h2 class="fw-bolder mb-1">2136 سعرة</h2>
                            <div class="progress progress-bar-success mb-1">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="45" aria-valuemax="100" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row match-height">
                        <div class="col-4" style="padding-left: 8px;padding-right: 8px;">
                            <div class="card">
                                <div class="card-body pt-1 px-50" style="position: relative;">
                                    <h5>البروتين</h5>
                                    <h2 class="fw-bolder mb-1">138 غ</h2>
                                    <div class="card-body" style="padding-bottom: 0px;padding-right: 0px;padding-left: 0px;">
                                        <div id="chart_protien"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="padding-left: 8px;padding-right: 8px;">
                            <div class="card">
                                <div class="card-body pt-1 px-50" style="position: relative;">
                                    <h5>الكارب</h5>
                                    <h2 class="fw-bolder mb-1">205 غ</h2>
                                    <div class="card-body" style="padding-bottom: 0px;padding-right: 0px;padding-left: 0px;">
                                        <div id="chart_carbohydrate"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4" style="padding-left: 8px;padding-right: 8px;">
                            <div class="card">
                                <div class="card-body pt-1 px-50" style="position: relative;">
                                    <h5>الدهون</h5>
                                    <h2 class="fw-bolder mb-1">83 غ</h2>
                                    <div class="card-body" style="padding-bottom: 0px;padding-right: 0px;padding-left: 0px;">
                                        <div id="chart_fat"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title mb-sm-0 mb-1">الوجبات</h4>
                            <a href="https://wa.me/message/POU44V4CNULGN1" style="color: gray">هل لديك سؤال أو استفسار عن وجبة معينة, تواصل معي؟</a>
                        </div>

                        <div class="card-body">
                            <div class="accordion accordion-margin" id="accordionExample">
                                @for ($i = 0; $i < count($dietPlanDetails); $i++)
                                    <div class="card accordion-item">
                                        <h2 class="accordion-header" id="heading{{ $i }}">
                                            <button
                                            class="accordion-button collapsed"
                                            data-bs-toggle="collapse"
                                            role="button"
                                            data-bs-target="#collapse{{ $i }}"
                                            aria-expanded="false"
                                            aria-controls="collapse{{ $i }}"
                                            >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list user-timeline-title-icon mx-50"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                            <h4 class="card-title mb-sm-0 mb-1" style="color: #f8991d ;margin-bottom: 0rem !important;">{{ 'الوجبة ( ' . $i+1 . ' )' }}</h4>
                                            </button>
                                        </h2>

                                        <div
                                            id="collapse{{ $i }}"
                                            class="accordion-collapse collapse"
                                            aria-labelledby="heading{{ $i }}"
                                            data-bs-parent="#accordionExample"
                                        >
                                            <div class="accordion-body">
                                                @if ($dietPlanDetails[$i] != null)
                                                    <div class="col-lg-4 col-12">
                                                        <div class="card card-user-timeline" style="background-color: #16161600;">
                                                            <div style="padding: 10px">
                                                                <ul class="timeline ms-50">
                                                                    @foreach ($dietPlanDetails[$i] as $food)
                                                                        <li class="timeline-item">
                                                                            <div class="d-flex mb-2">
                                                                                <img class="rounded me-2" src="app-assets/images/foods/_Default{{-- {{ $food['image'] }} --}}.jpg" width="50" height="50" alt="Recent Post Pic">
                                                                                <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                                                                                <div class="timeline-event">
                                                                                    <h6 style="font-size: 1.2rem;">{{ $food['name'] }}</h6>
                                                                                    <div class="demo-inline-spacing">
                                                                                        <span class="badge badge-light-primary" style="padding-right:10px;padding-left:10px;font-size: 1.05rem;">{{ $food['quantity'] . ' جرام' }}</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div style="text-align:center">
                                                        <img class="rounded" style="text-align: center" src="app-assets/images/rest/coffee.png" width="100" height="100" alt="Recent Post Pic">
                                                        <h5 style="margin-top: 5px"> مشروب منعش </h5>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-text">
                              الجدول السابق يوضح الوجبات الخاصة بك بالخطة الحالية بناء على حالتك الخاصة, يمكنك النقر على أسم الوجبة لمشاهدة التفاصيل الخاصة بها, في حال وجود أي وجبة غير مفهومة الرجاء <a href="https://wa.me/message/POU44V4CNULGN1">التواصل معي</a> بشكل مباشر
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS --}}
@section('vendor-script')
    <script src="{{ asset ('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection

@section('page-script')
    {{-- Charts --}}
    <script>

        // Protien
        var options = {
          series: [26],
          chart: {
          fontFamily: 'GumelaArabic-Regular',
          height: 150,
          type: 'radialBar',
          offsetY: -10
        },
        colors: [window.colors.solid.success],
        plotOptions: {
          radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
              name: {
                fontSize: '20px',
                color: undefined,
                offsetY: 120
              },
              value: {
                offsetY: 50,
                fontSize: '20px',
                color: undefined,
                formatter: function (val) {
                  return val + "%";
                }
              }
            }
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
              shade: 'dark',
              shadeIntensity: 0.15,
              inverseColors: false,
              gradientToColors: ['#036606'],
              opacityFrom: 1,
              opacityTo: 1,
              stops: [0, 100]
          },
        },
        stroke: {
          dashArray: 4
        },
        labels: [''],
        };

        var chart = new ApexCharts(document.querySelector("#chart_protien"), options);
        chart.render();

        // Carbohydrate
        var options = {
          series: [39],
          chart: {
          fontFamily: 'GumelaArabic-Regular',
          height: 150,
          type: 'radialBar',
          offsetY: -10
        },
        colors: [window.colors.solid.info],
        plotOptions: {
          radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
              name: {
                fontSize: '20px',
                color: undefined,
                offsetY: 120
              },
              value: {
                offsetY: 50,
                fontSize: '20px',
                color: undefined,
                formatter: function (val) {
                  return val + "%";
                }
              }
            }
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
              shade: 'dark',
              shadeIntensity: 0.15,
              inverseColors: false,
              gradientToColors: ['#05469c'],
              opacityFrom: 1,
              opacityTo: 1,
              stops: [0, 100]
          },
        },
        stroke: {
          dashArray: 4
        },
        labels: [''],
        };

        var chart = new ApexCharts(document.querySelector("#chart_carbohydrate"), options);
        chart.render();

        // Fat
        var options = {
          series: [35],
          chart: {
          fontFamily: 'GumelaArabic-Regular',
          height: 150,
          type: 'radialBar',
          offsetY: -10
        },
        colors: [window.colors.solid.warning],
        plotOptions: {
          radialBar: {
            startAngle: -135,
            endAngle: 135,
            dataLabels: {
              name: {
                fontSize: '20px',
                color: undefined,
                offsetY: 120
              },
              value: {
                offsetY: 50,
                fontSize: '20px',
                color: undefined,
                formatter: function (val) {
                  return val + "%";
                }
              }
            }
          }
        },
        fill: {
          type: 'gradient',
          gradient: {
              shade: 'dark',
              shadeIntensity: 0.15,
              inverseColors: false,
              gradientToColors: ['#ff3300'],
              opacityFrom: 1,
              opacityTo: 1,
              stops: [0, 100]
          },
        },
        stroke: {
          dashArray: 4
        },
        labels: [''],
        };

        var chart = new ApexCharts(document.querySelector("#chart_fat"), options);
        chart.render();
    </script>
@endsection
{{-- /JS --}}
