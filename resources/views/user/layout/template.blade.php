<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi Valeeqa</title>

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    
    @include('user/layout.navbar')
    
    @yield('content')

    @include('user/layout.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>