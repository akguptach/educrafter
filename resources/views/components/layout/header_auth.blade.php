<!doctype html>
<html class="no-js" lang="en">
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
	<link rel="canonical" href="https://educrafter.co/">
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
	
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
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&display=swap" rel="stylesheet">
	<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	
  </head>
  <body style="background: #fff4e4;">
    <!--Preloader-->
	
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
    
    
   