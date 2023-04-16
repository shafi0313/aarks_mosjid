<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hafsa Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <!-- favicon --> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/x-icon/01.png') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

    {{-- <!-- preloader start here --> --}}
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    {{-- <!-- preloader ending here --> --}}

    @include('frontend.layouts.includes.header')

    @yield('content')

    @include('frontend.layouts.includes.footer')

    {{-- <!-- scrollToTop start here --> --}}
    <a href="#" class="scrollToTop">
        <i class="icofont-bubble-up"></i>
        <span class="pluse_1"></span>
        <span class="pluse_2"></span>
    </a>
    {{-- <!-- scrollToTop ending here --> --}}


    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/circularProgressBar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/lightcase.js') }}"></script>
    <script src="{{ asset('frontend/js/functions.js') }}"></script>
</body>

</html>