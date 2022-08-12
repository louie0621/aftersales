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
            <h3 class="breadcrumbs-custom-title">CASE Single Drum Roller 1107EX-D</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Single Drum Roller 1107EX-D</li>
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
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1107EX-D</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1107EX-D</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1107EX-D</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1107EX-D</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1107EX-D-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Single Drum Roller 1107EX-D</h4>
                    <p>Excellent soil compaction with it’s 32mm drum thickness, fuel-efficient FPT engine, swift crisp-turning angles and great all-around operator vision make the CASE 1107EX-D a productive, cost-efficient, fast and safe soil compacting machine.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/1107EX-D.pdf.PDF')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="2">PROPULSION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Make</td>
                        <td>FPT</td>
                        <td>Typ</td>
                        <td>Infinitely variable hydrostatic drive with variable displacement pump</td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>S 8000 - TIER III</td>
                        <td>Drive pump</td>
                        <td>Mechanical</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>4 stroke turbocharged aftercooled</td>
                        <td>Engine to pump ratio</td>
                        <td>Direct drive 1:1</td>
                    </tr>
                    <tr>
                        <td>Cylinders</td>
                        <td>4</td>
                        <td>Type</td>
                        <td>Variable displacement bi-directional axial piston pump with manual displacement control</td>
                    </tr>
                    <tr>
                        <td>Bore/stroke</td>
                        <td>105x120</td>
                        <td>Displacement (cc/Rev)</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>Displacement (l)</td>
                        <td>3.9</td>
                        <td>Flow @rated engine (LPM)</td>
                        <td>156</td>
                    </tr>
                    <tr>
                        <td>Fuel injection</td>
                        <td>Direct</td>
                        <td>Charge pressure (bar)</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>Fuel</td>
                        <td>High speed diesel</td>
                        <td><b>DRIVE MOTORS</b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fuel filter</td>
                        <td>Spin-on type</td>
                        <td>Type</td>
                        <td>High speed low torque driving motor mounted on rear axle input shaft</td>
                    </tr>
                    <tr>
                        <td>Air intake</td>
                        <td>Turbocharged with internal EGR</td>
                        <td>For drum drive (optional)</td>
                        <td>Low speed high toque drive motor mounted on front drum frame along with rear axle motor</td>
                    </tr>
                    <tr>
                        <td>Air filter</td>
                        <td>Dry type with dual element</td>
                        <td>Hydraulic oil filter</td>
                        <td>Cartridge</td>
                    </tr>
                    <tr>
                        <td>Engine oil filter</td>
                        <td>Spin-on type</td>
                        <td>Axle</td>
                        <td>Heavy duty with integrated parking brake mechanism and out board planetary</td>
                    </tr>
                    <tr>
                        <td>Cooling</td>
                        <td>Liquid</td>
                        <td>Parking brake</td>
                        <td>Spring applied hydraulically released</td>
                    </tr>
                    <tr>
                        <td>Engine speeds (no load) - Low</td>
                        <td>950±50</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Engine speeds (no load) - High</td>
                        <td>2200</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Max. power (hp)</td>
                        <td>100</td>
                        <td>Engagement</td>
                        <td>Operate on /off parking brake switch on instrument panel, engine stop</td>
                    </tr>
                    <tr>
                        <td>(@rpm)</td>
                        <td>2200 (ISO3046)</td>
                        <td><b>MACHINE SPEED</b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Max. torque (Nm)</td>
                        <td>435</td>
                        <td>- Working speed (km/h)</td>
                        <td>0-5.5</td>
                    </tr>
                    <tr>
                        <td>(@rpm)</td>
                        <td>1300</td>
                        <td>- Travel speed (km/h)</td>
                        <td>0-11.5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Final drive</td>
                        <td>Hight torque out board planetary</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><b>GRADEABILITY</b></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Without drum drive (%)</td>
                        <td>31 (17°)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>With drum drive (%)</td>
                        <td>36 (20°)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Intermittant (%)</td>
                        <td>40</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">VIBRATION SYSTEM</th>
                        <th colspan="2">STEERING</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Variable displacement bi-directional axial piston pump with electrical displacement control</td>
                        <td>Steering system</td>
                        <td>articulated hydrostatic steering</td>
                    </tr>
                    <tr>
                        <td>Drive to vibration pump</td>
                        <td>Mechanical</td>
                        <td>Steering angle</td>
                        <td>37° on either side (74° between stop to stop)</td>
                    </tr>
                    <tr>
                        <td>Engine to pump ratio</td>
                        <td>Direct Drive 1:1</td>
                        <td>Turning radius (inner radius) (m)</td>
                        <td>3.65</td>
                    </tr>
                    <tr>
                        <td>Displacement (cc/rev)</td>
                        <td>34.4</td>
                        <td>Drum oscillation angle</td>
                        <td>15°</td>
                    </tr>
                    <tr>
                        <td>Charge pressure (bar)</td>
                        <td>27</td>
                        <td>Tyre size</td>
                        <td>23.1/18-26 8 PR or 12 PR Tubeless</td>
                    </tr>
                    <tr>
                        <td>Vibration motor</td>
                        <td>Fixed displacement mounted on drum</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">ELECTRICAL SYSTEM</th>
                        <th colspan="2">SERVICE CAPACITIES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alternator output (A)</td>
                        <td>65</td>
                        <td>Fuel tank (l)</td>
                        <td>235</td>
                    </tr>
                    <tr>
                        <td>Battery (V/Ah)</td>
                        <td>12 / 130</td>
                        <td>Hydraulic tank (l)</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Engine crank case (l)</td>
                        <td>9.5</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Engine coolant (l)</td>
                        <td>18</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">INSTRUMENTATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Indicators</td>
                        <td colspan="3">Neutral, 2-speed, battery charging, lube oil pressure, parking brake</td>
                    </tr>
                    <tr>
                        <td>Gauges</td>
                        <td colspan="3">Digital hour meter, water temp, fuel level, battery voltage, engine rpm</td>
                    </tr>
                    <tr>
                        <td>Warning lights/alarms</td>
                        <td colspan="3">Coolant overheat, hydraulic oil filter clog, low lube oil pressure, air filter clog</td>
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
                        <td>100 Hp</td>
                        <td>Other Features</td>
                        <td>Double Drive</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>11080 kg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection