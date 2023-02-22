@section('title', 'الصفحة الرئيسية')

<!-- CSS -->
@section('vendor-style')

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
                        <h2 class="content-header-title float-start mb-0">الصفحة الرئيسية</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="index.html">الصفحة الرئيسية</a></li> --}}
                                <li class="breadcrumb-item active"><a href="admin_dashboard">الإدارة العامة</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                    <div class="card text-center">
                      <div class="card-body">
                        <div class="avatar bg-light-info p-50 mb-1">
                          <div class="avatar-content">
                            <i data-feather="calendar" class="font-medium-5"></i>
                          </div>
                        </div>
                        <h2 class="fw-bolder">{{ count($birthdaysUpcoming) }}</h2>
                        <p class="card-text">أعياد الميلاد</p>
                      </div>
                    </div>
                  </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="avatar bg-light-success p-50 mb-1">
                        <div class="avatar-content">
                          <i data-feather="user-check" class="font-medium-5"></i>
                        </div>
                      </div>
                      <h2 class="fw-bolder">{{ count($activeUsers) }}</h2>
                      <p class="card-text">فعال</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="avatar bg-light-warning p-50 mb-1">
                        <div class="avatar-content">
                          <i data-feather="user-minus" class="font-medium-5"></i>
                        </div>
                      </div>
                      <h2 class="fw-bolder">{{ count($almostFinishedUsers) }}</h2>
                      <p class="card-text">معلق</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="avatar bg-light-danger p-50 mb-1">
                        <div class="avatar-content">
                          <i data-feather="user-x" class="font-medium-5"></i>
                        </div>
                      </div>
                      <h2 class="fw-bolder">{{ count($inActiveUsers)  }}</h2>
                      <p class="card-text">مجمد</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="avatar bg-light-secondary p-50 mb-1">
                        <div class="avatar-content">
                          <i data-feather="flag" class="font-medium-5"></i>
                        </div>
                      </div>
                      <h2 class="fw-bolder">-</h2>
                      <p class="card-text">مهتم</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-md-4 col-sm-6 col-6">
                  <div class="card text-center">
                    <div class="card-body">
                      <div class="avatar bg-light-secondary p-50 mb-1">
                        <div class="avatar-content">
                          <i data-feather="users" class="font-medium-5"></i>
                        </div>
                      </div>
                      <h2 class="fw-bolder">{{ count($allUsers) }}</h2>
                      <p class="card-text">مشترك</p>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-6">
                    <div class="card text-center">
                      <div class="card-body" style="padding: 1.5rem 0.1rem 1.5rem 0.1rem;">
                        <div class="avatar bg-light-dark p-50 mb-1" style="border: 1px solid #404040;">
                          <div class="avatar-content">
                            <i data-feather="trending-up" class="font-medium-5"></i>
                          </div>
                        </div>
                        <h2 class="fw-bolder">{{ $lastMonthPaymentsSum }} $</h2>
                        <p class="card-text">أخر 30 يوم</p>
                        <div id="profits-monthly-chart"></div>
                      </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card text-center">
                      <div class="card-body" style="padding: 1.5rem 0.1rem 1.5rem 0.1rem;">
                        <div class="avatar bg-light-dark p-50 mb-1" style="border: 1px solid #404040;">
                          <div class="avatar-content">
                            <i data-feather="dollar-sign" class="font-medium-5"></i>
                          </div>
                        </div>
                        <h2 class="fw-bolder">{{ $lastYearPaymentsSum }} $</h2>
                        <p class="card-text">أخر 365 يوم</p>
                        <div id="profits-all-chart"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                <table class="user-list-table table">
                    <thead class="table-light">
                    <tr>
                        <th style="border-radius: 0px 10px 0px 0px;">الأسم</th>
                        <th>الخطة التدريبية</th>
                        <th>البرنامج الغذائي</th>
                        <th>المدفوعات</th>
                        <th>الحالة</th>
                        <th style="border-radius: 10px 0px 10px 0px;">الخيارات</th>
                    </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS --}}
@section('vendor-script')

@endsection

@section('page-script')

@endsection
{{-- /JS --}}
