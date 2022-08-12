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
            <h3 class="breadcrumbs-custom-title">New Holland TS6.120</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">New Holland TS6.120</li>
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
                        <div class="item"><img src="{{ asset('images/product-ts6series-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TS6.120</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-ts6series-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TS6.120</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-ts6series-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TS6.120</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-ts6series-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">TS6.120</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-ts6series-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-ts6series-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-ts6series-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-ts6series-4.jpg')}}" alt="" width="670" height="477" />
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
                    <h4 class="margin-six">New Holland TS6.120</h4>
                    <h6>RELIABLE, RUGGED, SIMPLE</h4>
                        <p class="margin-six">TS6 Series tractors from New Holland trace their roots to 1965—to tractors famous for rock-solid construction, brute power and simple maintenance. New Holland knows that’s still what’s really important to you. That’s why a TS6 tractor is the one tractor you can turn to day in and day out to handle any chore you throw at it. Whether it’s working hard on the field, haying or putting in long hours on road, haulage in tough conditions, a Reliable & Rugged TS6 Series tractor from New Holland handles it all.</p>
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
                        <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/ts6-brochure-apac-en.pdf')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="4">Engine</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Engine type</td>
                        <td>4 cylinder</td>
                        <td>Make / model</td>
                        <td>NH FPT / NEF</td>
                    </tr>
                    <tr>
                        <td>Displacement (L)</td>
                        <td>4.5</td>
                        <td>Aspiration</td>
                        <td>Turbo intercooled</td>
                    </tr>
                    <tr>
                        <td>Emissions certification</td>
                        <td>Tier 3</td>
                        <td>Rated power (kW/hp)</td>
                        <td>88/118</td>
                    </tr>
                    <tr>
                        <td>Power (kW/hp)</td>
                        <td>74/99</td>
                        <td>Maximum torque @ 1250 rpm (Nm)</td>
                        <td>515</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Forward speed</th>
                        <th colspan="2">Transmission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>30 kph version (18.4R38) (kph</td>
                        <td>31.7</td>
                        <td>8 x 8 synchronized shuttle w/ left hand shuttle</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>40 kph version (18.4R38) (kph)</td>
                        <td>40.5</td>
                        <td>8 x 8 hydraulic shuttle w/ left hand shuttle</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>16 x 8 Hi-Low hydraulic shuttle w/ left hand shuttle</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Creeper option (all transmissions)</td>
                        <td>Optional</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">PTO (fully independent wet clutch)</th>
                        <th colspan="2">3 point hitch</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Speed Std. / Opt.</td>
                        <td>540 / 540-1000</td>
                        <td>Category</td>
                        <td>II</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Draft sensing</td>
                        <td>Top link</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Max. lift capacity (no assist ram) (kg)</td>
                        <td>2410</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Max. lift capacity (with 1 assist ram) (kg)</td>
                        <td>3639</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Max. lift capacity (with 2 assist rams) (kg)</td>
                        <td>4647</td>
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
                        <td>Standard flow pump (L/min)</td>
                        <td>49</td>
                        <td>Steering pump flow (L/min)</td>
                        <td>34</td>
                    </tr>
                    <tr>
                        <td>“High Flow” pump (L/min)</td>
                        <td>83</td>
                        <td>Wheelbase - 2WD (mm)</td>
                        <td>2571</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Wheelbase - 4WD (mm)</td>
                        <td>2520</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Axles</th>
                        <th colspan="2">Weight</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Front 2WD adjustable tread width (mm)</td>
                        <td>1422-2032</td>
                        <td>Minimum shipping weight - 2WD ROPS (kg)</td>
                        <td>3670</td>
                    </tr>
                    <tr>
                        <td>Front 4WD adjustable tread width (mm)</td>
                        <td>1626-2032</td>
                        <td>Minimum shipping weight - 4WD ROPS (kg)</td>
                        <td>4030</td>
                    </tr>
                    <tr>
                        <td>Flange axle: Rear adjustable tread width (mm)</td>
                        <td>1626-2032</td>
                        <td>Minimum shipping weight - 2WD cab (kg)</td>
                        <td>4000</td>
                    </tr>
                    <tr>
                        <td>Optional bar axle: Rear adjustable tread width (mm)</td>
                        <td>1575-2337</td>
                        <td>Minimum shipping weight - 4WD cab (kg)</td>
                        <td>4320</td>
                    </tr>
                    <tr>
                        <td>Front axle turn angle (2WD / 4WD) (°)</td>
                        <td>55</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">Dimensions*</th>
                        <th colspan="2">Key configurations</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Overall length - 2WD (mm)</td>
                        <td>4115</td>
                        <td>2WD ROPS</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Overall length - 4WD (mm)</td>
                        <td>4216</td>
                        <td>2WD cab</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Height, top of ROPS (mm)</td>
                        <td>2959</td>
                        <td>4WD ROPS</td>
                        <td>Standard</td>
                    </tr>
                    <tr>
                        <td>Height, top of cab (mm)</td>
                        <td>2816</td>
                        <td>4WD cab</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Height, top of exhaust (mm)</td>
                        <td>2700</td>
                        <td>Hi clearance (4WD only)</td>
                        <td>Optional</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">* Dimensions shown are with 18.4x34 rear tires</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
@endsection