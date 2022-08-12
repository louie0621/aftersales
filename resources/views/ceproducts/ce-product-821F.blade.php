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
            <h3 class="breadcrumbs-custom-title">CASE Wheel Loader 821F</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Wheel Loader 821F</li>
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
                        <div class="item"><img src="{{ asset('images/product-821F-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">821F</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-821F-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Wheel Loader 821F</h4>
                    <p>The CASE 821F wheel loader offers faster acceleration, quicker cycle times, and higher travel speeds while delivering as much as 20 percent better fuel economy. With full climate control, an award-winning joystick steering option, and an available two-level control system, CASE provides you with a comfortable and efficient cab.</p>
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
                    <a class="button button-lg button-primary button-winona" href="pdf/521F-821F.pdf" target="_blank">Download Brochure</a>
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
                        <th colspan="2">TRANSMISSION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Brand</td>
                        <td>FPT</td>
                        <td>Type</td>
                        <td>4-Speed powershift by ZF with Intelligent Clutch Cut Off (ICCO)</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>F4HE9684E*J</td>
                        <td>Forward 1 (km/h)</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Cylinders</td>
                        <td>6</td>
                        <td>Forward 2 (km/h)</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Displacement (l)</td>
                        <td>6.7</td>
                        <td>Forward 3 (km/h)</td>
                        <td>23</td>
                    </tr>
                    <tr>
                        <td>Air intake</td>
                        <td>Turbocharger with air-to-air cooling</td>
                        <td>Forward 4 (km/h)</td>
                        <td>37</td>
                    </tr>
                    <tr>
                        <td>Injection</td>
                        <td>Common Rail Multiple Injection</td>
                        <td>Reverse 1 (km/h)</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>Emission level</td>
                        <td>Tier 3</td>
                        <td>Reverse 2 (km/h)</td>
                        <td>13</td>
                    </tr>
                    <tr>
                        <td>Max. power (kW)</td>
                        <td>172</td>
                        <td>Reverse 3 (km/h)</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Max. power (hp)</td>
                        <td>230</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>(@rpm)</td>
                        <td>1800 (SAE J1349)</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Max. torque (N.m)</td>
                        <td>1184</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>(@rpm)</td>
                        <td>1300 (SAE J1349)</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">AXLES AND DIFFERENTIAL</th>
                        <th colspan="2">TYRES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rear axle total oscillation</td>
                        <td>24°</td>
                        <td>Tyres</td>
                        <td>23.5R25</td>
                    </tr>
                    <tr>
                        <td>A-Choice by ZF</td>
                        <td>Heavy duty axles with open differentials and automatic. 100% lock system on the front differential. 100% tractive effort always, no wheel slip, less tire wear..</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>B-Choice by ZF</td>
                        <td>Standard axles with limited slip differentials front and rear 73% tractive effort on slippery ground.</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">BRAKES</th>
                        <th colspan="2">HYDRAULICS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Service brake</td>
                        <td>Maintenance free, self-adjusting wet 4-wheel disc brakes</td>
                        <td>Valves</td>
                        <td>Rexroth Closed-center, Load sensing hydraulic. Main valve with 3 sections</td>
                    </tr>
                    <tr>
                        <td>Brake disc area (m²/hub)</td>
                        <td>0.39</td>
                        <td>Steering</td>
                        <td>The steering orbitrol hydraulically is actuated with priority valve</td>
                    </tr>
                    <tr>
                        <td>Parking brake</td>
                        <td>With the negative brake all four wheels are automatically stopped when the engine is stopped</td>
                        <td>Automatic functions</td>
                        <td>Bucket Return-to-dig, Boom Return-to-travel, Boom Auto-lift</td>
                    </tr>
                    <tr>
                        <td>Disc brake area (cm²)</td>
                        <td>82</td>
                        <td>Control type</td>
                        <td>Pilot control with single joystick or two levers</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Type of pump</td>
                        <td>Tandem Variable displacement pump</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>(l/min)</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>(@rpm)</td>
                        <td>2000</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">AUXILIARY HYDRAULIC CIRCUIT</th>
                        <th colspan="2">CAPACITIES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Max flow (l/min)</td>
                        <td>260</td>
                        <td>Fuel tank (l)</td>
                        <td>288</td>
                    </tr>
                    <tr>
                        <td>Max pressure (bar)</td>
                        <td>224</td>
                        <td>Cooling system (l)</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Engine oil (l)</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Hydraulic oil tank (l)</td>
                        <td>91</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Transmission oil (l)</td>
                        <td>34</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">CAB PROTECTION</th>
                        <th colspan="2">NOISE AND VIBRATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Protection against falling objects (FOPS)</td>
                        <td>ISO EN3449</td>
                        <td>In the cab - LpA (dB) (ISO 6595/6396/3744)</td>
                        <td>72</td>
                    </tr>
                    <tr>
                        <td>Protection against roll over (ROPS)</td>
                        <td>ISO EN13510</td>
                        <td>Outside - LwA (dB) (SAE J88 SEP80)</td>
                        <td>103</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Vibrations</td>
                        <td>Operator ‘s seat meets the criteria of ISO 7096:2000. The vibrations transmitted do not exceed 0.5 m/s²</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">ELECTRICAL SYSTEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">24V. Batteries 2 x 12V.</td>
                    </tr>
                    <tr>
                        <td colspan="3">Alternator (A)</td>
                        <td>65</td>
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
                        <td>230 Hp</td>
                        <td>Loader Capacity</td>
                        <td>3.4 cbm</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>17600 kg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection