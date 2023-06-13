<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TitipYuk @hasSection('title')
            -
        @endif @yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    @yield('custom-header')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                                            href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="{{ Route::currentRouteName() == 'consignee.list' ? 'active' : '' }}"
                                            href="{{ route('consignee.list') }}"
                                            aria-label="Toggle navigation">Consignee List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class=" dd-menu collapsed {{ Route::currentRouteName() == 'account.dashboard' ? 'active' : '' }}"
                                            href="{{ route('account.dashboard') }}" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Dashboard</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li
                                                class="nav-item {{ Route::currentRouteName() == 'account.settings' ? 'active' : '' }}">
                                                <a href="{{ route('account.settings') }}">Account</a>
                                            </li>
                                            <li
                                                class="nav-item {{ Route::currentRouteName() == 'account.messages' ? 'active' : '' }}">
                                                <a href="{{ route('account.messages') }}">messages</a>
                                            </li>
                                            <hr>
                                            @if (session('isConsignee'))
                                                <li
                                                    class="nav-item {{ Route::currentRouteName() == 'account.dashboard' ? 'active' : '' }}">
                                                    <a href="{{ route('account.dashboard') }}">Dashboard</a>
                                                </li>
                                                <li
                                                    class="nav-item {{ Route::currentRouteName() == 'account.products' ? 'active' : '' }}">
                                                    <a href="{{ route('account.product-add') }}">My Products</a>
                                                </li>
                                                <li
                                                    class="nav-item {{ Route::currentRouteName() == 'account.product-add' ? 'active' : '' }}">
                                                    <a href="{{ route('account.product-add') }}">Add Product</a>
                                                </li>
                                            @endif
                                            <hr>
                                            @if (session('isConsignor'))
                                                <li
                                                    class="nav-item {{ Route::currentRouteName() == 'account.dashboard' ? 'active' : '' }}">
                                                    <a href="/dashboard/">Dashboard</a>
                                                </li>
                                                <li
                                                    class="nav-item {{ Route::currentRouteName() == 'account.places' ? 'active' : '' }}">
                                                    <a href="{{ route('account.places') }}">My Places</a>
                                                </li>
                                                <li
                                                    class="nav-item {{ Route::currentRouteName() == 'account.place-add' ? 'active' : '' }}">
                                                    <a href="{{ route('account.place-add') }}">Add Place</a>
                                                </li>
                                            @endif
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            @if (session('isConsignor') || session('isConsignee'))
                                <div class="auth-container">
                                    <div class="dropdown">
                                        <div class="dropdown-content">
                                            <div class="greetings">
                                                @if (session('isConsignee'))
                                                    Hi, <strong>{{session('name')}}</strong>
                                                    <br>
                                                @endif
                                            </div>
                                            <hr class="line">
                                            <a href="/logout">Sign out</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="login-button">
                                    <ul>
                                        <li>
                                            <a href="/login"><i class="lni lni-enter"></i> Login</a>
                                        </li>
                                        <li>
                                            <a href="/register"><i class="lni lni-user"></i> Register</a>
                                        </li>
                                    </ul>
                                </div>
                            @endauth
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

@hasSection('title')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">@yield('title')</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Home</a></li>
                        <li>@yield('title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

@yield('content')

<!-- Start Footer Area -->
<footer class="footer">
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <ul class="footer-bottom-links">
                                <li><a href="{{ route('about-us') }}">About us</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                            <p class="copyright-text">Template Design by <a href="https://graygrids.com/"
                                    rel="nofollow" target="_blank">GrayGrids</a> with modified
                            </p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Middle -->
</footer>
<!--/ End Footer Area -->

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

<!-- ========================= JS here ========================= -->
{{-- <script src="{{ asset('assets/js/bootstrap.js') }}"></script> --}}
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@yield('custom-js')
</body>

</html>
