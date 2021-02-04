@extends('template.app')

@section('content')
<!-- Navbar and Logo -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <img src="{{ asset('onepage-slider/img/logo-warna.png') }}"
            style="max-height: 35px; margin: 12px; margin-top: 7px" alt="">
        <a class="logo" href="{{ route('home') }}"> <img src="{{ asset('onepage-slider/img/twenty-logo.png') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a> </li>
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
                            <a href="{{  asset('onepage-slider/img/services/10.jpg') }}" title=""
                                class="img-grayscale img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img
                                            src="{{  asset('onepage-slider/img/services/10.jpg') }}"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-item-inner">
                            <a href="{{  asset('onepage-slider/img/services/10.jpg') }}" title=""
                                class="img-grayscale img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img
                                            src="{{  asset('onepage-slider/img/services/11.jpg') }}"
                                            class="img-fluid mx-auto d-block" alt=""> </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="gallery-item-inner">
                            <a href="{{  asset('onepage-slider/img/services/12.jpg') }}" title=""
                                class="img-grayscale img-zoom">
                                <div class="gallery-box">
                                    <div class="gallery-img"> <img
                                            src="{{  asset('onepage-slider/img/services/12.jpg') }}"
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
                            <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price"
                                    style="color: #ffffff">300</span>
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
                            <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price"
                                    style="color: #ffffff">450</span>
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
                            <li class="pricing-prices"> <sup class="pricing-dolar">$</sup> <span class="pricing-price"
                                    style="color: #ffffff">750</span>
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
@endsection