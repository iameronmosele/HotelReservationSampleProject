<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/custom.css') }}">
</head>
<body>

    @include('layout.partials.app-header')

    @yield('content')

    @include('layout.partials.app-footer')


    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('site/js/aos.js') }}"></script>
    <script src="https://kit.fontawesome.com/c4bd6d683c.js"></script>
    <script src="{{ asset('site/js/main.js') }}"></script>

</body>
</html>
