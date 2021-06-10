<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Admin &mdash; {{ config('app.name')}}</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/modules/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/@fortawesome/fontawesome-free/css/all.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin/modules/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/summernote/dist/summernote-bs4.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/owl.carousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/modules/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">
</head>
@if(session('role') != 1)
    <script>location.href = '{{ url('/') }}'</script>
@endif
<body>
    <div id="app">
        <div class="main-wrapper">

            <div class="navbar-bg"></div>

            @include('admin/layout.navbar')

            @include('admin/layout.sidebar')

            @yield('content')

            @include('admin/layout.footer')

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('admin/modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{ asset('admin/modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/modules/nicescroll/dist/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('admin/modules/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('admin/modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('admin/modules/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('admin/modules/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('admin/modules/summernote/dist/summernote-bs4.js')}}"></script>
    <script src="{{ asset('admin/modules/chocolat/dist/js/jquery.chocolat.min.js')}}"></script>
    <script src="{{ asset('admin/modules/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('admin/modules/datatables.net-select-bs4/js/select.bootstrap4.min.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('admin/assets/js/custom.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin/assets/js/page/index.js')}}"></script>
    <script src="{{ asset('admin/assets/js/page/modules-datatables.js')}}"></script>

</body>
</html>
