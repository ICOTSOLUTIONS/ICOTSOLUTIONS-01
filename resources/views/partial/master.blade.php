<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/finibus/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Mar 2022 11:22:31 GMT -->

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">

    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jQuery-plugin-progressbar.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/barfiller.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>ICOTS</title>
</head>

<body class="dark">
    <div class="cursor"></div>
    <div class="cursor2"></div>

    <div class="preloader_area_wrap">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>
    <div class="main">
        @include('partial.header')

        @yield('content')

        @include('partial.footer')

    </div>

    <script data-cfasync="false" src="{{ asset('assets/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

    
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('assets/js/jQuery-plugin-progressbar.js')}}"></script>

    <script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>

    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('assets/js/lightbox.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>

    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>

    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

</html>
