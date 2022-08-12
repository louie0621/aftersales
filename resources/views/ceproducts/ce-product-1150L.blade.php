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
            <h3 class="breadcrumbs-custom-title">CASE Crawler Dozer 1150L</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Crawler Dozer 1150L</li>
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
                        <div class="item"><img src="{{ asset('images/product-1150L-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1150L</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1150L-2.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1150L</div>
                            </div>
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1150L-3.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">1150L</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-1150L-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1150L-2.jpg')}}" alt="" width="670" height="477" />
                        </div>
                        <div class="item"><img src="{{ asset('images/product-1150L-3.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Crawler Dozer 1150L</h4>
                    <p>Right up there in class drawbar pull, maximum visibility, a quiet comfortable cab, adjustable operator controls and time-saving serviceability features make the CASE 1150M the ideal dozer when pushing dirt is the name of the game.</p>
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
                    <a class="button button-lg button-primary button-winona" href="pdf/1150L-2050M.pdf" target="_blank">Download Brochure</a>
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
                        <th colspan="2">POWER TRAIN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Model</td>
                        <td>FPT Industrial Engine F4HE9684K</td>
                        <td colspan="2"><b>Dual path hydrostatic</b></td>
                    </tr>
                    <tr>
                        <td>Cylinders</td>
                        <td>6</td>
                        <td>Pump</td>
                        <td>Variable axial piston</td>
                    </tr>
                    <tr>
                        <td>Displacement</td>
                        <td>6,7 L</td>
                        <td>Motor</td>
                        <td>Varialble bent axis piston</td>
                    </tr>
                    <tr>
                        <td>Fuel injection</td>
                        <td>Direct common rail</td>
                        <td>Max. drawbar pull</td>
                        <td>214 kN</td>
                    </tr>
                    <tr>
                        <td>Fuel filter</td>
                        <td>Screw-on, with screen</td>
                        <td>Transmission</td>
                        <td>Single lever control electronic straight tracking</td>
                    </tr>
                    <tr>
                        <td>Cooling</td>
                        <td>Liquid</td>
                        <td>Oil filter</td>
                        <td>4 micron, spin-on, repleceable</td>
                    </tr>
                    <tr>
                        <td>Engine speeds</td>
                        <td>RPM</td>
                        <td colspan="2"><b>Travel speeds</b></td>
                    </tr>
                    <tr>
                        <td>High idle - no load</td>
                        <td>2200 +/- 50</td>
                        <td>Forward</td>
                        <td>0 - 9.7 km/h</td>
                    </tr>
                    <tr>
                        <td>Rated - full load</td>
                        <td>2200</td>
                        <td>Reverse</td>
                        <td>0 - 9.7 km/h</td>
                    </tr>
                    <tr>
                        <td>Low idle</td>
                        <td>800 +/- 25</td>
                        <td colspan="2"><b>SAHR Parking brake (Spring Applied Hidraulically Released)</b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Horsepower SAEJ1349</b></td>
                        <td>Steering brakes</td>
                        <td>Hydrostatic</td>
                    </tr>
                    <tr>
                        <td>Net</td>
                        <td>118 hp (88 kW) @ 2200rpm</td>
                        <td>Final drive</td>
                        <td>2 helical gear reductions to planetary reduction</td>
                    </tr>
                    <tr>
                        <td>Gross</td>
                        <td>130 hp (97 kW) @ 2200rpm</td>
                        <td>Reduction ratio</td>
                        <td>61.4:1</td>
                    </tr>
                    <tr>
                        <td>Engine lubrification</td>
                        <td>"Forced lubrification" with oil jet piston refrigeration system</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Pump operating angle ratings</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Side-to-side</td>
                        <td>45°</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Fore and aft</td>
                        <td>45°</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Radiator</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Core size area</td>
                        <td>0.61 m²</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Rows of tubes</td>
                        <td>4</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Fan</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Diameter</td>
                        <td>660 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Propeller</td>
                        <td>Belt mechanical drive</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">TRANSMISSION COOLING</th>
                        <th colspan="2">ELECTRICAL SYSTEM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Heat exchange</td>
                        <td>Alternator</td>
                        <td>65 amps</td>
                    </tr>
                    <tr>
                        <td>Core size</td>
                        <td>0.54 m²</td>
                        <td>Batteries (2)</td>
                        <td>2x 12 V in series, maintenance free. 750 A CCA at -18°C</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">HYDRAULICS</th>
                        <th colspan="2">OPERATING WEIGHT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Pump flow @ 2200 RPM</td>
                        <td>132 L/m</td>
                        <td colspan="2">Unit equipped with a cab, full fuel tank, 77 kg (170 lb), frontal traction hook, track protection, PAT blade, rear drawbar pull</td>
                    </tr>
                    <tr>
                        <td>Max pressure</td>
                        <td>207 bar</td>
                        <td>Extra Long Tracks (XLT)</td>
                        <td>13625 kg</td>
                    </tr>
                    <tr>
                        <td><b>Lift cylinder PAT</b></td>
                        <td><b>nr.2</b></td>
                        <td colspan="2">ADD-ON WEIGHTS</td>
                    </tr>
                    <tr>
                        <td>Bore diameter</td>
                        <td>108 mm</td>
                        <td>Drawbar</td>
                        <td>66 kg</td>
                    </tr>
                    <tr>
                        <td>Rod diameter</td>
                        <td>50.8 mm</td>
                        <td>Ripper</td>
                        <td>1043 kg</td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>445 mm</td>
                        <td>Roller protection</td>
                        <td>134 kg</td>
                    </tr>
                    <tr>
                        <td><b>Angle cylinder PAT</b></td>
                        <td><b>nr.2</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bore diameter</td>
                        <td>127 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Rod diameter</td>
                        <td>63.5 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>381 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Tilt cylinder PAT</b></td>
                        <td><b>nr.1</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bore diameter</td>
                        <td>127 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Rod diameter</td>
                        <td>63.5 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>120 mm</td>
                        <td></td>
                        <td></td>
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
                        <td colspan="2">Cab ROPS/FOPS with air-conditioning</td>
                        <td colspan="2">Engine oil pressure</td>
                    </tr>
                    <tr>
                        <td colspan="2">Single joystick for speed and direction</td>
                        <td colspan="2">Emergency brake on</td>
                    </tr>
                    <tr>
                        <td colspan="2">Adjustable seat upholstered with cloth and air suspension</td>
                        <td colspan="2">Maintenance service indicator</td>
                    </tr>
                    <tr>
                        <td>Retractable seatbelt</td>
                        <td>50,8 mm (2")</td>
                        <td colspan="2">Transmission filter</td>
                    </tr>
                    <tr>
                        <td colspan="2">Adjustable arm rests</td>
                        <td colspan="2">Transmission load pressure</td>
                    </tr>
                    <tr>
                        <td colspan="2">Two foot rests</td>
                        <td colspan="2"><b>Indicators</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">Rear view mirror</td>
                        <td colspan="2">Battery voltage</td>
                    </tr>
                    <tr>
                        <td colspan="2">Three windshield wipers</td>
                        <td colspan="2">Fuel level</td>
                    </tr>
                    <tr>
                        <td colspan="2">A dome light</td>
                        <td colspan="2">Digital hour meter/tachometer/diagnosis/service reminder</td>
                    </tr>
                    <tr>
                        <td colspan="2">12 V connector for accessories</td>
                        <td colspan="2"><b>Transmission oil temperature</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">Padded roof</td>
                        <td colspan="2">Transmission speed indicator</td>
                    </tr>
                    <tr>
                        <td colspan="2">Floor mats</td>
                        <td colspan="2">Cooling fluid temperature</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Warning lights</b></td>
                        <td colspan="2"><b>Audible alarms</b></td>
                    </tr>
                    <tr>
                        <td colspan="2">Air filter</td>
                        <td colspan="2">Engine cooling fluid temperature</td>
                    </tr>
                    <tr>
                        <td colspan="2">Alternator</td>
                        <td colspan="2">Engine oil pressure</td>
                    </tr>
                    <tr>
                        <td colspan="2">Failure diagnosis indicator</td>
                        <td colspan="2">Low fuel</td>
                    </tr>
                    <tr>
                        <td colspan="2">Engine cooling fluid temperature</td>
                        <td colspan="2">Hydraulic/hydrostatic system oil temperature</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">OPERATING WEIGHT</th>
                        <th colspan="2">BLADE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">Unit equipped with a cab, full fuel tank, 77 kg (170 lb), frontal traction hook, track protection, PAT blade, rear drawbar pull</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Extra Long Tracks (XLT)</td>
                        <td>13625 kg</td>
                        <td>Variable blade pitch - adjustable</td>
                        <td>55° to 60°</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>ADD-ON WEIGHTS</b></td>
                        <td>Lift speed - per second</td>
                        <td>483 mm</td>
                    </tr>
                    <tr>
                        <td>Drawbar</td>
                        <td>66 kg</td>
                        <td>Cutting edge</td>
                        <td>Reversible, replaceable</td>
                    </tr>
                    <tr>
                        <td>Ripper</td>
                        <td>1043 kg</td>
                        <td>- Width</td>
                        <td>203.2 mm</td>
                    </tr>
                    <tr>
                        <td>Roller protection</td>
                        <td>134 kg</td>
                        <td>- Lenght</td>
                        <td>2158 mm</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>- Thickness</td>
                        <td>19.1 mm</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">UNDERCARRIAGE</th>
                        <th colspan="2">TRACK ON GROUND</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Track adjustment</td>
                        <td>by grease injection</td>
                        <td>Shoe width</td>
                        <td>508 mm</td>
                    </tr>
                    <tr>
                        <td>Hydraulic frame</td>
                        <td>Two-tier chassis, manufactured in structural steel</td>
                        <td>Tracks on ground</td>
                        <td>26323 cm²</td>
                    </tr>
                    <tr>
                        <td>Track link pitch</td>
                        <td>175.4 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Track shoe height</td>
                        <td>51 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Pin diameter</td>
                        <td>36.6 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bushing diameter</td>
                        <td>62 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Track shoes per side</td>
                        <td>43</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Track rollers per side</td>
                        <td>7</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Carrier rollers per side</td>
                        <td>2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Track roller rail diameter</td>
                        <td>190 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">RIPPER</th>
                        <th colspan="2">SERVICE CAPACITY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Max. penetration</td>
                        <td>478 mm</td>
                        <td>Fuel tank</td>
                        <td>300 L</td>
                    </tr>
                    <tr>
                        <td>Width</td>
                        <td>1711 mm</td>
                        <td>Engine oil w/ filter</td>
                        <td>16.4 L</td>
                    </tr>
                    <tr>
                        <td>Cut width</td>
                        <td>1635 mm</td>
                        <td>Engine oil w/o filter</td>
                        <td>15.6 L</td>
                    </tr>
                    <tr>
                        <td>Max. ground clereance</td>
                        <td>424 mm</td>
                        <td>Engine cooling system</td>
                        <td>25.5 L</td>
                    </tr>
                    <tr>
                        <td>Max. number of shanks</td>
                        <td>3</td>
                        <td>Hydraulic reservoir</td>
                        <td>98.4 L</td>
                    </tr>
                    <tr>
                        <td>Tooth spacing w/3 teeth</td>
                        <td>785 mm</td>
                        <td>Final drive - per side</td>
                        <td>14.2 L</td>
                    </tr>
                    <tr>
                        <td>Hydraulic cylinder</td>
                        <td>Double-acting</td>
                        <td>Track rollers - each</td>
                        <td>0.330 L</td>
                    </tr>
                    <tr>
                        <td>Diameter</td>
                        <td>102 mm</td>
                        <td>Front idlers - each</td>
                        <td>0.460 L</td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>254 mm</td>
                        <td>Carrier rollers - each</td>
                        <td>0.275 L</td>
                    </tr>
                    <tr>
                        <td>Rod</td>
                        <td>51 mm</td>
                        <td></td>
                        <td></td>
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
                        <td>130 Hp</td>
                        <td>Track Width</td>
                        <td>508 mm track</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>13625 kg</td>
                        <td>Other Features</td>
                        <td>3 shank ripper</td>
                    </tr>
                    <tr>
                        <td>Blade Specs</td>
                        <td>2.9 cum PAT Blade</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection