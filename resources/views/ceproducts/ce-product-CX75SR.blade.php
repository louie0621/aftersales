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
            <h3 class="breadcrumbs-custom-title">CASE Crawler Midi-Excavator CX75SR</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Crawler Midi-Excavator CX75SR</li>
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
                        <div class="item"><img src="{{ asset('images/product-CX75SR-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX75SR</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX75SR-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX75SR</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-CX75SR-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX75SR-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Crawler Midi-Excavator CX75SR</h4>
                    <p>The CASE CX75SR can be maneuvered into difficult and tight sites and can work where conventional excavators do not fit. It’s a mid-sized excavator but it’s highly productivity, comfortable and of course, fuel-efficient.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/cx75-cx135-cx225s-brochure-sea-en.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Old Specs-->
<!--
<section class="section section-lg no-padding-top bg-default">
    <div class="container">
        <h5 class="text-spacing-50 font-weight-normal text-transform-none margin-two align-left">SPECIFICATIONS</h5>
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">ENGINE</th>
                        <th colspan="2">HYDRAULIC SYSTEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">Latest generation engine for “Low exhaust emissions” Tier 3</td>
                        <td>Max output</td>
                        <td>2 x 68 l/min @ 2000 rpm 2 variable displacement axial piston pumps</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>ISUZU AU-4LE2X</td>
                        <td>Attachment</td>
                        <td>29.4 MPa</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Water-cooled, 4-cycle diesel, 4-cylinder in line, direct injection, Turbocharger with air cooled intercooler</td>
                        <td>Swing circuit</td>
                        <td>22.6 MPa</td>
                    </tr>
                    <tr>
                        <td>Number of cylinders</td>
                        <td>4</td>
                        <td>Travel</td>
                        <td>29.4 MPa</td>
                    </tr>
                    <tr>
                        <td>Bore/Stroke</td>
                        <td>85 x 96 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Horsepower 80/1269/EEC</td>
                        <td>54 hp (40 kW) @ 2000 rpm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maximum torque 80/1269/EEC</td>
                        <td>210 Nm @ 1500 rpm</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">SWING</th>
                        <th colspan="2">TRAVEL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Max upperstructure swing speed</td>
                        <td>9.5 rpm</td>
                        <td>Travel motor</td>
                        <td>Variable displacement axial piston motor</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Max travel speed</td>
                        <td>5.1 km/h</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Low travel speed</td>
                        <td>3.3 km/h</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Gradeability</td>
                        <td>70% (35°)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Drawbar pull</td>
                        <td>59 kN</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">ELECTRICAL SYSTEM</th>
                        <th colspan="2">UNDERCARRIAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Circuit</td>
                        <td>24V</td>
                        <td>Number of carriers rollers (each side)</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Batteries</td>
                        <td>12V 64Ah/5HR x 2</td>
                        <td>Number of track rollers (each side)</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td colspan="2">Waterproof type connector</td>
                        <td>Number of shoes each side</td>
                        <td>39</td>
                    </tr>
                    <tr>
                        <td>Alternator</td>
                        <td>50 Amp</td>
                        <td>Type of shoe</td>
                        <td>Triple grouser shoe</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">CIRCUIT AND COMPONENT CAPACITIES</th>
                        <th colspan="2">NOISE LEVEL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fuel tank</td>
                        <td>100 l</td>
                        <td>Exterior noise</td>
                        <td>97dB(A) as per ISO6395</td>
                    </tr>
                    <tr>
                        <td>Hydraulic system</td>
                        <td>97.3 l</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Engine cooling system</td>
                        <td>10.2 l</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
-->

<!-- Tables-->
<section class="section section-lg no-padding-top bg-default">
    <div class="container">
        <h5 class="text-spacing-50 font-weight-normal text-transform-none margin-two align-left">SPECIFICATIONS</h5>
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-striped table-custom-primary">
                <tbody>
                    <tr>
                        <td>Engine Gross HP</td>
                        <td>54 Hp</td>
                        <td>Track Width</td>
                        <td>450 mm track</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>7950 kg</td>
                        <td>Other Features</td>
                        <td>with dozer blade</td>
                    </tr>
                    <tr>
                        <td>Bucket Capacity</td>
                        <td>0.28 cbm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection