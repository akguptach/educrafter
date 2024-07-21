@extends('layout.app',['title'=>@$title])
@section('content')

<style>
.courses__item-bottom .button .btn-border {
    border: 1px solid #3B71ED;
    background: #fff;
    box-shadow: none;
    color: #3B71ED;
}
</style>
<!-- main-area -->
<main class="main-area fix">

    <!-- banner-area -->
    <section class="banner-area banner-bg-four tg-motion-effects">
        <div class="container">
            <div class="row justify-content-between align-items-start"
                style="border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;border-radius: 24px;">
                <div class="col-lg-12 col-md-12 col-sm-12 order-0 order-lg-0">
                    <div class="banner__images-four">
                        <div class="tutor_head_4_four" data-aos="fade-up" data-aos-delay="1000">
                            <img src="{{ asset('img/image 436.png')}}" alt="img">
                        </div>
                        <div class="tutor_head_5_four" data-aos="fade-left" data-aos-delay="1000">
                            <img src="{{ asset('img/image 437.png')}}" alt="img">
                        </div>
                        <div class="tutor_head_6_four" data-aos="fade-up" data-aos-delay="1000">
                            <img src="{{ asset('img/image 438.png')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <div class="banner__content-four" align="center">
                        <h2 class="title" data-aos="fade-right" data-aos-delay="400"
                            style="text-align: center;font-family: 'Sofia Pro'; font-weight: bold; font-style: normal;color:#10C379;">
                            Educrafter Discount Hub:</h2>
                        <h2 class="title" data-aos="fade-right" data-aos-delay="400"
                            style="text-align: center;font-family: 'Sofia Pro'; font-weight: bold; font-style: normal;font-size: 6em;">
                            Save on Everything You Need for Student Life</h2>
                        <p data-aos="fade-right" data-aos-delay="600" style="text-align: center;"> Exclusive Student
                            Deals from Educrafter & Top Brands - Save More on Everything You Need!</p>
                    </div>
                </div>
            </div>
            <div class="row courses__grid-wrap row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 row-cols-sm-1"
                style="margin-top: 50px;margin-bottom: 30px;">
                <h4 class="title" style="width:100%;">Our coupons</h4>

                @foreach($homeDeals as $deal)
                <div class="col">
                    <div class="courses__item shine__animate-item"
                        style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
                        <div class="courses__item-thumb">
                            <a href="{{route('Offers.details',$deal->id)}}" class="shine__animate-link">
                                <img src="{{$deal->image}}" alt="img" style="border-radius: 6px 6px 0px 0px;">
                            </a>
                        </div>
                        <div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
                            <h5 class="title"><a href="{{route('Offers.details',$deal->id)}}">{{$deal->title}}</a></h5>
                            <div class="courses__item-bottom">
                                <div class="button">
                                    <a href="{{route('Offers.details',$deal->id)}}" class="btn-border">
                                        <span class="text">Get Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach




            </div>

        </div>
    </section>
    <!-- banner-area-end -->
    <!-- course-area -->
    <section class="courses-area section-pt-30 section-pb-30" style="background: #F9FAFB;border:none;box-shadow:none;">
        <div class="container">
            <div class="section__title-wrap">
                <div class="row">
                    <div class="section__title mb-40">

                        <h2 class="title">Best Deals</h2>

                    </div>
                    <div class="col-lg-9">

                        <div class="courses__nav">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active ajaxLoad" id="all-tab" data-bs-toggle="tab"
                                        data-bs-target="#all-tab-pane" type="button" role="tab"
                                        aria-controls="all-tab-pane" aria-selected="true" fdprocessedid="pqz3ip"
                                        data-cat="All">
                                        All Coupons
                                    </button>
                                </li>
                                @foreach($dealCategories as $dealCategory)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="{{str_replace(' ','-',strtolower($dealCategory->category_name))}}-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#{{str_replace(' ','-',strtolower($dealCategory->category_name))}}-pane"
                                        type="button" role="tab"
                                        aria-controls="{{str_replace(' ','-',strtolower($dealCategory->category_name))}}-pane"
                                        aria-selected="false" tabindex="-1" data-cat="{{$dealCategory->id}}">
                                        {{$dealCategory->category_name}}
                                    </button>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" id="searchkeyword" placeholder="Search"
                            style="border: 1px solid #000000">
                    </div>
                </div>
            </div>

            <div class="tab-content" id="courseTabContent">

                <div class="tab-pane fade active show" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                </div>
                @foreach($dealCategories as $dealCategory)
                <div class="tab-pane fade" id="{{str_replace(' ','-',strtolower($dealCategory->category_name))}}-pane" role="tabpanel" aria-labelledby="{{str_replace(' ','-',strtolower($dealCategory->category_name))}}"
                    tabindex="0">
                </div>
                @endforeach




            </div>




        </div>
    </section>
    <!-- course-area-end -->
    <section class="faq__area section-pt-30 section-pb-30">
        <div class="container">
            <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;">
                <img src="{{ asset('img/black star.svg')}}" style="position:Absolute;top:10px;left: 50px;">
                <div style="width:80%">
                    <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:8em;">Hire
                        Tutor</h2>
                    <p style="color:#000;font-size:18px;font-weight: 500;">Grade-Boosting Essays: Our Precision Writers
                        Hit Your Academic Target Every Time </p>
                </div>
                <div style="width:20%">
                    <form action="#" class="newsletter__form-two">
                        <button type="submit" class="btn"><img src="{{ asset('img/arrow.png')}}"></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script>
    function loadOffers(tabId, category = '', keyword = '') {
        $.ajax({
            url: "{{route('Offers.ajaxList')}}?category=" + category + "&keyword=" + keyword,
            success: function(html) {
                $("#" + tabId).html(html);
            }
        });
    }


    $(document).ready(function() {

        loadOffers('all-tab-pane');

        $('.ajaxLoad').click(function() {
            var tabId = $(this).attr('aria-controls');
            var cat = $(this).attr('data-cat');
            $("#" + tabId).html('');
            loadOffers(tabId, cat);
        });


        $('#searchkeyword').change(function() {

            var keyword = $(this).val();
            var tabId = $('.nav-link.active').attr('aria-controls');
            var cat = $('.nav-link.active').attr('data-cat');
            loadOffers(tabId, cat, keyword);

        });

    })
    </script>

</main>
<!-- main-area-end -->
@endsection