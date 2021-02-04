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
            <a class="logo" href="{{ route('home') }}"> <img src="{{ asset('onepage-slider/img/logo-light.png') }}"
                    alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('home') }}" data-scroll-nav="0">Home</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="1">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="2">Services</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="3">Portfolio</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="4">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="5">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="6">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header Slider -->
    <header class="header pos-re slider-fade" data-scroll-index="0">
        <div class="owl-carousel owl-theme">
            <div class="item bg-img" data-overlay-dark="4"
                data-background="{{ asset('onepage-slider/img/slider1.jpg') }}">
                <div class="container text-center v-middle caption">
                    <h4>Shooting</h4>
                    <h1>Portrait Photography</h1>
                    <a href="#" class="btn"><span>Discover</span></a>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="3"
                data-background="{{ asset('onepage-slider/img/slider3.jpg') }}">
                <div class="container text-center v-middle caption">
                    <h4>Shooting</h4>
                    <h1>Wedding Photography</h1>
                    <a href="#" class="btn"><span>Discover</span></a>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="4"
                data-background="{{ asset('onepage-slider/img/slider2.jpg') }}">
                <div class="container text-center v-middle caption">
                    <h4>Shooting</h4>
                    <h1>Travel Photography</h1>
                    <a href="#" class="btn"><span>Discover</span></a>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
    <section id="about" class="about clear section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="title">
                        <span>About Us</span>
                        <h2>Twenty Picture</h2>
                    </div>
                    <p>Quisque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam et
                        odio sedan arami accumsan gravida. Mauris in rhoncus mauris. Duis a massa ac ex malesuada
                        aliquet. Mauris odio in devam company the design dolor leo facilisis ligula eget malesuada metus
                        ut nunc. Integer posuere vel sem et tempus.</p>
                    <p>Aliquam erat volutpat. Curabitur tortor mauris, iaculis vel pulvinar at, convallis id mauris.
                        Praesent feugiat dui sit amet ullamcorper blandit ligula ligula volutpat ante sed rhoncus nunc
                        ante non ex. Donec porta elementum estid suscipit nisl bibendum vitae. Sedet nisi lacinia the
                        adam drana diam luctus egestas.</p>
                </div>
            </div>
        </div>
    </section>
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Services -->
    <section id="services" class="services section-padding bg-grey" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30">
                        <span>What We Do</span>
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="owl-carousel owl-theme text-center">
                        <div class="item">
                            <div class="position-re o-hidden img-grayscale item-inner"> <img
                                    src="{{ asset('onepage-slider/img/services/1.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('service') }}">Wedding</a>
                                </span>
                                <h5><a href="{{ route('service') }}">Photography</a></h5> <a
                                    href="{{ route('service') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden img-grayscale item-inner"> <img
                                    src="{{ asset('onepage-slider/img/services/2.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('service') }}">Portrait</a>
                                </span>
                                <h5><a href="{{ route('service') }}">Photography</a></h5> <a
                                    href="{{ route('service') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden img-grayscale item-inner"> <img
                                    src="{{ asset('onepage-slider/img/services/3.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('service') }}">Travel</a>
                                </span>
                                <h5><a href="{{ route('service') }}">Photography</a></h5> <a
                                    href="{{ route('service') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden img-grayscale item-inner"> <img
                                    src="{{ asset('onepage-slider/img/services/4.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('service') }}">Still Life</a>
                                </span>
                                <h5><a href="{{ route('service') }}">Photography</a></h5> <a
                                    href="{{ route('service') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden img-grayscale item-inner"> <img
                                    src="{{ asset('onepage-slider/img/services/5.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('service') }}">Fashion</a>
                                </span>
                                <h5><a href="{{ route('service') }}">Photography</a></h5> <a
                                    href="{{ route('service') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden img-grayscale item-inner"> <img
                                    src="{{ asset('onepage-slider/img/services/6.jpg') }}" alt=""> </div>
                            <div class="con"> <span class="category">
                                    <a href="{{ route('service') }}">Sport</a>
                                </span>
                                <h5><a href="{{ route('service') }}">Photography</a></h5> <a
                                    href="{{ route('service') }}"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Portfolio -->
    <section id="portfolio" class="section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Gallery</span>
                        <h2>Portfolio</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-30">
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/01.jpg') }}" title="Model Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/01.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/02.jpg') }}" title="Wedding Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/02.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/03.jpg') }}" title="Portrait Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/03.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/04.jpg') }}" title="Travel Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/04.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/05.jpg') }}" title="Family Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/05.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/06.jpg') }}" title="Sport Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/06.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/07.jpg') }}" title="Portrait Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/07.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/08.jpg') }}" title="Product Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/08.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 gallery-item">
                    <div class="gallery-item-inner">
                        <a href="{{ asset('onepage-slider/img/gallery/09.jpg') }}" title="Still Life Photography"
                            class="img-grayscale img-zoom">
                            <div class="gallery-box">
                                <div class="gallery-img"> <img src="{{ asset('onepage-slider/img/gallery/09.jpg') }}"
                                        class="img-fluid mx-auto d-block" alt=""> </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials testimonials-padding bg-img" data-overlay-dark="3"
        data-background="{{ asset('onepage-slider/img/banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonial-say text-center">
                        <div class="owl-carousel owl-theme">
                            <div class="testimonial-item text-center">
                                <h5>A few things Twenty Picture believe</h5>
                                <p>Make our dreams come true</p>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5>A few things Twenty Picture believe</h5>
                                <p>I sure do love beautiful details, but eventually it's all about enjoying your day the
                                    fullest with your loved ones.</p>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5>A few things Twenty Picture believe</h5>
                                <p>Life's sweetest moments are the ones spent with those you love most, whilst sipping a
                                    glass rosé of course.</p>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5>A few things Twenty Picture believe</h5>
                                <p>Make your day personal and let it reflect who you are as a couple. Quisque ornare
                                    erat et ex consectetur pellentesque.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team -->
    <section id="team" class="team section-padding bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Photographer</span>
                        <h2>Awesome Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 owl-carousel owl-theme">
                    <div class="item">
                        <div class="img img-grayscale item-inner"><img
                                src="{{ asset('onepage-slider/img/team/2.jpg') }}" alt=""></div>
                        <div class="info">
                            <h5>Kristin Bowles</h5>
                            <h6>Wedding Photographer</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>info@danphoto.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img img-grayscale item-inner"><img
                                src="{{ asset('onepage-slider/img/team/1.jpg') }}" alt=""></div>
                        <div class="info">
                            <h5>Nelsan Compton</h5>
                            <h6>Model Photographer</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>info@danphoto.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img img-grayscale item-inner"><img
                                src="{{ asset('onepage-slider/img/team/3.jpg') }}" alt=""></div>
                        <div class="info">
                            <h5>Micheal Preston</h5>
                            <h6>Event Photographer</h6>
                            <div class="social valign">
                                <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                            class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                    <p>info@danphoto.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <!-- Blog -->
    <section id="blog" class="blog section-padding bg-grey" data-scroll-index="5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title mb-30"> <span>Read</span>
                        <h2>Latest News</h2>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="title mt-30 mb-30">
                        <a href="blog.html"><span><i class="ti-layout-line-solid"></i> All Post</span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="cover">
                        <div class="cover-inner item bg-img"
                            data-background="{{ asset('onepage-slider/img/services/3.jpg') }}">
                            <div class="content">
                                <div class="info">
                                    <a href="#"> <span><i class="ti-time" aria-hidden="true"></i>16 July 2020</span>
                                        <span><i class="ti-comment-alt" aria-hidden="true"></i>0 Comments</span> </a>
                                </div>
                                <a href="post.html">
                                    <h5>Black & White Shots</h5>
                                </a>
                                <p>Quisque luctus tincidunt enim dapibusen pharetra neue ultricies at. Morbi dapibus
                                    mauris id selerisque placerat nula massa lacinia orci in facilisis nulla.</p> <a
                                    href="post.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cover">
                        <div class="cover-inner item bg-img"
                            data-background="{{ asset('onepage-slider/img/services/4.jpg') }}">
                            <div class="content">
                                <div class="info">
                                    <a href="#"> <span><i class="ti-time" aria-hidden="true"></i>20 July 2020</span>
                                        <span><i class="ti-comment-alt" aria-hidden="true"></i>0 Comments</span> </a>
                                </div>
                                <a href="post.html">
                                    <h5>Product Shots</h5>
                                </a>
                                <p>Quisque luctus tincidunt enim dapibusen pharetra neue ultricies at. Morbi dapibus
                                    mauris id selerisque placerat nula massa lacinia orci in facilisis nulla.</p> <a
                                    href="post.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cover">
                        <div class="cover-inner item bg-img"
                            data-background="{{ asset('onepage-slider/img/services/1.jpg') }}">
                            <div class="content">
                                <div class="info">
                                    <a href="#"> <span><i class="ti-time" aria-hidden="true"></i>23 July 2020</span>
                                        <span><i class="ti-comment-alt" aria-hidden="true"></i>0 Comments</span> </a>
                                </div>
                                <a href="post.html">
                                    <h5>Lovely Wedding</h5>
                                </a>
                                <p>Quisque luctus tincidunt enim dapibusen pharetra neue ultricies at. Morbi dapibus
                                    mauris id selerisque placerat nula massa lacinia orci in facilisis nulla.</p> <a
                                    href="post.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
    <!-- Contact -->
    <section id="contact" class="contact section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title"> <span>Location</span>
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-5 info mb-30">
                    <p>I'd love to hear from you! Please fill out the form below or send a note directly with as much
                        details as possible to our <a href="http://wa.me/6282329919955" target="_blank">Contact</a></p>
                    <div class="item">
                        <p><b>Whatsapp</b> : <a href="http://wa.me/6282329919955" target="_blank">+62 823-2991-9955</a>
                        </p>
                    </div>
                    <div class="item">
                        <p><b>Address</b> : JL Sultan Hasanudin, RT 03 RW 02, Cabawan, Margadana, Cabawan, Tegal, Kota
                            Tegal, Jawa Tengah 52147</p>
                    </div>
                    <div class="item">
                        <p><b>Email</b> : twntypicture@gmail.com</p>
                    </div>
                    <div class="item">
                        <p><b>Instagram</b> : <a href="https://www.instagram.com/twenty.picture/"
                                target="_blank">twenty.picture</a></p>
                    </div>
                    <div class="item">
                        <p><b>Google Map</b> : <a
                                href="https://www.google.com/maps/place/6%C2%B052'52.3%22S+109%C2%B005'29.3%22E/@-6.8812024,109.0892743,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.8812024!4d109.091463?hl=en"
                                target="_blank">Get Directions</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-5 offset-md-2">
                    <p><b>SEND A MESSAGE!</b></p>
                    <form method="post" class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name *" required> </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email / Phone"> </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button class="btn fl-btn" type="submit">Submit!</button>
                            </div>
                        </div>
                    </form>
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