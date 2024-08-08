<?php
$services = \App\Models\Service::where('website_type', 'Educrafter')->where('type', 'SERVICE')
    ->whereHas('seo', function ($q) {
        $q->whereIn('seo_url_slug', ['dissertation-writing-service', 'term-paper-writing-service', 'report-writing-service', 'essay-writing-service', 'research-paper-writing-service', 'assignment-writing-service']);
    })->get();


    

?>
<!doctype html>
<html class="no-js" lang="en" data-wf-page="63dae19244d4326cd3f5baa5">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name='dmca-site-verification' content='S21jWXRPeW9UVk92R05xMHl4d0dRdz090' />
    <meta name="description" content="{{ $description ?? 'Welcome to Essay Help' }}">
    <meta name="keywords" content="{{ $seo_keywords ?? 'Welcome to Essay Help' }}">
    <meta property="og:title" content="{{ $title ?? 'Welcome to Essay Help' }}" />
    <meta property="og:url" content="/{{ $og_url ?? '/' }}" />
    <meta property="og:image" content="{{ $og_image ?? '' }}">
    <meta property="og:description" content="{{ $description ?? 'Welcome to Essay Help' }}" />
    <title>{{ $title ?? 'Welcome to Essay Help' }}</title>
    <link rel="canonical" href="{{url()->current()}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link href="{{ asset('css/unfoldco.244dcbcaa.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon-skillgro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon-skillgro-new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css?w=1') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
	 <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>

<body>
    <!--Preloader-->
    <div class="navmenu">
        <div class="menu_wrap">
            <div class="menu">
                <a href="https://educrafter.co/order" class="btn arrow-btn">Hire Tutor <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        data-inject-url="https://html.themegenix.com/skillgro/assets/img/icons/right_arrow.svg"
                        class="injectable">
                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M1 7L15 7M15 7L9 1M15 7L9 13" stroke="currentcolor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a>

            </div>
        </div>
    </div>
    <div id="preloader">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon">
                    <img src="{{ asset('img/preloader.svg') }}" alt="Preloader">
                </div>
            </div>
        </div>
    </div>
    <!--Preloader-end -->

    <!-- header-area -->
    <header>
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area tg-header__style-three">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('img/Logo.png') }}" alt="Logo" style="width:120px;">
                                    </a>
                                </div>
                                <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="menu">
                                            <a href="{{route('Tutors.List')}}">Tutors</a>
                                        </li>

                                        <li class="menu-item-has-children"><a href="#">Services</a>
                                            <ul class="sub-menu">
                                                @foreach($services as $service)
                                                @if($service->seo && $service->seo->seo_url_slug)
                                                <li><a
                                                        href="{{ route('Services.Index',['slug'=>@$service->seo->seo_url_slug]) }}">{{$service->service_name}}</a>
                                                </li>
                                                @endif
                                                @endforeach

                                            </ul>

                                        </li>

                                        <li class="menu">
                                            <a href="{{route('Offers.Index')}}">Offers</a>
                                        </li>
                                        <li class="menu">
                                            <a href="#">Reviews </a>
                                        </li>

                                        <li class="menu-item-has-children"><a href="{{ route('about-us') }}">About
                                                Us</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('about-us')}}">Why Educrafter</a></li>
                                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                                <li><a href="lesson.html">Blog</a></li>
                                                <li><a href="{{route('contact-us')}}">Contact us</a></li>

                                            </ul>

                                        </li>

                                    </ul>
                                </div>
                                <div class="tgmenu__action tgmenu__action-three">
                                    <ul class="list-wrap">
                                        @guest
                                        <li class="header-btn login-btn">
                                            <a href="{{route('login')}}">Log in</a>
                                        </li>
                                        <li class="header-btn sign-btn">
                                            <a href="{{route('signup.page')}}">Sign up</a>
                                        </li>
                                        @endguest
                                        @auth
                                        

                                        <li><x-account_drop /></li>

                                        <?php /* <li class="header-btn sign-btn">
                                            <a href="{{route('logout')}}">Logout</a>
                                        </li>*/ ?>
                                        @endauth
                                    </ul>
                                </div>
                                <div class="mobile-login-btn">
                                    <a href="login.html">
                                        <img src="{{ asset('img/icons/user.svg') }}" alt="" class="injectable">
                                    </a>
                                </div>
                                <div class="mobile-nav-toggler">
                                    <i class="tg-flaticon-menu-1"></i>
                                </div>
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn">
                                    <i class="tg-flaticon-close-1"></i>
                                </div>
                                <div class="nav-logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('img/Logo.png') }}" alt="Logo">
                                    </a>
                                </div>

                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div>
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>


    </header>
    <!-- header-area-end -->