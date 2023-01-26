<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>عمرو الصالح - خدمة التدريب عن بعد - @yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset ('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('app-assets/images/ico/favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600">

    <!-- CSS -->
    @include('layouts.partials.styles')
    @livewireStyles
    <!-- /CSS -->
</head>

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

    {{-- Navbar --}}
    @include('layouts.partials.navbar')

    {{-- Sidebar --}}
    @include('layouts.partials.sidebar')

    {{-- Content --}}
    {{ $slot }}

    {{-- Footer --}}
    @include('layouts.partials.footer')

    <!-- JS-->
    @include('layouts.partials.scripts')
    @livewireScripts

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
    <!-- /JS -->
</body>
</html>
