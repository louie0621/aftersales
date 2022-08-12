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
            <h3 class="breadcrumbs-custom-title">Construction Products</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li class="active">Construction Products</li>
        </ul>
    </div>
</section>
<!-- Services 2-->
<section class="section section-lg bg-default">
    <div class="container">
        <div class="isotope-wrap">
            <div class="row isotope" data-isotope-layout="masonry" data-column-class=".col-1" data-lightgallery="group">
                <div class="col-1 isotope-item isotope-sizer"></div>
                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-SR130')}}"><img src="{{ asset('images/product-sr130-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-SR130')}}">CASE Skid Steer Loader SR130</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-SV185')}}"><img src="{{ asset('images/product-SV185-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-SV185')}}">CASE Skid Steer Loader SV185</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-SR200')}}"><img src="{{ asset('images/product-SR200-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-SR200')}}">CASE Skid Steer Loader SR200</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-752EX')}}"><img src="{{ asset('images/product-752EX-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-752EX')}}">CASE Double Drum Roller 752EX</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-1107EX-D')}}"><img src="{{ asset('images/product-1107EX-D-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-1107EX-D')}}">CASE Single Drum Roller 1107EX-D</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-570ST')}}"><img src="{{ asset('images/product-570ST-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-570ST')}}">CASE Backhoe Loader 570ST</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-845B')}}"><img src="{{ asset('images/product-845B-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-845B')}}">CASE Motorgrader 845B</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-521F')}}"><img src="{{ asset('images/product-521F-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-521F')}}">CASE Wheel Loader 521F</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-821F')}}"><img src="{{ asset('images/product-821F-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-821F')}}">CASE Wheel Loader 821F</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-1150L')}}"><img src="{{ asset('images/product-1150L-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-1150L')}}">CASE Crawler Dozer 1150L</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-2050M')}}"><img src="{{ asset('images/product-2050M-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-2050M')}}">CASE Crawler Dozer 2050M</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-CX75SR')}}"><img src="{{ asset('images/product-CX75-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-CX75SR')}}">CASE Crawler Midi-Excavator CX75SR</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-CX130C')}}"><img src="{{ asset('images/product-CX130C-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-CX130C')}}">CASE Crawler Excavator CX130C</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 2">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/construction/ce-product-CX210C')}}"><img src="{{ asset('images/product-CX210C-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/construction/ce-product-CX210C')}}">CASE Crawler Excavator CX210C</a></h6>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection