@section('title', 'إدارة الإشتراكات')

<!-- CSS -->
@section('vendor-style')

@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset ('app-assets/css/pages/page-pricing.css') }}">
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
                        <h2 class="content-header-title float-start mb-0">إدارة الإشتراكات</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="dashboard">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item">إدارة الإشتراكات</li>
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
                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title mb-sm-0 mb-1">حالة الإشتراك</h4>
                            <a href="#status" style="color: gray">هل تريد تطوير الباقة؟</a>
                        </div>

                        <div class="card-body">
                            <p class="card-text" id="status">
                                <div style="font-size:16px">
                                    @if ($isActive)
                                        <p style="color: #28C76F; display: initial;"> &#x25CF; </p> فعال &nbsp; - &nbsp; صالح لغاية: {{ date('(d-m-Y)', strtotime($expirationDate)); }}
                                    @else
                                        <p style="color: #EA5455; display: initial;"> &#x25CF; </p> غير فعال &nbsp; - &nbsp; إنتهى بتاريخ: {{ date('(d-m-Y)', strtotime($expirationDate)); }}
                                    @endif
                                </div>
                            </p>

                            <div class="demo-vertical-spacing">
                                <div class="progress {{ $isActive ? 'progress-bar-success' : 'progress-bar-danger' }}">
                                    <div
                                        class="progress-bar progress-bar-striped progress-bar-animated"
                                        role="progressbar"
                                        aria-valuenow="0"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                        style="width: {{ $isActive ? $expirationPercentage : '100' }}%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                {{-- <div class="col-12">
                  <div class="card">

                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                            <tr>
                              <th style="border-radius: 0px 10px 0px 0px;">المدة</th>
                              <th>الفئة</th>
                              <th>المبلغ</th>
                              <th>الحسم</th>
                              <th style="border-radius: 10px 0px 0px 0px;">الملاحظات</th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>2022/02/28 - 2022/03/28</td>
                                  <td>التدريب الأونلاين</td>
                                  <td>$50</td>
                                  <td>-</td>
                                  <td>-</td>
                              </tr>
                              <tr>
                                  <td>2022/02/28 - 2022/03/28</td>
                                  <td>التدريب الأونلاين</td>
                                  <td>$100</td>
                                  <td>%25</td>
                                  <td>حسم الأصدقاء</td>
                              </tr>
                          </tbody>
                      </table>
                    </div>

                  </div>
                </div> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="text-center">
                        <h1 class="mt-5">الباقات والعروض</h1>
                        <p class="mb-2 pb-75">
                            قم باختيار الباقة المناسبة لك
                        </p>
                        <div class="d-flex align-items-center justify-content-center mb-5 pb-50">
                            <h6 class="me-1 mb-0">شهري</h6>
                            <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="priceSwitch" />
                            <label class="form-check-label" for="priceSwitch"></label>
                            </div>
                            <h6 class="ms-50 mb-0">سنوي</h6>
                        </div>
                        </div>

                        <div class="row pricing-card">
                            <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                                <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="card basic-pricing text-center" style="border: 1px solid #3d2d18;border-radius: 10px;margin: 5px;">
                                    <div class="card-body">
                                        <div class="pricing-badge text-end">
                                            <span class="badge">&nbsp;</span>
                                        </div>
                                        <img src="{{ asset ('app-assets/images/bundles/Silver.webp') }}" style="width: 100px;">
                                        <br>
                                        <br>
                                        <h3>مبتدئ</h3>
                                        <h5>( تدريب أونلاين )</h5>
                                        <hr>
                                        <p class="card-text">بداية حماسية مناسبة للجميع</p>
                                        <hr>
                                        <div class="annual-plan">
                                        <div class="plan-price mt-2">
                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                            <span class="pricing-basic-value fw-bolder text-primary">25</span>
                                            <sub class="pricing-duration text-body font-medium-1 fw-bold">/شهر</sub>
                                        </div>
                                        <small class="annual-pricing d-none text-muted"></small>
                                        </div>
                                        <ul class="list-group list-group-circle text-start">
                                            <li class="list-group-item">برنامج غذائي (مخصص لك)</li>
                                            <li class="list-group-item">برنامج تدريبي (مخصص لك)</li>
                                            <li class="list-group-item">متابعة (أسبوعية)</li>
                                            <li class="list-group-item">تفقد دوري (أسبوعي)</li>
                                            <li class="list-group-item">الإجابة عن أي استفسار رياضي</li>
                                            <li class="list-group-item">تقديم نصائح لتحسين نمط الحياة</li>
                                        </ul>
                                        <button class="btn w-100 btn-outline-success mt-2">الباقة المفعلة حالياً</button>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="card standard-pricing popular text-center" style="border: 1px solid #3d2d18;border-radius: 10px;margin: 5px;">
                                    <div class="card-body">
                                        <div class="pricing-badge text-end">
                                            <span class="badge rounded-pill badge-light-primary">الأفضل</span>
                                        </div>
                                        <img src="{{ asset ('app-assets/images/bundles/Gold.webp') }}" style="width: 100px;">
                                        <br>
                                        <br>
                                        <h3>متقدم</h3>
                                        <h5>( تدريب أونلاين )</h5>
                                        <hr>
                                        <p class="card-text">أفضل طريق على المدى البعيد</p>
                                        <hr>
                                        <div class="annual-plan">
                                        <div class="plan-price mt-2">
                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                            <span class="pricing-standard-value fw-bolder text-primary">50</span>
                                            <sub class="pricing-duration text-body font-medium-1 fw-bold">/شهر</sub>
                                        </div>
                                        <small class="annual-pricing d-none text-muted"></small>
                                        </div>
                                        <ul class="list-group list-group-circle text-start">
                                            <li class="list-group-item">برنامج غذائي (مخصص لك)</li>
                                            <li class="list-group-item">برنامج تدريبي (مخصص لك)</li>
                                            <li class="list-group-item">برنامج مرونة (مخصص لك)</li>
                                            <li class="list-group-item">متابعة (يومية)</li>
                                            <li class="list-group-item">تفقد دوري (أسبوعي)</li>
                                            <li class="list-group-item">الإجابة عن أي استفسار رياضي</li>
                                            <li class="list-group-item">تقديم نصائح لتحسين نمط الحياة</li>
                                        </ul>
                                        <button class="btn w-100 btn-outline-primary mt-2">تطوير الباقة</button>
                                    </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="card enterprise-pricing text-center" style="border: 1px solid #3d2d18;border-radius: 10px;margin: 5px;">
                                    <div class="card-body">
                                        <div class="pricing-badge text-end">
                                            <span class="badge">&nbsp;</span>
                                        </div>
                                        <img src="{{ asset ('app-assets/images/bundles/Dimond.webp') }}" style="width: 100px;">
                                        <br>
                                        <br>
                                        <h3>محترف</h3>
                                        <h5>( تدريب شخصي )</h5>
                                        <hr>
                                        <p class="card-text">أسرع طريق للإحتراف</p>
                                        <hr>
                                        <div class="annual-plan">
                                        <div class="plan-price mt-2">
                                            <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                            <span class="pricing-enterprise-value fw-bolder text-primary">125</span>
                                            <sub class="pricing-duration text-body font-medium-1 fw-bold">/شهر</sub>
                                        </div>
                                        <small class="annual-pricing d-none text-muted"></small>
                                        </div>
                                        <ul class="list-group list-group-circle text-start">
                                            <li class="list-group-item">تحليل مكونات الجسم</li>
                                            <li class="list-group-item">الإشراف الشخصي أثناء التدريب</li>
                                            <li class="list-group-item">برنامج غذائي (مخصص لك)</li>
                                            <li class="list-group-item">برنامج تدريبي (مخصص لك)</li>
                                            <li class="list-group-item">متابعة (يومية)</li>
                                            <li class="list-group-item">تفقد دوري (أسبوعي)</li>
                                            <li class="list-group-item">الإجابة عن أي استفسار رياضي</li>
                                            <li class="list-group-item">تقديم نصائح لتحسين نمط الحياة</li>
                                        </ul>
                                        <button class="btn w-100 btn-outline-primary mt-2">تطوير الباقة</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title mb-sm-0 mb-1">الأسئلة المتكررة</h4>
                            <a href="https://wa.me/message/POU44V4CNULGN1" style="color: gray">هل لديك سؤال أخر, تواصل معي؟</a>
                        </div>

                        <div class="card-body">
                            <div class="accordion accordion-margin" id="accordionExample">
                                <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    role="button"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="false"
                                    aria-controls="collapseOne"
                                    >
                                    هل يتم تجديد إشتراكي تلقائيًا؟
                                    </button>
                                </h2>

                                <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                    لا, حيث كل إشتراك مستقل بشكل ذاتي كلياً
                                    </div>
                                </div>
                                </div>
                                <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    role="button"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                                    >
                                    هل يمكنني تجميد الإشتراك؟
                                    </button>
                                </h2>
                                <div
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                    نعم, في حال السفر أو المرض لاسمح الله
                                    </div>
                                </div>
                                </div>
                                <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button
                                    class="accordion-button collapsed"
                                    data-bs-toggle="collapse"
                                    role="button"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                                    >
                                    هل يمكنني إلغاء الإشتراك؟
                                    </button>
                                </h2>
                                <div
                                    id="collapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                    لا, غير ممكن إلغاء الإشتراك أو أسترجاع المبلغ لأي سبب كان
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="{{ asset('app-assets/js/scripts/pages/page-pricing.js') }}"></script>
@endsection
{{-- /JS --}}
