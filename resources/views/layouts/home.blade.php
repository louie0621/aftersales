<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Filholland Corporation</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- favicon -->
    <link rel="icon" href="{{ asset('/images/favicon.ico')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/php5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="wrapper-circle">
            <div class="pen">
                <div class="line-circle">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                <div class="line-circle">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>

                <div class="line-circle">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="150px" data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="150px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-inner-outer">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-aside-inner">
                                <ul class="rd-navbar-contacts-2">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span></span></div>
                                            <div class="unit-body"><a class="phone">Taguig: +63 917 634 9476 &nbsp;&nbsp;|&nbsp;&nbsp; Bacolod: +63 917 633 1734 &nbsp;&nbsp;|&nbsp;&nbsp; Cagayan de Oro: +63 917 633 1720 &nbsp;&nbsp;|&nbsp;&nbsp; Davao: +63 917 716 2122</a></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-share-2">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/filhollandcorporation/" target="_blank"></a></li>
                                    <li><a class="icon mdi fa-youtube-square" href="https://www.youtube.com/channel/UCD4aBoFHOy4dUAXERC7caxg?" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="{{ url('/')}}"><img class="brand-logo-dark" src="{{ asset('images/logo-default-219x39.png') }}" alt="" width="219" height="39" /></a></div>
                            </div>
                            <!-- nav -->
                            @yield('navbar')

                            <div class="rd-navbar-right rd-navbar-nav-wrap">
                                <div class="rd-navbar-aside d-xl-none">
                                    <div class="rd-navbar-aside-inner">
                                        <ul class="rd-navbar-contacts-2">
                                            <li>
                                                <div class="unit unit-spacing-xs">
                                                    <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                                    <div class="unit-body"><a class="phone black-font">Taguig: <br>+63 917 634 9476<br><br>Bacolod:<br> +63 917 633 1734<br><br>Cagayan de Oro:<br> +63 917 633 1720<br><br>Davao:<br> +63 917 716 2122</a></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-share-2">
                                            <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/filhollandcorporation/" target="_blank"></a></li>
                                            <li><a class="icon mdi fa-youtube-square" href="https://www.youtube.com/channel/UCD4aBoFHOy4dUAXERC7caxg?" target="_blank"></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')

        <!-- Page Footer-->
        <footer class="section footer-classic context-dark footer-classic-2">
            <div class="footer-classic-content">
                <div class="container">
                    <div class="row row-50 row-lg-0 no-gutters">
                        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="0s">
                            <div class="footer-classic-header">
                                <h6 class="footer-classic-title">Quick links</h6>
                            </div>
                            <div class="footer-classic-body">
                                <ul class="footer-classic-list d-inline-block d-sm-block">
                                    <li><a href="{{ url('/about-us')}}">About Us</a></li>
                                    <!--
                    <li><a href="#">FAQ</a></li>
                    <li><a href="grid-blog.php">Latest News</a></li>
-->
                                    <li><a href="{{ url('/branches')}}">Branches</a></li>
                                    <li><a href="{{ url('/products') }}">Products</a></li>
                                    <li><a href="{{ url('/contact-us')}}">Contact Us</a></li>
                                </ul>
                                <ul class="list-inline footer-social-list">
                                    <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/filhollandcorporation/" target="_blank"></a>
                                    </li>
                                    <li><a class="icon mdi fa-youtube-square" href="https://www.youtube.com/channel/UCD4aBoFHOy4dUAXERC7caxg?" target="_blank"></a>
                                    </li>
                                    <!--
                    <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                            <div class="footer-classic-header">
                                <div class="box-width-230">
                                    <h6 class="footer-classic-title">Get in touch</h6>
                                </div>
                            </div>
                            <div class="footer-classic-body">
                                <div class="box-width-230">
                                    <div class="footer-classic-contacts">
                                        <div class="footer-classic-contacts-item">
                                            <div class="unit unit-spacing-sm align-items-center">
                                                <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                                                <div class="unit-body"><a class="phone" href="tel:#">+63 917 634 9476</a></div>
                                            </div>
                                        </div>
                                        <div class="footer-classic-contacts-item">
                                            <div class="unit unit-spacing-sm align-items-center">
                                                <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                                                <div class="unit-body"><a class="mail" href="mailto:#">info@filholland.com</a></div>
                                            </div>
                                        </div>
                                    </div><a class="button button-sm button-primary button-winona" href="{{ url('/contact-us')}}">Request a quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 position-static">
                            <div class="footer-classic-gmap">
                                <iframe class="google-map-container" data-center="26 Bagong Calzada, Taguig, 1638 Metro Manila, Philippines" data-zoom="5" data-icon="{{ asset('images/gmap_marker.png')}}" data-icon-active="{{ asset('images/gmap_marker_active.png')}}" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.14156369839!2d121.06850331483953!3d14.533893989845048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8a25ae3cc79%3A0x8c75f42750f24448!2sFilholland%20Corporation!5e0!3m2!1sen!2shk!4v1593629730515!5m2!1sen!2shk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                <div class="google-map"></div>
                                <ul class="google-map-markers">
                                    <li data-location="26 Bagong Calzada, Taguig, 1638 Metro Manila, Philippines" data-description="26 Bagong Calzada, Taguig, 1638 Metro Manila, Philippines"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="footer-classic-panel">
        <div class="container">
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Filholland Corporation</span></p>
        </div>
    </div>
    </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
        $(function() {
            $('#newsletterReg').submit(function(event) {
                event.preventDefault();
                var email = $('#subscribe-form-0-email').val();
                if (email != "") {
                    $.ajax({
                        url: "newsLetter.php",
                        method: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(result) {
                            $('#subscribe-form-0-email').val('');
                            Swal.fire({
                                icon: 'success',
                                title: 'Success...',
                                text: 'Message successfully registered.',
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill up all required fields.',
                    });
                }
            });
        });
    </script>
</body>

</html>