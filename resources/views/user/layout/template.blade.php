<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hi Valeeqa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css')}}">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    @include('user/layout.header')

    @yield('content')

    @include('user/layout.footer')

    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/js/templatemo.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
</body>

</html>