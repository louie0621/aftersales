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
            <h3 class="breadcrumbs-custom-title">CASE Double Drum Roller 752EX</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Double Drum Roller 752EX</li>
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
                        <div class="item"><img src="{{ asset('images/product-752EX-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">752EX</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-752EX-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">752EX</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-752EX-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-752EX-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Double Drum Roller 752EX</h4>
                    <p>Easy to operate, easy to maintain and easy on the operator, the CASE 752EX is built for the daily grind without the daily grief. With double-drum drive technology, high vibration frequencies and impressive maneuverability, this machine is hard to beat.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/752EX.pdf')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="2">POWER TRAIN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Engine</td>
                        <td>4R 1040TC BS - III</td>
                        <td>Working Speed (Kmph)</td>
                        <td>0-6</td>
                    </tr>
                    <tr>
                        <td>Make</td>
                        <td>Koel</td>
                        <td>Working and Transport Speed (Kmph)</td>
                        <td>0-12</td>
                    </tr>
                    <tr>
                        <td>Power</td>
                        <td>76 HP @2200 RPM</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>4-Cylinder, Inline, 4 Stoke, Turbo Charged, Water Cooled</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total Displacement (cc)</td>
                        <td>4160</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bore x Stroke (mm)</td>
                        <td>105x120</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Starting Method</td>
                        <td>12 V, Electrical System</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Propulsion on front and rear drum</td>
                        <td>Hydrostatic drive</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">BRAKES</th>
                        <th colspan="2">WATER SPRINKLER TANK CAPACITY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Service Brake</td>
                        <td>Hydrostatic</td>
                        <td>Front (l)</td>
                        <td>400</td>
                    </tr>
                    <tr>
                        <td>Parking Brake</td>
                        <td>Hydraulic</td>
                        <td>Rear (l)</td>
                        <td>400</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">OPERATION DATA</th>
                        <th colspan="2">HYDRAULIC OIL FILTER</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maximum Operating Weight (Kgs)</td>
                        <td>10560</td>
                        <td>Type</td>
                        <td>Micro Glass Element</td>
                    </tr>
                    <tr>
                        <td>Operating Weight (Kgs)</td>
                        <td>8960</td>
                        <td>Filtering Quality</td>
                        <td>10 microns</td>
                    </tr>
                    <tr>
                        <td>Front Axle Load (Kgs)</td>
                        <td>4300</td>
                        <td>Hydraulic Oil Tank Capacity (l)</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>Rear Axle Load (Kgs)</td>
                        <td>4660</td>
                        <td>Diesel Tank Capacity (l)</td>
                        <td>240</td>
                    </tr>
                    <tr>
                        <td>Static Linear Load - Front (Kgs/cm)</td>
                        <td>25.7</td>
                        <td>Indicators</td>
                        <td>Indicators for battery non charging, low engine lube oil pressure, hydraulic oil filter clog, parking brake, turn and hazard, & high speed</td>
                    </tr>
                    <tr>
                        <td>Static Linear Load - Rear (Kgs/cm)</td>
                        <td>27.8</td>
                        <td>Gauges</td>
                        <td>Digital hour meter, engine lub oil pressure gauge, coolant temperature gauge</td>
                    </tr>
                    <tr>
                        <td>Gradeability (% (20)°)</td>
                        <td>36</td>
                        <td>Safety Features</td>
                        <td>Automatic vibration control, MCB protection, automatically applied parking brake in case of engine shutdown & no vibration in neutral</td>
                    </tr>
                    <tr>
                        <td>Articulation to either side (°)</td>
                        <td>25</td>
                        <td>Hydraulic Oil Tank Capacity (l)</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Diesel Tank Capacity (l)</td>
                        <td>240</td>
                    </tr>
                </tbody>
                
                <tfoot>
                <tr>
                  <td colspan="4">* Breakout forces estimated considering both tip and hydraulic limits.</td>
                     
                </tr>
              </tfoot>

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
                        <td>76 Hp</td>
                        <td>Other Features</td>
                        <td>Double Drum</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>9061 kg</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection