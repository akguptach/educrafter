@extends('layout.app',['title'=>@$title])
@section('content')
<main class="main-area fix">



    <!-- instructor-details-area -->
    <section class="instructor__details-area section-pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="instructor__details-wrap">
                        <div class="instructor__details-info">


                            <div class="courses__item">
                                <div class="rc-post-item" style="border:0px;">
                                    <div class="rc-post-thumb">
                                        <a href="blog-details.html">
                                            <img src="{{$expert->image}}" alt="img">
                                        </a>
                                    </div>
                                    <ul class="courses__item-meta list-wrap">
                                        <li style="width:100%;">
                                            <h5>
                                                <a href="#">{{$expert->first_name}}</a>
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
                                    <div class="row"
                                        style="border-top: 1px solid #E1E1E1;border-bottom: 1px solid #E1E1E1;    margin: 0px;">
                                        <div class="col-sm-3" style="border-right: 1px solid #E1E1E1;padding: 20px;">
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #05070F;
">{{ thousandsCurrencyFormat($expert->total_orders) }}+</span>
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    color: #3B71ED;
    font-size: 14px;
">Completed Orders</span>
                                        </div>
                                        <div class="col-sm-3" style="border-right: 1px solid #E1E1E1;padding: 20px;">
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #05070F;
">{{$expert->success_rate}}%</span>
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    color: #3B71ED;
    font-size: 14px;
">Success Rate</span>
                                        </div>
                                        <div class="col-sm-3" style="border-right: 1px solid #E1E1E1;padding: 20px;">
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #05070F;
">{{$expert->satisfied_students}}</span>
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    color: #3B71ED;
    font-size: 14px;
">Satisfied students</span>
                                        </div>
                                        <div class="col-sm-3"
                                            style="/* border-right: 1px solid #E1E1E1; */padding: 20px;">
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: #05070F;
">{{$expert->month_on_domain}}</span>
                                            <span style="
    width: 100%;
    float: left;
    text-align: center;
    color: #3B71ED;
    font-size: 14px;
">Months on Educrafter</span>
                                        </div>
                                    </div>

                                </div>

                                <div class="courses__item-bottom-three" style="margin-top:10px;">
                                    <h4 class="title">Skilled in:</h4>
                                    <ul class="courses__item-meta list-wrap">
                                        @foreach($expert->subjects as $subject)
                                        <li class="courses__item-tag">
                                            <a href="#">{{$subject->subject->subject_name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <hr style="border-bottom: 1px solid #171616;border-top: 0 none;margin: 12px 0;">
                                <div class="courses__item-bottom-three">
                                    <h4 class="title">Helps with:</h4>
                                    
                                    <ul class="courses__item-meta list-wrap">
                                        @foreach($competences as $index=>$competence)

                                        @if($index < 4)
                                        <li class="courses__item-tag">
                                            <a href="#">{{$competence->type_name}}</a>
                                        </li>
                                        @else
                                        @if($index == 4)
                                        <li class="courses__item-tag"><a href="javascript:void(0);" class="more-btn">{{count($competences)-4}}+ more</a></li>
                                        @endif
                                        <li class="courses__item-tag more-items" style="display:none">
                                            <a href="#">{{$competence->type_name}}</a>
                                        </li>
                                        @endif

                                        @endforeach
                                    </ul>
                                </div>
                                <hr style="border-bottom: 1px solid #171616;border-top: 0 none;margin: 12px 0;">
                                <div class="courses__item-bottom">

                                    <h4 class="title">Bio</h4>
                                    <div style="width: 100%;">{!!$expert->description!!}</div>

                                </div>
                            </div>

                        </div>
                        <h4 class="title">Student ratings</h4>

                        @foreach($expert->review as $review)
                        <div class="instructor__details-biography">
                            <div class="review__wrap" style="width:100%;">
                                <div class="rating">


                                    @if(is_numeric($review->star_rating_number))
                                    @php($ratingNumbers = $review->star_rating_number)
                                    @else
                                    @php($ratingNumbers = 4)
                                    @endif
                                    @for($i=0; $i < $ratingNumbers; $i++) <i class="fas fa-star"></i>
                                        @endfor



                                </div>
                            </div>
                            <div style="width:100%;">
                                <p style="color:#060606;font-weight:600;font-size:16px;">{{$review->title}}</p>
                            </div>
                            <div style="width:100%;">
                                <p><span
                                        style="color: #475569;font-size:14px;">{{date('d-M-Y ', strtotime($review->review_date))}}</span>&nbsp;&nbsp;<span
                                        style="color: #0056D1;font-size:14px;">{{$review->review_code}}</span></p>
                            </div>
                            <p>{{$review->description}}</p>
                        </div>
                        @endforeach




                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="instructor__sidebar">
                        <h4 class="title">Your EduCrafter Benefits</h4>

                        <div class="form-grp" style="width: 100%;float: left;">
                            <span style="width: 32px;float: left;"><img
                                    src="{{ asset('img/Checkmark.pn')}}g"></span><span
                                style="padding-top: 5px;padding-left: 5px;float: left;">Access to online tutors
                                24/7</span>
                        </div>
                        <div class="form-grp">
                            <span><img src="{{ asset('img/Checkmark.png')}}"></span>Organize and manage your tasks
                        </div>
                        <div class="form-grp">
                            <span><img src="{{ asset('img/Checkmark.png')}}"></span>Homework help in any subject
                        </div>
                        <div class="form-grp">
                            <span><img src="{{ asset('img/Checkmark.png')}}"></span>Turnitin Plagiarism & AI report
                        </div>
                        <div class="form-grp">
                            <span><img src="{{ asset('img/Checkmark.png')}}"></span>Unlimited revision
                        </div>
                        <button type="submit" class="btn btn-two">Connect with writer</button>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor-details-area-end -->


</main>
<!-- main-area-end -->
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
 <script>
    $(document).ready(function(){
        $('.more-btn').click(function(){
            $(this).hide();
            $('.more-items').show();
        })
    })
</script>
@endsection