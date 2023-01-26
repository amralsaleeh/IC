@section('title', 'التمارين الرياضية')

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
                        <h2 class="content-header-title float-start mb-0">التمارين الرياضية</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="dashboard">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item">التمارين الرياضية</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                  <div class="card">

                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th style="border-radius: 0px 10px 0px 0px;">التمرين</th>
                            <th>العدات</th>
                            <th style="border-radius: 10px 0px 0px 0px;">الإيقاع</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>
                                  <a href="#" class="fw-bold">DUMBBEL ROW</a>
                              </td>
                              <td>8 * 3</td>
                              <td>1-2-1</td>
                          </tr>
                          <tr>
                              <td>
                                  <a href="#" class="fw-bold">CABLE PULL DOWN</a>
                              </td>
                              <td>12 * 3</td>
                              <td>1-2-1</td>
                            </tr>
                            <tr>
                              <td>
                                  <a href="#" class="fw-bold">BICEPS CURL MACHINE</a>
                              </td>
                              <td>8 * 3</td>
                              <td>1-2-1</td>
                            </tr>
                            <tr>
                              <td>
                                  <a href="#" class="fw-bold">BICEPS CABLE CURL</a>
                              </td>
                              <td>12 * 3</td>
                              <td>1-2-1</td>
                            </tr>
                            <tr>
                              <td>
                                  <a href="#" class="fw-bold">SHRUG</a>
                              </td>
                              <td>8 * 3</td>
                              <td>1-2-2</td>
                            </tr>
                            <tr>
                              <td>
                                  <a href="#" class="fw-bold">FACE PULL</a>
                              </td>
                              <td>12 * 3</td>
                              <td>1-2-3</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="card-body">
                      <p class="card-text">
                        الجدول السابق يوضح التمارين الخاصة بك بالخطة الحالية بناء على حالتك الخاصة, يمكنك النقر على أسم التمرين لمشاهدة الفيديو الخاص به, في حال وجود أي تمرين غير مفهوم الرجاء <a href="https://wa.me/message/POU44V4CNULGN1">التواصل معي</a> بشكل مباشر
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

@endsection

@section('page-script')

@endsection
{{-- /JS --}}
