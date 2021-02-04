<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twenty Picture</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&amp;family=Pathway+Gothic+One&amp;family=Crimson+Text&family=Source+Sans+Pro:ital,wght@0,400;1,300&amp;family=Yanone+Kaffeesatz&amp;display=swap"
        rel="stylesheet">
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Source+Sans+Pro:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet"> --}}

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('onepage-slider/img/logo-putih.png') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('onepage-slider/css/style.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-144098545-1');
    </script>
</head>

<body>
    <!-- Preloader -->
    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>
    @yield('content')
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="brand"> <img src="{{ asset('onepage-slider/img/twenty-logo.png') }}" class="logo"
                            alt="">
                        <p>
                            <small>COPYRIGHT {{ Carbon\Carbon::now()->format('Y') }}</small>
                            <br><small>TWENTY PICTURE</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <p><b>Get in touch</b>twntypicture@gmail.com
                        <br><a href="http://wa.me/6282329919955" target="_blank">+62 823-2991-9955</a></p>
                </div>
                <div class="col-md-3">
                    <p><b>Location</b>JL Sultan Hasanudin, RT 03 RW 02, Cabawan, Margadana, Cabawan,
                        <br>Tegal, Kota Tegal, Jawa Tengah 52147</p>
                </div>
                <div class="col-md-3">
                    <p class="mb-0"><b>FOLLOW US</b></p>
                    <ul class="footer-social-link">
                        <li><a href="index.html#"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/twenty.picture/" target="_blank"><i
                                    class="ti-instagram"></i></a></li>
                        <li><a href="index.html#"><i class="ti-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="{{ asset('onepage-slider/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/bootstrap.min.j') }}s"></script>
    <script src="{{ asset('onepage-slider/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('onepage-slider/js/main.js') }}"></script>
</body>

</html>