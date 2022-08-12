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
        <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('/branches')}}">Branches</a>
        </li>

        <li class="rd-nav-item "><a class="rd-nav-link" href="{{ url('/products') }}">Products</a>
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
            <h3 class="breadcrumbs-custom-title">Branches</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li class="active">Branches</li>
        </ul>
    </div>
</section>

<!-- Branches-->
<section class="section section-inset-8 bg-image-5 context-dark text-center">
    <div class="container">
        <!--        <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Branches</span></h3>-->
        <div class="owl-style-4">
            <div class="owl-carousel dots-style-2" data-items="1" data-md-items="2" data-margin="30" data-md-margin="0" data-nav="true" data-dots="true" data-smart-speed="400" data-autoplay="true">
                <!-- Branches-->
                <article class="project-classic"><img src="{{ asset('images/branches-taguig-570x370.jpg')}}" alt="" width="570" height="370" />
                    <div class="project-classic-caption">
                        <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>Taguig</span></div>
                        <p class="project-classic-text">Bagong Calzada St., Brgy. Ususan, Taguig City <br>+63 917 634 9476 </p>
                    </div>
                </article>
                <!-- Branches-->
                <article class="project-classic"><img src="{{ asset('images/branches-bacolod-570x370.jpg')}}" alt="" width="570" height="370" />
                    <div class="project-classic-caption">
                        <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>Bacolod</span></div>
                        <p class="project-classic-text">Lacson Ext., cor V.L. Yap Street, Singcang-Airport, Bacolod City, 6100 <br>+63 917 633 1734</p>
                    </div>
                </article>
                <!-- Branches-->
                <article class="project-classic"><img src="{{ asset('images/branches-cagayan-570x370.jpg')}}" alt="" width="570" height="370" />
                    <div class="project-classic-caption">
                        <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>Cagayan de Oro</span></div>
                        <p class="project-classic-text">Baloy, Tablon, Cagayan de Oro, Misamis Occidental<br>+63 917 633 1720</p>
                    </div>
                </article>
                <!-- Branches-->
                <article class="project-classic"><img src="{{ asset('images/branches-davao-570x370.jpg')}}" alt="" width="570" height="370" />
                    <div class="project-classic-caption">
                        <div class="project-classic-location"><span class="icon mdi mdi-map-marker"></span><span>Davao</span></div>
                        <p class="project-classic-text">Door 1, Fuji Building, Km7, Lanang, Davao City <br>+63 917 716 2122</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection