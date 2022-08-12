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
            <h3 class="breadcrumbs-custom-title">CASE Crawler Excavator CX130C</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
        <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Crawler Excavator CX130C</li>
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
                        <div class="item"><img src="{{ asset('images/product-CX130C-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX130C</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX130C-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX130C</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX130C-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX130C</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-CX130C-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX130C-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX130C-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Crawler Excavator CX130C</h4>
                    <p>Thanks to advanced design and engineering, CASE excavators deliver maximum productivity and fuel efficien</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/crawler-excavators-cx130c-brochure-sea.pdf')}}" target="_blank">Download Brochure</a>
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
                        <td>Model</td>
                        <td>ISUZU GG-4JJ1X</td>
                        <td>Type</td>
                        <td>2 variable displacement axial piston pumps with regulating system</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Water-cooled, 4-cycle diesel, 4-cylinder in line, High pressure common rail system (electric control), Turbocharger with air cooled intercooler.</td>
                        <td>Max oil flow</td>
                        <td>2 x129 l/min @ 2000 min-1</td>
                    </tr>
                    <tr>
                        <td>Emission certified</td>
                        <td>EGR Less</td>
                        <td colspan="2">Working circuit pressure</td>
                    </tr>
                    <tr>
                        <td>Displacement</td>
                        <td>3.0 l</td>
                        <td>Boom/Arm/Bucket</td>
                        <td>34.3 MPa</td>
                    </tr>
                    <tr>
                        <td>Bore/Stroke</td>
                        <td>95.4 x 104.9 mm</td>
                        <td>Boom/Arm/Bucket circuit (with auto power up)</td>
                        <td>36.3 MPa</td>
                    </tr>
                    <tr>
                        <td>Horsepower ISO 14396 GROSS</td>
                        <td>73 kW (98 hp) at 2000 min-1</td>
                        <td>Swing circuit</td>
                        <td>27.9 MPa</td>
                    </tr>
                    <tr>
                        <td>Horsepower SAE J1349 NET</td>
                        <td>70.9 kW (95 hp) at 2000 min-1</td>
                        <td>Travel circuit</td>
                        <td>34.3 Mpa</td>
                    </tr>
                    <tr>
                        <td>Maximum torque ISO 14396 GROSS</td>
                        <td>346 Nm at 1600 min-1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maximum torque SAE J1349 NET</td>
                        <td>340 Nm at 1600 min-1</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">SWING</th>
                        <th colspan="2">FILTERS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maximum swing speed</td>
                        <td>14.3 min-1</td>
                        <td>Suction ﬁlter</td>
                        <td>105 mm</td>
                    </tr>
                    <tr>
                        <td>Swing torque</td>
                        <td>33,000 Nm</td>
                        <td>Return ﬁlter</td>
                        <td>6 mm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pilot line ﬁlter</td>
                        <td>8 mm</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">TRAVEL</th>
                        <th colspan="2">ELECTRICAL SYSTEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Travel motor</td>
                        <td>Variable displacement axial piston motor (Automatic travel speed shifting)</td>
                        <td>Circuit</td>
                        <td>24V</td>
                    </tr>
                    <tr>
                        <td>Max travel speed</td>
                        <td>5.6 km/h</td>
                        <td>Alternator</td>
                        <td>50 Amp</td>
                    </tr>
                    <tr>
                        <td>Low travel speed</td>
                        <td>3.4 km/h</td>
                        <td>Starter motor</td>
                        <td>4.0 kW</td>
                    </tr>
                    <tr>
                        <td>Gradeability</td>
                        <td>70% (35°)</td>
                        <td>Batteries</td>
                        <td>2x12V 62 Ah/5HR</td>
                    </tr>
                    <tr>
                        <td>Drawbar pull</td>
                        <td>117 kN</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">UNDERCARRIAGE</th>
                        <th colspan="2">CAPACITIES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Number of carriers rollers (each side)</td>
                        <td>2</td>
                        <td>Fuel tank</td>
                        <td>260 lt</td>
                    </tr>
                    <tr>
                        <td>Number of track rollers (each side)</td>
                        <td>7</td>
                        <td>Hydraulic system</td>
                        <td>157 lt</td>
                    </tr>
                    <tr>
                        <td>Number of shoes (each side)</td>
                        <td>43</td>
                        <td>Cooling system</td>
                        <td>17,6 lt</td>
                    </tr>
                    <tr>
                        <td>Type of shoe</td>
                        <td>Triple grouser shoe</td>
                        <td>Engine Crank Case</td>
                        <td>17 lt</td>
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
                        <td>95 Hp</td>
                        <td>Track Width</td>
                        <td>500 mm track</td> 
                    </tr> 
                    <tr>
                        <td>Operating Weight</td>
                        <td>12600 kg</td>
                    </tr> 
                    <tr>
                        <td>Bucket Capacity</td>
                        <td>0.55 cbm</td> 
                    </tr> 
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection