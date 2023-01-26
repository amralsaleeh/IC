@section('title', 'الحمية الغذائية')

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
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title mb-sm-0 mb-1">الوجبات</h4>
                            <a href="https://wa.me/message/POU44V4CNULGN1" style="color: gray">هل لديك سؤال أو استفسار عن تمرين معين, تواصل معي؟</a>
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
                                        <h4 class="card-title mb-sm-0 mb-1" style="color: #f8991d">الفطور</h4>
                                        </button>
                                    </h2>

                                    <div
                                        id="collapseOne"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                        <div
                                        class="card-header d-flex justify-content-between align-items-center">
                                        </div>
                                        <div class="card-body" style="text-align: center;font-size: 18px;">
                                            <p>ديتوكس (ليمون + كاسة ماء) - فيتامين ب-12 (200مكغ)</p>
                                            <p>بيض مسلوق (2) - جبنة (75غ) - محمص خبز شوفان (1ر) - أوميغا-3 (1000مغ)</p>
                                        </div>
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
                                        <h4 class="card-title mb-sm-0 mb-1" style="color: #f8991d">الغداء</h4>
                                        </button>
                                    </h2>

                                    <div
                                        id="collapseTwo"
                                        class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample"
                                    >
                                        <div class="accordion-body">
                                        <div
                                        class="card-header d-flex justify-content-between align-items-center">
                                        </div>
                                        <div class="card-body" style="text-align: center;font-size: 18px;">
                                            <p>ديتوكس (ليمون + كاسة ماء) - فيتامين ب-12 (200مكغ)</p>
                                            <p>بيض مسلوق (2) - جبنة (75غ) - محمص خبز شوفان (1ر) - أوميغا-3 (1000مغ)</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
