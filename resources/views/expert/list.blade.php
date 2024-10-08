@extends('layout.app',['title'=>@$title])
@section('content')
<!-- main-area -->

<style>
.fact__inner-wrap {
    background: #fff;
    padding: 0px 200px 30px;
}

.fact__inner-wrap h2 {
    font-size: 2rem;
    font-weight: bold;
}

.fact__inner-wrap p {
    font-size: 16px;
}

.top-notch {
    max-width: 100%;
    padding: 0px;
}

.top-notch-hr {
    display: none;
}

.top_university {
    padding-top: 20px;
    padding-bottom: 40px;
    font-size: 2rem;
}

.support_m {
    display: none;
}

.support_d {
    display: block;
}

.choose__list-item {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    align-items: center;
    gap: 4px;
    margin-bottom: 24px;
}

.featured-in {
    margin: 0 auto;
    position: Absolute;
    display: flex;
    top: 21%;
    z-index: 10;
    width: 100%;
}

.featured-in-div {
    width: 400px;
    height: 400px;
    background: #fff;
    border-radius: 20px;
    display: flex;
    margin: 0 auto;
    /* top: 29%; */
    position: relative;
    border: 10px solid #FB9271;
    box-shadow: 8px 8px 0px 0px #000000;
}

.featured-in-text {
    width: 400px;
    position: absolute;
    bottom: 8px;
    font-size: 3em;
    font-family: 'Inter';
    text-align: center;
    color: #000;
    font-weight: bold;
}

.featured-in img {
    width: 300px;
    height: 300px;
    /* display: block; */
    margin-left: auto;
    margin-right: auto;
    position: relative;
    top: -20%;
    transform: rotate(350deg);
    border-radius: 20px;
}


.featured-in-img {
    width: 250px;
}

.newsletter__inner-wrap-two .title {
    font-family: 'Sofia Pro', sans-serif;
    font-weight: bold;
    font-size: 8em;
}

.newsletter__inner-wrap-two .div1 {
    width: 80%;
}

.newsletter__inner-wrap-two .div2 {
    width: 20%;
}

.choose__area .subtitle {
    font-size: 1.6rem;
}

.choose__area .title {
    font-size: 3rem;
}

@media (max-width: 1199.98px) {
    .choose__area .title {
        font-size: 1.5rem;
    }

    .choose__area .subtitle {
        font-size: 1rem;
    }

    .newsletter__form-two .btn {
        background: #FEEAA8;
        color: var(--tg-heading-color);
        width: 50px !important;
        height: 50px !important;
        border-radius: 100px;
        padding: 5px;
        box-shadow: 5px 4px 0px 0px #000000;
    }

    .newsletter__inner-wrap-two .title {
        font-family: 'Sofia Pro', sans-serif;
        font-weight: bold;
        font-size: 3em;
        text-align: left;
    }

    .newsletter__inner-wrap-two .div1 {
        width: 100%;
        margin-top: 0px;
    }

    .newsletter__inner-wrap-two .div2 {
        position: absolute;
        right: 15px;
    }

    .top_university {
        padding-top: 20px;
        padding-bottom: 20px;
        font-size: 22px;
    }

    .blog__bg {
        padding: 0px;
    }

    .featured-in-img {
        width: 150px;
    }

    .featured-in {
        margin: 0 auto;
        position: relative;
        display: flex;
        width: 100%;
        margin-top: 15%;
    }

    .featured-in-text {
        width: 300px;
        position: absolute;
        bottom: 8px;
        font-size: 3em;
        font-family: 'Inter';
        text-align: center;
        color: #000;
        font-weight: bold;
    }

    .featured-in-div {
        width: 300px;
        height: 300px;
        background: #fff;
        border-radius: 20px;
        display: flex;
        margin: 0 auto;
        /* top: 29%; */
        position: relative;
        border: 10px solid #FB9271;
        box-shadow: 8px 8px 0px 0px #000000;
    }

    .featured-in img {
        width: 200px;
        height: 200px;
        /* display: block; */
        margin-left: auto;
        margin-right: auto;
        position: relative;
        top: -20%;
        transform: rotate(350deg);
        border-radius: 20px;
    }

    .fact__inner-wrap {
        padding: 0px 0px 20px;
    }

    .fact__inner-wrap h2 {
        font-size: 1.8rem;
        font-weight: bold;
    }

    .top-notch {
        max-width: 100%;
        padding: 15px;
    }

    .top-notch-hr {
        border-bottom: 1px solid #000;
        display: block;
    }

    .support_m {
        display: block;
        padding: 0px;
    }

    .support_d {
        display: none;
    }

    .choose__list-item .content .title {
        margin-bottom: 8px;
        font-size: 1.5rem;
        font-weight: 400;
    }

    .instructor__progress-wrap .list-wrap li {
        padding: 0 10px;
        width: 50%;
    }

    .instructor__details-Skill {
        border-top: 1px solid #000;
        background: #fff;
        margin-bottom: 0px;
    }

    .progress-item .title {
        text-align: left;
        margin-bottom: 10px;
        font-size: 14px;
        font-weight: 400;
    }

    .testimonial-section {

        padding-top: 0em;

    }

    .choose__img-three {
        margin-bottom: 0px;
    }
}



}

@media (max-width: 991.98px) {
    .choose__img-three {
        margin-bottom: 0px;
    }
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

                        <!-- fact-area -->
                        <section class="fact__area">
                            <div class="container">
                                <div class="fact__inner-wrap">
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div class="fact__item-wrap-two">
                                                <h2 class="count"><span class="odometer" data-count="10"></span>+</h2>
                                                <p>Years</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="fact__item-wrap-two">
                                                <h2 class="count"><span class="odometer" data-count="250"></span>k+</h2>
                                                <p>Satisfied students</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="fact__item-wrap-two">
                                                <h2 class="count"><span class="odometer" data-count="150"></span>+</h2>
                                                <p>Subjects</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="fact__item-wrap-two">
                                                <h2 class="count"><span class="odometer" data-count="98"></span>%</h2>
                                                <p>Satisfaction Rate</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- fact-area-end -->
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
                                    <img src="{{ asset('img/expert_degree.png') }}" alt="img" style="width:40px;">
                                    {{$expert->qualification}}
                                </li>
                                <li>
                                    <img src="{{ asset('img/expert_order.png') }}" alt="img" style="width:40px;">
                                    {{ thousandsCurrencyFormat((int)$expert->total_orders) }}+ Orders
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

        <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;">

            <img src="{{ asset('img/black star.svg')}}" class="img1" style="position:Absolute;top:10px;left: 50px;">
            <div class="div1">
                <h2 class="title">Hire Tutor</h2>
                <p>Grade-Boosting Essays: Our Precision Writers Hit Your Academic Target Every Time </p>
            </div>
            <div class="div2">
                <form action="https://educrafter.co/order" class="newsletter__form-two">
                    <button type="submit" class="btn"><img src="{{ asset('img/arrow.png')}}"></button>
                </form>
            </div>
        </div>



    </section>
    <!-- course-area-end -->

    <!-- faq-area -->
    <section class="faq__area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__title text-center mt-40 mb-40">
                        <h2 class="title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>




            <div class="faq__wrap">
                <div class="accordion" id="accordionExample">
                    <div class="row">
                        @foreach ($faq_page as $faq)
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- faq-area-end -->
</main>

@endsection