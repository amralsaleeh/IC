<!DOCTYPE html>
<html class="loading dark-layout" data-layout="dark-layout" lang="en" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>عمرو الصالح - خدمة التدريب عن بعد - تسجيل دخول</title>
    <link rel="apple-touch-icon" href="{{ asset ('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/themes/dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('app-assets/css-rtl/style-rtl.css') }}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                      <!-- Login basic -->
                      <div class="card mb-0">
                        <div class="card-body">
                          <a href="https://amralsaleeh.com" class="brand-logo">
                              <img src="{{ asset ('app-assets/images/logo/logo.svg') }}" style="width:100px">
                          </a>

                          <h4 class="card-title mb-1">أهلاً وسهلاً! 👋</h4>
                          <p class="card-text mb-2">الرجاء تسجيل الدخول لتبدء المغامرة</p>

                          <form class="auth-login-form mt-2" action="{{ route ('login') }}" method="POST">
                            @csrf
                            <div class="mb-1">
                              <label for="email" class="form-label">البريد الإلكتروني</label>
                              <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email"
                                placeholder="majd@example.com"
                                aria-describedby="email"
                                tabindex="1"
                                autofocus
                              />
                            </div>

                            <div class="mb-1">
                              <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">كلمة السر</label>
                                <a href="{{url('/forgot_password')}}">
                                  <small>هل نسيت كلمة السر؟</small>
                                </a>
                              </div>
                              <div class="input-group input-group-merge form-password-toggle">
                                <input
                                  type="password"
                                  class="form-control form-control-merge"
                                  id="password"
                                  name="password"
                                  tabindex="2"
                                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                  aria-describedby="password"
                                />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                              </div>
                            </div>
                            <div class="mb-1">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" checked />
                                <label class="form-check-label" for="remember-me">تذكرني</label>
                              </div>
                            </div>
                            <button class="btn btn-primary w-100" tabindex="4">تسجيل دخول</button>
                          </form>

                          <p class="text-center mt-2">
                            <span>ليس لديك حساب؟</span>
                            <br>
                            <a href="https://www.instagram.com/amralsaleeh">
                              <span>تواصل معي لفتح حساب جديد خاص بك</span>
                            </a>
                          </p>

                          {{-- <div class="divider my-2">
                            <div class="divider-text">أو عن طريق</div>
                          </div>
                          <div class="auth-footer-btn d-flex justify-content-center">
                            <a href="#" class="btn btn-google">
                              <i data-feather="mail"></i>
                            </a>
                            <a href="#" class="btn btn-facebook">
                              <i data-feather="facebook"></i>
                            </a>
                          </div> --}}

                        </div>
                      </div>
                      <!-- /Login basic -->
                    </div>
                  </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset ('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset ('app-assets/js/scripts/pages/auth-login.js') }}"></script>
    <!-- END: Page JS-->

    <script>
        let docTitle = document.title;
        window.addEventListener("blur", () =>{
            document.title = "🔥 كُن قوي لأجلك  🔥";
        })
        window.addEventListener("focus", () =>{
            document.title = docTitle;
        })

        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
