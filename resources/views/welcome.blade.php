@extends('layouts.home')


@section('navbar')

<!-- nav -->
<div class="rd-navbar-main">
    <!-- RD Navbar Nav-->
    <ul class="rd-navbar-nav">
        <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('/')}}">Home</a>
        </li>

        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/about-us')}}">About us</a>
        </li>
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/branches')}}">Branches</a>
        </li>

        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/products') }}">Products</a>
        </li>
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/contact-us')}}">Contact us</a>
        </li>
    </ul>
</div>

@endsection

@section('content')
<!-- Breadcrumbs -->
<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-2" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
    <div class="swiper-wrapper text-sm-left">
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slide-1-1920x753.jpg')}}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 col-lg-6 offset-lg-1 offset-xxl-0">
                            <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">New Holland TT3 Series: </span></h3>
                            <h5 class="swiper-subtitle" data-caption-animate="fadeInLeft" data-caption-delay="300">Compact, Powerful Performance.</h5><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('/products/agriculture/ag-product-TT3-50')}}" data-caption-animate="fadeInUp" data-caption-delay="300">View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slide-2-1920x753.jpg')}}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 col-md-8 col-xl-6 offset-lg-1 offset-xxl-0">
                            <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">CASE CX210C:</span></h3>
                            <h5 class="swiper-subtitle" data-caption-animate="fadeInRight" data-caption-delay="300">Versatility, Power and Fuel Efficiency </h5>
                            <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('/products/construction/ce-product-CX210C')}}" data-caption-animate="slideInUp" data-caption-delay="0">View more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slide-3-1920x753.jpg')}}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 col-xl-6 offset-lg-1 offset-xxl-0">
                            <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInLeft" data-caption-delay="100">CASE-IH Puma Series:</span></h3>
                            <h5 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="0">Reliable, Durable and Fuel Efficient. They’re Puma.</h5>
                            <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('/products/agriculture/ag-product-PUMA155')}}" data-caption-animate="slideInLeft" data-caption-delay="100">View more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide context-dark" data-slide-bg="{{ asset('images/slide-4-1920x753.jpg')}}">
            <div class="swiper-slide-caption section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 col-xl-6 offset-lg-1 offset-xxl-0">
                            <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInLeft" data-caption-delay="100">CASE-IH Austoft Sugarcane Harvesters:</span></h3>
                            <h5 class="swiper-subtitle" data-caption-animate="fadeInUp" data-caption-delay="0">Efficiency and Productivity.</h5>
                            <div class="button-wrap oh"><a class="button button-lg button-primary button-winona button-shadow-2" href="{{ url('/products/agriculture/ag-product-A8010-and-A8810')}}" data-caption-animate="slideInLeft" data-caption-delay="100">View more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper Pagination-->
    <div class="swiper-pagination" data-bullet-custom="true"></div>
    <!-- Swiper Navigation-->
    <div class="swiper-button-prev">
        <div class="preview">
            <div class="preview__img"></div>
        </div>
        <div class="swiper-button-arrow"></div>
    </div>
    <div class="swiper-button-next">
        <div class="swiper-button-arrow"></div>
        <div class="preview">
            <div class="preview__img"></div>
        </div>
    </div>
</section>

<!-- About Company-->
<section class="section section-md bg-gray-100 text-md-left section-relative">
    <div class="container">
        <div class="row row-40 row-lg-50 row-xl-60">
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                        <div class="unit-body text-center">
                            <a href="https://www.newholland.com/"><img class="img-center" src="{{ asset('images/newholland-logo.png')}}" alt="" width="300" height="205" /></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                        <div class="unit-body">
                            <a href="https://www.caseih.com"><img class="img-center" src="{{ asset('images/caseih-logo.png')}}" alt="" width="300" height="205" /></a>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-4">
                <article class="box-icon-classic">
                    <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                        <div class="unit-body">
                            <a href="https://www.casece.com/"><img class="img-center" src="{{ asset('images/case-logo.png')}}" alt="" width="300" height="205" /></a>
                        </div>
                    </div>
                </article>
            </div>


        </div>
    </div>
</section>
<!-- Section CTA-->
<section class="section parallax-container" data-parallax-img="{{ asset('images/bg-cta.jpg')}}">
    <div class="parallax-content section-lg context-dark text-md-left">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-sm-7 col-md-6 col-lg-5">
                    <div class="cta-classic">
                        <h4 class="cta-classic-title wow fadeInLeft">PROVIDING SOLUTIONS AND DELIVERING EXECELLENCE SINCE 2006</h4>
                        <!--                  <p class="cta-classic-text wow fadeInRight" data-wow-delay=".1s">We provide efficient civil engineering solutions.</p>-->
                        <a class="button button-lg button-primary button-winona wow fadeInUp" href="{{ url('/about-us')}}" data-wow-delay=".2s">About us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Products-->
<section class="section section-xl bg-default text-center">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Our Products</span></h3>
    </div>
    <div class="container-fluid container-inset-0">
        <div class="row row-30 row-desktop-8 gutters-8 hoverdir" data-lightgallery="group">
            <div class="col-sm-6 col-lg-6 col-xxl-6">
                <div class="oh-desktop">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern wow slideInUp hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure" href="{{ url('/products/agriculture')}}">
                            <img src="{{ asset('images/grid-gallery-TT350.jpg')}}" alt="" width="948" height="710" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="{{ url('/products/agriculture')}}">Agriculture<br> Equipment</a></h5>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-xxl-6">
                <div class="oh-desktop">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern wow slideInDown hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure" href="products/construction"><img src="{{ asset('images/grid-gallery-CX210.jpg')}}" alt="" width="948" height="710" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="{{ url('/products/construction')}}">Construction<br>Equipment</a></h5>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Our Clients-->
<section class="section section-xl bg-gray-100 text-md-left">
    <div class="container">
        <div class="row row-60 justify-content-center flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="offset-left-xl-70">
                    <h3 class="oh-desktop"><span class="d-inline-block wow slideInLeft">Our clients</span></h3>
                    <div class="slick-quote">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-2" data-for="#child-carousel-2" data-slide-effect="true">
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">My favorite about CASE is matibay, malakas, very powerful. Napaka-ganda ng performance niya.</span></h5>
                                    <h5 class="quote-modern-author">JJ Beredo</h5>
                                    <p class="quote-modern-status">BCON</p>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">It’s a well-known brand, it’s well-supported, and it’s a quality product and that’s important when you’re running any business.</span></h5>
                                    <h5 class="quote-modern-author">Paul Eric Coveny</h5>
                                    <p class="quote-modern-status">Biopower</p>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">CASE Compactor is very eco-friendly and with a very less smoke emission and lesser pollution. When it comes to worker’s productivity, the machine can be easily operated, thus making the job even faster.</span></h5>
                                    <h5 class="quote-modern-author">Architect Heinrich S. Ty</h5>
                                    <p class="quote-modern-status">Grandblocks</p>
                                </article>
                            </div>
                            <div class="item">
                                <!-- Quote Modern-->
                                <article class="quote-modern">
                                    <h5 class="quote-modern-text"><span class="q">
                                            <p>I am very happy!</p>
                                            <p>If you noticed our units here, they are actually old units, but maintained to look and perform like new. I’m satisfied.</p>
                                            <p>And I’m sure that in the next three to four years, I’ll have good machines.</p>
                                        </span></h5>
                                    <h5 class="quote-modern-author">Mike Hinojales</h5>
                                    <p class="quote-modern-status">Buen Ano Agro Industrial Corporation</p>
                                </article>
                            </div>
                        </div>
                        <div class="slick-slider child-carousel" id="child-carousel-2" data-arrows="true" data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                            <div class="item"><img class="img-circle" src="{{ asset('images/team-5-83x83.jpg')}}" alt="" width="83" height="83" />
                            </div>
                            <div class="item"><img class="img-circle" src="{{ asset('images/team-6-83x83.jpg')}}" alt="" width="83" height="83" />
                            </div>
                            <div class="item"><img class="img-circle" src="{{ asset('images/team-7-83x83.jpg')}}" alt="" width="83" height="83" />
                            </div>
                            <div class="item"><img class="img-circle" src="{{ asset('images/team-8-83x83.jpg')}}" alt="" width="83" height="83" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <!-- Clients Classic-->
                <div class="clients-classic-wrap">
                    <div class="row no-gutters">
                        <div class="col-sm-6 wow fadeInLeft">
                            <div class="clients-classic"><a class="clients-classic-figure" href="https://youtu.be/OxDlyAYnl-w" target="_blank"><img src="{{ asset('images/clients-1-200x90.png')}}" alt="" width="200" height="135" /></a></div>
                        </div>
                        <div class="col-sm-6 wow fadeInRight">
                            <div class="clients-classic"><a class="clients-classic-figure" href="https://youtu.be/21HNGt3dcBQ" target="_blank"><img src="{{ asset('images/clients-2-200x90.png')}}" alt="" width="200" height="135" /></a></div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-sm-6 wow fadeInLeft">
                            <div class="clients-classic"><a class="clients-classic-figure" href="https://youtu.be/KI-vusSGoLY" target="_blank"><img src="{{ asset('images/clients-3-200x90.png')}}" alt="" width="200" height="135" /></a></div>
                        </div>
                        <div class="col-sm-6 wow fadeInRight">
                            <div class="clients-classic"><a class="clients-classic-figure" href="https://youtu.be/DIWReM5IjTU" target="_blank"><img src="{{ asset('images/clients-4-200x90.png')}}" alt="" width="200" height="135" /></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection