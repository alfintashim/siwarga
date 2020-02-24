<!DOCTYPE html>
<html>
    <head>
        @yield('title')
        <meta name="description" content="Sistem Informasi Data Warga RT 004/RW 011 Kelurahan Akcaya">
        <meta name="author" content="TI Untan 2014">
        <meta name="keywords" content="sistem, informasi, data, warga, kelurahan, akcaya, pontianak, rt, rw">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}"/><!-- bootstrap grid -->
        <link rel='stylesheet' href='{{ asset('frontend/owl-carousel/owl.carousel.css')}}'/><!-- Client carousel -->
        <link rel="stylesheet" href="{{ asset('frontend/masterslider/style/masterslider.css')}}" /><!-- Master slider css -->
        <link rel="stylesheet" href="{{ asset('frontend/masterslider/skins/default/style.css')}}" /><!-- Master slider default skin -->
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}"/><!-- template styles -->        
        <link rel="stylesheet" href="{{ asset('frontend/css/color-default.css')}}"/><!-- template main color -->
        <link rel="stylesheet" href="{{ asset('frontend/css/retina.css')}}"/><!-- retina ready styles -->
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}"/><!-- responsive styles -->

        <!-- Google Web fonts -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

        <!-- Font icons -->
        <link rel="stylesheet" href="{{ asset('frontend/icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css')}}"/><!-- Fontawesome icons css -->
    </head>

    <body>
        <div class="header-wrapper header-transparent">
            <!-- .header.header-style01 start -->
            <header id="header"  class="header-style01">
                <!-- .container start -->
                <div class="container">
                    <!-- .main-nav start -->
                    <div class="main-nav">
                        <!-- .row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="navbar navbar-default nav-left" role="navigation">

                                    <!-- .navbar-header start -->
                                    <div class="navbar-header">
                                        <div class="logo">
                                            <a href="{{ URL::to('/')}}">
                                                <img src="{{ asset('frontend/img/logo.png')}}"/>
                                            </a>
                                        </div><!-- .logo end -->
                                    </div><!-- .navbar-header start -->

                                    @yield('navbar')

                                </nav><!-- .navbar.navbar-default end -->
                            </div><!-- .col-md-12 end -->
                        </div><!-- .row end -->
                    </div><!-- .main-nav end -->
                </div><!-- .container end -->
            </header><!-- .header.header-style01 -->
        </div><!-- .header-wrapper.header-transparent end -->

        @yield('slide')

        @yield('pagetitle')

        @yield('content')

        @yield('galeri')

        @include('layouts.include.footer')

        <script src="{{ asset('frontend/js/jquery-2.1.4.min.js')}}"></script><!-- jQuery library -->
        <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script><!-- .bootstrap script -->
        <script src="{{ asset('frontend/js/jquery.srcipts.min.js')}}"></script><!-- modernizr, retina, stellar for parallax -->  
        <script src="{{ asset('frontend/owl-carousel/owl.carousel.min.js')}}"></script><!-- Carousels script -->
        <script src="{{ asset('frontend/masterslider/masterslider.min.js')}}"></script><!-- Master slider main js -->
        <script src="{{ asset('frontend/js/jquery.dlmenu.min.js')}}"></script><!-- for responsive menu -->
        <script src="{{ asset('frontend/js/include.js')}}"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                // MASTER SLIDER START
                var slider = new MasterSlider();
                slider.setup('masterslider', {
                    width: 1140, // slider standard width
                    height: 854, // slider standard height
                    space: 0,
                    speed: 50,
                    layout: "fullwidth",
                    centerControls: false,
                    loop: true,
                    autoplay: true
                            // more slider options goes here...
                            // check slider options section in documentation for more options.
                });
                // adds Arrows navigation control to the slider.
                slider.control('arrows');

                // CLIENTS CAROUSEL START
                $('#client-carousel').owlCarousel({
                    items: 6,
                    loop: true,
                    margin: 30,
                    responsiveClass: true,
                    mouseDrag: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        600: {
                            items: 3,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true
                        },
                        1000: {
                            items: 6,
                            nav: true,
                            loop: true,
                            autoplay: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            responsiveClass: true,
                            mouseDrag: true
                        }
                    }
                });
            });
            /* ]]> */
        </script>
    </body>
</html>
