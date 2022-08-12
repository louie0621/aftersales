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
            <h3 class="breadcrumbs-custom-title">Austoft 4000 Sugarcane Harvesters</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">Austoft 4000 Sugarcane Harvesters</li>
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
                        <div class="item"><img src="{{ asset('images/product-a4000-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-5.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-6.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-7.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-8.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-9.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-10.jp')}}g" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">A4000</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-a4000-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-5.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-6.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-7.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-8.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-9.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-a4000-10.jpg')}}" alt="" width="670" height="477" />
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
                    <h4 class="margin-six">Austoft 4000 Sugarcane Harvesters</h4>
                    <p>The new Case IH Austoft 4000 is here. It is a compact harvester designed especially to make it possible to streamline the harvesting process in sugarcane fields that use reduced row spacings from 1.1 and 1.2 meters.</p>
                    <p>Designed for maximum performance, the Austoft 4000 demonstrates its versatility by harvesting both in sugarcane fields with reduced spacings of 1.1 and 1.2 meters as well as in sugarcane fields with wider row spacings up to 1.5 meters. By harvesting in row spacings, the Austoft 4000 becomes a superb option for cane growers who want to harvest mechanically, as well as big plantations where the Austoft 4000 can harvest short rows and/or low productivity soils. This frees the bigger volume harvesters like the Austoft 8010 series in order to harvest to their full daily harvest capacity, representing a significant gain in machine productivity.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('/pdf/SugarCane_Austoft4000_BRO_FINAL_low.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection