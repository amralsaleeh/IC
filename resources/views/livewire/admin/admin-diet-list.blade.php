@section('title', 'البرامج الغذائية')

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
                        <h2 class="content-header-title float-start mb-0">البرامج الغذائية</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">الإدارة العامة</a></li>
                                <li class="breadcrumb-item active">البرامج الغذائية</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row mb-2">
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary">
                        <i class="fa-solid fa-circle-plus mx-50"></i> برنامج  غذائي جديدة
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">الفلترة والتصفية</h4>
                        </div>
                        <div class="card-body d-flex">
                            <div class="col-12 p-1">
                                <label class="form-label" for="basicSelect">الجنس</label>
                                <select class="form-select" id="basicSelect">
                                    <option>الكل</option>
                                    <option>ذكر</option>
                                    <option>أنثى</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="border-radius: 0px 10px 0px 0px;">أسم البرنامج</th>
                                        <th>السعرات</th>
                                        <th style="border-radius: 10px 0px 0px 0px;">الخيارات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            الأحترافي (1)
                                        </td>
                                        <td>
                                            3250
                                        </td>
                                        <td>
                                            <a href=""><i style="font-size: 18px;" class="fa fa-edit text-info mx-1"></i></a>
                                            <a href=""><i style="font-size: 18px;" class="fa fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">التمارين</h4>
                        </div>
                        <div class="card-body">
                            <form action="#" class="invoice-repeater">
                                <div data-repeater-list="invoice">
                                    <div data-repeater-item>
                                        <div class="row d-flex align-items-end">
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemname">أسم التمرين</label>
                                                    <input type="text" class="form-control" id="itemname" aria-describedby="itemname"/>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemcost">المجموعات</label>
                                                    <input type="number" class="form-control" id="itemcost" aria-describedby="itemcost"/>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemquantity">العدات</label>
                                                    <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity"/>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="itemquantity">الإيقاع</label>
                                                    <input type="number" class="form-control" id="itemquantity" aria-describedby="itemquantity"/>
                                                </div>
                                            </div>

                                            <div class="col-md-2 col-12 mb-50">
                                                <div class="mb-1">
                                                    <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                                        <i data-feather="x" class="me-25"></i>
                                                        <span>حذف</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                            <i data-feather="plus" class="me-25"></i>
                                            <span>تمرين جديد</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

    </div>
    </div>
</div>

{{-- JS --}}
@section('vendor-script')
    <script src="{{ asset ('app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
@endsection

@section('page-script')
    <script t src="{{ asset ('app-assets/js/scripts/forms/form-repeater.js') }}"></script>
@endsection
{{-- /JS --}}
