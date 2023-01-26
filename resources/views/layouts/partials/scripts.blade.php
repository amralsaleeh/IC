{{-- Vendor Script --}}
    <script src="{{ asset ('app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset ('app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js') }}"></script>

    <script src="{{ asset ('app-assets/vendors/js/extensions/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset ('app-assets/plugins/toastr/toastr.min.js') }}"></script>

    @yield('vendor-script')
{{-- /Vendor Script --}}

{{-- Page Script --}}
    <script src="{{ asset ('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('app-assets/js/core/app.js') }}"></script>

    @yield('page-script')
{{-- /Page Script --}}
