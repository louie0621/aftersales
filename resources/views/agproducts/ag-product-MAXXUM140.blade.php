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
            <h3 class="breadcrumbs-custom-title">CASE-IH MAXXUM140</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">CASE-IH MAXXUM140</li>
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
                        <div class="item"><img src="{{ asset('images/product-maxxum140-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-5.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-6.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-7.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-8.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">MAXXUM140</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-maxxum140-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-5.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-6.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-7.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-maxxum140-8.jpg')}}" alt="" width="670" height="477" />
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
                    <h4 class="margin-six">CASE-IH MAXXUM140</h4>
                    <p>Throughout their history, Case IH Maxxum tractors have set the standard for power, performance and ease of ownership. Available in “Value” and “Limited” configurations and offering six models, ranging from 112 to 141 horsepower, today’s Maxxum tractors provide all the power you need, the fuel economy you desire, and the options you demand. So you can get all the industry-leading features you want – and nothing you don’t – on this powerful multi-purpose machine.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/Brochure-CASE-IH.pdf')}}" target="_blank">Download Brochure</a>
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
                        <td>Rated power (hp) (ECE R120)</td>
                        <td>112</td>
                        <td>126</td>
                        <td>141</td>
                    </tr>
                    <tr>
                        <td>Rated Full Load (rpm)</td>
                        <td>2200</td>
                        <td>2200</td>
                        <td>2200</td>
                    </tr>
                    <tr>
                        <td>Cylinder/displacement (L)</td>
                        <td>4/4.5</td>
                        <td>6/6.75</td>
                        <td>6/6.75</td>
                    </tr>
                    <tr>
                        <td>Number of valves</td>
                        <td>8</td>
                        <td>12</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>Aspiration</td>
                        <td>Turbocharged/ Aftercooled</td>
                        <td>Turbocharged/ Aftercooled</td>
                        <td>Turbocharged/ Aftercooled</td>
                    </tr>
                    <tr>
                        <td>Fuel Injection</td>
                        <td>Mechanical</td>
                        <td>Mechanical</td>
                        <td>Mechanical</td>
                    </tr>
                    <tr>
                        <td>Fuel tank capacity (L)</td>
                        <td>176</td>
                        <td>250</td>
                        <td>250</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Trasmission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Standard</td>
                        <td>12F/12R Synchro</td>
                        <td>12F/12R Synchro</td>
                        <td>24F/24R with Hi/Lo Powershift</td>
                    </tr>
                    <tr>
                        <td>Optional</td>
                        <td>24F/24R with Hi/Lo Powershift</td>
                        <td>24F/24R with Hi/Lo Powershift</td>
                        <td>16F/16R Semi Powershift</td>
                    </tr>
                    <tr>
                        <td>Optional</td>
                        <td>16F/16R Semi Powershift</td>
                        <td>16F/16R Semi Powershift</td>
                        <td>17F/16R Semi Powershift</td>
                    </tr>
                    <tr>
                        <td>Creeper Transmission Options</td>
                        <td>24x24/48x48/32x32</td>
                        <td>24x24/48x48/32x32</td>
                        <td>32x32</td>
                    </tr>
                    <tr>
                        <td>PTO</td>
                        <td>540/1000</td>
                        <td>540/1000</td>
                        <td>540/1000</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Hydraulics</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hydraulic Type</td>
                        <td>Fixed Displacement / CCLS</td>
                        <td>Fixed Displacement / CCLS</td>
                        <td>Fixed Displacement / CCLS</td>
                    </tr>
                    <tr>
                        <td>Rear Remotes ? Std. / Opt.</td>
                        <td>2/3/4 Open Center</td>
                        <td>2/3/4 Open Center</td>
                        <td>2/3/4 Open Center</td>
                    </tr>
                    <tr>
                        <td>Standard Steering and Service Pump (lpm)</td>
                        <td>40</td>
                        <td>40</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Implement Pump (lpm)</td>
                        <td>63/80/113</td>
                        <td>63/80/113</td>
                        <td>63/80/113</td>
                    </tr>
                    <tr>
                        <td>Total Tractor Flow (lpm)</td>
                        <td>103/120/153</td>
                        <td>103/120/153</td>
                        <td>103/120/153</td>
                    </tr>
                    <tr>
                        <td>3-Point Hitch Category</td>
                        <td>Cat II Fixed / Cat II/III Quick Attach</td>
                        <td>Cat II Fixed / Cat II/III Quick Attach</td>
                        <td>Cat II Fixed / Cat II/III Quick Attach</td>
                    </tr>
                    <tr>
                        <td>Sensing Type</td>
                        <td>Mechanical Draft Control (MDC)/Electronic Draft Control</td>
                        <td>Mechanical Draft Control (MDC)/Electronic Draft Control</td>
                        <td>Electronic Draft Control (EDC)</td>
                    </tr>
                    <tr>
                        <td>Standard Hitch Lift Capacity (kg)</td>
                        <td>3345 (OECD Test)</td>
                        <td>3345 (OECD Test)</td>
                        <td>4181</td>
                    </tr>
                    <tr>
                        <td>Optional Lift Capacity (kg)</td>
                        <td>3763</td>
                        <td>3763</td>
                        <td>5286</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Shipping Weight Dimensions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Estimated Weight ? ROPS 2WD (kg)</td>
                        <td>4174</td>
                        <td>4294</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Estimated Weight ? ROPS MFD (kg)</td>
                        <td>4340</td>
                        <td>4460</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Estimated Weight ? Cab 2WD (kg)</td>
                        <td>4573</td>
                        <td>4694</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Estimated Weight ? Cab MFD (kg)</td>
                        <td>4740</td>
                        <td>4860</td>
                        <td>4950</td>
                    </tr>
                    <tr>
                        <td>Height to Top of ROPS (Up Position) **With 18.4R34 Tires. Suspended Cab adds 66 mm (mm)</td>
                        <td>2898**</td>
                        <td>2898**</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Height to Top of Cab **With 18.4R34 Tires. Suspended Cab adds 66 mm (mm)</td>
                        <td>2819**</td>
                        <td>2819**</td>
                        <td>2898**</td>
                    </tr>
                    <tr>
                        <td>Wheelbase ? 2WD (mm)</td>
                        <td>2370</td>
                        <td>2652</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Wheelbase ? 4WD (mm)</td>
                        <td>2412</td>
                        <td>2661</td>
                        <td>2661</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection