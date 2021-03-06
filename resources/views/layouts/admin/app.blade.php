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
    <link href="{{ asset('public/admin/assets/img/favicon.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="{{asset('public/admin/assets/js/jquery-2.2.4.min.js')}}"></script>
    <link href="{{ asset('public/admin/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/admin/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/toastr.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/admin/assets/css/style.css') }}" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- ================================================= -->

    @stack('css')
</head>

<body class="member_page">
    <!-- ======= Header ======= -->
    @include('layouts.admin.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('layouts.admin.sidebar')
    <!-- End Sidebar-->

    <!-- ======= main ======= -->
    @yield('content')
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('public/admin/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('public/admin/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('public/js/summernote.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{ asset('public/js/toastr.min.js') }}"></script>
	<script src="{{ asset('public/js/search.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('public/admin/assets/js/main.js') }}"></script>
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

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
	</script>
	@stack('js')

</body>

</html>