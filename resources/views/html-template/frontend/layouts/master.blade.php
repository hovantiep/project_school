<!DOCTYPE html>
<html>
<head>
    <title>Viewport a Magazine Category Flat Bootstarp responsive Website Template| Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Viewport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstarp-css -->
    <link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--// bootstarp-css -->
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/my-style.css') }}" type="text/css" media="all"/>
    <!--// css -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!-- dropdown -->
    <script src="{{ asset('frontend/js/jquery.easydropdown.js') }}"></script>
    <link href="{{ asset('frontend/css/nav.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{ asset('frontend/js/scripts.js') }}" type="text/javascript"></script>
    <!--js-->
    <!--/js-->
    <script src="{{ asset('frontend/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('frontend/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/easing.js') }}"></script>
    <!-- slider -->
    <script src="{{ asset('frontend/js/responsiveslides.min.js') }}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
            });
        });
    </script>
    <!-- /slider -->
    <script src="{{ asset('frontend/content-slider/ninja-slider.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/content-slider/ninja-slider.css') }}" type="text/css" media="all"/>

</head>
<body>
<div class="container">
    <div class="col-md-12">
        <div id="home" class="header">
            @include('frontend.partials.top-menu')
            @include('frontend.partials.logo-area')
        </div>
    </div>
    <div class="col-md-12">
        <div class="bg-banner">
            <div class="banner-bottom-bg">
                <div class="banner-bg">
                    <!-- banner -->
                    <div class="banner">
                        <div class="banner-grids">
                            @include('frontend.partials.main-menu')
                            <div class="banner-middle">
                                @section('slide')
                                    <div class="strip"></div>
                                    @include('frontend.partials.main-slider')
                                @show
                                {{------------------- CONTENT (banner-bottom-grids) ------------------}}
                                @yield('content')
                                {{------------------- END CONTENT (end banner-bottom-grids) ----------------}}
                                @include('frontend.partials.footer')
                            </div>
                        </div>
                    </div>
                    <!-- //banner -->
                </div>
            </div>
        </div>
        <!-- //bg-banner -->
    </div>
</div>
</body>
</html>