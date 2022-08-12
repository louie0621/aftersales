@extends('layouts.home')

@section('navbar')

<!-- nav -->
<div class="rd-navbar-main">
    <!-- RD Navbar Nav-->
    <ul class="rd-navbar-nav">
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/')}}">Home</a>
        </li>

        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/about-us')}}">About us</a>
        </li>
        <li class="rd-nav-item"><a class="rd-nav-link" href="{{ url('/branches')}}">Branches</a>
        </li>

        <li class="rd-nav-item "><a class="rd-nav-link" href="{{ url('/products') }}">Products</a>
        </li>
        <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ url('/contact-us')}}">Contact us</a>
        </li>
    </ul>
</div>

@endsection

@section('content')


<!-- Breadcrumbs -->
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">Contacts Us</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url({{ asset('images/bg-cta.jpg')}});"></div>
    </div>
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li class="active">Contacts Us</li>
        </ul>
    </div>
</section>
<!-- Contacts-->
<section class="section section-lg bg-default text-md-left">
    <div class="container">
        <div class="row row-60 justify-content-center">
            <div class="col-lg-8">
                <h4 class="text-spacing-25 text-transform-none">Get in Touch</h4>
                <form id="sendEmail">
                    <div class="row row-20 gutters-20">
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-your-name-5" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-your-name-5">Your Name*</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email-5" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email-5">Your E-mail*</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <!--Select 2-->
                                <select class="form-input" data-minimum-results-for-search="Infinity" id="subject" name="subject" data-constraints="@Required">
                                    <option hidden></option>
                                    <option value="1" disabled>Select a Product</option>
                                    <option value="Skid Steers">Skid Steers</option>
                                    <option value="Compactors">Compactors</option>
                                    <option value="Graders">Graders</option>
                                    <option value="Excavators">Excavators</option>
                                    <option value="Backhoe Loaders">Backhoe Loaders</option>
                                    <option value="Wheel Loaders">Wheel Loaders</option>
                                    <option value="Tractors">Tractors</option>
                                    <option value="Sugarcane Harvesters">Sugarcane Harvesters</option>
                                    <option value="Attachments">Attachments</option>
                                    <option value="Implements">Implements</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-5" type="text" name="phone" data-constraints="@Numeric">
                                <label class="form-label" for="contact-phone-5">Your Phone*</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-5">Message</label>
                                <textarea class="form-input textarea-lg" id="contact-message-5" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-secondary button-winona" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="aside-contacts">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Get social</p>
                            <ul class="list-inline contacts-social-list list-inline-sm">
                                <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/filhollandcorporation/"></a></li>
                                <li><a class="icon mdi fa-youtube-square" href="https://www.youtube.com/channel/UCD4aBoFHOy4dUAXERC7caxg?" target="_blank"></a></li>
                                <!--
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li> 
-->
                            </ul>
                        </div>
                        <!--
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Phone</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                <div class="unit-body"><a class="phone" href="tel:#">1-800-1234-567</a></div>
                            </div>
                        </div>
-->
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">E-mail</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                <div class="unit-body">
                                    <p class="mail" href="mailto:info@filholland.com">info@filholland.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 aside-contacts-item">
                            <p class="aside-contacts-title">Address</p>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body">
                                    <p class="address" href="#">Taguig
                                        <br>Bagong Calzada St., Brgy. Ususan, Taguig City<br>+63 917 634 9476
                                    </p>
                                </div>
                            </div><br>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body">
                                    <p class="address" href="#">Bacolod
                                        <br>Lacson Ext., cor V.L. Yap Street, Singcang-Airport, Bacolod City, 6100<br>+63 917 633 1734
                                    </p>
                                </div>
                            </div><br>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body">
                                    <p class="address" href="#">Cagayan de Oro
                                        <br>Baloy, Tablon, Cagayan de Oro, Misamis Occidental<br>+63 917 633 1720
                                    </p>
                                </div>
                            </div><br>
                            <div class="unit unit-spacing-xs justify-content-center justify-content-md-start">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body">
                                    <p class="address" href="#">Davao
                                        <br>Door 1, Fuji Building, Km7, Lanang, Davao City<br>+63 917 716 2122
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection