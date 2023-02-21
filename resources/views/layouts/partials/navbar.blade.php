<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            {{-- Notification --}}
            <li class="nav-item dropdown dropdown-notification me-25">
                <a class="nav-link" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ficon" data-feather="bell"></i>
                    <span class="badge rounded-pill bg-danger badge-up">3</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                <li class="dropdown-menu-header">
                    <div class="dropdown-header d-flex">
                    <h4 class="notification-title mb-0 me-auto">التنبيهات</h4>
                    {{-- <div class="badge rounded-pill badge-light-primary">3</div> --}}
                    </div>
                </li>
                <li class="scrollable-container media-list">
                    <a class="d-flex" href="javascript:void(0)">
                    <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                        <div class="avatar">
                            <img src="{{ asset('app-assets/images/avatars/male.svg') }}" alt="avatar" width="32" height="32">
                        </div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                        <p class="media-heading"><span>مبروك مجد 🎉</span></p>
                        <small class="notification-text"> لقد حطمت الهدف الخاص بك</small>
                        </div>
                    </div>
                    </a>
                    <a class="d-flex" href="javascript:void(0)">
                        <div class="list-item d-flex align-items-start">
                            <div class="me-1">
                            <div class="avatar">
                                <img src="{{ asset('app-assets/images/avatars/male.svg') }}" alt="avatar" width="32" height="32">
                            </div>
                            </div>
                            <div class="list-item-body flex-grow-1">
                            <p class="media-heading"><span>حمية جديدة! 👋</span>&nbsp;</p>
                            <small class="notification-text"> تم تحديث الحمية الغذائية الخاصة بك</small>
                            </div>
                        </div>
                    </a>
                    <a class="d-flex" href="javascript:void(0)">

                    <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                        <div class="avatar">
                            <img src="{{ asset('app-assets/images/avatars/male.svg') }}" alt="avatar" width="32" height="32">
                        </div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                        <p class="media-heading"><span>رسالة جديدة</span>&nbsp;</p>
                        <small class="notification-text"> لديك 10 رسائل جديدة</small>
                        </div>
                    </div>
                    </a>
                </li>
                <li class="dropdown-menu-footer">
                    <a class="btn btn-primary w-100" href="javascript:void(0)">مسح جميع التنبيهات</a>
                </li>
                </ul>
            </li>
            {{-- Notification --}}

            {{-- User Info --}}
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                    data-bs-toggle="dropdown" aria-haspopup="true">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">
                            @if (Auth::check())
                                {{ Auth::user()->full_name }}
                            @else
                                مجد طلال ستوت
                            @endif
                        </span>
                        <span class="user-status">
                            @if ( Auth::user()->role == 'admin' )
                                الإدارة العامة
                            @else
                                تدريب أونلاين
                            @endif
                        </span>
                    </div>
                    <span class="avatar">
                        @if ( Auth::user()->gender == 1 )
                            <img src="{{ asset('app-assets/images/avatars/male.svg') }}" alt="avatar" width="40" height="40">
                        @else
                            <img src="{{ asset('app-assets/images/avatars/female.svg') }}" alt="avatar" width="40" height="40">
                        @endif
                        <span class="avatar-status-online"></span>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <h6 class="dropdown-header">لوحة التحكم</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/profile">
                        <i class="me-50" data-feather="user"></i> الملف الشخصي
                    </a>
                    <a class="dropdown-item" href="#status">
                        <i class="me-50" data-feather="clock"></i> حالة الإشتراك
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="me-50" data-feather="log-out"></i> تسجيل خروج
                    </a>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </li>
            {{-- User Info --}}

        </ul>
    </div>
</nav>
