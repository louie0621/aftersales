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
            <h3 class="breadcrumbs-custom-title">CASE Crawler Excavator CX210C</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Crawler Excavator CX210C</li>
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
                        <div class="item"><img src="{{ asset('images/product-CX210C-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX210C</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX210C-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">CX210C</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="images/product-CX210C-1.jpg" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-CX210C-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Crawler Excavator CX210C</h4>
                    <p>With reinforced arm and boom areas, with a fortified bucket linkage structure and with toughness designed into its X-chassis, the CASE CX210C excavator redefines durability to get more productivity done.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/CX210C.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- old specs-->
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
                        <td>GF-4HK1X</td>
                        <td>Main pumps</td>
                        <td>2 variable displacement axial piston pumps with regulating system</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Water-cooled, 4-cycle diesel, 4-cylinder in line, electronically controlled, high pressure common rail system, variable geometry turbocharger, air cooled intercooler.</td>
                        <td>Max oil flow</td>
                        <td>2 x 211 l/min at 1800 min-1</td>
                    </tr>
                    <tr>
                        <td>Number of cylinders/displacement</td>
                        <td>5.19 l</td>
                        <td colspan="2">Working circuit pressure</td>
                    </tr>
                    <tr>
                        <td>Bore/Stroke</td>
                        <td>115 x 125 mm</td>
                        <td>Boom/Arm/Bucket circuit</td>
                        <td>34.3 MPa</td>
                    </tr>
                    <tr>
                        <td colspan="2">Rated flywheel horse power</td>
                        <td>Boom/Arm/Bucket circuit (with auto power up)</td>
                        <td>36.8 MPa</td>
                    </tr>
                    <tr>
                        <td>Horsepower ISO 9249 (Net)</td>
                        <td>117.3 kW at 1800 min-1</td>
                        <td>Swing circuit</td>
                        <td>29.4 MPa</td>
                    </tr>
                    <tr>
                        <td>Horsepower ISO 14396 (Gross)</td>
                        <td>122 kW at 1800 min-1</td>
                        <td>Travel circuit</td>
                        <td>34.3 Mpa</td>
                    </tr>
                    <tr>
                        <td>Maximum torque ISO 9249 (Net)</td>
                        <td>608 Nm at 1600 min-1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maximum torque ISO 14396 (Gross)</td>
                        <td>624 Nm at 1600 min-1</td>
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
                        <td>11.5 min-1</td>
                        <td>Suction ﬁlter</td>
                        <td>105 μm</td>
                    </tr>
                    <tr>
                        <td>Swing torque</td>
                        <td>64,000 N-m</td>
                        <td></td>
                        <td></td>
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
                        <td>5.0 kW</td>
                    </tr>
                    <tr>
                        <td>Gradeability</td>
                        <td>70% (35°)</td>
                        <td colspan="2"><b>Batteries</b></td>
                    </tr>
                    <tr>
                        <td>Drawbar pull</td>
                        <td>188 kN</td>
                        <td>Indonesia, Malaysia, Philippines</td>
                        <td>2x12V 88 Ah/5HR</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Indonesia, Malaysia, Philippines</td>
                        <td>2x12V 92 Ah/5HR</td>
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
                        <td>410 lt</td>
                    </tr>
                    <tr>
                        <td>Number of track rollers (each side)</td>
                        <td>7</td>
                        <td>Hydraulic system</td>
                        <td>240 l</td>
                    </tr>
                    <tr>
                        <td>Number of shoes (each side)</td>
                        <td>46</td>
                        <td>Cooling system</td>
                        <td>29,8 l</td>
                    </tr>
                    <tr>
                        <td>Type of shoe</td>
                        <td>Triple grouser shoe</td>
                        <td>Engine Crank Case</td>
                        <td>23.1 l</td>
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
                        <td>157 Hp</td>
                        <td>Track Width</td>
                        <td>600 mm</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>21500 kg</td>

                    </tr>
                    <tr>
                        <td>Bucket Capacity</td>
                        <td>0.92 cbm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection