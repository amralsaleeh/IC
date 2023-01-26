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

            @php
                $diet = ['1','2','3','4'];
                $count = 4;
            @endphp

            <div class="col-12">
                <div class="card">
                    <div class="col-12">
                        @foreach ( $diet as $d )
                        <div class="card">
                            <div
                                class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-sm-0 mb-1" style="color: #f8991d">الفطور</h4>
                            </div>
                            <div class="card-body" style="text-align: center;font-size: 18px;">
                                <p>ديتوكس (ليمون + كاسة ماء) - فيتامين ب-12 (200مكغ)</p>
                                <p>بيض مسلوق (2) - جبنة (75غ) - محمص خبز شوفان (1ر) - أوميغا-3 (1000مغ)</p>
                            </div>
                        </div>
                        @if ($count > 1)
                        <hr>
                        @php
                            $count--;
                        @endphp
                        @endif
                        @endforeach
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
