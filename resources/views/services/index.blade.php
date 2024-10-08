@extends('layout.app')
@section('content')
<!-- main-area -->
<style>
.fact__inner-wrap {
    background: #fff;
    padding: 0px 200px 30px;
}
.fact__inner-wrap h2 {
    font-size: 2rem;
	font-weight:bold;
}
.fact__inner-wrap p {
    font-size: 16px;
}
.top-notch{
	max-width:100%;
	padding:0px;
}
.top-notch-hr{
	display:none;
}
.top_university{ padding-top: 20px;padding-bottom: 40px;font-size: 2rem; }
.support_m{
		display:none;
	}
	.support_d{
		display:block;
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
	.featured-in{ margin:0 auto;position:Absolute;display: flex;top: 21%;z-index:10;width:100%;}
	.featured-in-div{ width: 400px;height: 400px;background: #fff;border-radius: 20px;display: flex;margin: 0 auto;/* top: 29%; */position: relative;border: 10px solid #FB9271;box-shadow: 8px 8px 0px 0px #000000;}
	.featured-in-text{width:400px;position: absolute;bottom: 8px;font-size: 3em;font-family: 'Inter';text-align: center;color: #000;font-weight: bold;}
	.featured-in img{width: 300px;height: 300px;/* display: block; */margin-left: auto;margin-right: auto;position: relative;top: -20%;transform: rotate(350deg);border-radius: 20px;}
	
	
	.featured-in-img{ width:250px;}
	
	.newsletter__inner-wrap-two .title {
		font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size: 8em;
     }
	 .newsletter__inner-wrap-two .div1 { width:80%;}
	 .newsletter__inner-wrap-two .div2 { width:20%;}
	 .choose__area .subtitle{ font-size:1.6rem;}
	 .choose__area .title{ font-size:3rem;}
	@media (max-width: 1199.98px) {
		
		 .choose__area .title{ font-size:1.5rem;}
		.choose__area .subtitle{ font-size:1rem;}
	.newsletter__form-two .btn {
		background: #FEEAA8;
		color: var(--tg-heading-color);
		width: 50px !important;
		height: 50px !important;
		border-radius: 100px;
		padding:5px;
		box-shadow: 5px 4px 0px 0px #000000;
     }
	 .newsletter__inner-wrap-two .title {
		font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size: 3em;text-align:left;
     }
	 .newsletter__inner-wrap-two .div1 { width:100%;margin-top:0px;}
	 .newsletter__inner-wrap-two .div2 {position: absolute;right: 15px;}
	 
	.top_university{ padding-top: 20px;padding-bottom: 20px;font-size: 22px; }
	.blog__bg{ padding:0px;}
	.featured-in-img{ width:150px;}
	.featured-in{ margin:0 auto;position:relative;display: flex;width:100%;margin-top: 15%;}
	.featured-in-text{width:300px;position: absolute;bottom: 8px;font-size: 3em;font-family: 'Inter';text-align: center;color: #000;font-weight: bold;}
	.featured-in-div{ width: 300px;height: 300px;background: #fff;border-radius: 20px;display: flex;margin: 0 auto;/* top: 29%; */position: relative;border: 10px solid #FB9271;box-shadow: 8px 8px 0px 0px #000000;}
	.featured-in img{width: 200px;height: 200px;/* display: block; */margin-left: auto;margin-right: auto;position: relative;top: -20%;transform: rotate(350deg);border-radius: 20px;}
    .fact__inner-wrap {
        padding: 0px 0px 20px;
    }
	.fact__inner-wrap h2 {
		font-size: 1.8rem;
		font-weight:bold;
    }
	.top-notch{
	max-width:100%;
	padding:15px;
    }
	.top-notch-hr{
		border-bottom: 1px solid #000;
		display:block;
    }
	.support_m{
		display:block;
		padding: 0px;
	}
	.support_d{
		display:none;
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
</style>
 
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
	
	
	.accordion-button:not(.collapsed) {
    color: var(--bs-accordion-active-color);
    background-color: #fff;
    box-shadow: none;
}

.panel-body table tr td {
    padding-left: 15px
}

.panel-body table tr td a:hover {
    color: #000;
}

.panel-body .table {
    margin-bottom: 0px;
}

.panel-group {
    margin-bottom: 10px;
}
    </style>
    
<main class="main-area fix">

    <section class="banner-area banner-bg-three tg-motion-effects">
        <div class="container">
            <div class="row justify-content-between align-items-start">

                <div class="col-xl-12 col-lg-12">
                    <div class="banner__content-two" align="center">
                        <h1 class="title" data-aos="fade-right" data-aos-delay="400">
                            <?php $aa=explode("-",$data->seo_title);?>


                            {{$aa[0]}}</h1>
						@if($data->service->short_description)
                        <div data-aos="fade-right" data-aos-delay="600" style="text-align: center;">
                            {!!$data->service->short_description!!}</div>
						@endif


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
               <div class="col-xl-12 col-lg-12" align="center"  id="home_logo_slider">
                    <div style="border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;border-radius: 8px;overflow: hidden;">
                        <h3 class="top_university">We only hire tutors who have graduated from
                            top universities.</h3>
                        <div class="marquee_mode"  style="height:88px;margin-bottom: 20px;" id="marquee_mode_top">
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
    <section class="faq__area section-pb-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section__title text-center mt-40 mb-40">
                        <h2 class="title" style="font-size:5rem;">What are you looking for?</h2>
                    </div>
                </div>
            </div>




            <div class="faq__wrap">
                <div class="accordion" id="accordionExample">
                    <div class="row">

                    @foreach($serviceKeywords as $serviceKeyword)
                        <div class="col-lg-6">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="border: 1px solid #D9D9D9;border-radius: 8px;">
                                        <h4 class="panel-title" style="padding: 5px;margin: 0px;">
                                            <a class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#keyword_{{$serviceKeyword->id}}" aria-expanded="true"
                                                style="padding: 10px;"><span class="glyphicon glyphicon-folder-open">
                                                </span>{{$serviceKeyword->name}}</a>
                                        </h4>
                                    </div>
                                    <div id="keyword_{{$serviceKeyword->id}}" class="panel-collapse in collapse" style="">
                                        <div class="panel-body"
                                            style="background: #F8FAFF;margin-top: 10px;border: 1px solid #D9D9D9;border-radius: 8px;padding: 0px;">
                                            <table class="table"
                                                style="background: #000;--bs-table-bg: #F8FAFF;padding: 10px;border-radius: 8px;">
                                                <tbody>
                                                    @foreach($serviceKeyword->services as $service)
                                                    <tr>
                                                        <td>
                                                            <a href="{{$service->seo->seo_url_slug}}" style="color: #000;">{{$service->service_name}}</a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach





                    </div>



                </div>

            </div>
        </div>





        </div>

    </section>

    <!-- course-area -->
    <section class="courses-area section-pt-30 section-pb-30">
        <div class="container top-notch">
            <div class="row">
                <div class="col-12">
                   <div class="section__title text-center mb-25">
                        <h2 class="title">Top-notch {{@$aa[1]}}<br>writers in one place</h2>

                        <p>Get personalised {{@$aa[1]}} help from top-notch {{@$aa[1]}} writers and boost your grades.
                        </p>

                    </div>
                </div>
            </div>
            <div class="tab-content" id="courseTabContent1">
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
                                    <ul class="list-wrap1">

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
                    <span style="padding: 10px 0px 0px 0px;float: right;"><a href="{{route('Tutors.List')}}">View All</a></span>

                </div>

            </div>
            <div class="tab-content" id="courseTabContent">
			    
			     <div class="instructor__item-wrap">
				            <hr class="top-notch-hr">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <img src="{{ asset('img/Lighting.svg')}}" style="width: 65px;">
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Lighting fast turnaround</a></h2>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                           <img src="{{ asset('img/Help with any subjects.svg')}}" style="width: 65px;">
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Help with any subjects</a></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                           <img src="{{ asset('img/Highly unique papers.svg')}}" style="width: 65px;">
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Highly unique papers</a></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="instructor__item">
                                        <div class="instructor__thumb">
                                            <img src="{{ asset('img/USA, UK.svg')}}" style="width: 65px;">
                                        </div>
                                        <div class="instructor__content">
                                            <h2 class="title"><a href="instructor-datails.html">Writers from the USA, UK and Canada</a></h2>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                     <hr class="top-notch-hr">
					</div>
			
			     
			</div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12" align="center">
                    <p style="font-weight: 400;font-size: 16px;">
					<img src="{{ asset('img/no ai.svg')}}" style="width:20px;">
					<br>No AI involvement, 100% authentic guidance from tutors</p>
                </div>
            </div>

        </div>
    </section>
    <!-- course-area-end  -->
   <!-- mobile  -->
    <section class="courses-area-two tg-motion-effects courses__bg support_m">
	   
            <img src="{{ asset('img/home_support.png') }}">
       
    </section>
    
	<section class="courses-area-two tg-motion-effects courses__bg support_d" style="padding-top: 100px;margin-top:50px;">
        <div class="container">

            <div class="row justify-content-center"
                style="background:url('{{ asset('img/bg2.png')}}');background-size: 100% 100%;">

                <div class="col-xl-6 col-lg-6 col-md-6" style="height:500px;">
                    <div style="position: relative;top: -71px;"><img src="{{ asset('img/Paper.svg')}}"
                            style="width:500px;"></div>
                    <div class="courses__item-four shine__animate-item"
                        style="/* box-shadow: 14px 14px 0px 0px #14141440; *//* border: 1.02px solid #000000; */position: relative;z-index: 2;top: -649px;width: 76%;left: 27px;border-radius: 0px;border: 0px;/* transition: rotate; */transform: rotate(354deg);">
                        <p style="font-weight:bold;font-size: 2.5rem;color:#000;text-align:left;">Perks of EduCrafter</p>


                        <ul class="about__info-list list-wrap" style="margin-top: 70px;transform: rotate(0deg);">
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
                        <a href="https://educrafter.co/order"><img src="{{ asset('img/Group%201000007894.svg')}}" alt="" style="width:200px;"></a>

                    </div>
                    <div class="" style="position: relative;margin-top: 172px;left: -92px;">
                        <p
                            style="font-weight:bold;font-size:4rem;line-height: 76px;font-family:Sofia Pro, sans-serif;color: #000;width: 600px;">
                            99% Success Story <br>Yours Begins Now</p>

                        <p style="font-size:16px;font-family:Sofia Pro, sans-serif;    color: #000;"><span
                                style="font-weight:bold;">Unlock Success:</span> Where Every Instruction Counts,
                            Deadlines Are Always Met, and Papers Shine with Expert Essay Help</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
	<section class="brand-area">
        <div class="container-fluid">

            <div class="marquee_mode" id="marquee_mode4">
                <div class="brand__item">
                    <a href="javascript:;">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;PhD Experts
                    </a>
                </div>
                <div class="brand__item">
                    <a href="javascript:;">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Any Topic
                    </a>
                </div>
                <div class="brand__item">
                    <a href="javascript:;">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Top Quality
                    </a>
                </div>
                <div class="brand__item">
                    <a href="javascript:;">
                        <img src="{{ asset('img/blue.png') }}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;A+ Results
                    </a>
                </div>

                <div class="brand__item">
                    <a href="javascript:;">
                        <img src="{{ asset('img/blue.png')}}" style="width:10px;">&nbsp;&nbsp;&nbsp;&nbsp;Absolute Discretion
                    </a>
                </div>


            </div>

        </div>
    </section>
    <!-- for mobile-->
    <section class="choose__area-three support_m" style=" border-top: 3px solid #000000;border-bottom: 3px solid #000000; margin-bottom: 20px;">
        <div class="container11">
            <div class="row">
                <div class="col-lg-6 col-md-12" style="border-left: 3px solid #000000;padding: 0px;background-color: #c2e3fb;">
                    <div class="choose__img-three">
                        
						<img src="{{ asset('img/Group 1171274562@1x.png')}}" >
						
						</div>
                </div>
                <div class="col-lg-6" style="padding-top: 10px;">
                    <div class="choose__content-three">
                        <div class="section__title mb-15">
                            <h2 class="title" style="text-align: center;font-weight:400px;">Our Guarantees</h2>
                        </div>

                        <div class="choose__list-wrap">
                            <div class="choose__list-item">
                                <div class="icon">

                                    <img src="{{ asset('img/smoothinnercorner.png')}}">
                                </div>
                                <div class="content">
                                    <h4 class="title">On time delivery</h4>
                                    <span>Our essay writers make sure that all orders are submitted prior to the
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
                                        ensuring you receive top quality essay help.</span>
                                </div>
                            </div>
                            <div class="choose__list-item">
                                <div class="icon">
                                    <img src="{{ asset('img/smoothinnercorner.png')}}">
                                </div>
                                <div class="content">
                                    <h4 class="title">100% plagiarism free!</h4>
                                    <span>All Essay Help papers are scanned for duplicate content and are guaranteed to
                                        be plagiarism free, providing you with unique and original content from our
                                        expert essay writers.</span>
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
                
            </div>
        </div>
    </section>
    <section class="choose__area-three support_d"
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
                                    <span>Our essay writers make sure that all orders are submitted prior to the
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
                                        ensuring you receive top quality essay help.</span>
                                </div>
                            </div>
                            <div class="choose__list-item">
                                <div class="icon">
                                    <img src="{{ asset('img/smoothinnercorner.png')}}">
                                </div>
                                <div class="content">
                                    <h4 class="title">100% plagiarism free!</h4>
                                    <span>All Essay Help papers are scanned for duplicate content and are guaranteed to
                                        be plagiarism free, providing you with unique and original content from our
                                        expert essay writers.</span>
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


    <section class="testimonial__area-two pb-60 testimonial__bg">
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

        <div class="container top-notch">
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
                                go-to for essay help. Their services are affordable, user-friendly, and always deliver
                                top-notch results. Highly recommend!</p>
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
                <div class="card-container cocoon">
                    <div class="gif-container cocoon"><img src="{{ asset('img/banner2_l.png')}}" loading="lazy" alt=""
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
    </section>


    <section class="brand-area" style="background:#C2E3FB;margin-bottom:50px;border: 1px solid #000000">
        <div class="container-fluid">
            <h3 style="padding-top: 20px;padding-bottom:20px;text-align:center;">250k+ students trust us, and you can
                too!</h3>
            <div class="marquee_mode_img" id="marquee_mode_top11">
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
                    <img src="{{ asset('img/downlogo/University of Southern California.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Stanford university.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Pepperdine University.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Princeton University.png')}}" style="width:150px;">
                </div>
                <div class="brand__item"
                    style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;box-shadow: 3px 4px 0px 0px #000000;background: #fff;">
                    <img src="{{ asset('img/downlogo/Regents University.png')}}" style="width:150px;">
                </div>
                
            </div>

        </div>
    </section>
    <!-- How it works for mobile -->
	<section class="testimonial__area-two section-pt-30 pb-60 testimonial__bg support_m">
        <img src="{{ asset('img/how_it_work_m.png')}}">
    </section>
    
	<!-- How it works for dasktop -->
	<section class="testimonial__area-two section-pt-30 pb-60 testimonial__bg support_d"
        style="background: #FFF4E4;border: 1px solid #000000;box-shadow: 0px 7px 0px 0px #000000;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section__title text-center mb-50">
                        <h2 class="title" style="font-size:">How it works</h2>
                        <p>Get the perfect essay from EduCrafter in just four easy steps</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__item-wrap">
                        <img src="{{ asset('img/how_it_work.png')}}" >
						
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
    
	
	<!-- service we offer mobile-->
	<section class="about-area-three support_m">
        <div class="container">
			<img src="{{ asset('img/service.png')}}" >
		</div>
    </section>

    <!-- service we offer dasktop-->
	<section class="about-area-three support_d">
        <div class="container"
            style="border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;border-radius:24px;">
            <div class="row">
                <div class="col-12">
                    <div class="section__title text-center mt-50">
                        <h2 class="title">Service we offer</h2>
                        <p>From Essays to Dissertation, Our Essay Writers Can Handle It All with Skill and Precision.
                        </p>
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


    <section class="blog__post-area-three tg-motion-effects blog__bg" style="background: #C2E3FB;margin-top: 5%;height: 100%;border: 1px solid #000000;box-shadow: 0px 4px 0px 0px #000000;">

        
		
         <div class="brand-area" style="background: #c2e3fb;">
        <div class="marquee_mode_img" id="marquee_mode1">

           
                <div class="brand__item">
                    
                        <img src="{{ asset('img/logos/cnbc.svg')}}" class="featured-in-img">
                    
                </div>
                <div class="brand__item">
                    
                        <img src="{{ asset('img/logos/cosmopolitian.svg')}}" class="featured-in-img">
                    
                </div>
                <div class="brand__item">
                    
                        <img src="{{ asset('img/logos/edsurge.svg')}}" class="featured-in-img">
                   
                </div>
                <div class="brand__item">
                    
                        <img src="{{ asset('img/logos/edutopia.svg')}}" class="featured-in-img">
                    
                </div>
                <div class="brand__item">
                   
                        <img src="{{ asset('img/logos/forbes.svg')}}" class="featured-in-img">
                    
                </div>
                <div class="brand__item">
                    
                        <img src="{{ asset('img/logos/lifehacker.svg')}}" class="featured-in-img">
                    
                </div>

            
        </div>
		</div>
		
		
		<div  class="featured-in">
            <div class="featured-in-div">
                <img src="{{ asset('img/1rRk.gif')}}">
                <div class="featured-in-text"><span style="color: #000;width: 100%;float: left;height: 54px;">As</span><span style="color:#3B71ED;">Featured</span> In</div>
            </div>
        </div>
		
		<div class="brand-area" style="background: #c2e3fb;">
			<div class="marquee_mode_img" id="marquee_mode2" style="margin-top: 20px;">
                <div class="brand__item">
                    <img src="{{ asset('img/logos/newsweek.svg')}}" class="featured-in-img">
                </div>
				<div class="brand__item">
                        <img src="{{ asset('img/logos/nyp.svg')}}" class="featured-in-img">
                </div>
               <div class="brand__item">
                    <img src="{{ asset('img/logos/edutopia.svg')}}" class="featured-in-img">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('img/logos/forbes.svg')}}" class="featured-in-img">
                </div>
                <div class="brand__item">
                    <img src="{{ asset('img/logos/lifehacker.svg')}}" class="featured-in-img">
                </div>

                <div class="brand__item">
                    <img src="{{ asset('img/logos/cnbc.svg')}}" class="featured-in-img">
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
    <!-- faq-area-end -->

    <!-- choose-area -->
    <section class="choose__area tg-motion-effects section-pt-30 pb-60 mb-5" style="background: #FFF4E4;border: 1px solid #000000;box-shadow: 0px 7px 0px 0px #000000;margin-top:50px;">
        <div class="container" style="max-height: 600px;overflow: auto;">
            <div class="row justify-content-center">
                <div class="col-xl-12">
                    <div class="section__title text-center mb-40">
                        <h2 class="title">Make your studies effortless with our essay writing service</h2>

                    </div>
                </div>
            </div>
            <div class="choose__inner-wrap">
                <div class="row">
				    <div class="col-lg-6">
                    <?php $i=0;
					 
                    foreach($data->service->specification as $arrR){ $i++;
						if($i==1 || $i==3 || $i==5 || $i==7 || $i==9)
						{
						
						?>
						

							<div class="choose__content" style="border: 1px solid #000000;border-radius:24px;">
								<div class="section__title mb-15" style="height: 38px;">
									<span style="width: 17%;float: left;padding: 9px 10px 10px 0px;"><img
											src="{{ asset('img/writing_service/1.svg')}}" style="width: 55px;"></span>
									<span style="float: left;width: 83%;">
										<h4 class="subtitle">{{$arrR->title}}</h4>
									</span>
								</div>
								<p style="font-size: 16px;   font-weight: 400; text-align:justify;font-family: 'Inter';">
									{!!$arrR->description!!}</p>


							</div>
					   
						<?php }
					}?>
					 </div>
					 <div class="col-lg-6">
					     <?php $i=0;
					    foreach ($data->service->specification as $arrR){ $i++;
						if($i==2 || $i==4 || $i==6 || $i==8 || $i==10)
						{
						
						?>
						

							<div class="choose__content" style="border: 1px solid #000000;border-radius:24px;">
								<div class="section__title mb-15" style="height: 38px;">
									<span style="width: 17%;float: left;padding: 9px 10px 10px 0px;"><img
											src="{{ asset('img/writing_service/1.svg')}}" style="width: 55px;"></span>
									<span style="float: left;width: 83%;">
										<h4 class="subtitle">{{$arrR->title}}</h4>
									</span>
								</div>
								<p style="font-size: 16px;   font-weight: 400; text-align:justify;font-family: 'Inter';">
									{!!$arrR->description!!}</p>


							</div>
					   
						<?php }
					}?>
					 </div>


                </div>
            </div>
        </div>


    </section>
    <!-- choose-area-end -->



    <section class="newsletter__area-three mb-5">
        <div class="container">
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

        </div>
    </section>


</main>
<!-- main-area-end -->
@endsection