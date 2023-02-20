<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{url('https://amralsaleeh.com/')}}">
                    <span class="brand-logo">
                        <img src="{{ asset ('app-assets/images/logo/logo.svg') }}" style="width: 36px;">
                    </span>
                    {{-- <h2 class="brand-text">iCoach</h2> --}}
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>

    <hr style="margin: 15px 20px">

    <div class="shadow-bottom"></div>
    <div class="main-menu-content">

        {{-- <h2 style="text-align:center">iCoach</h2>
        <hr style="margin: 15px 20px"> --}}

        @if(Auth::user()->role == 'admin')
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate">الصفحة الرئيسية</span></a></li>

                <li class="navigation-header"><span>الخطط والبرامج</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('exercise') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('exercise') }}"><i data-feather="activity"></i><span class="menu-title text-truncate">التمارين الرياضية</span></a></li>
                <li class="nav-item {{ request()->is('diet') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('diet') }}"><i data-feather="coffee"></i><span class="menu-title text-truncate">الحمية الغذائية</span></a></li>

                <li class="navigation-header"><span>السجلات</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('statistics') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('statistics') }}"><i data-feather="clipboard"></i><span class="menu-title text-truncate">الإحصائيات</span></a></li>

                <li class="navigation-header"><span>الدفعات المالية</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('subscriptions') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('subscriptions') }}"><i data-feather="dollar-sign"></i><span class="menu-title text-truncate">إدارة الإشتراكات</span></a></li>

                <li class="navigation-header"><span>التعليمات</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('guide') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('guide') }}"><i data-feather="file"></i><span class="menu-title text-truncate">القواعد الإرشادية</span></a></li>
                <li class="nav-item {{ request()->is('terms') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('terms') }}"><i data-feather="file"></i><span class="menu-title text-truncate">شروط الخدمة</span></a></li>

                <hr style="margin: 15px 60px">

                <div class="menu-expanded menu-accordion footer-menu" style="margin-bottom: 50px;text-align: center;font-size: 15px;color: #555;">
                    <p class="clearfix mb-0">
                        <span class="float-md d-block">خدمة التدريب عن بعد</span>
                        <span class="float-md d-block">النسخة _ 0.7.1</span>
                    </p>
                </div>
            </ul>

            <hr> <h1>User Side Bar</h1> <hr>

            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate">الصفحة الرئيسية</span></a></li>

                <li class="navigation-header"><span>الخطط والبرامج</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('exercise') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('exercise') }}"><i data-feather="activity"></i><span class="menu-title text-truncate">التمارين الرياضية</span></a></li>
                <li class="nav-item {{ request()->is('diet') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('diet') }}"><i data-feather="coffee"></i><span class="menu-title text-truncate">الحمية الغذائية</span></a></li>

                <li class="navigation-header"><span>السجلات</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('statistics') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('statistics') }}"><i data-feather="clipboard"></i><span class="menu-title text-truncate">الإحصائيات</span></a></li>

                <li class="navigation-header"><span>الدفعات المالية</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('subscriptions') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('subscriptions') }}"><i data-feather="dollar-sign"></i><span class="menu-title text-truncate">إدارة الإشتراكات</span></a></li>

                <li class="navigation-header"><span>التعليمات</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('guide') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('guide') }}"><i data-feather="file"></i><span class="menu-title text-truncate">القواعد الإرشادية</span></a></li>
                <li class="nav-item {{ request()->is('terms') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('terms') }}"><i data-feather="file"></i><span class="menu-title text-truncate">شروط الخدمة</span></a></li>

                <hr style="margin: 15px 60px">

                <div class="menu-expanded menu-accordion footer-menu" style="margin-bottom: 50px;text-align: center;font-size: 15px;color: #555;">
                    <p class="clearfix mb-0">
                        <span class="float-md d-block">خدمة التدريب عن بعد</span>
                        <span class="float-md d-block">النسخة _ 0.7.1</span>
                    </p>
                </div>
            </ul>
        @else
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate">الصفحة الرئيسية</span></a></li>

                <li class="navigation-header"><span>الخطط والبرامج</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('exercise') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('exercise') }}"><i data-feather="activity"></i><span class="menu-title text-truncate">التمارين الرياضية</span></a></li>
                <li class="nav-item {{ request()->is('diet') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('diet') }}"><i data-feather="coffee"></i><span class="menu-title text-truncate">الحمية الغذائية</span></a></li>

                <li class="navigation-header"><span>السجلات</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('statistics') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('statistics') }}"><i data-feather="clipboard"></i><span class="menu-title text-truncate">الإحصائيات</span></a></li>

                <li class="navigation-header"><span>الدفعات المالية</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('subscriptions') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('subscriptions') }}"><i data-feather="dollar-sign"></i><span class="menu-title text-truncate">إدارة الإشتراكات</span></a></li>

                <li class="navigation-header"><span>التعليمات</span><i data-feather="more-horizontal"></i></li>
                <li class="nav-item {{ request()->is('guide') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('guide') }}"><i data-feather="file"></i><span class="menu-title text-truncate">القواعد الإرشادية</span></a></li>
                <li class="nav-item {{ request()->is('terms') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('terms') }}"><i data-feather="file"></i><span class="menu-title text-truncate">شروط الخدمة</span></a></li>

                <hr style="margin: 15px 60px">

                <div class="menu-expanded menu-accordion footer-menu" style="margin-bottom: 50px;text-align: center;font-size: 15px;color: #555;">
                    <p class="clearfix mb-0">
                        <span class="float-md d-block">خدمة التدريب عن بعد</span>
                        <span class="float-md d-block">النسخة _ 0.7.1</span>
                    </p>
                </div>
            </ul>
        @endif
    </div>
</div>



