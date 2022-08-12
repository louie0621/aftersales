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
            <h3 class="breadcrumbs-custom-title">New Holland TT4.75</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">New Holland TT4.75</li>
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
                        <div class="item"><img src="{{ asset('images/product-tt4-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-5.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-6.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-7.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TT4.75</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-tt4-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-5.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-6.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-tt4-7.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                    <!--
                    <div class="iframe-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/MZ42GwHaIbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
-->
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>New Holland TT4.75</h4>
                    <p>New Holland designed and developed the all new TT4 around you, effortlessly combining muscled up performance with plenty of new appealing features, giving you, the farmer, the cutting edge in tractor technology.</p>
                    <p class="margin-five">Characterized by sturdy design and functional layout, ensuring reliability and durability, the new TT4 thrives on being pushed to the limit. The new TT4 engines offer more than just muscle. They set the highest standards for both dynamic performance and fuel economy, thanks to FPT Industrial.</p>
                    <p class="margin-five">The TT4 range are simple to operate, easy to maintain and built to go the distance, offering maximum uptime and reduced maintenance cost, putting money back in your pocket.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/tt4-brochure-apac-en.pdf')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="2">New Holland Engine</th>
                        <th colspan="2">Transmission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>No. cylinders / aspiration / valves / emission level</td>
                        <td>3 / TCA / 2 / Tier 3</td>
                        <td>Powershuttle</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>No. cylinders / aspiration / valves / emission level</td>
                        <td>4 / NA / 2 / Tier 1</td>
                        <td>Synchro - Mechanical forward / Reverse shuttle</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Capacity (Tier 3) (Litres)</td>
                        <td>2.9</td>
                        <td>8x8 Mechanical Synchro Shuttle transmission</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Capacity (Tier 1) (Litres)</td>
                        <td>3.9</td>
                        <td>12x12 Mechanical Synchro Shuttle transmission (dash mounted)</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Rated power ISO TR14396-ECE R120 @ 2300rpm [kW/hp(CV)]</td>
                        <td>55/75</td>
                        <td>Splitter Synchro Shuttle transmission 16x16 & 24x24</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>PTO power at rated speed [kW/hp(CV)]</td>
                        <td>50/67</td>
                        <td>Minimum speed / Maximum road speed (kph)*</td>
                        <td>1.56 / 34.4</td>
                    </tr>
                    <tr>
                        <td>Max. torque @ 1400erpm (Nm)</td>
                        <td>306</td>
                        <td>20x20 Mechanical Synchro Shuttle transmission with creeper</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Torque reserve (%)</td>
                        <td>30</td>
                        <td>Creeper - Minimum speed (kph)*</td>
                        <td>0.30</td>
                    </tr>
                    <tr>
                        <td>Fuel capacity Main + Auxillary (Litres)</td>
                        <td>60 Standard + 40 optional </td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Front axle</th>
                        <th colspan="2">Rear axle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>4WD front axle</td>
                        <td>Standard</td>
                        <td>Planetary reduction final drive</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>2WD front axle</td>
                        <td>Optional</td>
                        <td>Differential lock (Mechanically engaged)</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Steering angle 4WD / Min. turn radius less brakes 4WD (°) / (m)</td>
                        <td>55 / 6.4</td>
                        <td>Hydraulic assist multidisc braking system with MS/ PS</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Oil immersed multi disc braking system</td>
                        <td>Standard</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Hydraulic system</th>
                        <th colspan="2">Linkage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Main pump flow / pump pressure (Lpm / Bar)</td>
                        <td>45 / 207</td>
                        <td>Category</td>
                        <td>I / II</td>
                    </tr>
                    <tr>
                        <td>Optional pump flow / pump pressure (Lpm / Bar)</td>
                        <td>54 / 207</td>
                        <td>Lift capacity @ ball ends (Std / Opt) (kg)</td>
                        <td>2000 / 2500</td>
                    </tr>
                    <tr>
                        <td>Independent steering pump flow (Lpm / Bar)</td>
                        <td>26 / 210</td>
                        <td>Lift capacity @ 610mm behind ball ends (Std / Opt) (kg)</td>
                        <td>1500 / 1850</td>
                    </tr>
                    <tr>
                        <td>Independent steering pump flow for Powershuttle</td>
                        <td>31 / 210</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Rear auxiliary remote valves (Std / Max. number)</td>
                        <td>1 / 3</td>
                        <td></td>
                        <td></td>
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
                        <td>Tiltable Steering</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Rear PTO (Std)</td>
                        <td>540</td>
                        <td>Mechanical suspension seat with seat belt on inclined plane</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Rear PTO (Opt)</td>
                        <td>540E</td>
                        <td>Flat deck operator area</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Rear PTO engine speed at 540 rpm (rpm)</td>
                        <td>2217</td>
                        <td>Suspended brake and clutch pedals</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Rear PTO engine speed at 540E rpm (rpm)</td>
                        <td>1715</td>
                        <td>Canopy</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Rear PTO engine speed at 540/1000 rpm (Opt) (rpm)</td>
                        <td>2125</td>
                        <td>Two post Foldable ROPS platform</td>
                        <td>Optional</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Dimensions & Weights</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">Wheelbase 2WD / 4WD (mm)</td>
                        <td colspan="2">2200 / 2145</td>
                    </tr>
                    <tr>
                        <td colspan="2">Overall length 4WD (mm)</td>
                        <td colspan="2">3875</td>
                    </tr>
                    <tr>
                        <td colspan="2">Overall width (mm)</td>
                        <td colspan="2">2041</td>
                    </tr>
                    <tr>
                        <td colspan="2">Height to top of ROPS 2WD / 4WD (mm)</td>
                        <td colspan="2">2589</td>
                    </tr>
                    <tr>
                        <td colspan="2">Height to top of exhaust 2WD / 4WD (mm)</td>
                        <td colspan="2">2482</td>
                    </tr>
                    <tr>
                        <td colspan="2">Height to top of steering wheel 2WD / 4WD (mm)</td>
                        <td colspan="2">1814</td>
                    </tr>
                    <tr>
                        <td colspan="2">Ground clearance under front axle 2WD / 4WD (mm)</td>
                        <td colspan="2">504 / 415</td>
                    </tr>
                    <tr>
                        <td colspan="2">Weight (Standard Ballast) with ROPS (kg)</td>
                        <td colspan="2">2730 / 2810</td>
                    </tr>
                    <tr>
                        <td colspan="2">Maximum ballasted weight 2WD / 4WD (kg)</td>
                        <td colspan="2">3420 / 3460</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection