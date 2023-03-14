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
            <div class="row mb-2">
                <div class="d-flex justify-content-end">
                    <button wire:click.prevent="showAddCouponModal" type="button" class="btn btn-primary">
                        <i class="fa-solid fa-tag mx-50"></i>إضافة كوبون حسم
                    </button>
                </div>
            </div>

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

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-header d-flex justify-content-between align-items-center" style="margin-bottom: -15px;">
                            <h4 class="card-title mb-sm-0 mb-1">الدفعات المالية</h4>
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
                                    السجل
                                    </button>
                                </h2>

                                <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                              <thead>
                                                  <tr>
                                                    <th style="border-radius: 0px 10px 0px 0px;">المدة</th>
                                                    <th>الباقة</th>
                                                    <th>المبلغ</th>
                                                    <th>الحسم</th>
                                                    <th style="border-radius: 10px 0px 0px 0px;">الإنتهاء</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($subscriptions as $subscription)
                                                    <tr>
                                                        <td>{{ $subscription->duration . ' أشهر' }}</td>
                                                        <td>{{ $subscription->name }}</td>
                                                        <td>{{ '$' . $subscription->payment }}</td>
                                                        <td>{{ $this->getCouponDiscounts($subscription->coupons_id) }}</td>
                                                        <td>{{ $subscription->expiration_date }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                          </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="text-center">
                            <h1 class="mt-5 mb-50">الباقات والعروض</h1>
                            <a wire:click.prevent="showAddCouponModal" href="">
                                هل لديك كوبون حسم؟
                            </a>
                            
                            {{-- <div class="card-body">
                                <div class="input-group collapse" id="couponCollapse" style="padding: 1% 10% !important;">
                                    <input wire:model="couponCode" type="text" class="form-control is-invalid" placeholder="COUPON123">
                                    <button class="btn btn-outline-primary waves-effect" id="button-addon2" type="button">تحقق</button>
                                </div>
                            </div> --}}
                            {{-- <div class="d-flex align-items-center justify-content-center mb-5 pb-50">
                                <h6 class="me-1 mb-0">شهري</h6>
                                <div class="form-check form-switch">
                                <input type="checkbox" class="form-check-input" id="priceSwitch" />
                                <label class="form-check-label" for="priceSwitch"></label>
                                </div>
                                <h6 class="ms-50 mb-0">سنوي</h6>
                            </div> --}}
                            
                        </div>
                        
                        <div class="row pricing-card mb-2 mt-2">
                            <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                                <div class="row">
                                    @foreach ($bundles as $bundle)
                                        <div class="col-12 col-md-4 mb-1">
                                            <div class="card basic-pricing text-center" style="border: 1px solid #3d2d18;border-radius: 10px;margin: 5px;">
                                            <div class="card-body">
                                                @if ($this->coupon != null)
                                                    <div class="pricing-badge text-end">
                                                        <span class="badge rounded-pill badge-light-info">{{ 'كود الحسم: ' . $coupon->name . ' - ' . $discounts * 100 . '%' }}</span>
                                                    </div>
                                                @endif
                                                <div class="pricing-badge text-end">
                                                    <span class="badge mt-50 rounded-pill badge-light-primary {{ $bundle->id != $activatedBundle ? "invisible" : "" }}">الحالية</span>
                                                </div>
                                                
                                                <img src="app-assets/images/bundles/{{ $bundle->image }}.webp" style="width: 100px;">
                                                <br>
                                                <br>
                                                <h3>{{ $bundle->name }}</h3>
                                                <h5>( فئة الـ <a href="#">{{ $bundle->duration * 30 }}</a> يوم )</h5>
                                                <hr>
                                                <p class="card-text">{{ $bundle->description }}</p>
                                                <hr>
                                                <div class="annual-plan">
                                                <div class="plan-price mt-2">
                                                    <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                                    <span class="pricing-basic-value fw-bolder text-primary">{{ $bundle->price }}</span>
                                                    {{-- <sub class="pricing-duration text-body font-medium-1 fw-bold">/ شهر</sub> --}}
                                                </div>
                                                <small class="annual-pricing text-muted">$ {{ round($bundle->price / $bundle->duration , 0) }} / شهر</small>
                                                </div>
                                                <ul class="list-group list-group-circle text-start">
                                                    @foreach ($bundlesFeatures[$bundle->id - 1] as $feature)
                                                        <li class="list-group-item">{{ $feature }}</li>
                                                    @endforeach
                                                </ul>
                                                @if ($bundle->id == $activatedBundle)
                                                    <a href="https://paypal.me/ReemAlsaleh/{{ $bundle->price }}">
                                                        <button class="btn w-100 btn-outline-success mt-2">هل تريد تجديد الباقة الحالية؟</button>
                                                    </a>
                                                @else
                                                    <a href="https://paypal.me/ReemAlsaleh/{{ $bundle->price }}">
                                                        <button class="btn w-100 btn-outline-primary mt-2">إشترك الآن</button>
                                                    </a>
                                                @endif
                                            </div>
                                            
                                                <h5 class="card-text text-muted">
                                                 خدمة الـ PayPal غير متوفرة لديك؟
                                                </h5>
                                                <a href="https://wa.me/message/POU44V4CNULGN1" class="mb-2">تواصل معي</a>
                                            
                                            </div>
                                        </div>
                                    @endforeach
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
                            <a href="https://wa.me/message/POU44V4CNULGN1" style="color: gray">لديك سؤال أخر, تواصل معي؟</a>
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


    <!-- New Coupon Modal  -->
    <div wire:ignore.self class="modal fade" id="addCouponModal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">إضافة كوبون حسم</h1>
                    {{-- <p class="text-center">Add card for future billing</p> --}}

                    <form autocomplete="off" wire:submit.prevent="addCoupon" id="addNewCardValidation" class="row gy-1 gx-2 mt-75">
                        <div class="form-group col-md-12">
                            {{-- <label for="name">الرمز</label> --}}
                            <input wire:model.defer="couponCode" type="text" class="form-control" id="couponCode" placeholder="COUPON123" style="text-transform:uppercase">
                        </div>

                        <p>
                            ملاحظة: يمكنك الإستفادة من كوبون واحد فقط!
                        </p>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1">إضافة</button>
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
</div>

{{-- JS --}}
@section('vendor-script')

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
            window.addEventListener('show_add_coupon_modal', event => {
                $('#addCouponModal').modal('show');
            })
            window.addEventListener('hide_add_coupon_modal', event => {
                $('#addCouponModal').modal('hide');
                toastr.success(event.detail.message, 'نجحت العملية!');
            })
        })
    </script>
@endsection
{{-- /JS --}}
