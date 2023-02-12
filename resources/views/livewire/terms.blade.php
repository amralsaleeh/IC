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
                                <li class="breadcrumb-item active"><a href="dashboard">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item">شروط الخدمة</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body py-2 my-25" style="font-size: 20px;text-align: justify;">
                            @foreach ($terms as $term)
                                <li> {{$term->description}} </li>
                                <br>
                            @endforeach
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
