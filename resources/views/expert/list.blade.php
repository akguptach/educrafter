@extends('layout.app',['title'=>@$title])
@section('content')
<!-- main-area -->
<main class="main-area fix">

    <!-- banner-area -->
    <section class="banner-area banner-bg-six tg-motion-effects">
        <div class="container">
            <div class="row justify-content-between align-items-start">
                <div class="col-lg-12 col-md-12 col-sm-12 order-0 order-lg-0">
                    <div class="banner__images-six">
                        <div class="tutor_head_1" data-aos="fade-down" data-aos-delay="1000">
                            <img src="{{ asset('img/tutors/1.png') }}" style="width:50px;" alt="img">
                        </div>
                        <div class="tutor_head_2" data-aos="fade-right" data-aos-delay="1000">
                            <img src="{{ asset('img/tutors/2.png') }}" style="width:50px;" alt="img">
                        </div>
                        <div class="tutor_head_3" data-aos="fade-left" data-aos-delay="1000">

                            <img src="{{ asset('img/tutors/3.png') }}" style="width:50px;" alt="img" class="injectable">


                        </div>
                        <div class="tutor_head_4" data-aos="fade-up" data-aos-delay="1000">

                            <img src="{{ asset('img/tutors/4.png') }}" style="width:50px;" alt="img">


                        </div>
                        <div class="tutor_head_5" data-aos="fade-left" data-aos-delay="1000">

                            <img src="{{ asset('img/tutors/5.png') }}" style="width:50px;" alt="img" class="injectable">


                        </div>
                        <div class="tutor_head_6" data-aos="fade-up" data-aos-delay="1000">

                            <img src="{{ asset('img/tutors/6.png') }}" style="width:50px;" alt="img">


                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="banner__content-six" align="center">
                        <h2 class="title" data-aos="fade-right" data-aos-delay="400"
                            style="text-align: center;line-height: 134px;font-family: 'Sofia Pro'; font-weight: bold; font-style: normal;">
                            Meet our<br>Top essay writers</h2>


                        <p data-aos="fade-right" data-aos-delay="600" style="text-align: center;"> View profile info,
                            rating, and reviews to choose the best essay writer for your order</p>


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
                                <img src="{{ asset('img/logo2/Columbia University.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Cornell University.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Duke University.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/ETHzurich.png') }}" style="width:150px;">
                            </div>

                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/HarvardUniversity.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/MassachusettsInsttute ofTechnology.png') }}"
                                    style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/NewyorkUniversity.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Oxford University.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Princeton University.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Stanford university.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/UCLLondon.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/University of Cambridge.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/University Of Chicago.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/University of Pennsylvania.png') }}" style="width:150px;">
                            </div>
                            <div class="brand__item"
                                style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
                                <img src="{{ asset('img/logo2/Imperial College London.png') }}" style="width:150px;">
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
                                                <span class="odometer" data-count="250"></span>M+
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
                                                <span class="odometer" data-count="90"></span>%
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
    <section class="courses-area section-pt-30 section-pb-30" style="padding-left: 100px;padding-right: 100px;">
        <div class="container">


            <div class="row">
                @foreach($experts as $expert)
                <div class="col-sm-4">
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
                                        <a href="{{route('Expert.Details',$expert->id)}}">{{$expert->first_name}}
                                            {{$expert->last_name}}</a>
                                    </h5>
                                </li>

                                <li class="avg-rating">
                                    @if(is_numeric($expert->rating_numbers))
                                    @php($ratingNumbers = $expert->rating_numbers)
                                    @else
                                    @php($ratingNumbers = 4)
                                    @endif
                                    @for($i=0; $i < $ratingNumbers; $i++) <i class="fas fa-star"></i>
                                        @endfor
                                        5K+
                                </li>
                            </ul>
                        </div>
                        <div class="courses__item-bottom-three">
                            <ul class="list-wrap">
                                <li>
                                    <img src="{{ asset('img/expert_degree.png') }}" alt="img" style="width:40px;">
                                    {{$expert->qualification}}
                                </li>
                                <li>
                                    <img src="{{ asset('img/expert_order.png') }}" alt="img" style="width:40px;">
                                    5K+ Orders
                                </li>
                            </ul>
                        </div>

                        <div class="courses__item-bottom-three" id="courses__tag">
                            @php($competencesList = explode(',',$expert->competences))
                            <ul class="courses__item-meta list-wrap">
                                @foreach($competencesList as $competence)
                                <li class="courses__item-tag">
                                    <a href="#">{{$competence}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="courses__item-bottom">
                            <div class="button">
                                <a href="{{route('Expert.Details',$expert->id)}}">
                                    <span class="text">Discuss your order</span>

                                </a>
                            </div>

                        </div>

                    </div>
                </div>
                @endforeach






            </div>


        </div>
        <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;margin:20px;">

            <img src="{{ asset('img/black star.svg') }}" style="position:Absolute;top:10px;left: 50px;">
            <div style="width:80%">
                <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:8em;">Hire
                    Tutor</h2>
                <p style="color:#000;font-size:18px;font-weight: 500;">Grade-Boosting Essays: Our Precision Writers Hit
                    Your Academic Target Every Time </p>
            </div>
            <div style="width:20%">
                <form action="#" class="newsletter__form-two">
                    <button type="submit" class="btn"><img src="{{ asset('img/arrow.png') }}"></button>
                </form>
            </div>



        </div>


    </section>
    <!-- course-area-end -->

    <!-- faq-area -->
    <section class="faq__area mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__title text-center mt-40 mb-40">
                        <h2 class="title" style="font-size:5rem;">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">


                    <div class="faq__wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Experienced & Certified: EduCrafter's essay writers are confirmed native
                                            English speakers with years of writing experience and a strong academic
                                            background. All hold Master's or Ph.D. degrees from top universities,
                                            ensuring exceptional writing skills and subject knowledge.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes! We have a vast pool of experienced essay writers across various
                                            disciplines, including complex subjects like Physics, Engineering, and
                                            Information Technology. No matter your topic, we can find the perfect writer
                                            to assist you.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize
                                            prioritize and.In this episode.urvived not only five centuries.Edhen an
                                            unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize
                                            prioritize and.In this episode.urvived not only five centuries.Edhen an
                                            unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">

                    <div class="faq__wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefive" aria-expanded="true"
                                        aria-controls="collapsefive">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize
                                            prioritize and.In this episode.urvived not only five centuries.Edhen an
                                            unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize
                                            prioritize and.In this episode.urvived not only five centuries.Edhen an
                                            unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseseven" aria-expanded="false"
                                        aria-controls="collapseseven">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize
                                            prioritize and.In this episode.urvived not only five centuries.Edhen an
                                            unknown printer took a galley of type and scrambl
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseeight" aria-expanded="false"
                                        aria-controls="collapseeight">
                                        Will the assigned essay writer follow the guidelines specified in the order?
                                    </button>
                                </h2>
                                <div id="collapseeight" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Groove’s intuitive shared inbox makes it easy for team members organize
                                            prioritize and.In this episode.urvived not only five centuries.Edhen an
                                            unknown printer took a galley of type and scrambl
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
    <!-- faq-area-end -->





</main>

@endsection