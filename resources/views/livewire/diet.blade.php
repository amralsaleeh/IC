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
                    {{-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title">Goal Overview</h4>
                                <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
                            </div>
                            <div class="card-body p-0" style="position: relative;">
                                <div id="goal-overview-radial-bar-chart" class="my-2" style="min-height: 205.633px;"><div id="apexchartslinw1pr8l" class="apexcharts-canvas apexchartslinw1pr8l apexcharts-theme-light" style="width: 398px; height: 205.633px;"><svg id="SvgjsSvg2505" width="398" height="205.63333333333335" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2507" class="apexcharts-inner apexcharts-graphical" transform="translate(76.5, -10)"><defs id="SvgjsDefs2506"><clipPath id="gridRectMasklinw1pr8l"><rect id="SvgjsRect2509" width="251" height="217" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasklinw1pr8l"><rect id="SvgjsRect2510" width="249" height="219" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient2515" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2516" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop2517" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop><stop id="SvgjsStop2518" stop-opacity="1" stop-color="rgba(235,233,241,1)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient2525" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop2526" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="0"></stop><stop id="SvgjsStop2527" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop><stop id="SvgjsStop2528" stop-opacity="1" stop-color="rgba(81,229,168,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter2530" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%"><feFlood id="SvgjsFeFlood2531" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood2531Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite2532" in="SvgjsFeFlood2531Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite2532Out"></feComposite><feOffset id="SvgjsFeOffset2533" dx="1" dy="1" result="SvgjsFeOffset2533Out" in="SvgjsFeComposite2532Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur2534" stdDeviation="3 " result="SvgjsFeGaussianBlur2534Out" in="SvgjsFeOffset2533Out"></feGaussianBlur><feMerge id="SvgjsFeMerge2535" result="SvgjsFeMerge2535Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode2536" in="SvgjsFeGaussianBlur2534Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode2537" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend2538" in="SourceGraphic" in2="SvgjsFeMerge2535Out" mode="normal" result="SvgjsFeBlend2538Out"></feBlend></filter></defs><g id="SvgjsG2511" class="apexcharts-radialbar"><g id="SvgjsG2512"><g id="SvgjsG2513" class="apexcharts-tracks"><g id="SvgjsG2514" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718" fill="none" fill-opacity="1" stroke="rgba(235,233,241,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3.5304878048780495" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 167.14329268292684 184.82445114399718"></path></g></g><g id="SvgjsG2520"><g id="SvgjsG2524" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath2529" d="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient2525)" stroke-opacity="1" stroke-linecap="round" stroke-width="7.060975609756099" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="249" data:value="83" filter="url(#SvgjsFilter2530)" index="0" j="0" data:pathOrig="M 77.85670731707313 184.82445114399715 A 89.28658536585367 89.28658536585367 0 1 1 210.6873193374061 121.46749921697622"></path></g><circle id="SvgjsCircle2521" r="82.52134146341464" cx="122.5" cy="107.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG2522" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText2523" font-family="Helvetica, Arial, sans-serif" x="122.5" y="123.5" text-anchor="middle" dominant-baseline="auto" font-size="2.86rem" font-weight="600" fill="#5e5873" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g></g></g></g><line id="SvgjsLine2539" x1="0" y1="0" x2="245" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2540" x1="0" y1="0" x2="245" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2508" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                                <div class="row border-top text-center mx-0">
                                    <div class="col-6 border-end py-1">
                                        <p class="card-text text-muted mb-0">Completed</p>
                                        <h3 class="fw-bolder mb-0">786,617</h3>
                                    </div>
                                    <div class="col-6 py-1">
                                        <p class="card-text text-muted mb-0">In Progress</p>
                                        <h3 class="fw-bolder mb-0">13,561</h3>
                                    </div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 399px; height: 323px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div> --}}

                    <div class="card">
                        <div class="card-body pb-50" style="position: relative;">
                            <h5 class="pb-50">السعرات الحرارية</h5>
                            {{-- <h2 class="fw-bolder mb-1">2136 سعرة</h2> --}}
                            <div class="progress progress-bar-primary mb-1">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="45" aria-valuemax="100" style="width: {{ $dietCalories * 100 / $dailyCalories }}%"></div>
                            </div>
                            <div class="row border-top text-center mx-0">
                                <div class="col-6 border-end pt-1">
                                    <p class="card-text text-muted mb-0">الفعلي</p>
                                    <h3 class="fw-bolder mb-0">{{ $dietCalories }}</h3>
                                </div>
                                <div class="col-6 pt-1">
                                    <p class="card-text text-muted mb-0">الإحتياج</p>
                                    <h3 class="fw-bolder mb-0">{{ $dailyCalories }}</h3>
                                </div>
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
                                @for ($i = 0; $i < count($dietMealDetails); $i++)
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
                                                @if ($dietMealDetails[$i] != null)
                                                    <div class="col-lg-4 col-12">
                                                        <div class="card card-user-timeline" style="background-color: #16161600;">
                                                            <div style="padding: 10px">
                                                                <ul class="timeline ms-50">
                                                                    @foreach ($dietMealDetails[$i] as $food)
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
                              البيانات السابقة توضح الوجبات الخاصة بك بالخطة الحالية بناء على حالتك الخاصة, يمكنك النقر على أسم الوجبة لمشاهدة التفاصيل الخاصة بها, في حال وجود أي وجبة غير مفهومة الرجاء <a href="https://wa.me/message/POU44V4CNULGN1">التواصل معي</a> بشكل مباشر
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
                offsetY: -10,
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
                offsetY: -10,
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
                offsetY: -10,
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
