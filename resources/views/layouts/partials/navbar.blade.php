<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
            {{-- <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
            </ul> --}}
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
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
                            <img src="{{ asset('app-assets/images/avatars/male.svg') }}" alt="avatar" width="32"
                            height="32">
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

                    {{-- <div class="list-item d-flex align-items-center">
                    <h6 class="fw-bolder me-auto mb-0">تنبيهات النظام</h6>
                    <div class="form-check form-check-primary form-switch">
                        <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                        <label class="form-check-label" for="systemNotification"></label>
                    </div>
                    </div>
                    <a class="d-flex" href="javascript:void(0)">
                    <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                        <div class="avatar bg-light-danger">
                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                        </div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                        <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p>
                        <small class="notification-text"> USA Server is down due to hight CPU usage</small>
                        </div>
                    </div>
                    </a>
                    <a class="d-flex" href="javascript:void(0)">
                    <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                        <div class="avatar bg-light-success">
                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                        </div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                        <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small
                            class="notification-text"> Last month sales report generated</small>
                        </div>
                    </div>
                    </a>
                    <a class="d-flex" href="javascript:void(0)">
                    <div class="list-item d-flex align-items-start">
                        <div class="me-1">
                        <div class="avatar bg-light-warning">
                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                        </div>
                        </div>
                        <div class="list-item-body flex-grow-1">
                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small
                            class="notification-text"> BLR Server using high memory</small>
                        </div>
                    </div>
                    </a> --}}

                </li>
                <li class="dropdown-menu-footer">
                    <a class="btn btn-primary w-100" href="javascript:void(0)">مسح جميع التنبيهات</a>
                </li>
                </ul>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                    data-bs-toggle="dropdown" aria-haspopup="true">
                    <div class="user-nav d-sm-flex d-none">
                    <span class="user-name fw-bolder">
                        @if (Auth::check())
                        {{ Auth::user()->name }}
                        @else
                        مجد طلال ستوت
                        @endif
                    </span>
                    <span class="user-status">
                        تدريب أونلاين
                    </span>
                    </div>
                    <span class="avatar">
                    <img class="round"
                        src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('app-assets/images/avatars/male.svg') }}"
                        alt="avatar" height="40" width="40">
                    <span class="avatar-status-online"></span>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <h6 class="dropdown-header">لوحة التحكم</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/login">
                        <i class="me-50" data-feather="log-in"></i> تسجيل دخول
                    </a>
                    <a class="dropdown-item"
                    href="/profile">
                    <i class="me-50" data-feather="user"></i> الملف الشخصي
                    </a>
                    {{-- @if (Auth::check() && Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                        <i class="me-50" data-feather="key"></i> API Tokens
                    </a>
                    @endif --}}
                    <a class="dropdown-item" href="#status">
                    <i class="me-50" data-feather="clock"></i> حالة الإشتراك
                    </a>
                    <a class="dropdown-item" href="/logout">
                        <i class="me-50" data-feather="log-out"></i> تسجيل خروج
                    </a>

                    @if (Auth::User() && Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Manage Team</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"
                        href="{{ Auth::user() ? route('teams.show', Auth::user()->currentTeam->id) : 'javascript:void(0)' }}">
                        <i class="me-50" data-feather="settings"></i> Team Settings
                    </a>
                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <a class="dropdown-item" href="{{ route('teams.create') }}">
                        <i class="me-50" data-feather="users"></i> Create New Team
                        </a>
                    @endcan

                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">
                        Switch Teams
                    </h6>
                    <div class="dropdown-divider"></div>
                    @if (Auth::user())
                        @foreach (Auth::user()->allTeams() as $team)
                        {{-- Below commented code read by artisan command while installing jetstream. !! Do not remove if you want to use jetstream. --}}

                        {{-- <x-jet-switchable-team :team="$team" /> --}}
                        @endforeach
                    @endif
                    <div class="dropdown-divider"></div>
                    @endif

                    @if (Auth::check())
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="me-50" data-feather="power"></i> Logout
                    </a>
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                    </form>
                    {{-- @else
                    <a class="dropdown-item" href="{{ Route::has('login') ? route('login') : 'javascript:void(0)' }}">
                        <i class="me-50" data-feather="log-in"></i> Login
                    </a> --}}
                    @endif

                </div>
            </li>
        </ul>
    </div>
</nav>
