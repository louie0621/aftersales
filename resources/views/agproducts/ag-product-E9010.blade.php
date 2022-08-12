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
            <h3 class="breadcrumbs-custom-title">New Holland Excel 9010 (E9010)</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">New Holland Excel 9010 (E9010)</li>
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
                        <div class="item"><img src="{{ asset('images/product-e9010-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">E9010</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-e9010-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">E9010</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-e9010-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-e9010-2.jpg')}}" alt="" width="670" height="477" />
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
                    <h4 class="margin-five">New Holland Excel 9010 (E9010)</h4>
                    <h6>Excellent Technology:</h6>
                    <ul class="list-marked-2 list-category-2 margin-six">
                        <li>Power Shuttle: Perform easily forward and reverse operations with single shuttle gear lever without taking operator's hand off the steering wheel</li>
                        <li>Hydraulic actuated Oil immersed disc brakes Increased braking efficiency, reliable braking</li>
                        <li>Multi Speed PTO - 540/1000 with GSPTO* or 540/Reverse PTO* More PTO options, suitable for all types of application</li>
                    </ul>
                    <h6>Excellent productivity:</h6>
                    <ul class="list-marked-2 list-category-2">
                        <li>90 HP Cat. Powerful & Fuel Efficient Engine with intercooler More Power, Lesser Diesel, Consumption & More Savings</li>
                        <li>20 Forward + 20 reverse speeds (creeper*) with Full Synchromesh shuttle Low-Medium-High Range Gear with shuttle, best suitable for every application</li>
                        <li>2000/2500* Kg High Lift Capacity More load handling capacity and better efficiency</li>
                    </ul>
                    <br>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/9010-brochure-india-en.pdf')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="2">Engine</th>
                        <th colspan="2">Air Cleaning System</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Make/Type</td>
                        <td>S 8000</td>
                        <td>Air Cleaner Type</td>
                        <td>Dry</td>
                    </tr>
                    <tr>
                        <td>No. of cylinders</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Engine HP Cat.</td>
                        <td>90</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Cooling System</th>
                        <th colspan="2">Fuel System</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Intercooler</td>
                        <td>Yes</td>
                        <td>Fuel Injection Pump</td>
                        <td>Rotary</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Fuel Tank Material</td>
                        <td>Fiber</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Fuel Tank Capacity (ltrs)</td>
                        <td>90</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Gear Box</th>
                        <th colspan="2">Ground Speeds</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Full Constant mesh/ Full Synchromesh*</td>
                        <td>12 Forward + 12 Reverse (Standard), km/hr</td>
                        <td>1.65 to 34.5</td>
                    </tr>
                    <tr>
                        <td>Forward and Reverse Shifting Type</td>
                        <td>Mechanical Synchro shuttle shift /Power Shuttle *</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>No. of Gears (Forward + Reverse)</td>
                        <td>12+12 with 03 Ranges, Low-Medium-High</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">PTO</th>
                        <th colspan="2">Brakes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PTO Control</td>
                        <td>Independent Clutch Lever</td>
                        <td>Brake Type</td>
                        <td>Mechanically Actuated Oil Immersed Multi Disc</td>
                    </tr>
                    <tr>
                        <td>PTO RPM</td>
                        <td>540 @ 2198 E RPM with 6 Splines Shaft</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Economy PTO</td>
                        <td>540 @ 1715 E RPM</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Reverse PTO</td>
                        <td>Clockwise and Anti-Clockwise rotation of PTO shaft</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Hydraulics</th>
                        <th colspan="2">Steering</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lift Capacity (Kg)</td>
                        <td>2000/2500* with Lift-O-Matic & Height Limiter</td>
                        <td>Type</td>
                        <td>Power</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Tyres</th>
                        <th colspan="2">Vehicle Dimensions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Front for 2WD</td>
                        <td>10x16</td>
                        <td>Wheel Base (2WD)/(4WD) (mm)</td>
                        <td>2283/2259</td>
                    </tr>
                    <tr>
                        <td>Front for 4WD</td>
                        <td>12.4x24</td>
                        <td>Total Weight 2WD/4WD (Kg)</td>
                        <td>3120/3250</td>
                    </tr>
                    <tr>
                        <td>Rear for 2WD & 4WD</td>
                        <td>18.4x30</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Hitches</th>
                        <th colspan="2">Operator Station</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tow Hook</td>
                        <td>Adjustable & Heavy Duty</td>
                        <td>Operator Seat</td>
                        <td>Adjustable Horizontally &Vertically</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Gear Levers</td>
                        <td>Side Shift</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Operator Platform</td>
                        <td>Flat Deck with Rubber Mat</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Clutch/Brake Pedals</td>
                        <td>Suspended Type</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection