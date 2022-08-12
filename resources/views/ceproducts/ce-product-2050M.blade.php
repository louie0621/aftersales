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
            <h3 class="breadcrumbs-custom-title">CASE Crawler Dozer 2050M</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Crawler Dozer 2050M</li>
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
                        <div class="item"><img src="{{ asset('images/product-2050M-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">2050M</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-2050M-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">2050M</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-2050M-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">2050M</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-2050M-4.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">2050M</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-2050M-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-2050M-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-2050M-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-2050M-4.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Crawler Dozer 2050M</h4>
                    <p>With a massive drawbar pull of over 36,700 kgs, the CASE 2050M can push an immense amount of material for a dozer of its class. It delivers best-in-class powertrain technology for superior track power and outstanding blade force through the turns.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/1150L-2050M.pdf')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="4">ENGINE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Model</td>
                        <td>FPT Industrial Engine F4HE96848*J01 Tier 3 regulations</td>
                        <td>Gross</td>
                        <td>232 hp (173 kW) @ 2200 rpm</td>
                    </tr>
                    <tr>
                        <td>Cylinders</td>
                        <td>6</td>
                        <td colspan="2"><b>Engine lubrification</b></td>
                    </tr>
                    <tr>
                        <td>Displacement</td>
                        <td>6,7 L</td>
                        <td>Pump</td>
                        <td>Deep sump plate cooler w/ pressurized under-piston nozzles</td>
                    </tr>
                    <tr>
                        <td>Fuel injection</td>
                        <td>Direct common rail</td>
                        <td colspan="2"><b>Pump operating angle ratings</b></td>
                    </tr>
                    <tr>
                        <td>Fuel filter</td>
                        <td>Scr-on, with screen</td>
                        <td>Side-to-side</td>
                        <td>35°</td>
                    </tr>
                    <tr>
                        <td>Air in take</td>
                        <td>Cross-flow</td>
                        <td>Fore and aft</td>
                        <td>45°</td>
                    </tr>
                    <tr>
                        <td>Cooling</td>
                        <td>Liquid</td>
                        <td colspan="2"><b>Radiator</b></td>
                    </tr>
                    <tr>
                        <td>Engine speeds</td>
                        <td>RPM</td>
                        <td>Core size area</td>
                        <td>0.33 m²</td>
                    </tr>
                    <tr>
                        <td>High idle - no load</td>
                        <td>2200 +/- 50</td>
                        <td>Rows of tubes</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Rated - full load</td>
                        <td>2200</td>
                        <td colspan="2"><b>Fan</b></td>
                    </tr>
                    <tr>
                        <td>Low idle</td>
                        <td>800 +/- 25</td>
                        <td>Diameter</td>
                        <td>700 mm</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Horsepower SAE J1349</b></td>
                        <td>Ratio</td>
                        <td>hydraulically driven</td>
                    </tr>
                    <tr>
                        <td>Net</td>
                        <td>214 hp (160 kW) @ 2200 rpm</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">TRANSMISSION COOLING</th>
                        <th colspan="2">POWER TRAIN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Oil to air</td>
                        <td colspan="2"><b>Dual path hydrostatic</b></td>
                    </tr>
                    <tr>
                        <td>Core size</td>
                        <td>0.31 m²</td>
                        <td>Pump</td>
                        <td>Variable axial piston</td>
                    </tr>
                    <tr>
                        <td colspan="2">ELECTRICAL SYSTEM</td>
                        <td>Motor</td>
                        <td>Variable bent axis piston</td>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>Max. drawbar pull</td>
                        <td>360 kN</td>
                    </tr>
                    <tr>
                        <td>Alternator</td>
                        <td>120 amps</td>
                        <td>Transmission</td>
                        <td>Single lever control electronic straight tracking</td>
                    </tr>
                    <tr>
                        <td>Batteries(2)</td>
                        <td>12 Volt, low maintenance, 1000 cold-cranking amps @ -18°C</td>
                        <td>Oil filter</td>
                        <td>4 micron, spin-on, replaceable</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2"><b>Travel speeds</b></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Forward</td>
                        <td>0 - 9.3 km/h</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Reverse</td>
                        <td>0 - 9.3 km/h</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2">Parking brakes Heavy-duty (Spring Applied Hydraulically Released)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Steering brakes</td>
                        <td>Hydrostatic</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Final drive</td>
                        <td>2 helical gear reductions to planetary</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Ratio</td>
                        <td>48.75:1</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">BLADE</th>
                        <th colspan="2">RIPPER</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Variable blade pitch - adjustable</td>
                        <td>55° +/- 5°</td>
                        <td>Max. penetration</td>
                        <td>581 mm</td>
                    </tr>
                    <tr>
                        <td>Lift speed - per second</td>
                        <td>483 mm</td>
                        <td>Width</td>
                        <td>2159 mm</td>
                    </tr>
                    <tr>
                        <td>Cutting edge</td>
                        <td>Reversible, replaceable</td>
                        <td>Cut width</td>
                        <td>1938 mm</td>
                    </tr>
                    <tr>
                        <td>Width (PAT)</td>
                        <td>254 mm</td>
                        <td>Max. ground clearance</td>
                        <td>518 mm</td>
                    </tr>
                    <tr>
                        <td>Width (Bulldozer HSU)</td>
                        <td>200 mm</td>
                        <td>Max. number of shanks</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Thickness</td>
                        <td>20 m</td>
                        <td>Tooth spacing w/3 teeth</td>
                        <td>930 mm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Hydraulic cylinder</td>
                        <td>Double-acting</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Diameter</td>
                        <td>133.4 mm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Stroke</td>
                        <td>597 mm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Rod</td>
                        <td>70 mm</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">OPERATOR ENVIRONMENT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">ROPS/FOPS cab</td>
                        <td colspan="2">Park brake engaged</td>
                    </tr>
                    <tr>
                        <td colspan="2">Pneumatically suspended seat</td>
                        <td colspan="2">Service soon indicator</td>
                    </tr>
                    <tr>
                        <td colspan="2">W/ back adjustment</td>
                        <td colspan="2">Transmission filter</td>
                    </tr>
                    <tr>
                        <td colspan="2">Seat belt</td>
                        <td colspan="2">Transmission charge pressure</td>
                    </tr>
                    <tr>
                        <td colspan="2">Adjustable armrests</td>
                        <td colspan="2"><b>Gauges</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">Foot rests</td>
                        <td colspan="2">Battery voltage</td>
                    </tr>
                    <tr>
                        <td colspan="2">Tool storage area</td>
                        <td colspan="2">Digital hour meter/tachometer diagnostic/service reminder</td>
                    </tr>
                    <tr>
                        <td colspan="2">Headliner floor mat</td>
                        <td colspan="2">Fuel level</td>
                    </tr>
                    <tr>
                        <td colspan="2">Tilting seat platform</td>
                        <td colspan="2">Transmission oil temperature</td>
                    </tr>
                    <tr>
                        <td colspan="2">Noise level 78dbA</td>
                        <td colspan="2">Transmission speed indicator</td>
                    </tr>
                    <tr>
                        <td colspan="2">Warning lights</td>
                        <td colspan="2">Water temperature</td>
                    </tr>
                    <tr>
                        <td colspan="2">Air filter</td>
                        <td colspan="2">Audible warnings</td>
                    </tr>
                    <tr>
                        <td colspan="2">Alternator</td>
                        <td colspan="2">Engine coolant temperature</td>
                    </tr>
                    <tr>
                        <td colspan="2">Diagnostic fault indicator</td>
                        <td colspan="2">Engine oil pressure</td>
                    </tr>
                    <tr>
                        <td colspan="2">Engine coolant temperature</td>
                        <td colspan="2">Low fuel level</td>
                    </tr>
                    <tr>
                        <td colspan="2">Engine oil pressure</td>
                        <td colspan="2">Transmission charge pressure</td>
                    </tr>
                    <tr>
                        <td colspan="2">Hydraulic filter</td>
                        <td colspan="2">Transmission/ hydraulic temperature</td>
                    </tr>
                    <tr>
                        <td colspan="2">Low fuel level</td>
                        <td colspan="2"></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">HYDRAULICS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pump flow @ 2200 RPM</td>
                        <td>153 L/min</td>
                        <td>Bore diameter</td>
                        <td>127 mm</td>
                    </tr>
                    <tr>
                        <td>Max pressure</td>
                        <td>248 bar</td>
                        <td>Rod diameter</td>
                        <td>63.5 mm</td>
                    </tr>
                    <tr>
                        <td>Lift cylinder PAT</td>
                        <td>nr.2</td>
                        <td>Stroke</td>
                        <td>148.4 mm</td>
                    </tr>
                    <tr>
                        <td>Bore diameter</td>
                        <td>114 mm</td>
                        <td colspan="2"><b>Lift cylinder Bull Dozer</b></td>
                    </tr>
                    <tr>
                        <td>Rod diameter</td>
                        <td>63.5 mm</td>
                        <td>Bore diameter</td>
                        <td>82.6 mm</td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>428.8 mm</td>
                        <td>Rod diameter</td>
                        <td>50.8 mm</td>
                    </tr>
                    <tr>
                        <td>Angle cylinder PAT</td>
                        <td>nr.2</td>
                        <td>Stroke</td>
                        <td>1000 mm</td>
                    </tr>
                    <tr>
                        <td>Bore diameter</td>
                        <td>114.3 mm</td>
                        <td colspan="2"><b>Tilt cylinder Bull Dozer</b></td>
                    </tr>
                    <tr>
                        <td>Rod diameter</td>
                        <td>63.5 mm</td>
                        <td>Bore diameter</td>
                        <td>114.3 mm</td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>502.7 mm</td>
                        <td>Rod diameter</td>
                        <td>63.5 mm</td>
                    </tr>
                    <tr>
                        <td>Tilt cylinder PAT</td>
                        <td>nr.1</td>
                        <td>Stroke</td>
                        <td>126 mm</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">TRACK AND SHOE OPTIONS</th>
                        <th colspan="2">SERVICE CAPACITY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2"><b>XLT (EXTRA LONG TRACKS)</b></td>
                        <td>Fuel Tank</td>
                        <td>405 L</td>
                    </tr>
                    <tr>
                        <td>610 mm</td>
                        <td>closed grousers and CLT</td>
                        <td>Engine oil w/ filter</td>
                        <td>16.4 L</td>
                    </tr>
                    <tr>
                        <td>610 mm</td>
                        <td>open grousers and CELT</td>
                        <td>Engine oil w/o filter</td>
                        <td>15.6 L</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Engine cooling system</td>
                        <td>30.28 L</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Hydraulic reservoir</td>
                        <td>210 L</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Final drive - per side</td>
                        <td>25 L</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Track rollers - each</td>
                        <td>0.275 L</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Front idlers - each</td>
                        <td>0.225 L</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Carrier rollers - each</td>
                        <td>0.334 L</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">OPERATING WEIGHT</th>
                        <th colspan="2">UNDERCARRIAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2"><b>Operating weight includes:</b></td>
                        <td>Track adjustment</td>
                        <td>Grease injection</td>
                    </tr>
                    <tr>
                        <td>Cab</td>
                        <td>Front pull hook</td>
                        <td>Frame</td>
                        <td>Oscillating equalizer beam suspension and pivot shaft</td>
                    </tr>
                    <tr>
                        <td>Full fuel tank</td>
                        <td>Rear retrieval hitch</td>
                        <td colspan="2"><b>Track link pitch</b></td>
                    </tr>
                    <tr>
                        <td>Hydraulic tanks</td>
                        <td>Track guides</td>
                        <td>CLT track</td>
                        <td>202.8 mm</td>
                    </tr>
                    <tr>
                        <td>Operator</td>
                        <td>170 lb (77 kg)</td>
                        <td>CELT track</td>
                        <td>202.8 mm</td>
                    </tr>
                    <tr>
                        <td>CLT chain</td>
                        <td>Horn</td>
                        <td>Track shoe height</td>
                        <td>73 mm</td>
                    </tr>
                    <tr>
                        <td>Lights</td>
                        <td>Track shoe</td>
                        <td>Pin diameter</td>
                        <td>44.5 mm</td>
                    </tr>
                    <tr>
                        <td>C – frame</td>
                        <td>Blade width as noted</td>
                        <td colspan="2"><b>Bushing diameter</b></td>
                    </tr>
                    <tr>
                        <td>Extra Long Tracks</td>
                        <td>20599 kg PAT, 20592 kg Semi-U</td>
                        <td>CLT track</td>
                        <td>72.7 mm</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>ADD-ON WEIGHTS (KG)</b></td>
                        <td>CELT track</td>
                        <td>93 mm</td>
                    </tr>
                    <tr>
                        <td>Drawbar</td>
                        <td>66</td>
                        <td colspan="2"><b>Track shoes per side</b></td>
                    </tr>
                    <tr>
                        <td>Ripper (3 shank)</td>
                        <td>1874</td>
                        <td>CLT/CELT track</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>Winch</td>
                        <td>2500</td>
                        <td>Track rollers per side</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>CELT CHAIN - PER TRACK (KG)</b></td>
                        <td>Carrier rollers per side</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>24” (610 mm)</td>
                        <td>1789</td>
                        <td>Track roller rail diameter</td>
                        <td>187.6 mm</td>
                    </tr>
                    <tr>
                        <td>Additional weight vs CLT - per track</td>
                        <td>43</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Center rock guard</td>
                        <td>306</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sweeps</td>
                        <td>63</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="4">TRACK ON GROUND</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4"><b>Shoe area</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">610mm</td>
                        <td colspan="2">39979 cm²</td>
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
                        <td>232 Hp</td>
                        <td>Track Width</td>
                        <td>610 mm track</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>20592 kg</td>
                        <td>Other Features</td>
                        <td>3 shank ripper</td>
                    </tr>
                    <tr>
                        <td>Blade Specs</td>
                        <td>5.6 cum Semi-U Dozer Blade</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection