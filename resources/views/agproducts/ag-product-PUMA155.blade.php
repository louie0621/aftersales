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
            <h3 class="breadcrumbs-custom-title">CASE-IH PUMA155</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/agriculture')}}">Agriculture Products</a></li>
            <li class="active">CASE-IH PUMA155</li>
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
                        <div class="item"><img src="{{ asset('images/product-puma155-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-5.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-6.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-7.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-8.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-9.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">PUMA155</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-puma155-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-5.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-6.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-7.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-8.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-puma155-9.jpg')}}" alt="" width="670" height="477" />
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
                    <h4 class="margin-six">CASE-IH PUMA155</h4>
                    <p>Let’s face it. Goals change. Needs change. The world changes. But the number of hours in the day never does. That’s why Case IH developed an efficient, multi-purpose tractor line with just the right amount of power for both row-crop and livestock applications – the Puma™ Series Tractors. They’re reliable. They’re durable. They’re fuel efficient. They’re Puma.</p>
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
                        <td>Number of cylinders / type</td>
                        <td>6 turbo, intercooled</td>
                        <td>6 turbo, intercooled</td>
                        <td>6 turbo, intercooled</td>
                    </tr>
                    <tr>
                        <td>Capacity (litres)</td>
                        <td>6.7</td>
                        <td>6.7</td>
                        <td>6.7</td>
                    </tr>
                    <tr>
                        <td>Bore x stroke mm</td>
                        <td>104 x 132</td>
                        <td>104 x 132</td>
                        <td>104 x 132</td>
                    </tr>
                    <tr>
                        <td>Rated power ECE R120 (kW/hp(CV))</td>
                        <td>104 / 142</td>
                        <td>116 / 158</td>
                        <td>134 / 182</td>
                    </tr>
                    <tr>
                        <td>Rated power ECE R120 Power Management (kW/hp(CV))</td>
                        <td>123 / 167</td>
                        <td>135 / 183</td>
                        <td>160 / 218</td>
                    </tr>
                    <tr>
                        <td>Rated engine speed (rpm)</td>
                        <td>2200</td>
                        <td>2200</td>
                        <td>2200</td>
                    </tr>
                    <tr>
                        <td>Maximum power ECE R120 (kW/hp(CV))</td>
                        <td>112 / 152</td>
                        <td>124 / 169</td>
                        <td>147 / 200</td>
                    </tr>
                    <tr>
                        <td>Maximum power ECE R120 Power Management (kW/hp(CV))</td>
                        <td>131 / 178</td>
                        <td>142 / 193</td>
                        <td>172 / 234</td>
                    </tr>
                    <tr>
                        <td>... at engine speed (rpm)</td>
                        <td>1900 - 2000</td>
                        <td>1900 - 2000</td>
                        <td>1900 - 2000</td>
                    </tr>
                    <tr>
                        <td>Maximum torque (Nm/rpm)</td>
                        <td>643 / 1400</td>
                        <td>690 / 1400</td>
                        <td>844 / 1400</td>
                    </tr>
                    <tr>
                        <td>Maximum torque - Power Management (Nm/rpm)</td>
                        <td>678 / 1600</td>
                        <td>748 / 1600</td>
                        <td>938 / 1600</td>
                    </tr>
                    <tr>
                        <td>Torque rise Standard / Power Management (%)</td>
                        <td>42 / 27</td>
                        <td>37 / 28</td>
                        <td>45 / 35</td>
                    </tr>
                    <tr>
                        <td>Fuel tank (litres)</td>
                        <td>300</td>
                        <td>300</td>
                        <td>410</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Transmission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>18x6 Semi- / Full Powershift 40 kph</td>
                        <td>Optional / Standard</td>
                        <td>Optional / Standard</td>
                        <td>-/ Standard</td>
                    </tr>
                    <tr>
                        <td>19x6 Semi- / Full Powershift Economy 40 kph @ reduced rpm</td>
                        <td>Optional / Optional</td>
                        <td>Optional / Optional</td>
                        <td>- / Optional</td>
                    </tr>
                    <tr>
                        <td>19x6 Semi- / Full Powershift 50 kph</td>
                        <td>Optional / Optional</td>
                        <td>Optional / Optional</td>
                        <td>- / Optional</td>
                    </tr>
                    <tr>
                        <td>CVT 40 kph Economy @ reduced rpm</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>CVT 50 kph economy @reduced rpm</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Creeper</td>
                        <td>Optional</td>
                        <td>Optional</td>
                        <td>Optional</td>
                    </tr>
                    <tr>
                        <td>Rear axle diff-lock type</td>
                        <td>Multi disc wet plate with management system</td>
                        <td>Multi disc wet plate with management system</td>
                        <td>Multi disc wet plate with management system</td>
                    </tr>
                    <tr>
                        <td>Service brake</td>
                        <td>Hydraulically operated multiple wet disc brake, self adjusting</td>
                        <td>Hydraulically operated multiple wet disc brake, self adjusting</td>
                        <td>Hydraulically operated multiple wet disc brake, self adjusting</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Four-Wheel Drive and Steering</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Electro-hydraulic with management system</td>
                        <td>Electro-hydraulic with management system</td>
                        <td>Electro-hydraulic with management system</td>
                    </tr>
                    <tr>
                        <td>Front axle suspension</td>
                        <td>Optional</td>
                        <td>Optional</td>
                        <td>Optional Active</td>
                    </tr>
                    <tr>
                        <td>Steering angle (?)</td>
                        <td>55</td>
                        <td>55</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Min. turning radius track setting 1829 mm (m)</td>
                        <td>5.45</td>
                        <td>5.45</td>
                        <td>6.1</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Power Take Off</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Electro-hydraulic with Auto PTO control available</td>
                        <td>Electro-hydraulic with Auto PTO control available</td>
                        <td>Electro-hydraulic with Auto PTO control available</td>
                    </tr>
                    <tr>
                        <td>Speeds Standard / Option</td>
                        <td>540/540E/1000 or 540/1000</td>
                        <td>540/540E/1000 or 540/1000</td>
                        <td>540E/1000 or 540/1000</td>
                    </tr>
                    <tr>
                        <td>Engine speeds Standard / Option (rpm)</td>
                        <td>1969/1546/2120 or 1969/2120</td>
                        <td>1969/1546/2120 or 1969/2120</td>
                        <td>1569/1893 or 1893/1950</td>
                    </tr>
                    <tr>
                        <td>Shaft type</td>
                        <td>1 3/8?21 splines / 1 3/8?6 splines</td>
                        <td>1 3/8?21 splines / 1 3/8?6 splines</td>
                        <td>1 3/8?21 splines / 1 3/8?6 splines / 1 3/4?20 splines</td>
                    </tr>
                    <tr>
                        <td>Front PTO with 1000 rpm</td>
                        <td>Optional</td>
                        <td>Optional</td>
                        <td>Optional</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Hydraulic System</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Max. pump flow Standard/Optional and system type main hydraulic (l/min)</td>
                        <td>113 PFC / -</td>
                        <td>113 PFC / -</td>
                        <td>120 / 150 PFC / 150/170 PFC on CVT</td>
                    </tr>
                    <tr>
                        <td>System pressure (bar)</td>
                        <td>210</td>
                        <td>210</td>
                        <td>215</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Control Type EHC with Ride Control</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Max. lift capacity (kg) Standard/Optional</td>
                        <td>6687 / 8257</td>
                        <td>6687 / 8257</td>
                        <td>8647 / 10460</td>
                    </tr>
                    <tr>
                        <td>Max. number of remote valves Standard / Multicontroller</td>
                        <td>4 mechanical or 4 electronic with 5 electronic available on 165-210</td>
                        <td>4 mechanical or 4 electronic with 5 electronic available on 165-210</td>
                        <td>4 mechanical or 4 electronic with 5 electronic available on 165-210</td>
                    </tr>
                    <tr>
                        <td>Max. number of mid mount valves with electronic joystick</td>
                        <td>3 electr.</td>
                        <td>3 electr.</td>
                        <td>4 electr.</td>
                    </tr>
                    <tr>
                        <td>Category type</td>
                        <td>Cat II / III</td>
                        <td>Cat II / III</td>
                        <td>Cat. III</td>
                    </tr>
                    <tr>
                        <td>Front hitch lift capacity (kg)</td>
                        <td>3568</td>
                        <td>3568</td>
                        <td>3900</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Weight</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Minimum weight (kg)</td>
                        <td>5400</td>
                        <td>5600</td>
                        <td>6850</td>
                    </tr>
                    <tr>
                        <td>Permissible total weight (kg)</td>
                        <td>10500</td>
                        <td>10500</td>
                        <td>13000</td>
                    </tr>
                    <tr>
                        <td>Max. permissible weight front (kg)</td>
                        <td>4900</td>
                        <td>4900</td>
                        <td>6000</td>
                    </tr>
                    <tr>
                        <td>Max. permissible weight rear (kg)</td>
                        <td>7800</td>
                        <td>7800</td>
                        <td>9500</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Dimensions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A: Total length (mm)</td>
                        <td>4449</td>
                        <td>4449</td>
                        <td>4916</td>
                    </tr>
                    <tr>
                        <td>B: Total height (mm)</td>
                        <td>2985</td>
                        <td>2985</td>
                        <td>3040</td>
                    </tr>
                    <tr>
                        <td>C: Total width (across rear fenders with 150 mm extension) (mm)</td>
                        <td>2682</td>
                        <td>2682</td>
                        <td>2682</td>
                    </tr>
                    <tr>
                        <td>D: Wheel base (mm) Standard/with front axle suspension</td>
                        <td>2734 / 2789</td>
                        <td>2734 / 2789</td>
                        <td>2884</td>
                    </tr>
                    <tr>
                        <td>E: Height at centre of rear axle / highest point (mm)</td>
                        <td>2180</td>
                        <td>2180</td>
                        <td>2240</td>
                    </tr>
                    <tr>
                        <td>F: Track setting front (mm)</td>
                        <td>1560 - 2256</td>
                        <td>1560 - 2256</td>
                        <td>1552 - 2269</td>
                    </tr>
                    <tr>
                        <td>G: Track setting rear (mm)</td>
                        <td>1470 - 2294</td>
                        <td>1470 - 2294</td>
                        <td>1524 - 2438</td>
                    </tr>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">Standard Tyres</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Front</td>
                        <td>480/70R28</td>
                        <td>480/70R28</td>
                        <td>480/70R28</td>
                    </tr>
                    <tr>
                        <td>Rear</td>
                        <td>580/70R38</td>
                        <td>580/70R38</td>
                        <td>580/70R38</td>
                    </tr>
            </table>
        </div>
    </div>
</section>
@endsection