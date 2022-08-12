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
            <h3 class="breadcrumbs-custom-title">Agriculture Products</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li class="active">Agriculture Products</li>
        </ul>
    </div>
</section>
<!-- Services 2-->
<section class="section section-lg bg-default">
    <div class="container">
        <div class="isotope-wrap">
            <div class="row isotope" data-isotope-layout="masonry" data-column-class=".col-1" data-lightgallery="group">
                <div class="col-1 isotope-item isotope-sizer"></div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-TT3-35')}}"><img src="{{ asset('images/product-tt3-1570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-TT3-35')}}">New Holland TT3.35</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ asset('/products/agriculture/ag-product-E9010')}}"><img src="{{ asset('images/product-e9010-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ asset('/products/agriculture/ag-product-E9010')}}">New Holland Excel 9010 (E9010)</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ asset('/products/agriculture/ag-product-TT3-50')}}"><img src="{{ asset('images/product-tt3.50-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-TT3-50')}}">New Holland TT3.50</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-TT4-75')}}"><img src="{{ asset('images/product-tt4-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-TT4-75')}}">New Holland TT4.75</a></h6>
                        </div>
                    </article>
                </div>

                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-TS6-120')}}"><img src="{{ asset('images/product-ts6series-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-TS6-120')}}">New Holland TS6.120</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-TS6-125')}}"><img src="{{ asset('images/product-ts6.125-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-TS6-125')}}">New Holland TS6.125</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-TS6-140')}}"><img src="{{ asset('images/product-ts6.140-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-TS6-140')}}">New Holland TS6.140</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-MAXXUM140')}}"><img src="{{ asset('images/product-maxxum140-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-MAXXUM140')}}">CASE-IH MAXXUM140</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{( url('/products/agriculture/ag-product-PUMA155'))}}"><img src="{{ asset('images/product-puma155-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{( url('/products/agriculture/ag-product-PUMA155'))}}">CASE-IH PUMA155</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-A4000')}}"><img src="{{ asset('images/product-a4000-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-A4000')}}">Austoft 4000 Sugarcane Harvesters</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-A8010-and-A8810')}}"><img src="{{ asset('images/product-a8010-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-A8010-and-A8810')}}">Austoft 8010 and 8810 Sugarcane Harvesters</a></h6>
                        </div>
                    </article>
                </div>
                
                <div class="col-md-6 isotope-item" data-filter="Type 1">
                    <!-- Thumbnail Classic-->
                    <article class="thumbnail thumbnail-classic thumbnail-lg"><a href="{{ url('/products/agriculture/ag-product-JX_Series')}}"><img src="{{ asset('images/product-jxseries-570x299.jpg')}}" alt="" width="570" height="299" /></a>
                        <div class="thumbnail-classic-caption">
                            <h6 class="thumbnail-classic-title"><a href="{{ url('/products/agriculture/ag-product-JX_Series')}}">CASE-IH Farmall JX Series</a></h6>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection