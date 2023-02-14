@section('title', 'الإشتراكات')

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
                        <h2 class="content-header-title float-start mb-0">الإشتراكات</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">الإدارة العامة</a></li>
                                <li class="breadcrumb-item active">الإشتراكات</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row mb-2">
                <div class="d-flex justify-content-end">
                    <button wire:click.prevent="showNewCouponModal" type="button" class="btn btn-primary mx-2">
                        <i class="fa-solid fa-tag mx-50"></i>إضافة كوبون
                    </button>
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-pen-to-square mx-50"></i>تعديل الباقات
                    </button>
                </div>
            </div>

            <div class="row match-height">
                <div class="col-md-8 col-12">
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
                        <div style="text-align: center; cursor:pointer;">
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
                <div class="col-md-4 col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-end">
                            <h4>أعلى الدول تسجيلاً</h4>
                            <div class="dropdown chart-dropdown">
                                <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    أخر شهر
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem1">
                                    <a class="dropdown-item" href="#">أخر شهر</a>
                                    <a class="dropdown-item" href="#">أخر سنة</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="session-chart" class="my-1"></div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                    <span class="fw-bold ms-75 me-25">Desktop</span>
                                    <span>- 58.6%</span>
                                </div>
                                <div>
                                    <span>2%</span>
                                    <i data-feather="arrow-up" class="text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                    <span class="fw-bold ms-75 me-25">Desktop</span>
                                    <span>- 58.6%</span>
                                </div>
                                <div>
                                    <span>2%</span>
                                    <i data-feather="arrow-up" class="text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                    <span class="fw-bold ms-75 me-25">Desktop</span>
                                    <span>- 58.6%</span>
                                </div>
                                <div>
                                    <span>2%</span>
                                    <i data-feather="arrow-up" class="text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                    <span class="fw-bold ms-75 me-25">Mobile</span>
                                    <span>- 34.9%</span>
                                </div>
                                <div>
                                    <span>8%</span>
                                    <i data-feather="arrow-up" class="text-success"></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i data-feather="tablet" class="font-medium-2 text-danger"></i>
                                    <span class="fw-bold ms-75 me-25">Tablet</span>
                                    <span>- 6.5%</span>
                                </div>
                                <div>
                                    <span>-5%</span>
                                    <i data-feather="arrow-down" class="text-danger"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-employee-task">
                        <div class="card-header">
                            <h4 class="card-title">المتدربين المميزين</h4>
                        </div>
                        <div class="card-body">
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-9.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0">Ryan Harrington</h6>
                                        <small>iOS Developer</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">9hr 20m</small>
                                    <div class="employee-task-chart-primary-1"></div>
                                </div>
                            </div>
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0">Louisa Norton</h6>
                                        <small>UI Designer</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">4hr 17m</small>
                                    <div class="employee-task-chart-danger"></div>
                                </div>
                            </div>
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0">Jayden Duncan</h6>
                                        <small>Java Developer</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">12hr 8m</small>
                                    <div class="employee-task-chart-success"></div>
                                </div>
                            </div>
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-20.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0">Cynthia Howell</h6>
                                        <small>Anguler Developer</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">3hr 19m</small>
                                    <div class="employee-task-chart-secondary"></div>
                                </div>
                            </div>
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-16.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0">Helena Payne</h6>
                                        <small>Marketing</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">9hr 50m</small>
                                    <div class="employee-task-chart-warning"></div>
                                </div>
                            </div>
                            <div class="employee-task d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-row">
                                    <div class="avatar me-75">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-13.jpg" class="rounded" width="42" height="42" alt="Avatar" />
                                    </div>
                                    <div class="my-auto">
                                        <h6 class="mb-0">Troy Jensen</h6>
                                        <small>iOS Developer</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <small class="text-muted me-75">4hr 48m</small>
                                    <div class="employee-task-chart-primary-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Coupon Modal  -->
    <div wire:ignore.self class="modal fade" id="newCouponModal" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 mx-50 pb-5">
                    <h1 class="text-center mb-1" id="addNewCardTitle">إضافة كوبون جديد</h1>
                    {{-- <p class="text-center">Add card for future billing</p> --}}

                    <form autocomplete="off" wire:submit.prevent="addNewCoupon" id="addNewCardValidation" class="row gy-1 gx-2 mt-75">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">الأسم</label>
                                <input wire:model.defer="couponInfo.name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="COUPON123">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-5">
                                <label for="discount">الحسم</label>
                                <div class="input-group input-group-lg mb-1">
                                    <span class="input-group-text"><i class="fa-solid fa-percent"></i></span>
                                    <input wire:model.defer="couponInfo.discount" type="text" class="form-control @error('discount') is-invalid @enderror" id="discount" placeholder="النسبة">
                                        @error('discount')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="expiration_date">الصلاحية</label>
                                <div class="input-group input-group-lg mb-1">
                                    <span class="input-group-text"><i class="fa-solid fa-calendar"></i></span>
                                    <input wire:model.defer="couponInfo.expiration_date" type="text" class="form-control @error('expiration_date') is-invalid @enderror" id="expiration_date" placeholder="يوم - شهر - سنة">
                                        @error('expiration_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-1 mt-1">حفظ</button>
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

{{-- JS --}}
@section('vendor-script')
    <script src="{{ asset ('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset ('app-assets/js/scripts/pages/subscriptions.js') }}"></script>

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
            window.addEventListener('show_new_coupon_modal', event => {
                $('#newCouponModal').modal('show');
            })
            window.addEventListener('hide_new_coupon_modal', event => {
                $('#newCouponModal').modal('hide');
                toastr.success(event.detail.message, 'نجحت العملية!');
            })
        })
    </script>
@endsection
{{-- /JS --}}
