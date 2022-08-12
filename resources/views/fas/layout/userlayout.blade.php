<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{ asset('assets/css/dark-theme.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/light-theme.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/semi-dark.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/header-colors.css')}}" rel="stylesheet" />

    <title>Filholland Aftersales System</title>
</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-icon d-xl-none">
                    <i class="bi bi-list"></i>
                </div>
                <div class="search-toggle-icon d-xl-none ms-auto">
                    <i class="bi bi-search"></i>
                </div>
                <form class="searchbar d-none d-xl-flex ms-auto">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
                    <input class="form-control" type="text" placeholder="Type here to search">
                    <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i class="bi bi-x-lg"></i></div>
                </form>
                <div class="top-navbar-right ms-3">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                <div class="projects">
                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="row row-cols-3 gx-2">
                                    <div class="col">
                                        <a href="ecommerce-orders.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-primary bg-gradient">
                                                    <i class="bi bi-cart-plus-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Orders</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-danger bg-gradient">
                                                    <i class="bi bi-people-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Users</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="ecommerce-products-grid.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-success bg-gradient">
                                                    <i class="bi bi-bank2"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Products</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="component-media-object.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-orange bg-gradient">
                                                    <i class="bi bi-collection-play-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Media</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="pages-user-profile.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-purple bg-gradient">
                                                    <i class="bi bi-person-circle"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Account</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-dark bg-info bg-gradient">
                                                    <i class="bi bi-file-earmark-text-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Docs</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="ecommerce-orders-detail.html">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-pink bg-gradient">
                                                    <i class="bi bi-credit-card-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Payment</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-white bg-bronze bg-gradient">
                                                    <i class="bi bi-calendar-check-fill"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Events</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="javascript:;">
                                            <div class="apps p-2 radius-10 text-center">
                                                <div class="apps-icon-box mb-1 text-dark bg-warning bg-gradient">
                                                    <i class="bi bi-book-half"></i>
                                                </div>
                                                <p class="mb-0 apps-name">Story</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large d-none d-sm-block">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                <div class="notifications">
                                    <span class="notify-badge">8</span>
                                    <i class="bi bi-bell-fill"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="p-2 border-bottom m-2">
                                    <h5 class="h5 mb-0">Notifications</h5>
                                </div>
                                <div class="header-notifications-list p-2">
                                    <div class="dropdown-item bg-light radius-10 mb-1">
                                        <form class="dropdown-searchbar position-relative">
                                            <div class="position-absolute top-50 start-0 translate-middle-y px-3 search-icon"><i class="bi bi-search"></i></div>
                                            <input class="form-control" type="search" placeholder="Search Messages">
                                        </form>
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-basket2-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                                                <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-people-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                                                <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                                                <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="notification-box"><i class="bi bi-briefcase-fill"></i></div>
                                            <div class="ms-3 flex-grow-1">
                                                <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span class="msg-time float-end text-secondary">1 mo</span></h6>
                                                <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully uploaded all files</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <div>
                                        <hr class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">
                                        <div class="text-center">View All Notifications</div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center gap-1">
                                    <img src="{{ asset('assets/images/avatars/avatar-1.png')}}" class="user-img" alt="">
                                    <div class="user-name d-none d-sm-block">{{ Auth::user()->name }}</div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/images/avatars/avatar-1.png')}}" alt="" class="rounded-circle" width="60" height="60">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name">{{ Auth::user()->name }}</h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">@if (Auth::user()->usertype == 1)
                                                    Administrator
                                                    @else
                                                    Supervisor
                                                    @endif</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-user-profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Setting</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index2.html">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                                            <div class="setting-text ms-3"><span>Dashboard</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-piggy-bank-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Earnings</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-cloud-arrow-down-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Downloads</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <div class="d-flex align-items-center">
                                            <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                            <div class="setting-text ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->

        <!--start sidebar -->
        <aside class="sidebar-wrapper">
            <div class="iconmenu">
                <div class="nav-toggle-box">
                    <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
                </div>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="JCE">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-JCE" type="button"><i class="bi bi-grid-fill"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Work Order">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-workorder" type="button"><i class="bi bi-briefcase-fill"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Customer">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-customer" type="button"><i class="bi bi-bag-check-fill"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Equipment">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-equipment" type="button"><i class="bi bi-truck"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="PMS Schedule">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-pms" type="button"><i class="bi bi-list-task"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Technician">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-tech" type="button"><i class="bi bi-tools"></i></button>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="User">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-user" type="button"><i class="bi bi-people-fill"></i></button>
                    </li>
                </ul>
            </div>
            <div class="textmenu">
                <div class="brand-logo">
                    <img src="{{ asset('assets/images/brand-logo-2.png')}}" width="140" alt="" />
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="pills-dashboards">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">Dashboards</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/home')}}" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>
                            <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>
                            <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>
                            <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-JCE">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">JCE</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/jce')}}" class="list-group-item"><i class="bi bi-book"></i>JCE List</a>
                            <a href="{{ url('/FAS/add-jce')}}" class="list-group-item"><i class="bi bi-plus"></i>Add JCE</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-workorder">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">Work Order</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/work-order')}}" class="list-group-item"><i class="bi bi-briefcase-fill"></i>Work Order List</a>
                            <a href="{{ url('/FAS/add-work-order')}}" class="list-group-item"><i class="bi bi-plus"></i>Add Work Order</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-customer">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">Customer</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/customer')}}" class="list-group-item"><i class="bi bi-people"></i>Customers List</a>
                            <a href="{{ url('/FAS/add-customer')}}" class="list-group-item"><i class="bi bi-plus"></i>Add Customer</a>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-equipment">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">Equipment</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/equipment')}}" class="list-group-item"><i class="bi bi-truck-flatbed"></i>Equipment List</a>
                            <a href="{{ url('/FAS/add-equipment')}}" class="list-group-item"><i class="bi bi-plus"></i>Add Equipment</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pms">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">PMS Schedule</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/pms')}}" class="list-group-item"><i class="bi bi-list-stars"></i>PMS List</a>
                            <a href="{{ url('/FAS/set-schedule')}}" class="list-group-item"><i class="bi bi-plus"></i>Set Schedule</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-tech">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">Technician</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/technician')}}" class="list-group-item"><i class="bi bi-wrench"></i>Technician Name List</a>
                            <a href="{{ url('/FAS/add-technician')}}" class="list-group-item"><i class="bi bi-plus"></i>Add Technician</a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-user">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-0">User</h5>
                                </div>
                                <small class="mb-0">Filholland Aftersales System</small>
                            </div>
                            <a href="{{ url('/FAS/user')}}" class="list-group-item"><i class="bi bi-person"></i>Users</a>

                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--start sidebar -->

        @yield('content')

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                    </div>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3" checked>
                        <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end switcher-->

    </div>
    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/pace.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <!--app-->
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script src="{{ asset('assets/js/index.js')}}"></script>

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")
    </script>


</body>

</html>