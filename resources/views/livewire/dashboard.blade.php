@section('title', 'الصفحة الرئيسية')

<!-- CSS -->
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset ('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/vendors/css/extensions/nouislider.min.css') }}">
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/plugins/extensions/ext-component-sliders.css') }}">
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
                        <h2 class="content-header-title float-start mb-0">الصفحة الرئيسية</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb ">
                                {{-- <li class="breadcrumb-item"><a href="index.html">الصفحة الرئيسية</a></li> --}}
                                <li class="breadcrumb-item active"><a href="dashboard">نظرة عامة</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            {{-- 1st row --}}
            <div class="row match-height">
                <!-- Medal -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="card card-congratulation-medal">
                    <div class="card-body">
                        <h1>مرحبا مجد</h1>
                        <p class="card-text font-meduim-1">أتمنى لك يوم سعيد</p>
                        <br>
                        <br>
                        <hr>
                        <h3 class="mb-75 mt-2 pt-50">
                        متحمس لنتائج الأسبوع؟
                        </h3>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">تسجيل التفقد الآن</button>
                        <img src="{{asset('app-assets/images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
                    </div>
                    </div>
                </div>
                <!-- Weight -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title">الوزن</h4>
                            <div class="avatar bg-light-primary p-75 m-0">
                                <a class="" href="/statistics?weight" style="cursor: pointer" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1fe076" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-anchor"><circle cx="12" cy="5" r="3"></circle><line x1="12" y1="22" x2="12" y2="8"></line><path d="M5 12H2a10 10 0 0 0 20 0h-3"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pb-50">
                            <h2 class="fw-bolder mb-2">76.2 كغ</h2>
                        </div>
                        <div id="weightChart"></div>
                    </div>
                </div>
                <!-- Fat -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title">الدهون</h4>
                            <div class="avatar bg-light-warning p-75 m-0">
                                <a class="" href="/statistics?fat" style="cursor: pointer" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ff9f43" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-scissors"><circle cx="6" cy="6" r="3"></circle><circle cx="6" cy="18" r="3"></circle><line x1="20" y1="4" x2="8.12" y2="15.88"></line><line x1="14.47" y1="14.48" x2="20" y2="20"></line><line x1="8.12" y1="8.12" x2="12" y2="12"></line></svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pb-50">
                            <h2 class="fw-bolder mb-2">18.2 %</h2>
                        </div>
                        <div id="fatChart"></div>
                    </div>
                </div>
                <!-- Waist -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title">البطن</h4>
                            <div class="avatar p-75 m-0">
                                <a class="text-muted" href="/statistics?waist" style="cursor: pointer" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pb-50">
                            <h2 class="fw-bolder mb-2">73 سم</h2>
                            <div id="waistChart"></div>
                        </div>
                    </div>
                </div>
                <!-- Hip -->
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="card card-tiny-line-stats">
                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title">الخصر</h4>
                            <div class="avatar p-75 m-0">
                                <a class="text-muted" href="/statistics?hip" style="cursor: pointer" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pb-50">
                            <h2 class="fw-bolder mb-2">78 سم</h2>
                            <div id="hipChart"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2nd row --}}
            <div class="row match-height">
                {{-- Goals --}}
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div
                            class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-sm-0 mb-1">الأهداف</h4>
                        </div>
                        <div class="card-body">
                            <div id="GoalsChart"></div>
                        </div>
                    </div>
                </div>
                {{-- Payment --}}
                <div class="col-lg-6 col-md-6 col-12" id="status">
                    <div class="card">
                        <div
                            class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-sm-0 mb-1">الإشتراك</h4>
                            <a href="/subscriptions" style="color: gray">هل تريد التجديد؟</a>
                        </div>
                        <div class="card-body">
                            <div id="PaymentChart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- Modal --}}
@include('content/modals/weekly-check-modal')
{{-- /Modal --}}

</div>

{{-- JS --}}
@section('vendor-script')
    <script src="{{ asset ('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset ('app-assets/vendors/js/extensions/nouislider.min.js') }}"></script>
@endsection

@section('page-script')
        <script src="{{ asset ('app-assets/js/scripts/pages/dashboard.js') }}"></script>
        <script src="{{ asset('app-assets/js/scripts/forms/form-number-input.js') }}"></script>
        <script src="{{ asset ('app-assets/js/scripts/extensions/ext-component-sliders.js') }}"></script>
@endsection
{{-- /JS --}}
