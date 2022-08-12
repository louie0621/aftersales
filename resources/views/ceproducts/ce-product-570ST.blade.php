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
            <h3 class="breadcrumbs-custom-title">CASE Backhoe Loader 570ST</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Backhoe Loader 570ST</li>
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
                        <div class="item"><img src="{{ asset('images/product-570ST-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">570ST</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-570ST-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">570ST</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-570ST-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">570ST</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-570ST-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">570ST</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-570ST-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-570ST-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-570ST-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-570ST-4.jpg')}}" alt="" width="670" height="477" />
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Backhoe Loader 570ST</h4>
                    <p>The country’s best-selling backhoe loader in 2019* is an industry favorite because of its top-of-the-class breakout force, tremendous loader lift capacity and best-of-the-bunch cab visibility.</p>
                    <br>
                    <em>*Based on ERG Philippines report 2019</em>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/570ST.pdf')}}" target="_blank">Download Brochure</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Old Specs -->
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
                        <td>Model</td>
                        <td>8045.45.748</td>
                        <td>Transmissio</td>
                        <td>CARRARO 2WD TLB1 or 4WD TLB1</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Turbocharged aftercooler</td>
                        <td>Type</td>
                        <td>Power Shuttle with 4 forward and 4 reverse travel gears</td>
                    </tr>
                    <tr>
                        <td>Displacement / Compression ratio</td>
                        <td>3.9 l / 18.3:1</td>
                        <td>Gear</td>
                        <td>Forward - Reverse (speed kmph)</td>
                    </tr>
                    <tr>
                        <td>Bore/Stroke</td>
                        <td>104 x 115mm</td>
                        <td>1st - 2nd - 3rd -4th Speed</td>
                        <td>6.2/7.4 - 10/12 - 20.7/24.8 - 39.2/NR</td>
                    </tr>
                    <tr>
                        <td>Horsepower - rated at 2200 rpm</td>
                        <td>96 hp</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maximum torque at 1300 rpm</td>
                        <td>420 Nm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Engine speeds</td>
                        <td>2200 rated speed, full load</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">FRONT AXLE</th>
                        <th colspan="2">REAR AXLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2 Wheel Drive (Standard)</td>
                        <td>Model CNH PS1300</td>
                        <td>Model</td>
                        <td>CARRARO 28.32M</td>
                    </tr>
                    <tr>
                        <td>Type - Oscillation</td>
                        <td>+/- 10.5°</td>
                        <td>Type</td>
                        <td>Rigid</td>
                    </tr>
                    <tr>
                        <td>4 Wheel Drive (Optional)</td>
                        <td>Model CARRARO 26.17</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Type - Oscillation</td>
                        <td>+/- 8°</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">BRAKES</th>
                        <th colspan="2">HYDRAULIC SYSTEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Services brakes</td>
                        <td>Type wet multi-disc / Nr. of discs 6</td>
                        <td>Type</td>
                        <td>Open center with double gear pump</td>
                    </tr>
                    <tr>
                        <td>Parking Brakes</td>
                        <td>Manual, with lever</td>
                        <td>Flow rate</td>
                        <td>145 Ipm @ 2200rpm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pressure</td>
                        <td>210 bar</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">STEERING</th>
                        <th colspan="2">CABIN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Power Steering</td>
                        <td>Certification</td>
                        <td>ROPS/FOPS</td>
                    </tr>
                    <tr>
                        <td>System pressure / Displacement</td>
                        <td>140 bar / 125cc</td>
                        <td>Air conditioning</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Turning radius (outside of the bucket)</td>
                        <td>5550 mm with brake</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tread width</td>
                        <td>1697 mm front</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">SERVICE CAPACITIES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Engine oil</td>
                        <td>9.1 ltr</td>
                        <td>Hydraulic oil</td>
                        <td>110 ltr</td>
                    </tr>
                    <tr>
                        <td>Trasmission oil</td>
                        <td>19/21 ltr</td>
                        <td>Fuel tank</td>
                        <td>129 ltr</td>
                    </tr>
                    <tr>
                        <td>Front axle oil</td>
                        <td>-/9 ltr</td>
                        <td>Coolant</td>
                        <td>24 ltr</td>
                    </tr>
                    <tr>
                        <td>Rear axle oil</td>
                        <td colspan="3">17 ltr</td>
                    </tr>
                    <tr>
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
                        <td>96 Hp</td>
                        <td>Loader Capacity</td>
                        <td>4-in-1 - 1 cbm bucket</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>4500 kg</td>
                        <td>Other Features</td>
                        <td>Side Shift</td>
                    </tr>
                    <tr>
                        <td>Bucket Capacity</td>
                        <td>Heavy Duty Backhoe 600mm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection