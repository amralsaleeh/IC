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

                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title mb-sm-0 mb-1">أيام التدريب</h4>
                            <a href="https://wa.me/message/POU44V4CNULGN1" style="color: gray">هل لديك سؤال أو استفسار عن تمرين معين, تواصل معي؟</a>
                        </div>

                        <div class="card-body">
                            <div class="accordion accordion-margin" id="accordionExample">
                                @for ($i = 0; $i < count($trainingPlanDetails); $i++)
                                        <div class="card accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $i }}">
                                                <button
                                                class="accordion-button collapsed"
                                                data-bs-toggle="collapse"
                                                role="button"
                                                data-bs-target="#collapseTwo{{ $i }}"
                                                aria-expanded="false"
                                                aria-controls="collapseTwo{{ $i }}"
                                                >
                                                <h4 class="card-title mb-sm-0 mb-1" style="color: #f8991d ;margin-bottom: 0rem !important;">{{ 'اليوم ( ' . $i+1 . ' )' }}</h4>
                                                </button>
                                            </h2>

                                            <div
                                                id="collapseTwo{{ $i }}"
                                                class="accordion-collapse collapse"
                                                aria-labelledby="heading{{ $i }}"
                                                data-bs-parent="#accordionExample"
                                            >
                                                <div class="accordion-body">
                                                    @if ($trainingPlanDetails[$i] != null)
                                                        @foreach ($trainingPlanDetails[$i] as $exercise)
                                                            <div class="d-flex mb-2">
                                                                <a href={{ $exercise['link'] }} class="me-2">
                                                                    <img class="rounded" src="app-assets/images/exercises/default{{-- {{ $exercise['image'] }} --}}.jpg" width="80" height="80" alt="Recent Post Pic">
                                                                </a>
                                                                <div class="blog-info">
                                                                    <h6 class="blog-recent-post-title" style="font-size: 1.2rem">
                                                                        <a href={{ $exercise['link'] }} class="text-body-heading">{{ $exercise['name'] }}</a>
                                                                    </h6>
                                                                    <div class="text-muted mb-0" style="font-size: 1.2rem">{{ '( ' . $exercise['reps']  . ' )  * ' . $exercise['sets'] }}</div>
                                                                    <div class="text-muted mb-0">{{ $exercise['tempo'] }}</div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <h3 style="text-align: center"> إستراحة محارب </h3>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                @endfor
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
