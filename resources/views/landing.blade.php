@extends('template.app')

@section('content')
<!-- Navbar and Logo -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <a href="">
            <img src="{{ asset('onepage-slider/img/logo-putih.png') }}"
                style="max-height: 35px; margin: 12px; margin-top: 8px" alt="">
        </a>
        <a href="">
            <h3 class="logo text-white m-0" style="font-family: 'Roboto Slab', serif; font-size: 18px">TWENTY PICTURE
            </h3>
        </a>
        {{-- <a class="logo" href="{{ route('home') }}"> <img src="{{ asset('onepage-slider/img/twenty-logo.png') }}"
            alt="">
        </a> --}}
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
                    <a class="nav-link" href="{{ route('home') }}" data-scroll-nav="6">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header Slider -->
<header class="header pos-re slider-fade" data-scroll-index="0">
    <div class="owl-carousel owl-theme">
        @if ($banners->count())
        @foreach ($banners as $banner)
        @if (App::environment('heroku'))
        <div class="item bg-img" data-overlay-dark="4" data-background="{{ $banner->image }}">
            @else
            <div class="item bg-img" data-overlay-dark="4" data-background="{{ url(Storage::url($banner->image)) }}">
                @endif
                <div class="container text-center v-middle caption">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('onepage-slider/img/twenty-logo.png') }}"
                        alt="" style="width: 65%">
                    <h4 class="">MAKE DREAMS COME TRUE</h4>
                    <div class="mt-3">
                        <a href="https://www.instagram.com/{{ $contact->instagram }}/" target="_blank"
                            class="btn mr-2 ml-2 mt-2">
                            <span>
                                <i class="fab fa-instagram"></i>&nbsp;{{ $contact->instagram }}
                            </span>
                        </a>
                        <a href="http://wa.me/{{ $contact->whatsapp }}" target="_blank" class="btn mr-2 ml-2 mt-2">
                            <span>
                                <i class="fab fa-whatsapp"></i>&nbsp;+{{ $contact->whatsapp }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <section class="ready banner-padding bg-img" data-overlay-dark="8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container text-center v-middle caption">
                                <img class="img-fluid mx-auto d-block"
                                    src="{{ asset('onepage-slider/img/twenty-logo.png') }}" alt="" style="width: 65%">
                                <h4 class="">MAKE DREAMS COME TRUE</h4>
                                <div class="mt-3">
                                    <a href="https://www.instagram.com/{{ $contact->instagram }}/" target="_blank"
                                        class="btn mr-2 ml-2 mt-2">
                                        <span>
                                            <i class="fab fa-instagram"></i>&nbsp;{{ $contact->instagram }}
                                        </span>
                                    </a>
                                    <a href="http://wa.me/{{ $contact->whatsapp }}" target="_blank"
                                        class="btn mr-2 ml-2 mt-2">
                                        <span>
                                            <i class="fab fa-whatsapp"></i>&nbsp;+{{ $contact->whatsapp }}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @endif

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
                    <h4>Twenty Picture is a company engaged in photography & videography from 2016 until now.</h4>
                </div>
                <div class="title mb-3">
                    <span>History of Twenty Picture</span>
                </div>
                <p>
                    “Twenty Picture” was created by <strong>Keribo</strong> and his playmates in arms. He started his
                    career in the world
                    of photography & videography. The brand name “Keribo Art” was launched in 2016 in
                    Pekalongan with his
                    partner named <strong>Yuki</strong>. In late 2017, he decided to move his business to Tegal, because
                    that was his ambition from the past.
                    <br>With some makeshift camera capital and incomplete property/equipment, he
                    dared to market his work to clients. Until mid-2018, the “Keribo Art” brand became
                    known from several circles. In late 2018, he began working with investors to build its photo and
                    videography business, until it changed its name to “Tickzup Studio” with management and new friends.
                    <br>Until mid-2019, several investors and their themes left “Tickzup Studio”. Even though some of
                    his teams were left behind, <strong>Keribo</strong> continues his business with his new team who are
                    willing to be part of TWENTY PICTURE which has changed its name on February 20<sup>th</sup>, 2020
                    until now.
                </p>
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
                    @if ($services->count())
                    @foreach ($services as $service)
                    <div class="item">
                        <div class="position-re o-hidden img-grayscale item-inner">
                            @if (App::environment('heroku'))
                            <img src="{{ $service->image }}" alt="">
                            @else
                            <img src="{{ url(Storage::url($service->image)) }}" alt="">
                            @endif
                        </div>
                        <div class="con">
                            <h5 class="mb-5">{{ $service->title }}
                            </h5>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <h5>Data is empty yet.</h5>
                    @endif
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
        <hr style="border-top: 2px solid #2b2d42 !important;">
        @foreach ($categories as $category)
        @if ($category->portfolios->count())
        <div class="row">
            <div class="col-12">
                <h2>{{ $category->title }}</h2>
            </div>
        </div>
        <div class="row mb-30">
            @foreach ($category->portfolios as $portfolio)
            <div class="col-md-4 gallery-item">
                <div class="gallery-item-inner">
                    @if (App::environment('heroku'))
                    <a href="{{ $portfolio->image }}" title="{{ $portfolio->title }}" class="img-grayscale img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ $portfolio->image }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                        </div>
                    </a>
                    @else
                    <a href="{{ url(Storage::url($portfolio->image)) }}" title="{{ $portfolio->title }}"
                        class="img-grayscale img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ url(Storage::url($portfolio->image)) }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                        </div>
                    </a>
                    @endif

                </div>
            </div>
            @endforeach
        </div>
        <hr style="border-top: 2px solid #2b2d42 !important;">
        @endif
        @endforeach
        @if ($embed_videos->count())
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-30"> <span>Gallery</span>
                    <h2>Video</h2>
                </div>
            </div>
        </div>
        <div class="row mb-30">
            @foreach ($embed_videos as $embed)
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9 mb-5">
                    <iframe class="embed-responsive-item" src="{{ $embed->embed_url }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            @endforeach
        </div>
        <hr style="border-top: 2px solid #2b2d42 !important;">
        @endif
    </div>
</section>
<!-- Testimonials -->
<section id="testimonials" class="testimonials testimonials-padding bg-img" data-overlay-dark="3"
    data-background="{{ asset('onepage-slider/img/caption.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="testimonial-say text-center">
                    <div class="owl-carousel owl-theme">
                        <div class="testimonial-item text-center">
                            <h5>A few things Twenty Picture believe</h5>
                            <p>Make dreams come true</p>
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
<section id="team" class="team section-padding">
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
                            src="{{ asset('onepage-slider/img/team-original/keribo-founder.jpg') }}" alt=""></div>
                    <div class="info">
                        <h5>Keribo</h5>
                        <h6>Owner, Founder, & Videographer</h6>
                        {{-- <div class="social valign">
                            <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                        class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                <p>info@danphoto.com</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item">
                    <div class="img img-grayscale item-inner"><img
                            src="{{ asset('onepage-slider/img/team-original/bayu tri aji wicaksono-photographer.jpg') }}"
                            alt="">
                    </div>
                    <div class="info">
                        <h5>Bayu Tri Aji Wicaksono</h5>
                        <h6>Photographer</h6>
                        {{-- <div class="social valign">
                            <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                        class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                <p>info@danphoto.com</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item">
                    <div class="img img-grayscale item-inner"><img
                            src="{{ asset('onepage-slider/img/team-original/budi ardiantomo-photographer.jpg') }}"
                            alt="">
                    </div>
                    <div class="info">
                        <h5>Budi Ardiantomo</h5>
                        <h6>Photographer</h6>
                        {{-- <div class="social valign">
                            <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                        class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                <p>info@danphoto.com</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item">
                    <div class="img img-grayscale item-inner"><img
                            src="{{ asset('onepage-slider/img/team-original/hanan-videographer.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h5>Hanan Dwi Wiranata</h5>
                        <h6>Videographer</h6>
                        {{-- <div class="social valign">
                            <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                        class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                <p>info@danphoto.com</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item">
                    <div class="img img-grayscale item-inner"><img
                            src="{{ asset('onepage-slider/img/team-original/marliyas arif-videographer.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h5>Marliyas Arif</h5>
                        <h6>Videographer</h6>
                        {{-- <div class="social valign">
                            <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                        class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                <p>info@danphoto.com</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="item">
                    <div class="img img-grayscale item-inner"><img
                            src="{{ asset('onepage-slider/img/team-original/deni romanov-editor.jpg') }}" alt="">
                    </div>
                    <div class="info">
                        <h5>Deni Romanov</h5>
                        <h6>Editor</h6>
                        {{-- <div class="social valign">
                            <div class="full-width"> <a href="#"><i class="ti-facebook"></i></a> <a href="#"><i
                                        class="ti-twitter"></i></a> <a href="#"><i class="ti-linkedin"></i></a>
                                <p>info@danphoto.com</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
<!-- Pricing -->
<section id="pricing" class="section-padding bg-grey" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-30"> <span>Photography & Videography</span>
                    <h2>Pricing</h2>
                </div>
            </div>
        </div>
        <div class="row mb-30">
            @foreach ($pricelists as $pricelist)
            <div class="col-md-12 gallery-item">
                <div class="gallery-item-inner">
                    @if (App::environment('heroku'))
                    <a href="{{ $pricelist->image }}" title="Pricing Engagement Videograpy & Photography"
                        class="img-grayscale img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ $pricelist->image }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                        </div>
                    </a>
                    @else
                    <a href="{{ url(Storage::url($pricelist->image)) }}"
                        title="Pricing Engagement Videograpy & Photography" class="img-grayscale img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ url(Storage::url($pricelist->image)) }}"
                                    class="img-fluid mx-auto d-block" alt=""> </div>
                        </div>
                    </a>
                    @endif

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<hr class="line-vr-section animate-box" data-animate-effect="fadeInUp">
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
                    details as possible to our <a href="http://wa.me/{{ $contact->whatsapp }}"
                        target="_blank">Contact</a></p>
                <div class="item">
                    <p><b>Whatsapp</b> : <a href="http://wa.me/{{ $contact->whatsapp }}"
                            target="_blank">+{{ $contact->whatsapp }}</a>
                    </p>
                </div>
                <div class="item">
                    <p><b>Address</b> : {{ $contact->address }}</p>
                </div>
                <div class="item">
                    <p><b>Email</b> : {{ $contact->email }}</p>
                </div>
                <div class="item">
                    <p><b>Instagram</b> : <a href="https://www.instagram.com/{{ $contact->instagram }}/"
                            target="_blank">{{ $contact->instagram }}</a></p>
                </div>
                <div class="item">
                    <p><b>Google Map</b> : <a href="{{ $contact->map_url }}" target="_blank">Get Directions</a>
                    </p>
                </div>
            </div>
            <div class="col-md-5 offset-md-2">
                <p><b>SEND A MESSAGE!</b></p>
                <form method="post" class="row" action="{{ route('message.store') }}">
                    @csrf
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name *" required> </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input name="phone" type="text" class="form-control" placeholder="Phone" required> </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                placeholder="Message" required></textarea>
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
@endsection