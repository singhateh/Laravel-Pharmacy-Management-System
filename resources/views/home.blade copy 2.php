<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('jambasangsang/assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- prism css -->
    <link rel="stylesheet" href="{{ asset('jambasangsang/assets/css/plugins/prism-coy.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('jambasangsang/assets/css/style.css') }}">



</head>
<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal menu-light">
        <div class="navbar-wrapper container">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Page layouts</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="layout-vertical.html" target="_blank">Vertical</a></li>
                            <li><a href="layout-horizontal.html" target="_blank">Horizontal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                    	<label>UI Element</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                    	<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                    	<ul class="pcoded-submenu">
                    		<li><a href="bc_alert.html">Alert</a></li>
                    		<li><a href="bc_button.html">Button</a></li>
                    		<li><a href="bc_badges.html">Badges</a></li>
                    		<li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
                    		<li><a href="bc_card.html">Cards</a></li>
                    		<li><a href="bc_collapse.html">Collapse</a></li>
                    		<li><a href="bc_carousel.html">Carousel</a></li>
                    		<li><a href="bc_grid.html">Grid system</a></li>
                    		<li><a href="bc_progress.html">Progress</a></li>
                    		<li><a href="bc_modal.html">Modal</a></li>
                    		<li><a href="bc_spinner.html">Spinner</a></li>
                    		<li><a href="bc_tabs.html">Tabs & pills</a></li>
                    		<li><a href="bc_typography.html">Typography</a></li>
                    		<li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
                    		<li><a href="bc_toasts.html">Toasts</a></li>
                    		<li><a href="bc_extra.html">Other</a></li>
                    	</ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Forms &amp; table</label>
                    </li>
                    <li class="nav-item">
                        <a href="form_elements.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="tbl_bootstrap.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Chart & Maps</label>
                    </li>
                    <li class="nav-item">
                        <a href="chart-apex.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="map-google.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Pages</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                            <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
        <div class="container">
            <div class="m-header">
                <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                <a href="#!" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="assets/images/logo.png" alt="" class="logo">
                    <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
                </a>
                <a href="#!" class="mob-toggler">
                    <i class="feather icon-more-vertical"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                        <div class="search-bar">
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                                Dropdown
                            </a>
                            <div class="dropdown-menu profile-notification ">
                                <ul class="pro-body">
                                    <li><a href="user-profile.html" class="dropdown-item"><i class="fas fa-circle"></i> Profile</a></li>
                                    <li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My Messages</a></li>
                                    <li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown mega-menu">
                            <a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
                                Mega
                            </a>
                            <div class="dropdown-menu profile-notification ">
                                <div class="row no-gutters">
                                    <div class="col">
                                        <h6 class="mega-title">UI Element</h6>
                                        <ul class="pro-body">
                                            <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Alert</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Button</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Badges</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Cards</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Modal</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="fas fa-circle"></i> Tabs & pills</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <h6 class="mega-title">Forms</h6>
                                        <ul class="pro-body">
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Elements</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Validation</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Masking</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Wizard</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Picker</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-minus"></i> Select</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <h6 class="mega-title">Application</h6>
                                        <ul class="pro-body">
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-mail"></i> Email</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-clipboard"></i> Task</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-check-square"></i> To-Do</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-image"></i> Gallery</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-help-circle"></i> Helpdesk</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <h6 class="mega-title">Extension</h6>
                                        <ul class="pro-body">
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-file-plus"></i> Editor</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-file-minus"></i> Invoice</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-calendar"></i> Full calendar</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-upload-cloud"></i> File upload</a></li>
                                            <li><a href="#!" class="dropdown-item"><i class="feather icon-scissors"></i> Image cropper</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="icon feather icon-bell"></i>
                                <span class="badge badge-pill badge-danger">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right notification">
                                <div class="noti-head">
                                    <h6 class="d-inline-block m-b-0">Notifications</h6>
                                    <div class="float-right">
                                        <a href="#!" class="m-r-10">mark as read</a>
                                        <a href="#!">clear all</a>
                                    </div>
                                </div>
                                <ul class="noti-body">
                                    <li class="n-title">
                                        <p class="m-b-0">NEW</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                                                <p>New ticket Added</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="n-title">
                                        <p class="m-b-0">EARLIER</p>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                                                <p>currently login</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="notification">
                                        <div class="media">
                                            <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                                <p>Prchace New Theme and make payment</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="noti-footer">
                                    <a href="#!">show all</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown drp-user">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="feather icon-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-notification">
                                <div class="pro-head">
                                    <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <a href="auth-signin.html" class="dud-logout" title="Logout">
                                        <i class="feather icon-log-out"></i>
                                    </a>
                                </div>
                                <ul class="pro-body">
                                    <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                    <li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                    <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Dashboard</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                                                {{-- <li class="breadcrumb-item"><a href="#!">Home</a></li> --}}
                                                {{-- <li class="breadcrumb-item"><a href="#!">Horizontal Layout 2</a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="row">
                                    <!-- table card-1 start -->
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card flat-card">
                                            <div class="row-table">
                                                <div class="col-sm-6 card-body br">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-eye text-c-green mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>10k</h5>
                                                            <span>Visitors</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-music text-c-red mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>100%</h5>
                                                            <span>Volume</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-table">
                                                <div class="col-sm-6 card-body br">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>2000 +</h5>
                                                            <span>Files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>120</h5>
                                                            <span>Mails</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- widget primary card start -->
                                        <div class="card flat-card widget-primary-card">
                                            <div class="row-table">
                                                <div class="col-sm-3 card-body">
                                                    <i class="feather icon-star-on"></i>
                                                </div>
                                                <div class="col-sm-9">
                                                    <h4>4000 +</h4>
                                                    <h6>Ratings Received</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- widget primary card end -->
                                    </div>
                                    <!-- table card-1 end -->
                                    <!-- table card-2 start -->
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card flat-card">
                                            <div class="row-table">
                                                <div class="col-sm-6 card-body br">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-share-2 text-c-blue mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>1000</h5>
                                                            <span>Shares</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-wifi text-c-blue mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>600</h5>
                                                            <span>Network</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row-table">
                                                <div class="col-sm-6 card-body br">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>3550</h5>
                                                            <span>Returns</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 card-body">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                                                        </div>
                                                        <div class="col-sm-8 text-md-center">
                                                            <h5>100%</h5>
                                                            <span>Order</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- widget-success-card start -->
                                        <div class="card flat-card widget-purple-card">
                                            <div class="row-table">
                                                <div class="col-sm-3 card-body">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                                <div class="col-sm-9">
                                                    <h4>17</h4>
                                                    <h6>Achievements</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- widget-success-card end -->
                                    </div>
                                    <!-- table card-2 end -->
                                    <!-- Widget primary-success card start -->
                                    <div class="col-md-12 col-xl-4">
                                        <div class="card support-bar overflow-hidden">
                                            <div class="card-body pb-0">
                                                <h2 class="m-0">350</h2>
                                                <span class="text-c-blue">Support Requests</span>
                                                <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                                            </div>
                                            <div id="support-chart"></div>
                                            <div class="card-footer bg-primary text-white">
                                                <div class="row text-center">
                                                    <div class="col">
                                                        <h4 class="m-0 text-white">10</h4>
                                                        <span>Open</span>
                                                    </div>
                                                    <div class="col">
                                                        <h4 class="m-0 text-white">5</h4>
                                                        <span>Running</span>
                                                    </div>
                                                    <div class="col">
                                                        <h4 class="m-0 text-white">3</h4>
                                                        <span>Solved</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Widget primary-success card end -->
                            <!-- [ Main Content ] end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

        <!-- Warning Section start -->
        <!-- Older IE warning message -->
        <!--[if lt IE 11]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade
                   <br/>to any of the following web browsers to access this website.
                </p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="assets/images/browser/chrome.png" alt="Chrome">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="assets/images/browser/firefox.png" alt="Firefox">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="assets/images/browser/opera.png" alt="Opera">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="assets/images/browser/safari.png" alt="Safari">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="assets/images/browser/ie.png" alt="">
                                <div>IE (11 & above)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->
        <!-- Warning Section Ends -->

        <!-- Required Js -->
        <script src="{{ asset('jambasangsang/assets/js/vendor-all.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/plugins/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jambasangsang/assets/js/pcoded.min.js') }}"></script>


    <!-- prism Js -->
    <script src="{{ asset('jambasangsang/assets/js/plugins/prism.js') }}"></script>





    <script src="{{ asset('jambasangsang/assets/js/horizontal-menu.js') }}"></script>
    <script>
        (function() {
            if ($('#layout-sidenav').hasClass('sidenav-horizontal') || window.layoutHelpers.isSmallScreen()) {
                return;
            }
            try {
                window.layoutHelpers._getSetting("Rtl")
                window.layoutHelpers.setCollapsed(
                    localStorage.getItem('layoutCollapsed') === 'true',
                    false
                );
            } catch (e) {}
        })();
        $(function() {
            $('#layout-sidenav').each(function() {
                new SideNav(this, {
                    orientation: $(this).hasClass('sidenav-horizontal') ? 'horizontal' : 'vertical'
                });
            });
            $('body').on('click', '.layout-sidenav-toggle', function(e) {
                e.preventDefault();
                window.layoutHelpers.toggleCollapsed();
                if (!window.layoutHelpers.isSmallScreen()) {
                    try {
                        localStorage.setItem('layoutCollapsed', String(window.layoutHelpers.isCollapsed()));
                    } catch (e) {}
                }
            });
        });
        $(document).ready(function() {
            $("#pcoded").pcodedmenu({
                themelayout: 'horizontal',
                MenuTrigger: 'hover',
                SubMenuTrigger: 'hover',
            });
        });
    </script>

    <script src="{{ asset('jambasangsang/assets/js/analytics.js') }}"></script>

</body>

</html>
