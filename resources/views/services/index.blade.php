@extends('layout.app',['title'=>$title])
@section('content')
<style>
.banner__images-three .about__enrolled {
    left: -4% !important;

}
</style>


<main class="main-area fix">
    <!-- banner-area -->
    <section class="banner-area banner-bg-three tg-motion-effects">
        <div class="container">
            <div class="row justify-content-between align-items-start">

                <div class="col-xl-12 col-lg-12">
                    <div class="banner__content-two" align="center">
                        <h1 class="title" data-aos="fade-right" data-aos-delay="400"
                            style="text-align: center;font-family: 'Sofia Pro'; font-weight: bold; font-style: normal;">
                            <?php $aa=explode("-",$data->seo_title);?>


                            {{$aa[0]}}</h1>
                        <p data-aos="fade-right" data-aos-delay="600" style="text-align: center;">
                            {!!$data->service->short_description!!}</p>


                        <div class="banner__all-recipe aos-init aos-animate" data-aos="fade-left" data-aos-delay="200">
                            <img src="{{ asset('img/100.svg')}}" alt="img">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="banner__images-two">

                        <div class="about__enrolled" data-aos="fade-right" data-aos-delay="900">

                            <img src="{{ asset('img/banner2_l.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12" align="center" style="margin-top: 100px;margin-bottom: 30px;">
                    <div
                        style="border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;border-radius: 8px;overflow: hidden;">
                        <h3 style="padding-top: 20px;padding-bottom:20px;">We only hire tutors who have graduated from
                            top universities.</h3>
                        <div class="marquee_mode" style="height:88px;margin-bottom: 20px;" id="marquee_mode_top">
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Columbia University.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Cornell University.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Duke University.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/ETHzurich.png')}}" style="width:150px;">
                            </div>

                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/HarvardUniversity.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/MassachusettsInsttute ofTechnology.png')}}"
                                    style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/NewyorkUniversity.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Oxford University.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Princeton University.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Stanford university.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/UCLLondon.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/University of Cambridge.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/University Of Chicago.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/University of Pennsylvania.png')}}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Imperial College London.png')}}" style="width:150px;">
                            </div>

                        </div>

                        <div class="" data-aos="fade-right" data-aos-delay="900"
                            style="margin-bottom:20px; width: 600px;">
                            <div class="fact__item-wrap-two">
                                <div class="row justify-content-center">
                                    <div class="col-3 col-md-3 col-sm-6">
                                        <div class="fact__item fact__item-two">
                                            <h2 class="count">
                                                <span class="odometer" data-count="10"></span>+
                                            </h2>
                                            <p style="font-size: 15px;">Years</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-6">
                                        <div class="fact__item fact__item-two">
                                            <h2 class="count">
                                                <span class="odometer" data-count="250"></span>K+
                                            </h2>
                                            <p style="font-size: 15px;">Satisfied students</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-6">
                                        <div class="fact__item fact__item-two">
                                            <h2 class="count">
                                                <span class="odometer" data-count="150"></span>+
                                            </h2>
                                            <p style="font-size: 15px;">Subjects</p>
                                        </div>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-6">
                                        <div class="fact__item fact__item-two">
                                            <h2 class="count">
                                                <span class="odometer" data-count="98"></span>%
                                            </h2>
                                            <p style="font-size: 15px;">Satisfaction Rate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    
    <!-- banner-area-end -->
    <!-- course-area -->
    <section class="courses-area section-pt-30 section-pb-30">
        <div class="container11">
            <div class="row">
                <div class="col-12">
                    <div class="section__title text-center mb-25">
                        <h2 class="title">Top-notch {{@$aa[1]}}<br>writers in one place</h2>

                        <p>Get personalised {{@$aa[1]}} help from top-notch {{@$aa[1]}} writers and boost your grades.
                        </p>

                    </div>
                </div>
            </div>
            <div class="tab-content" id="courseTabContent">
                <div class="courses__nav">
                    <div class="courses-button-prev">
                        <i class="flaticon-arrow-right"></i>
                    </div>
                    <div class="courses-button-next">
                        <i class="flaticon-arrow-right"></i>
                    </div>
                </div>
                <div class="swiper courses-swiper-active">
                    <div class="swiper-wrapper"> 

                    @foreach($experts as $expert)
                        <div class="swiper-slide">
                            <div class="courses__item shine__animate-item">
                                <div class="rc-post-item">
                                    <div class="rc-post-thumb">
                                        <a href="{{route('Expert.Details',$expert->id)}}">
                                            <img src="{{$expert->image}}" alt="img">
                                        </a>
                                    </div>
                                    <ul class="courses__item-meta list-wrap">
                                        <li>
                                            <h5>
                                                <a href="{{route('Expert.Details',$expert->id)}}">{{$expert->first_name}} {{$expert->last_name}}</a>
                                            </h5>
                                        </li>

                                        <li class="avg-rating">
                                        @php($ratingNumbersList = explode('-',$expert->rating_numbers))
                                            @for($i=0; $i < $ratingNumbersList[0]; $i++) <i class="fas fa-star"></i>
                                                @endfor
                                                @if(isset($ratingNumbersList[1]))
                                                {{$ratingNumbersList[1]}}+
                                                @endif
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="courses__item-bottom-three">
                                    <ul class="list-wrap">

                                        <li>
                                            <img src="{{ asset('img/expert_degree.png')}}" alt="img"
                                                style="width:40px;">
                                            {{$expert->qualification}}
                                        </li>

                                        <li>
                                            <img src="{{ asset('img/expert_order.png')}}" alt="img" style="width:40px;">
                                            {{ thousandsCurrencyFormat($expert->total_orders) }}+ Orders
                                        </li>
                                    </ul>
                                </div>
                                <div class="courses__item-bottom-three" id="courses__tag">
                                <ul class="courses__item-meta list-wrap">
                                    @foreach($expert->subjects as $subject)
                                        <li class="courses__item-tag">
                                            <a href="#">{{$subject->subject->subject_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        
                        
                        

                    </div>
                </div>
                
                <div style="width:100%;text-align:Right;padding-right:4%;color: #000;">
                    <span style="padding: 9px 0px 0px 6px;float: right;"><img src="{{ asset('img/arrow.png')}}"
                            style="width:20px;"></span>
                    <span style="padding: 10px 0px 0px 0px;float: right;">View All</span>

                </div>

            </div>
            <div class="tab-content" id="courseTabContent" style="width: 56%;margin: 0 auto;padding-top: 26px;">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6" align="center">
                        <div class="features__item-six features__item-seven">
                            <img src="{{ asset('img/Lighting.svg')}}" style="width: 65px;">

                        </div>
                        <div class="features__content-six features__content-seven">
                            <h4 class="title">Lighting fast turnaround</h4>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" align="center">
                        <div class="features__item-six features__item-seven">
                            <img src="{{ asset('img/Help with any subjects.svg')}}" style="width: 65px;">

                        </div>
                        <div class="features__content-six features__content-seven">
                            <h4 class="title">Help with any subjects</h4>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" align="center">
                        <div class="features__item-six features__item-seven">
                            <img src="{{ asset('img/Highly unique papers.svg')}}" style="width: 65px;">

                        </div>
                        <div class="features__content-six features__content-seven">
                            <h4 class="title">Highly unique papers</h4>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" align="center">
                        <div class="features__item-six features__item-seven">
                            <img src="{{ asset('img/USA, UK.svg')}}" style="width: 65px;">

                        </div>
                        <div class="features__content-six features__content-seven">
                            <h4 class="title">Writers from the USA, UK and Canada</h4>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12" align="center">
                    <p style="margin: 20px 0px 20px 0px;color: #000;font-weight: 400;font-size: 16px;"><img
                            src="{{ asset('img/no ai.svg')}}" style="width:20px;">&nbsp;&nbsp;No AI involvement, 100%
                        authentic guidance from tutors</p>
                </div>
            </div>

        </div>
    </section>

    
    <!-- course-area-end -->
    <style>
    .perks_n {
        width: 13%;
        /* transform: rotate(1deg); */
        padding: 3px 27px 11px 15px;
        font-weight: bold;
        font-size: 21px;
        height: 42px;
        background: url('img/number.png');
        background-repeat: no-repeat;
        background-size: 38px 38px;
    }

    .home_services {
        /* background-color: var(--white); */
        border-radius: 3em;
        height: 40em;
        margin-top: 0em;
        margin-bottom: 1.5em;
        display: flex;
        position: relative;
        overflow: hidden;
    }

    .newsletter__form-two .btn {
        background: #FEEAA8;
        color: var(--tg-heading-color);
        width: 200px;
        height: 200px;
        border-radius: 1000px;
        box-shadow: 5px 4px 0px 0px #000000;
    }

    .newsletter__form-two .btn:hover {
        background: #3b71ed;
        color: var(--tg-heading-color);
        width: 200px;
        height: 200px;
        border-radius: 1000px;
        box-shadow: 5px 4px 0px 0px #000000;
    }
    </style>
    <section class="courses-area-two tg-motion-effects courses__bg" style="padding-top: 100px;margin-top:50px;">
        <div class="container">

            <div class="row justify-content-center"
                style="background:url('{{ asset('img/bg2.png')}}');background-size: 100% 100%;">

                <div class="col-xl-6 col-lg-6 col-md-6" style="height:500px;">
                    <div style="position: relative;top: -71px;"><img src="{{ asset('img/Paper.svg')}}"
                            style="width:500px;"></div>
                    <div class="courses__item-four shine__animate-item"
                        style="/* box-shadow: 14px 14px 0px 0px #14141440; *//* border: 1.02px solid #000000; */position: relative;z-index: 2;top: -649px;width: 76%;left: 27px;border-radius: 0px;border: 0px;/* transition: rotate; */transform: rotate(354deg);">
                        <p style="font-weight:bold;font-size: 2.5rem;color:#000;text-align:center;">Perks of EduCrafter
                        </p>


                        <ul class="about__info-list list-wrap" style="
    margin-top: 70px;
    transform: rotate(0deg);
">
                            <li class="about__info-list-item">
                                <span class="perks_n">1</span>
                                <span style="width:88%;">
                                    <p class="content">24/7 support by your side </p>
                                </span>
                            </li>
                            <li class="about__info-list-item">
                                <span class="perks_n">2</span>
                                <span style="width:88%;">
                                    <p class="content">Personal data safety</p>
                                </span>
                            </li>
                            <li class="about__info-list-item">
                                <span class="perks_n">3</span>
                                <span style="width:88%;">
                                    <p class="content">Unlimited Amendments</p>
                                </span>
                            </li>
                            <li class="about__info-list-item">
                                <span class="perks_n">4</span>
                                <span style="width:88%;">
                                    <p class="content">100% Plagiarism Free</p>
                                </span>
                            </li>

                        </ul>

                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6">

                    <div class="" style="position: absolute;top: 50px;/* left: 10px; */right: 40%;">
                        <img src="{{ asset('img/Group%201000007894.svg')}}" alt="" style="width:200px;">

                    </div>
                    <div class="" style="position: relative;margin-top: 172px;left: -92px;">
                        <p
                            style="font-weight:bold;font-size:4rem;line-height: 76px;font-family:Sofia Pro, sans-serif;color: #000;width: 600px;">
                            99% Success Story <br>Yours Begins Now</p>

                        <p style="font-size:16px;font-family:Sofia Pro, sans-serif;    color: #000;"><span
                                style="font-weight:bold;">Unlock Success:</span> Where Every Instruction Counts,
                            Deadlines Are Always Met, and Papers Shine with Expert {{@$aa[1]}} Help</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section class="brand-area">
        <div class="container-fluid">

            <div class="marquee_mode" id="marquee_mode4">
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;PhD Experts
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Any Topic
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Top Quality
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;A+ Results
                    </a>
                </div>

                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/blue.png')}}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Absolute
                        Discretion
                    </a>
                </div>


            </div>

        </div>
    </section>

    <section class="choose__area-three"
        style=" border-top: 3px solid #000000;border-bottom: 3px solid #000000; margin-bottom: 20px;">
        <div class="container11">
            <div class="row">

                <div class="col-lg-6" style="/* border-right: 3px solid #000000; */padding: 0px;">
                    <div class="choose__content-three">
                        <div class="section__title mb-15">
                            <h2 class="title bold">Our Guarantees</h2>
                        </div>

                        <div class="choose__list-wrap">
                            <div class="choose__list-item">
                                <div class="icon">

                                    <img src="{{ asset('img/smoothinnercorner.png')}}">
                                </div>
                                <div class="content">
                                    <h4 class="title">On time delivery</h4>
                                    <span>Our {{@$aa[1]}} writers make sure that all orders are submitted prior to the
                                        deadline so that you can proofread your paper before handing it over to your
                                        tutor.</span>
                                </div>
                            </div>
                            <div class="choose__list-item">
                                <div class="icon">
                                    <img src="{{ asset('img/smoothinnercorner.png')}}">
                                </div>
                                <div class="content">
                                    <h4 class="title">Verified Tutors</h4>
                                    <span>All tutor profiles are meticulously checked: diplomas, identity and
                                        background. Only profiles demonstrating academic excellence are retained,
                                        ensuring you receive top quality {{@$aa[1]}} help.</span>
                                </div>
                            </div>
                            <div class="choose__list-item">
                                <div class="icon">
                                    <img src="{{ asset('img/smoothinnercorner.png')}}">
                                </div>
                                <div class="content">
                                    <h4 class="title">100% plagiarism free!</h4>
                                    <span>All {{@$aa[1]}} Help papers are scanned for duplicate content and are
                                        guaranteed to be plagiarism free, providing you with unique and original content
                                        from our expert {{@$aa[1]}} writers.</span>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="instructor__details-Skill">
                        <h4 class="title">Price Includes</h4>

                        <div class="instructor__progress-wrap">
                            <ul class="list-wrap">
                                <li>
                                    <div class="progress-item">
                                        <h6 class="title"><span><img
                                                    src="{{ asset('img/Checkmark.png')}}"></span>Turnitin report</h6>

                                    </div>
                                </li>
                                <li>
                                    <div class="progress-item">
                                        <h6 class="title"><span><img src="{{ asset('img/Checkmark.png')}}"></span>Top
                                            PhD Writer </h6>

                                    </div>
                                </li>
                                <li>
                                    <div class="progress-item">
                                        <h6 class="title"><span><img
                                                    src="{{ asset('img/Checkmark.png')}}"></span>Formatting </h6>

                                    </div>
                                </li>
                                <li>
                                    <div class="progress-item">
                                        <h6 class="title"><span><img
                                                    src="{{ asset('img/Checkmark.png')}}"></span>Unlimited revisions
                                        </h6>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                
                <div class="col-lg-6 col-md-12"
                    style="border-left: 3px solid #000000;padding: 0px;background-color: #c2e3fb;">
                    <div class="choose__img-three"
                        style="background-image:url('{{ asset('img/Group 1171274562@1x.png')}}');object-fit: cover;width: 100%;background-size: contain;height: 100%;background-repeat: no-repeat;background-repeat: no-repeat;background-repeat: no-repeat;background-position: bottom;">
                        &nbsp;</div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial__area-two pb-60 testimonial__bg" style="padding-top:50px;">
        <style>
        /* Prevent click/hover for element */
        .off {
            pointer-events: none;
        }

        .image {
            border-radius: 100px;
            width: 3.5em;
        }
        </style>

        <div class="container11">
            <div data-w-id="7dbecf2c-55a0-2342-2a55-6b8392bc8dbe" class="testimonial-section">
                <div class="tesimonial-inner">
                    <div class="div-block-21" style="background: #FEEAA8;border: 1px solid #000000;border-radius:76px;">
                        <p class="descriptor">Several students are typing</p>
                        <div data-w-id="70d91fa5-3c65-1f79-de04-aecda6e31732" class="div-block-22">
                            <div data-w-id="d6405171-e1d1-4a40-fcbf-e86775599a99" style="
                                            -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                        " class="dot"></div>
                            <div data-w-id="d50d46ff-f48b-197f-579e-43775b27d5cf" style="
                                            -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                        " class="dot"></div>
                            <div data-w-id="69797d02-12b4-5517-c52c-174d95c27057" style="
                                            -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                            transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
                                        " class="dot"></div>
                        </div>
                    </div>
                    <h2 class="large" style="font-family: 'Sofia Pro', sans-serif;">We Make <br>Students Happy😍</h2>
                    <div class="div-block-20">

                        <p class="paragraph">
                            <img src="{{ asset('img/Group 1000007893.png')}}" loading="lazy" alt="" class="image" />
                            Trusted by 250k+ Students Worldwide
                        </p>


                    </div>
                </div>
                <div class="div-block-81">
                    <div class="card-container wonder-dynamics">
                        <div class="testimonial-card wonder-dynamics"
                            style="background: #FFF4E4;border: 0.61px solid #F0F0F0;box-shadow: 4px 5px 0px 0px #9071FB;border-radius:8px;">
                            <div class="testimonial__content-two">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="paragraph" style="color:#000;font-size:10px;font-weight:500;">Educrafter is my
                                go-to for {{@$aa[1]}} help. Their services are affordable, user-friendly, and always
                                deliver top-notch results. Highly recommend!
                            </p>
                            <div class="div-block-13-copy">
                                <p style="font-size:16px;color:#000;font-family:'Inter'"><span
                                        style="font-weight:bold;">Jessica</span>&nbsp;&nbsp;<span
                                        style="font-size:14px;">May 16, 2024</span> <span
                                        style="font-size:14px;">Brown University</span></p>

                            </div>
                        </div>
                    </div>
                    <div class="card-container merck">
                        <div class="testimonial-card merck"
                            style="background: #DCF3FF;border: 0.95px solid #F0F0F0;box-shadow: 4px 5px 0px 0px #8ED993;border-radius:8px;">
                            <div class="testimonial__content-two">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <p class="paragraph" style="color:#000;font-size:10px;font-weight:500;">Educrafter has been
                                a lifesaver for me. Their user-friendly service helped me ace my courses without the
                                usual stress.</p>
                            <div class="div-block-13-copy">

                                <p style="font-size:16px;color:#000;font-family:'Inter'"><span
                                        style="font-weight:bold;">Sophia</span>&nbsp;&nbsp;<span
                                        style="font-size:14px;">April 20, 2024</span>&nbsp;&nbsp;<span
                                        style="font-size:14px;">Imperial College, London</span></p>

                            </div>
                        </div>
                    </div>




                </div>
                <div class="card-container clutch"><img
                        src="https://cdn.prod.website-files.com/63dae19244d432799bf5baa4/63e523b634d60a18bd161b8f_clutch.svg"
                        loading="lazy" alt="" class="clutch" /></div>
                <div class="card-container pencil"><img
                        src="https://cdn.prod.website-files.com/63dae19244d432799bf5baa4/63e524b35f5d677e9845c642_pencil.svg"
                        loading="lazy" alt="" class="pencil" /></div>
                <div class="card-container chat">

                    <div id="drag" class="gif-container chat">
                        <img src="{{ asset('img/banner3_l.png')}}" loading="lazy" alt="" class="gif" />
                    </div>

                </div>
                <div class="card-container scott22">
                    <div id="drag" class="gif-container scott22"><img src="{{ asset('img/image 405.gif')}}"
                            loading="lazy" alt="" class="gif" /></div>
                </div>

                <div class="card-container scott">
                    <div id="drag" class="gif-container scott"><img src="{{ asset('img/111.gif')}}" loading="lazy"
                            alt="" class="gif" /></div>
                </div>


                <style>
                .card-container.chat {
                    top: auto;
                    bottom: 2em;
                    left: 19em;
                    right: auto;
                }

                .large {
                    letter-spacing: -.02em;
                    font-size: 4em;
                    font-weight: bold;
                    line-height: 1;
                }

                .card-container.scott22 {
                    top: 1em;
                    bottom: auto;
                    left: 45.2em;
                    right: auto;
                }

                .card-container.scott {
                    top: 7em;
                    bottom: auto;
                    left: 37.2em;
                    right: auto;
                }

                .testimonial-section {
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    margin-bottom: 2em !important;
                    padding-top: 20em;
                    padding-bottom: 2em !important;
                    display: flex;
                    position: relative;
                }

                .card-container.scott11 {
                    top: 0em;
                    bottom: auto;
                    left: 29.2em;
                    right: auto;
                }

                .card-container.wonder-dynamics {
                    top: 6%;
                    bottom: auto;
                    left: 2%;
                    right: auto;
                }

                .testimonial-card.wonder-dynamics {
                    cursor: grab;
                    width: 31em;
                    top: 0%;
                    bottom: auto;
                    left: .5em;
                    right: auto;
                    transform: rotate(23deg);
                }

                .card-container.merck {
                    top: 3%;
                    bottom: auto;
                    left: auto;
                    right: 5%;
                }

                .gif-container {
                    border-radius: 1.5em;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    width: 5.5em;
                    height: 5.5em;
                    display: flex;
                    overflow: hidden;
                    transform: rotate(0);
                }

                .gif-container.scott {
                    transform: rotate(330deg);
                }

                .testimonial-card.merck {
                    width: 28em;
                    top: 2.8em;
                    bottom: auto;
                    left: auto;
                    right: .9em;
                    transform: rotate(323deg);
                }
                </style>
                <div class="card-container scott11">
                    <div class="gif-container scott11"><img src="{{ asset('img/banner2_l.png')}}" loading="lazy" alt=""
                            class="gif" /></div>
                </div>
                <style>
                .card-container.hand {
                    top: 10em;
                    bottom: auto;
                    left: 52em;
                    right: auto;
                }
                </style>
                <div class="card-container hand">
                    <div class="gif-container hand"><img src="{{ asset('img/hand.png')}}" loading="lazy" alt=""
                            class="gif" /></div>
                </div>



            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__item-wrap">
                        <div class="testimonial__nav-two">
                            <button type="button" class="testimonial-button-prev">
                                <i class="flaticon-arrow-right"></i>
                            </button>
                            <button type="button" class="testimonial-button-next">
                                <i class="flaticon-arrow-right"></i>
                            </button>
                        </div>
                        <div class="swiper-container testimonial-swiper-active-two">
                            <div class="swiper-wrapper">
                                @if($data->service && $data->service->ratings)
                                @php($pageRating = $data->service->ratings)
                                @foreach ($pageRating as $rating)
                                <div class="swiper-slide">

                                    <div class="testimonial__item-two" style="padding:30px 15px 15px 15px;">
                                        <div class="testimonial__content-two">

                                        
                                            <div class="rating" data-rate="{{$rating->star_rating}}">

                                            @if(is_numeric($rating->star_rating))
                                               @for($i=0; $i < $rating->star_rating; $i++) 
												<i class="fas fa-star"></i>
												@endfor
                                            @endif
                                            </div>

                                        </div>
                                        
                                        <div class="testimonial__author testimonial__author-two">
                                            <?php
														$date2 = $rating->created_at;
														$newDate2 = date("M d, Y", strtotime($date2));
														$arrName=explode("-",$rating->address);
												?>
                                            <div class="testimonial__author-content testimonial__author-content-two">
                                                <h2 class="title">{{ @$arrName[0]}}</h2>
                                                <div style="width:100%;float: left;margin-bottom: 10px;"><span
                                                        style="color:#475569;font-size:14px;float: left;width:100%;">{{@$arrName[1]}}</span>
                                                    <span
                                                        style="color: #0056D1;font-size:14px;margin-top:5px;float: left;width:100%;">{{@$arrName[2]}}</span>
                                                </div>

                                            </div>
                                        </div>
                                        <p
                                            style="color: #475569;font-size:14px;margin-top:10px;line-height: 22px;height:100px;font-family: inter;">
                                            {!! Str::words(strip_tags($rating->description), 20, ' <a
                                                href="javascript:void(0)"
                                                onclick="toggleDescription(event, '.$rating->id.')"
                                                style="text-decoration: none; "> Read more...</a>') !!}</p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="brand-area" style="background:#C2E3FB;margin-bottom:50px;border: 1px solid #000000">
        <div class="container-fluid">
            <h3 style="padding-top: 20px;padding-bottom:20px;text-align:center;">250k+ students trust us, and you can
                too!</h3>
            <div class="marquee_mode" id="marquee_mode_top11">
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Babson college.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Brown university.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/ehl switzerland.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Harvard University.png')}}" style="width:150px;">
                </div>

                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">

                    <img src="{{ asset('img/downlogo/Imperial College London.png')}}" style="width:150px;">

                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Newyork University.png')}}" style="width:150px;">
                </div>

                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Oxford University.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Pepperdine University.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Stanford university.png')}}" style="width:150px;">
                </div>
                
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Princeton University.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Regents University.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Stanford university.png')}}" style="width:150px;">
                </div>
            </div>

        </div>
    </section>
    <!-- testimonial-area -->
    <section class="testimonial__area-two section-pt-30 pb-60 testimonial__bg"
        style="background: #FFF4E4;border: 1px solid #000000;box-shadow: 0px 7px 0px 0px #000000;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section__title text-center mb-50">
                        <h2 class="title" style="font-size:">How it works</h2>
                        <p>Get the perfect {{@$aa[1]}} from EduCrafter in just four easy steps</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__item-wrap">
                        <img src="{{ asset('img/how_it_work.png')}}">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="brand-area">
        <div class="container-fluid">
            <div class="marquee_mode" id="marquee_mode">
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/star.png')}}" style="width:20px;">&nbsp;&nbsp;&nbsp;&nbsp;A+ Results
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/star.png')}}" style="width:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Absolute
                        Discretion
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/star.png')}}" style="width:20px;">&nbsp;&nbsp;&nbsp;&nbsp;PhD Experts
                    </a>
                </div>
                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/star.png')}}" style="width:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Top Quality
                    </a>
                </div>

                <div class="brand__item">
                    <a href="#">
                        <img src="{{ asset('img/star.png')}}" style="width:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Absolute
                        Discretion
                    </a>
                </div>


            </div>
        </div>
    </div>
    <section class="about-area-three">
        <div class="container"
            style="border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;border-radius:24px;">
            <div class="row">
                <div class="col-12">
                    <div class="section__title text-center mt-50">
                        <h2 class="title">Service we offer</h2>
                        <p>From Essays to Dissertation, Our {{@$aa[1]}} Writers Can Handle It All with Skill and
                            Precision.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-12 col-md-12">

                    <div class="home_services" style="height:500px;">

                        <div class="service-block purple off">
                            <p class="large off">Proof-Reading</p>
                        </div>
                        <div class="service-block green off">
                            <p class="large off">Dissertation</p>
                        </div>
                        <div class="service-block red off">
                            <p class="large off">Editing</p>
                        </div>
                        <div class="service-block sky off">
                            <p class="large off">Thesis</p>
                        </div>
                        <div class="service-block yellow off">
                            <p class="large off">Formatting</p>
                        </div>
                        <div class="service-block gray off">
                            <p class="large off">Assignments</p>
                        </div>
                        <div class="service-block pink off">
                            <p class="large off">Reports</p>
                        </div>
                        <div class="service-block black off">
                            <p class="large off">Essays-Writing</p>
                        </div>
                        <div class="service-block white off">
                            <p class="large off">SOP-Writing</p>
                        </div>
                        <div class="service-block blue off">
                            <p class="large off">Papers</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="blog__post-area-three tg-motion-effects blog__bg" style="background: #C2E3FB;margin-top: 100px;height: 100%;border: 1px solid #000000;box-shadow: 0px 4px 0px 0px #000000;">

        <div style="margin:0 auto;position:Absolute;display: flex;top: 21%;z-index:10;width:100%;">
            <div style="width:400px;height: 400px;background: #fff;border-radius: 20px;display: flex;margin: 0 auto;/* top: 29%; */position: relative;border: 10px solid #FB9271;box-shadow: 8px 8px 0px 0px #000000;">
                <img src="{{ asset('img/1rRk.gif')}}"
                    style="width: 300px;height: 300px;/* display: block; */margin-left: auto;margin-right: auto;position: relative;top: -20%;transform: rotate(350deg);border-radius: 20px;">

                <div
                    style="width:400px;position: absolute;bottom: 8px;font-size: 3em;font-family: 'Inter';text-align: center;color: #000;font-weight: bold;">
                    <span style="color: #000;width: 100%;float: left;height: 54px;">As</span><span
                        style="color:#3B71ED;">Featured</span> In</div>
                </div>


        </div>
        <div class="marquee_mode" id="marquee_mode1" style="height:128px;">

            <div class="row">
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/cnbc.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/cosmopolitian.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/edsurge.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/edutopia.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/forbes.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/lifehacker.svg')}}" style="width:250px;">
                    </div>
                </div>

            </div>
        </div>
        <div class="marquee_mode" id="marquee_mode2" style="margin-top: 20px;">
            <div class="row">
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/newsweek.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/nyp.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/edutopia.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/forbes.svg')}}" style="width:250px;">
                    </div>
                </div>
                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/lifehacker.svg')}}" style="width:250px;">
                    </div>
                </div>

                <div class="col-xl-2 col-md-2">
                    <div class="shine__animate-item">
                        <img src="{{ asset('img/logos/cnbc.svg')}}" style="width:250px;">
                    </div>
                </div>



            </div>
        </div>

    </section>
	<!-- faq-area -->
    <section class="faq__area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__title text-center mt-40 mb-40">
                        <h2 class="title" style="font-size:5rem;">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>




            <div class="faq__wrap">
                <div class="accordion" id="accordionExample">
                    <div class="row">
                        @if($data->service && $data->service->faq)
                        @foreach ($data->service->faq as $faq)
                        <div class="col-lg-6">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne<?= $faq['id']; ?>" aria-expanded="true"
                                        aria-controls="collapseOne<?= $faq['id']; ?>">
                                        <?= $faq['question']; ?>
                                    </button>
                                </h2>
                                <div id="collapseOne<?= $faq['id']; ?>" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p style="border-top: 1px solid #B1B1B1;">&nbsp;</p>
                                        <?= $faq['answer']; ?>

                                    </div>
                                </div>
                            </div>
                        </div>


                        @endforeach
                        @endif
                    </div>
                </div>
            </div>





        </div>

    </section>
    <!-- faq-area-end -->

    <!-- choose-area -->
    <section class="choose__area tg-motion-effects section-pt-30 pb-60 mb-5"
        style="background: #FFF4E4;border: 1px solid #000000;box-shadow: 0px 7px 0px 0px #000000;margin-top:50px;">
        <div class="container" style="max-height: 600px;overflow: auto;">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section__title text-center mb-40">

                        <h2 class="title" style="font-size:3em;">Make your studies effortless with our {{@$aa[1]}}
                            writing service</h2>

                    </div>
                </div>
            </div>
            <div class="choose__inner-wrap">
                <div class="row">
                    @if($data->service && $data->service->specification)
                    @foreach($data->service->specification as $arrR)
                    <div class="col-lg-6">

                        <div class="choose__content" style="border: 1px solid #000000;border-radius:24px;">
                            <div class="section__title mb-15" style="height: 38px;">
                                <span style="width: 13%;float: left;padding: 9px 0px 0px 0px;"><img
                                        src="{{ asset('img/writing_service/1.svg')}}" style="width: 55px;"></span>
                                <span style="float: left;width: 87%;">
                                    <h4 class="subtitle" style="font-size:28px;">{{$arrR->title}}</h4>
                                </span>
                            </div>
                            <p style="font-size: 16px;   font-weight: 400; text-align:justify;font-family: 'Inter';">
                                {!!$arrR->description!!}</p>


                        </div>
                    </div>
                    @endforeach
                    @endif


                </div>
            </div>
        </div>


    </section>
    <!-- choose-area-end -->



    <section class="newsletter__area-three mb-5">
        <div class="container">
            <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;">

                <img src="{{ asset('img/black star.svg')}}" style="position:Absolute;top:10px;left: 50px;">
                <div style="width:80%">
                    <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:8em;">Hire
                        Tutor</h2>
                    <p style="color:#000;font-size:18px;font-weight: 500;">Grade-Boosting Essays: Our Precision
                        Writers Hit Your Academic Target Every Time </p>
                </div>
                <div style="width:20%">
                    <form action="#" class="newsletter__form-two">
                        <button type="submit" class="btn"><img src="{{ asset('img/arrow.png')}}"></button>
                    </form>
                </div>



            </div>

        </div>
    </section>


</main>
<!-- main-area-end -->
@endsection