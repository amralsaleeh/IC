{{-- Vendor Style --}}
    <link rel="stylesheet" href="{{ asset ('app-assets/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">

    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/plugins/fontawesome-free-6.2.1/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/plugins/toastr/toastr.min.css') }}">

    @yield('vendor-style')
{{-- /Vendor Style --}}

{{-- Page Style --}}
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/colors.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/components.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/core/menu/menu-types/vertical-menu.css') }}">

    @yield('page-style')

    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset ('app-assets/css-rtl/style-rtl.css') }}">
{{-- /Page Style --}}
