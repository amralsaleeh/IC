@section('title', 'الإحصائيات')

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
                        <h2 class="content-header-title float-start mb-0">الإحصائيات</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="dashboard">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item">الإحصائيات</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row match-height">

                <div class="col-lg-8 col-md-12 col-12">
                    <div class="card">
                      <div class="card-header d-flex flex-sm-row flex-column justify-content-md-between align-items-start justify-content-start">
                            <div>
                                <h4 class="card-title">المؤشرات</h4>
                            </div>
                        </div>
                        <div class="card-body">
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
                        </div>
                        <div style="text-align: center;cursor: pointer;">
                            <div class="btn-group mt-md-0 mt-1" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="radio_options" id="radio_option1" autocomplete="off"  />
                                <label class="btn btn-outline-primary" for="radio_option1">أسبوعي</label>

                                <input type="radio" class="btn-check" name="radio_options" id="radio_option2" autocomplete="off" checked />
                                <label class="btn btn-outline-primary" for="radio_option2">شهري</label>

                                <input type="radio" class="btn-check" name="radio_options" id="radio_option3" autocomplete="off" />
                                <label class="btn btn-outline-primary" for="radio_option3">سنوي</label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="line-area-chart"></div>
                            <div id="line-area-chart-2"></div>
                        </div>
                      </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-start pb-1">
                            <div>
                                <h4 class="card-title mb-25">القياسات</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-inline-block me-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-small-3 me-50" style="color:#aee554"></i>
                                    <h6 class="mb-0">الحالية</h6>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <div class="d-flex align-items-center">
                                    <i data-feather="circle" class="font-small-3 me-50" style="color:#14ae65"></i>
                                    <h6 class="mb-0">الهدف</h6>
                                </div>
                            </div>
                            <div id="sales-visit-chart" class="mt-50"></div>
                            <br>
                            <div>
                                <p style="text-align:center"> عندما تمتلئ <a style="color:#14ae65">الدائرة</a> تكون قد حطمت الهدف ووصلت للجسم المثالي </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-start pb-1">
                            <div>
                                <h4 class="card-title mb-25">التفاصيل</h4>
                                <span class="card-subtitle text-muted">القياسات الحالية</span>
                            </div>
                        </div>
                        <div class="card-body py-2 my-25">

                            <form class="validate-form mt-2 pt-50">
                              <div class="row">

                              </div>

                              <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الوزن (كغ)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="81" />
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الطول (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="37" />
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">البطن (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="81" />
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الخصر (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="37" />
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الصدر (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="81" />
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الكتاف (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="37" />
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الذراع (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="81" />
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الفخذ (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="37" />
                                      </div>
                                  </div>
                              </div>
                              <div class="card-body d-flex justify-content-between align-items-center" style="text-align: center;">
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الساعد (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="81" />
                                      </div>
                                  </div>
                                  <div class="col-6 col-sm-6 mb-1">
                                      <label class="form-label" for="modalEditUserFirstName">الرقبة (سم)</label>
                                      <div class="input-group input-group-lg">
                                          <input type="number" class="touchspin-min-max" value="37" />
                                      </div>
                                  </div>
                              </div>
                            <br>
                            <hr style="margin: 0% 15%;">
                            <div class="col-12" style="text-align: center">
                                <button type="button" class="btn btn-primary mt-1 me-1" id="confirm-color">حفظ</button>
                            </div>
                            </form>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- vendor files -->
@section('vendor-script')
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection

<!-- Page js files -->
@section('page-script')
    <script src="{{ asset('app-assets/js/scripts/pages/statistics.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-number-input.js') }}"></script>
@endsection
