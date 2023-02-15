@section('title', 'شروط الخدمة')

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
                        <h2 class="content-header-title float-start mb-0">شروط الخدمة</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard">الإدارة العامة</a></li>
                                <li class="breadcrumb-item active">شروط الخدمة</li>
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
                        <i class="fa-solid fa-circle-plus mx-50"></i>إضافة شرط جديد
                    </button>
                </div>
            </div>
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="border-radius: 0px 10px 0px 0px;">الشرط</th>
                                        <th style="border-radius: 10px 0px 0px 0px;">الخيارات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $terms as $term )
                                       <tr>
                                            <td style="text-align: right">
                                                {{$term->description}}
                                            </td>
                                            <td>
                                                <a style="font-size: 16px;" href=""><i class="fa fa-edit text-info mx-1"></i></a>
                                                <a style="font-size: 16px;" href=""><i class="fa fa-trash text-danger"></i></a>
                                            </td>
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

{{-- JS --}}
@section('vendor-script')

@endsection

@section('page-script')

@endsection
{{-- /JS --}}
