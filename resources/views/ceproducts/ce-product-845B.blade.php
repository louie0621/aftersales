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
            <h3 class="breadcrumbs-custom-title">CASE Motorgrader 845B</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li><a href="{{ url('/products') }}">Products</a></li>
            <li><a href="{{ url('/products/construction') }}">Construction Products</a></li>
            <li class="active">CASE Motorgrader 845B</li>
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
                        <div class="item"><img src="{{ asset('images/product-845B-1.jpg')}}" alt="" width="670" height="477" />
                            <div class="slick-project-caption">
                                <div class="slick-project-title">845B</div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider child-carousel" id="child-carousel-7" data-for=".carousel-parent" data-items="3" data-sm-items="3" data-md-items="4" data-lg-items="3" data-xl-items="4" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ asset('images/product-845B-1.jpg')}}" alt="" width="670" height="477" />
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="project-page">
                    <h4>CASE Motorgrader 845B</h4>
                    <p>Thanks to its variable horsepower engine, the CASE 845B has strong throttle response at every rpm. With a unique moldboard geometry to toss and turn material netter, excellent visibility to the rear of the machine and a front articulation which gives the operator a clear view to the circle, moldboard and tires, high productivity numbers are normal for this machine.</p>
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
                    <a class="button button-lg button-primary button-winona" href="{{ asset('pdf/845B_SEA5801CCGB.pdf')}}" target="_blank">Download Brochure</a>
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
                        <th colspan="2">POWERTRAIN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Brand</td>
                        <td>FPT</td>
                        <td colspan="2"><b>Rear axle</b></td>
                    </tr>
                    <tr>
                        <td>Model</td>
                        <td>F4HE9684L</td>
                        <td>Vertical ground clearance</td>
                        <td>374 mm</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>Electronic common rail fuel system, water cooled, 4 cycle, direct injection, turbocharged and charge air cooled. (EPA TIER 3 certified.)</td>
                        <td>Differential</td>
                        <td>Limited slip / 60% torque transfer</td>
                    </tr>
                    <tr>
                        <td>Cylinders</td>
                        <td>6, in line</td>
                        <td>Brakes (*)</td>
                        <td>Disk, bathed in oil</td>
                    </tr>
                    <tr>
                        <td>Bore and stroke</td>
                        <td>104 x 132 mm</td>
                        <td>Number of disks per brake</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Engine displacement</td>
                        <td>6.7 l (6728 cm³)</td>
                        <td colspan="2"><b>Tandem</b></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Horsepower at 2.200 rpm</b></td>
                        <td>Type</td>
                        <td>Welded Plate (2204 x 631 x 200.5 mm)</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Gross (SAE J1995 Gross)</b></td>
                        <td>Oscillation</td>
                        <td>20º in each direction</td>
                    </tr>
                    <tr>
                        <td>Low Curve</td>
                        <td>150 hp (112 kW)*1</td>
                        <td>Command chain pitch</td>
                        <td>50.8 mm</td>
                    </tr>
                    <tr>
                        <td>High Curve</td>
                        <td>173 hp (129kW)*2</td>
                        <td>Thickness of the internal and external side wall</td>
                        <td>19 mm</td>
                    </tr>
                    <tr>
                        <td colspan="2">Net (SAE J1349)</td>
                        <td colspan="2"><b>Front axle</b></td>
                    </tr>
                    <tr>
                        <td>Low Curve</td>
                        <td>140 hp (104 kW)*1</td>
                        <td>Type</td>
                        <td>High-resistance welded steel</td>
                    </tr>
                    <tr>
                        <td>High Curve</td>
                        <td>163 hp (119 kW)*2</td>
                        <td>Oscillation</td>
                        <td>15.3º in each direction</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Maximum torque at 1.500 rpm</b></td>
                        <td>Wheel lean</td>
                        <td>20º in each direction</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Gross (SAE J1995 Gross)</b></td>
                        <td>Vertical ground clearance</td>
                        <td>580 mm</td>
                    </tr>
                    <tr>
                        <td>Low Curve</td>
                        <td>659 Nm*1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>High Curve</td>
                        <td>758 Nm*2</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Net (SAE J1349)</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Low Curve</td>
                        <td>591 Nm*1</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>High Curve</td>
                        <td>678 Nm*2</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">HYDRAULIC SYSTEM</th>
                        <th colspan="2">TRANSMISSION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Closed center, load sensing</td>
                        <td>Brand</td>
                        <td>ZF</td>
                    </tr>
                    <tr>
                        <td>Hydraulic pump</td>
                        <td>Axial piston pump, variable flow, fitted with load sensing system</td>
                        <td>Model</td>
                        <td>ZF TC LOCK UP 6WG – 160</td>
                    </tr>
                    <tr>
                        <td>Rated flow</td>
                        <td>186 l/min (49 gpm) at 2200 rpm</td>
                        <td>Type</td>
                        <td>Torque converter lockup (also functions as Direct Drive) Powershift, electronic shift change control,automatic and without inching pedal for progressive advancing</td>
                    </tr>
                    <tr>
                        <td>Control valve</td>
                        <td>9 sections</td>
                        <td>Gears</td>
                        <td>6 forward / 3 reverse</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Self-diagnostic system</td>
                        <td>On board</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">ELECTRICAL SYSTEM</th>
                        <th colspan="2">ARTICULATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Power</td>
                        <td>24 V</td>
                        <td>Type</td>
                        <td>Hydraulically activated (with a lock valve)</td>
                    </tr>
                    <tr>
                        <td>Alternator</td>
                        <td>90 A</td>
                        <td>Angle</td>
                        <td>25º to the left/right</td>
                    </tr>
                    <tr>
                        <td>Batteries</td>
                        <td>2x100 Ah – low maintenance</td>
                        <td>Controls</td>
                        <td>Hydraulic</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">STEERING</th>
                        <th colspan="2">CAPACITIES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Hydrostatic</td>
                        <td>Engine</td>
                        <td>17.5 l</td>
                    </tr>
                    <tr>
                        <td>Steering wheel turns (lock to lock)</td>
                        <td>4.75</td>
                        <td>with a change in filter</td>
                        <td>18.5 l</td>
                    </tr>
                    <tr>
                        <td>Pump capacity at 2.200 rpm</td>
                        <td>41.8 l/min</td>
                        <td>Fuel</td>
                        <td>341 l</td>
                    </tr>
                    <tr>
                        <td>Pressure release valve</td>
                        <td>2200 psi (151 bar) integrated with the priority steering valve</td>
                        <td>Transmission</td>
                        <td>25 l</td>
                    </tr>
                    <tr>
                        <td>Cylinders</td>
                        <td>2</td>
                        <td>with a change in filter</td>
                        <td>27 l</td>
                    </tr>
                    <tr>
                        <td>Bore</td>
                        <td>50.8 mm</td>
                        <td>Engine water cooling system</td>
                        <td>40 l</td>
                    </tr>
                    <tr>
                        <td>Stroke</td>
                        <td>301 mm</td>
                        <td>Hydraulic oil tank</td>
                        <td>90 l</td>
                    </tr>
                    <tr>
                        <td>Rod diameter</td>
                        <td>25.4 mm</td>
                        <td>Total hydraulic system</td>
                        <td>180 l</td>
                    </tr>
                    <tr>
                        <td>Supplemental steering</td>
                        <td>Integrated SAE J53 e J1511</td>
                        <td>Circle turn housing</td>
                        <td>2.8 l</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Tandem case (each)</td>
                        <td>69 l</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">* Breakout forces estimated considering both tip and hydraulic limits.</td>

                    </tr>
                </tfoot>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">SADDLE</th>
                        <th colspan="2">DRAWBAR</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Locking system</td>
                        <td>Two hydraulic cylinders</td>
                        <td>Type</td>
                        <td>“A” frame welded construction with center mounted circle turn motor</td>
                    </tr>
                    <tr>
                        <td>Saddle positions</td>
                        <td>5</td>
                        <td>Connection with the frame</td>
                        <td>Shim adjustable spherical joint</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">FRAME</th>
                        <th colspan="2">CIRCLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Box section</td>
                        <td>Type</td>
                        <td>Welded construction</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Front section</b></td>
                        <td>Maximum ouside diameter</td>
                        <td>1752.6 mm</td>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>254 x 298 mm</td>
                        <td>Rotation</td>
                        <td>360º</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Rear section</b></td>
                        <td>Speed</td>
                        <td>1.2 rpm (7.2º/second)</td>
                    </tr>
                    <tr>
                        <td>Size</td>
                        <td>121 x 299 mm</td>
                        <td>Drive</td>
                        <td>Hydraulic motor</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Displacement</td>
                        <td>0,25 l/turn</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Rated hydraulic flow</td>
                        <td>94.6 l/min (25 gpm)</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Nº of supports in phenolic resin</td>
                        <td>4</td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">BLADE</th>
                        <th colspan="2">FRONT SCARIFIER</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>High-carbon steel</td>
                        <td>Cutting width</td>
                        <td>1168 mm</td>
                    </tr>
                    <tr>
                        <td>Form</td>
                        <td>Involute curve</td>
                        <td>Teeth</td>
                        <td>5 (optional, 11)</td>
                    </tr>
                    <tr>
                        <td>Width</td>
                        <td>3658 mm (12 ft) / 3962 mm (13 ft) /4267 mm (14 ft)</td>
                        <td>Spacing between teeth</td>
                        <td>229 mm (114 mm, optional)</td>
                    </tr>
                    <tr>
                        <td>Height (curved profile)</td>
                        <td>622 mm</td>
                        <td>Lift above ground</td>
                        <td>527 mm</td>
                    </tr>
                    <tr>
                        <td>Thickness</td>
                        <td>22 mm</td>
                        <td>Maximum penetration</td>
                        <td>318 mm</td>
                    </tr>
                    <tr>
                        <td>Cutting edge</td>
                        <td>2, interchangeable</td>
                        <td>Weight</td>
                        <td>570 kg</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Blade pitch positions</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Normal pitch</td>
                        <td>47º</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Minimum pitch</td>
                        <td>42º</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maximum pitch</td>
                        <td>87º</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Blade side shift</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Right</td>
                        <td>686 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Left</td>
                        <td>533 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Maximum bank-cutting angle (left and right)</td>
                        <td>90º</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ground penetration (max.)</td>
                        <td>711.2 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Lift above ground (max.)</td>
                        <td>444.5 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Blade side shift and pitch</td>
                        <td>Hydraulic type</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <table class="table-custom table-custom-striped table-custom-primary">
                <thead>
                    <tr>
                        <th colspan="2">REAR RIPPER</th>
                        <th colspan="2">DOZER BLADE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td>Parallelogram</td>
                        <td>Width</td>
                        <td>2762 mm</td>
                    </tr>
                    <tr>
                        <td>Cutting width</td>
                        <td>2340 mm</td>
                        <td>Height</td>
                        <td>953 mm</td>
                    </tr>
                    <tr>
                        <td>Ripper teeth</td>
                        <td>3 / 5 optional</td>
                        <td>Lift above ground</td>
                        <td>622 mm</td>
                    </tr>
                    <tr>
                        <td>Scrifi er teeth</td>
                        <td>5 (9 optional)</td>
                        <td>Penetration</td>
                        <td>165 mm</td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Lift above ground</b></td>
                        <td>Weight</td>
                        <td>1165 kg</td>
                    </tr>
                    <tr>
                        <td>Ripper teeth</td>
                        <td>518 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2"><b>Maximum penetration</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ripper teeth</td>
                        <td>437 mm</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>795 kg</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>* 1 Gears 1st, 2nd F e 1st,2nd R</td>
                        <td>* 2 Gears 3rd, 4th, 5th, 6th F e 3rd R</td>
                        <td colspan="2">(*) SAE J150 3450 (brake performance)</td>
                    </tr>
                    
                </tfoot>
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
                        <td>150 Hp/173 Hp</td>
                        <td>Other Features</td>
                        <td>Front Scanifer</td>
                    </tr>
                    <tr>
                        <td>Operating Weight</td>
                        <td>14605 kg</td>

                    </tr>
                    <tr>
                        <td>Blade Specs</td>
                        <td>12 ft Moldboard</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>


@endsection