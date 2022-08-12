@extends('layouts.home')

@section('navbar')
<!-- nav -->
<div class="rd-navbar-main">
    <!-- RD Navbar Nav-->
    <ul class="rd-navbar-nav">
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/')}}">Home</a>
        </li>

        <li class="rd-nav-item "><a class="rd-nav-link" href="{{ url('/about-us')}}">About us</a>
        </li>
        <li class="rd-nav-item "><a class="rd-nav-link" href="{{ url('/branches')}}">Branches</a>
        </li>

        <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('/products') }}">Products</a>
        </li>
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/contact-us')}}">Contact us</a>
        </li>
    </ul>
</div>
@endsection

@section('content')


<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Austoft 8010 and 8810 Sugarcane Harvesters</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">Austoft 8010 and 8810 Sugarcane Harvesters</li>
        </ul>
    </div>
</section>
<!-- Project Page-->
<section class="section section-lg bg-default text-md-left">
    <div class="container">
        <div class="row flex-lg-row-reverse">
            <div class="col-lg-6 col-xl-7">
                <div class="slick-project">
                    <!-- Slick Carousel-->
                    <div class="slick-slider carousel-parent" data-arrows="true" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-7" data-for="#child-carousel-7" data-slide-effect="true">
                        <div class="item"><img src="{{ asset('images/product-a8010-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-5.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-6.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-7.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A8010 and A8810</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-a8010-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-5.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-6.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a8010-7.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                    <!--
                    <div class="iframe-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MZ42GwHaIbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
-->
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4 class="margin-six">Austoft 8010 and 8810 Sugarcane Harvesters</h4>
                    <p>With its pioneering spirit, Case IH has set a new benchmark in delivering its latest Austoft sugarcane harvesters, focussing on harvest quality and return on investment</p>
                    <p>All models use the state-of-the-art AFS® Pro 700 display for machine functions and guidance control. Improving productivity with advanced technology Easy to use, AFS® Pro 700+ comes with features to increase productivity through ease of operation and less operator fatigue.</p>
                    <ul class="list-marked-2 list-category-2">
                        <li>Anti-drift</li>
                        <li>AFS® AccuTurn</li>
                        <li>eView™ – operational cameras</li>
                        <li>Adjustable elevator chain drive speed</li>
                        <li>Autopilot</li>
                    </ul>
                    <br>
                    <em>*Specification varies with the tractor application.</em>
                    <!--
                <div class="group-sm group-middle"><span class="project-page-social-title">Share</span>
                  <div>
                    <ul class="list-inline project-page-social-list">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  </div>
--> 
                    <a class="button button-lg button-primary button-winona" href="{{ asset('/pdf/CASEIH0276-C2L10P0-AustoftSugarcaneHarvester-305x220-SinglePages.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection