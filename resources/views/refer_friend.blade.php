@extends('layout.app',['title'=>$title])
@section('content')
<style>
.banner__images-three .about__enrolled {
    left: -4% !important;

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
.brand-area-two {
    transform: rotate(-3.5deg);
    position: relative;
    z-index: 2;
    margin-top: 50px;
}
.marquee_mode {
    height: 40px;
}
.brand__item a {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    height: auto;
    font-size: 1.5rem;
    color: #000;
    font-weight: bold;
    align-items: center;
    justify-content: center;
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
                            Refer friends and earn upto $10,000</h1>
                        <p data-aos="fade-right" data-aos-delay="600" style="text-align: center;">
                           Refer, Earn, Repeat! It's that easy to get $50 for every friend who signs up and places their first order. No limit on referrals.</p>


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
                    <div class="row">
						 <div class="col-sm-12"><input type="text" class="form-control form-control-lg" placeholder="Your referral link" style="border-radius: 60px;" fdprocessedid="ytckx8"></div>
						 <div class="col-sm-2"><a href="#" class="btn btn-primary" style="height: 48px;width: 142px;padding: 8px;border-radius: 60px;background: #9071fb;font-size: 18px;"><img src="img/copy-icon-blue.png"> Copy link</a></div>
						 <div class="col-sm-10">
							 <span style="background: #9071FB;border-radius: 57px;width:100%;padding-top: 7px;float: left;height: 48px;box-shadow: 3px 4px 0px 0px #000000;">
								 
								 <span style="width:25%;float: left;text-align: center;"><a href="add-student.html"><img src="img/whatsapp-fill.png"></a></span>
								 <span style="width:25%;float: left;text-align: center;"><a href="add-student.html"><img src="img/t.png"></a></span>
								 <span style="width:25%;float: left;text-align: center;"><a href="add-student.html"><img src="img/f.png"></a></span>
								 <span style="width:25%;float: left;text-align: center;"><a href="add-student.html"><img src="img/in.png"></a></span>
							 </span>
						 </div>
					</div>
                </div>


            </div>
        </div>
    </section>


    <section class="brand-area brand-area-two" style="background:#F6FA5E;">
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

    <section class="choose__area-three"  style="margin-bottom: 32px;margin-top: 70px;">
        <div class="container" >
            <div class="row">

                
                <div class="col-lg-12 col-md-12" >
                    <div class="choose__img-three" style="border-radius:20px;box-shadow: 8px 8px 0px 0px #000000;padding: 7%;min-height:600px;margin: auto;background-image:url('{{ asset('img/rf_6.png')}}');object-fit: cover;width: 100%;background-size: cover;background-repeat: no-repeat;background-repeat: no-repeat;background-repeat: no-repeat;">
                         <div style="width:250px;margin-bottom:100px;font-family: 'Sofia Pro', sans-serif;">
							 <span style="font-size:48px;font-weight:bold;float: left;width: 100%;color:#000;height: 60px;">1</span>
							 <span style="font-size:20px;;float: left;width: 100%;color:#000;">Login to Educrafter and go to My Account</span>
						 </div>
						 <div style="width:250px;;margin-bottom:100px;font-family: 'Sofia Pro', sans-serif;">
						     <span style="font-size:48px;font-weight:bold;float: left;width: 100%;color:#000;height: 60px;">2</span>
							 <span style="font-size:20px;;float: left;width: 100%;color:#000;">Share your unique referral link with friends.</span>
						 </div>
						 <div style="width:300px;font-family: 'Sofia Pro', sans-serif;">
						     <span style="font-size:48px;font-weight:bold;float: left;width: 100%;color:#000;height: 60px;">3</span>
							 <span style="font-size:20px;;float: left;width: 100%;color:#000;">Earn $50 when your friends sign up and place their first order.</span>
						 </div>
					</div>
						
                </div>
            </div>
        </div>
    </section>

     <div class="brand-area brand-area-two" style="background:#FEEAA8;">
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

        <div class="container">
           

            <div class="row">
                <div class="col-12">
                    <div class="testimonial__item-wrap">
					    <h3 style="padding-top: 20px;padding-bottom:20px;text-align:center;">Students like you are referring their friends</h3>
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

    <section class="testimonial__area-two section-pt-30 pb-60 testimonial__bg"
        style="background: #FFF4E4;border: 1px solid #000000;box-shadow: 0px 7px 0px 0px #000000;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section__title text-center mb-50">
                        <h2 class="title" style="font-size:">Lend a Helping hand!</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="testimonial__item-wrap" style="background:#fff;">
                        <img src="{{ asset('img/rf_1.png')}}">
                    </div>
                </div>
				<div class="col-4">
                    <div class="testimonial__item-wrap" style="background:#fff;">
                        <img src="{{ asset('img/rf_3.png')}}">
                    </div>
                </div>
				<div class="col-4">
                    <div class="testimonial__item-wrap" style="background:#fff;">
                        <img src="{{ asset('img/rf_2.png')}}">
                    </div>
                </div>
            </div>
			<div class="row">
			    <div class="col-12">Help your friends with their writing needs and earn $50 for every successful order they place. It's that simple!</div>
				<div class="col-12"><button class="btn btn-primary">Refer a Friend</button></div>
				
			</div>

        </div>
    </section>
   
   <section class="newsletter__area-three mb-5 mt-40">
        <div class="container">
            <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #F0FFE4;">

                <img src="{{ asset('img/black star.svg')}}" style="position:Absolute;top:10px;left: 50px;">
                <div style="width:80%">
                    <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:4em;">Share your referral link with friends and start earning!</h2>
                    <p style="color:#000;font-size:18px;font-weight: 500;">Refer, Earn, Repeat! It's that easy to get $50 for every friend who signs up and places their first order. No limit on referrals.</p>
                </div>
                <div style="width:20%">
                    <form action="#" class="newsletter__form-two">
                        <button type="button" class="btn"><img src="{{ asset('img/arrow.png')}}"></button>
                    </form>
                </div>



            </div>

        </div>
    </section>
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

   

    


</main>
<!-- main-area-end -->
@endsection