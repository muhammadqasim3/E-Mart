<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>E-Mart</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('frontend_assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/custom.css') }}">
    @stack('css')
</head>

<body>

    @include('layouts.frontend.header')

    @yield('content')


    @include('layouts.frontend.footer')

    <!-- ALL JS FILES -->
    <script src="{{ asset('frontend_assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('frontend_assets/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/inewsticker.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/images-loded.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>
    @stack('scripts')

    
</body>
</html>
