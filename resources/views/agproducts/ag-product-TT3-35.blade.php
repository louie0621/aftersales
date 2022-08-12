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
            <h3 class="breadcrumbs-custom-title">New Holland TT3.35</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">New Holland TT3.35</li>
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
                        <div class="item"><img src="{{ asset('images/product-tt3-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT3.35</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT3.35</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT3.35</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT3.35</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-5.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT3.35</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-tt3-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt3-5.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>TT3: COMPACT , POWERFUL PERFORMANCE</h4>
                    <p>The TT3 tractor range has been designed following extensive customer consultation, feedback and input. Put simply, you could say the TT3 has been designed by farmers, for farmers. Characterised by smart design, rugged and robust construction and efficient power, the TT3.50 simply delivers.</p>
                    <p>In order to meet the requirements of today’s demanding operators, the four-model TT3 range, delivering 35 – 47 horsepower offers modern styling, outstanding operator comfort, unsurpassed performance in its segment as well as the value and versatility customers have come to expect of New Holland.</p>
                    <em>*Specification varies with the tractor application.</em>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/Brochure-NEW-HOLLAND-TT3.35-TT3.50.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tables-->
<section class="section section-lg no-padding-top bg-default">
    <div class="container">
        <h5 class="text-spacing-50 font-weight-normal text-transform-none margin-two align-left">SPECIFICATIONS</h5>
        <div class="table-custom-responsive">
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">ENGINE</th>
                        <th colspan="2">Transmission & Clutch</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No. cylinders / aspiration / valves / emission level</td>
                        <td>3/NA/2/Tier2</td>
                        <td>Double clutch</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Capacity (Litres)</td>
                        <td>2,4</td>
                        <td>8x2 Mechanical constantmesh</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Net advertised power (kW/hp)</td>
                        <td>26.85 / 36</td>
                        <td>8x8 Mechanical Synchro Shuttle transmission</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>PTO power at rated speed (kW/hp)</td>
                        <td>24.3 / 32.58</td>
                        <td>Minimum speed / Maximum road speed (kph)</td>
                        <td>2.54/28.16</td>
                    </tr>
                    <tr>
                        <td>Max. torque @ 1400 +/- erpm (Nm)</td>
                        <td>142 @ 1400 +/- 100</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fuel tank capacity (L)</td>
                        <td>62</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Front Axles</th>
                        <th colspan="2">Rear Axle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2WD front axle</td>
                        <td>Standard</td>
                        <td>Planetary reduction final drive</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>4WD front axle</td>
                        <td>Optional</td>
                        <td>Differential lock (Mechanically engaged)</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Turning radius 4WD Portal (M)</td>
                        <td>2,9</td>
                        <td>Oil immersed multidisc braking system</td>
                        <td>Standard</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Hydraulics</th>
                        <th colspan="2">Linkage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Main pump flow / pump pressure (Lpm / Bar)</td>
                        <td>29/210</td>
                        <td>Category</td>
                        <td>I-II</td>
                    </tr>
                    <tr>
                        <td>Independent steering pump flow / pump pressure (Lpm / Bar)</td>
                        <td>23/210</td>
                        <td>Lift capacity @ ball ends (Std ) (kg)</td>
                        <td>1800</td>
                    </tr>
                    <tr>
                        <td>Rear auxiliary remote valves ( Max. number)</td>
                        <td>2</td>
                        <td>Lift capacity @ ball ends (Opt ) (kg)</td>
                        <td>1100</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">PTO</th>
                        <th colspan="2">Operator environment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Independent rear PTO</td>
                        <td>Standard</td>
                        <td>Mechanical suspension seat with seat belt on inclined plane</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Rear PTO (Std)</td>
                        <td>540</td>
                        <td>Semi Flat deck operator area</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Rear PTO (Opt)</td>
                        <td>540E</td>
                        <td>Deluxe opertaor seat with arm rest and operator seat belt</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Stationary Reverse PTO (Std)</td>
                        <td>Standard</td>
                        <td>Frame and Canopy</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>GSPTO ( Ground speed PTO) (Std)</td>
                        <td>Standard</td>
                        <td>Two post fixed ROPS with canopy</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Rear PTO engine speed at 540rpm (rpm)</td>
                        <td>2016</td>
                        <td>Fender cushion seat</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Rear PTO engine speed at 540Erpm (rpm)</td>
                        <td>1590</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Tyres</th>
                        <th colspan="2">Dimensions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Front 8.0x18 Ag</td>
                        <td>Standard</td>
                        <td>Wheelbase 2WD / 4WD (mm)</td>
                        <td>1910/1990</td>
                    </tr>
                    <tr>
                        <td>Rear 14.9x28 Ag</td>
                        <td>NA</td>
                        <td>Overall length 2 WD/4WD (mm) include front weight (mm)</td>
                        <td>3666/3700</td>
                    </tr>
                    <tr>
                        <td>Front 8.0x18 High Lug</td>
                        <td>Optional</td>
                        <td>Overall width (mm)</td>
                        <td>1690</td>
                    </tr>
                    <tr>
                        <td>Rear 14.9x28 High lug</td>
                        <td>NA</td>
                        <td>Height to top of ROPS 2WD/4WD (mm)</td>
                        <td>2442/2460</td>
                    </tr>
                    <tr>
                        <td>Rear 13.6x28 Ag</td>
                        <td>Standard</td>
                        <td>Height to top of exhaust 2WD / 4WD (mm)</td>
                        <td>2270/2350</td>
                    </tr>
                    <tr>
                        <td>Rear 13.6x28 High lug</td>
                        <td>Optional</td>
                        <td>Height to top of steering wheel 2WD / 4WD (mm)</td>
                        <td>1625/1650</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Ground Clearance under Front axle -Portal 4WD (mm)</td>
                        <td>355</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Weight (Standard Ballast) 2WD/4WD Portal (kg)</td>
                        <td>1885/2025</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Weight (Standard Ballast) 2WD/4WD Industrial axle (kg)</td>
                        <td>1885/2160</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection