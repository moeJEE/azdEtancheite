<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>AZD ETANCHEITE</title>
    <meta name="description" content="" />
    <link rel="icon" href="{{ asset('assetsFront/images/logo.png') }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assetsFront/images/') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/css/jquery.mb.YTPlayer.min.css"
        media="all" rel="stylesheet" type="text/css" />

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/vendor/bootstrap.min.css') }}" />

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/vendor/fontawesome-all.min.css') }}" />

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/plugins/swiper.min.css') }}" />

    <!-- Animate text CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/plugins/animate-text.css') }}" />

    <!-- AOS CSS -->
    <link href="{{ asset('assetsFront/css/plugins/aos.css') }}" rel="stylesheet" />

    <!-- Some Plugins CSS -->
    <link href="{{ asset('assetsFront/css/plugins/some-plugins.min.css') }}" rel="stylesheet" />

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/plugins/animate.min.css') }}" />

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
        <link rel="stylesheet" href="{{ asset('assetsFront/css/vendor/vendor.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assetsFront/css/plugins/plugins.min.css') }}">
        -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assetsFront/css/style.css') }}" />
</head>

<body>
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('partials.header')

    <div class="site-wrapper-reveal">
        @yield('content')
    </div>

    @include('partials.footer')


    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fa fa-angle-double-up"></i>
        <i class="arrow-bottom fa fa-angle-double-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->


    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('assetsFront/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('assetsFront/js/vendor/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assetsFront/js/vendor/bootstrap.min.js') }}"></script>

    <!-- Swiper Slider JS -->
    <script src="{{ asset('assetsFront/js/plugins/swiper.min.js') }}"></script>

    <!-- Waypoints JS -->
    <script src="{{ asset('assetsFront/js/plugins/waypoints.min.js') }}"></script>

    <!-- Counter down JS -->
    <script src="{{ asset('assetsFront/js/plugins/countdown.min.js') }}"></script>

    <!-- Isotope JS -->
    <script src="{{ asset('assetsFront/js/plugins/isotope.min.js') }}"></script>

    <!-- Masonry JS -->
    <script src="{{ asset('assetsFront/js/plugins/masonry.min.js') }}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{ asset('assetsFront/js/plugins/images-loaded.min.js') }}"></script>

    <!-- Counterup JS -->
    <script src="{{ asset('assetsFront/js/plugins/counterup.min.js') }}"></script>

    <!-- WOW JS -->
    <script src="{{ asset('assetsFront/js/plugins/wow.min.js') }}"></script>

    <!-- AOS JS -->
    <script src="{{ asset('assetsFront/js/plugins/aos.js') }}"></script>

    <!-- Some plugins JS -->
    <script src="{{ asset('assetsFront/js/plugins/some-plugins.js') }}"></script>

    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
    <script src="{{ asset('assetsFront/js/plugins/plugins.min.js') }}"></script>
    -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mb.YTPlayer/3.3.9/jquery.mb.YTPlayer.min.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('assetsFront/js/main.js') }}"></script>

    <script>
        jQuery(function() {
            jQuery("#bgndVideo").YTPlayer();
        });
    </script>
</body>

</html>
