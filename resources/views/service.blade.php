<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twenty Picture</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&amp;family=Pathway+Gothic+One&amp;family=Crimson+Text&family=Source+Sans+Pro:ital,wght@0,400;1,300&amp;display=swap"
        rel="stylesheet">
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Source+Sans+Pro:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet"> --}}

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('onepage-slider/img/favicon.png') }}">
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
    <!-- Navbar and Logo -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.html"> <img src="{{ asset('onepage-slider/img/logo-light.png') }}" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"> <a class="nav-link active" href="#" data-scroll-nav="0">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="1">About</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="2">Services</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="3">Portfolio</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="4">Pricing</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="5">Blog</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#" data-scroll-nav="6">Contact</a> </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Services Title -->
    <section class="ready banner-padding bg-img" data-overlay-dark="8"
        data-background="{{ asset('onepage-slider/img/services-banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-left">
                        <div class="title animate-box" data-animate-effect="fadeInUp">
                            <span><a href="index.html#services">Services</a></span>
                            <h2>Example Page</h2>
                            <hr class="line line-hr-secondary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Services Page -->
    <section class="services-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 gallery-item">
                    <div class="owl-carousel owl-theme text-center">
                        <div class="item">
                            <div class="gallery-item-inner">
                                <a href="{{  asset('img/services/10.jpg') }}" title="" class="img-grayscale img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{  asset('img/services/10.jpg') }}"
                                                class="img-fluid mx-auto d-block" alt=""> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item-inner">
                                <a href="{{  asset('img/services/10.jpg') }}" title="" class="img-grayscale img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{  asset('img/services/11.jpg') }}"
                                                class="img-fluid mx-auto d-block" alt=""> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-item-inner">
                                <a href="{{  asset('img/services/12.jpg') }}" title="" class="img-grayscale img-zoom">
                                    <div class="gallery-box">
                                        <div class="gallery-img"> <img src="{{  asset('img/services/12.jpg') }}"
                                                class="img-fluid mx-auto d-block" alt=""> </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30">
                        <span>Portrait Services</span>
                        <h2>Portrait Photography</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Quisque volutpat non nisl idele tincidunt praesent at eros vitae the pulvinar ornare. Nunc
                        eleifend interdum velit, ac accumsan dui fermentum et. In imperdiet urna sed efficitur euismod.
                        Vestibulum ullamcorper purus arcu, vel pretium nibh mattis vel. Vestibulum ac diam purus. Proin
                        bibendum risus ac ligula pharetra gravida. Quisque vehicula lacus nec justo commodo efficitur.
                        Curabitur id sapien sit amet sem ornare bibendum vitae eget erat.</p>
                    <p>Vusce vestibulum dolor quis egestas sodales. Integer posuere nisi quam, nec ultricies turpis
                        tincidunt efficitur. Duis vitae pellentesque velit. Suspendisse venenatis vehicula justo, id
                        facilisis elit convallis sed. Quisque porta mi eget turpis posuere bibendum. Vivamus molestie
                        faucibus pulvinar ultrices.</p>
                    <ul>
                        <li>Professional Portraits</li>
                        <li> Personal Portrait</li>
                        <li> Family Portrait</li>
                        <li> Editorial Portrait</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Pricing -->
    <section id="pricing" class="section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Shooting</span>
                        <h2>Pricing Tables</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="price-box">
                        <div class="price-box-inner img-grayscale"
                            style="background-image: url({{ asset('onepage-slider/img/price/1.jpg') }})">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title" style="color: #ffffff">Standart</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span
                                        class="pricing-price" style="color: #ffffff">300</span>
                                </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>3 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>50 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                            <p><a href="#" class="btn mb-30">View More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box">
                        <div class="price-box-inner"
                            style="background-image: url({{ asset('onepage-slider/img/price/2.jpg') }})">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title" style="color: #ffffff">Premium</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span
                                        class="pricing-price" style="color: #ffffff">450</span>
                                </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>6 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>100 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                            <p><a href="#" class="btn mb-30">View More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-box">
                        <div class="price-box-inner"
                            style="background-image: url({{ asset('onepage-slider/img/price/3.jpg') }})">
                            <ul>
                                <li class="pricing-title">
                                    <h3 class="pricing-pt-title" style="color: #ffffff">Platinum</h3>
                                </li>
                                <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span
                                        class="pricing-price" style="color: #ffffff">750</span>
                                </li>
                                <li class="pricing-content">
                                    <ul>
                                        <li>12 Hours Session</li>
                                        <li>Photo Editing</li>
                                        <li>250 Digital Images</li>
                                        <li>Online Gallery</li>
                                    </ul>
                                </li>
                            </ul>
                            <p><a href="#" class="btn mb-30">View More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="brand"> <img src="{{ asset('onepage-slider/img/logo-dark.png') }}" class="logo" alt="">
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
                        <li><a href="https://www.instagram.com/twenty.picture/"><i class="ti-instagram"></i></a></li>
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