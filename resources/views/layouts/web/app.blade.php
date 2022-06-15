<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}" />

    <!-- Favicons -->
    @if(isset($home_page_data['header_favicon']))
        <link href="{{ asset('/public/admin/assets/images/page/'.$home_page_data['header_favicon']) }}" rel="icon">
    @endif

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="{{ asset('public/admin/assets/js/jquery-2.2.4.min.js') }}"></script>
    <link href="{{ asset('public/web/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/web/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/summernote.css') }}">

    <!-- freightlink  Main CSS File -->
    <link href="{{ asset('public/web/assets/css/style.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('css')

    
</head>

<body>
    <!-- ======= Top Bar ======= -->
    @include('layouts.web.top-nav-bar')

    <!-- ======= Header ======= -->
    @include('layouts.web.header')

    <!-- ======= main content ======= -->
    @yield('content')
    <!-- ======= End main content ======= -->

    <!-- ======= Footer ======= -->
    @include('layouts.web.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- <link href="font/Mont-Black.otf" rel="stylesheet"> -->
    {{-- <script src="{{ asset('public/admin/assets/js/jquery.slim.min.js') }}" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('public/admin/assets/js/popper.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('public/admin/assets/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/web/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/web/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/web/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/summernote.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{ asset('public/js/toastr.min.js') }}"></script>
	<script src="{{ asset('public/js/search.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/web/assets/js/main.js') }}"></script>

    @stack('js')

    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            toastr.warning("{{ session('warning') }}");
        @endif

        $(document).on("input", ".numeric", function() {
            this.value = this.value.replace(/\D/g,'');
        });
    </script>
</body>

</html>