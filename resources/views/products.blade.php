@extends('layouts.home')

@section('navbar')

<!-- nav -->
<div class="rd-navbar-main">
    <!-- RD Navbar Nav-->
    <ul class="rd-navbar-nav">
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/')}}">Home</a>
        </li>

        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/about-us')}}">About us</a>
        </li>
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/branches')}}">Branches</a>
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
            <h3 class="breadcrumbs-custom-title">Products</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li class="active"><a href="{{ url('/products') }}">Products</a></li>
        </ul>
    </div>
</section>
<section class="section section-xl bg-default text-center">
    <div class="container">
        <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Our Products</span></h3>
    </div>
    <div class="container-fluid container-inset-0">
        <div class="row row-30 row-desktop-8 gutters-8 hoverdir" data-lightgallery="group">
            <div class="col-sm-6 col-lg-6 col-xxl-6">
                <div class="oh-desktop">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern wow slideInUp hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure" href="{{ url('products/agriculture')}}">
                            <img src="{{ asset('images/grid-gallery-TT350.jpg')}}" alt="" width="948" height="710" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="products/agriculture">Agriculture<br> Equipment</a></h5>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-sm-6 col-lg-6 col-xxl-6">
                <div class="oh-desktop">
                    <!-- Thumbnail Modern-->
                    <article class="thumbnail thumbnail-modern wow slideInDown hoverdir-item" data-hoverdir-target=".thumbnail-modern-caption"><a class="thumbnail-modern-figure" href="products/construction"><img src="{{ asset('images/grid-gallery-CX210.jpg')}}" alt="" width="948" height="710" /></a>
                        <div class="thumbnail-modern-caption">
                            <h5 class="thumbnail-modern-title"><a href="products/construction">Construction<br>Equipment</a></h5>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection