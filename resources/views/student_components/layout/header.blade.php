<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="dexignlabs">
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="">

    <meta name="description" content="">

    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <meta property="og:image" content="https://edumin.dexignlab.com/xhtml/social-image.png">

    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">

    <meta name="twitter:image" content="https://edumin.dexignlab.com/xhtml/social-image.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="<?php echo asset('/student/');?>/image/png" sizes="16x16" href="./images/favicon.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet"
        href="<?php echo asset('/student/');?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link href="<?php echo asset('/student/');?>/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <link class="main-css" rel="stylesheet" href="<?php echo asset('/student/');?>/css/style.css">
    <script src="<?php echo asset('/student/');?>/js/jquery.min3.js"></script>



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="" class="brand-logo">
                <p style="font-size:32px;color: #6a73fa;">
                    <img src="<?php echo asset('/student/');?>/img/Logo.png" style="width:200px;">
                </p>

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!--<p style="font-size: 24px;color: #000;font-weight: 400;margin: 0px;">My Orders</p>-->
                        </div>

                        @php($studentOrderMessages = \App\Models\StudentOrderMessage::with(['sendertable'])
                        ->where('receivertable_id',auth()->user()->id)
                        ->where('receivertable_type','App\Models\Student')
                        ->where('read',1))



                        <ul class="navbar-nav header-right">
                            <!--<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dlab-theme-mode p-0" href="javascript:void(0);">
									<i id="icon-light" class="fas fa-sun"></i>
                                    <i id="icon-dark" class="fas fa-moon"></i>
                                </a>
							</li>
							
							<li class="nav-item">
                                <a class="nav-link bell-link " href="javascript:void(0);">Refer a friend</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link bell-link " href="javascript:void(0);">Offers</a>
							</li>
							<li class="nav-item">
                                <a class="nav-link bell-link " href="javascript:void(0);">Contact us</a>
							</li>-->


                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="javascript:void(0);" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <span class="badge light text-white bg-primary rounded-circle">{{$studentOrderMessages->count()}}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" style="background: #fff;">
                                    <ul class="list-unstyled" style="max-height: 400px;overflow: scroll;">

                                        @foreach($studentOrderMessages->get() as $message)
                                        <li class="media dropdown-item align-items-center gap-3" style="display: flex;">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="javascript:void(0);">

                                                    @if($message['message'])
                                                    <p>{{$message['message']}}</p>
                                                    @endif
                                                    @if($message['attachment'])
                                                    <p><a href="{{$message['attachment']}}"
                                                            target="_blank">{{$message['attachment']}}</a></p>
                                                    @endif
                                                </a>
                                            </div>
                                            <span class="notify-time">{{\Carbon\Carbon::parse($message['created_at'])->format('h:i A')}}</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <a class="all-notification" href="javascript:void(0);">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>




                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

                                    <span
                                        style="background:#FEEAA8;color: #000;border-radius: 20px;height: 40px;width: 40px;padding: 8px 8px 8px 8px;font-size: 16px;float: left;text-align: center;">JD</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('student.profile')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">My Profile </span>
                                    </a>
                                    <!--<a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Promo Codes </span>
                                    </a>
									<a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-settings" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ms-2">Settings </span>
                                    </a>-->
                                    <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item"><a href="{{route('order')}}" class="btn btn-primary">New Order</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->