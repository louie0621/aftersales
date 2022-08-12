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
            <h3 class="breadcrumbs-custom-title">CASE Skid Steer Loader SR130</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Skid Steer Loader SR130</li>
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
                        <div class="item"><img src="{{ asset('images/product-sr130-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">SR130</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-sr130-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">SR130</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-sr130-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">SR130</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-sr130-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-sr130-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-sr130-3.jpg')}}" alt="" width="670" height="477" />
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Skid Steer Loader SR130</h4>
                    <p>People will love working in the CASE SR130. The cabs are the widest in the industry, providing superior comfort and visibility. </p>
                    <p>It’s built with tremendous torque and surplus power for its class. The compact chassis is just perfect for working in tight spaces yet it provides industry-leading breakout force.</p>
                    <p>No wonder, the CASE SR130 is an industry favorite.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/SR130-SR150-SV185-SR200.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tables-->
<section class="section section-lg no-padding-top bg-default">
    <div class="container">
        <h5 class="text-spacing-50 font-weight-normal text-transform-none margin-two align-left">SPECIFICATIONS</h5>
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-striped table-custom-primary">
                <tbody>
                    <tr>
                        <td>Engine Gross HP</td>
                        <td>49 Hp</td>
                        <td>Loader Capacity</td>
                        <td>0.41 cbm</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>2300 kg</td>
                        <td>Rated Operating Capacity</td>
                        <td>590 kg ROC</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection