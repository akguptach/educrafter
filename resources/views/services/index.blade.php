@extends('layout.app',['title'=>$title])
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<style>
.poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}

.poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}

.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.poppins-extrabold {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: normal;
}

.poppins-black {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.poppins-thin-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.poppins-extralight-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: italic;
}

.poppins-light-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.poppins-regular-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.poppins-medium-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.poppins-semibold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: italic;
}

.poppins-bold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.poppins-extrabold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: italic;
}

.poppins-black-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: italic;
}

.we-work-content h3 {
    color: blue;
    font-size: 18px;
}

.we-work-content p {
    font-size: 15px !impportant;
    font-weight: 500 !important;
}
/* scrollbar */
::-webkit-scrollbar {
  width: 5px;
  height: 5px;
}

::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 10px;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background: rgba(255, 255, 255, 0.3);
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
}

::-webkit-scrollbar-thumb:window-inactive {
  background: rgba(255, 255, 255, 0.3);
}

</style>
<main class="flex-shrink-0">
    <div class="masthead wcu-masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="masthead-left poppins-medium" >
                        <!--<h5 style="color:#0d6efd;">{{$data->service->service_name}}</h5>-->
                        {!!$data->seo_title!!}
                        <p>{!!$data->service->short_description!!}</p>
						
                        
                        <p><a href="{{$data->button_url}}" class="btn btn-primary">{{$data->button_title}}</a></p>
                        
                    </div>
					<p>Our writers are graduates of <span>top universities.</span></p>
                    <div class="overflow-hidden tu-marquee">
                        <div class="horizontal-marquee">
                            <img src="{{ asset('images/universities_logo/21.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/2.png') }}" alt="EduCrafter" title="EduCrafter"
                                height="85">
                            <img src="{{ asset('images/universities_logo/5.png') }}" alt="EduCrafter" title="EduCrafter"
                                height="85">
                            <img src="{{ asset('images/universities_logo/20.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/12.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/22.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/10.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/25.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/23.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                            <img src="{{ asset('images/universities_logo/8.png') }}" alt="EduCrafter" title="EduCrafter"
                                height="85">
                            <img src="{{ asset('images/universities_logo/24.png') }}" alt="EduCrafter"
                                title="EduCrafter" height="85">
                        </div>
                    </div>
                
                </div>
                <div class="col-lg-4">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/hero-girl.png') }}">
                        <img src="{{ asset('images/hero-girl-mobile.png') }}" class="img-fluid" alt="Essay Help"
                            title="Essay Help" width="400" height="680">
                    </picture>
                    
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="review-block">
                        <div class="review-logo-list">
                            <div class="review-logo">
                                <picture>
                                    <source media="(min-width:768px)"
                                        srcset="{{ asset('images/trustpilot-logo.svg') }}">
                                    <img src="{{ asset('images/trustpilot-logo.svg') }}" class="img-fluid"
                                        loading="lazy" alt="EduCrafter" title="EduCrafter" width="150" height="30">
                                </picture>
                                <p class="review-rating"><span>4.6</span> 257 Reviews</p>
                            </div>
                            <div class="review-logo">
                                <picture>
                                    <source media="(min-width:768px)"
                                        srcset="{{ asset('images/sitejabber-logo.jpg') }}">
                                    <img src="{{ asset('images/sitejabber-logo.jpg') }}" class="img-fluid"
                                        loading="lazy" alt="EduCrafter" title="EduCrafter" width="150" height="30">
                                </picture>
                                <p class="review-rating"><span>4.7</span> 653 Reviews</p>
                            </div>
                            <div class="review-logo">
                                <picture>
                                    <source media="(min-width:768px)" srcset="{{ asset('images/reviews-logo.svg') }}">
                                    <img src="{{ asset('images/reviews-logo.svg') }}" class="img-fluid" loading="lazy"
                                        alt="EduCrafter" title="EduCrafter" width="150" height="30">
                                </picture>
                                <p class="review-rating"><span>4.6</span> 489 Reviews</p>
                            </div>
                        </div>
                        <h2><b>15,000+</b> students trust EduCrafter</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="we-make-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hiw-head">
                        <h2 class="head-title">Why <span>EduCrafter</span>?</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                @if($data->service && $data->service->whyEducrafter)
                @foreach($data->service->whyEducrafter as $specification)
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ $specification->icon}}">
                            <img src="{{ $specification->icon}}" class="img-fluid" loading="lazy" alt="EduCrafter"
                                title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">{{$specification->title}}</h3>
                            <p>{{$specification->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="text-center mt-4 mt-md-5 mb-4 ">
                <a class="btn btn-primary" href="#" role="link">Get started</a>
            </div>
        </div>
    </section>




    <section class="we-make-sec">
        <div class="container" style="background: #FEFFF5;padding-top: 10px;border-radius: 13px;">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="wm-right" style="padding-top: 17%;">
                        <h2>We Make <br><span>Students Happy </span></h2>
                        <h3 class="mb-4">Still in Two Minds?<br> The Proof is in Numbers!</h3>

                        <p>With EduCrafter, it has never been easier to get the grades you've always wanted. Our
                            world-class academics are ready to help.</p>
                        <a class="btn btn-primary d-none d-md-inline-flex" href="#" role="link">Get started</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-slider">
                        <div class="row">

                            @if($data->service && $data->service->ratings)
                            @php($pageRating = $data->service->ratings->take(4))
                            @foreach($pageRating as $rating)
                            <div class="col-md-6 mb-2">
                                <div class="card student-review-card p-2">
                                    <div class="d-flex sr-block ">
                                        <div class="student-photo">
                                            <img src="{{ $rating->user_image }}" class="img-fluid" loading="lazy"
                                                alt="Student Photo" title="Student Photo" width="65" height="65">
                                        </div>
                                        <div class="sr-list">
                                            <ul class="student-rating" data-rate="{{$rating->star_rating}}">
                                                <li>Start 1</li>
                                                <li>Start 2</li>
                                                <li>Start 3</li>
                                                <li>Start 4</li>
                                                <li>Start 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-text">{{ $rating->description }}</p>
                                        <?php
                                        $date2 = $rating->created_at;
                                        $newDate2 = date("M d, Y", strtotime($date2));
                                        ?>
                                        <div class="student-name"><b>{{ $rating->address}}.</b><span>
                                                {{ $newDate2 }}</span></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif




                        </div>
                    </div>
                    <a class="btn btn-primary w-100 mt-4 d-md-none" href="#" role="link">Get started</a>
                </div>
            </div>

        </div>
    </section>
    <!--<section class="mb-5">
        <div class="container">
            <div class="assign-box">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-end">
                        <div class="assign-content">
                            <h2 style="color:#303B4F;">All assignments can be done on time</h2>
                            <p style="color:#303B4F;">Fast and professional help from certified <br> experts on
                                EduCrafter</p>
                            <a class="btn btn-primary" href="#" role="button"
                                style="color: #fff;background: #3b71ed;border: 1px solid #3b71ed;">Get started</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <picture>
                            <img src="{{ asset('images/img-01.png') }}" class="img-fluid card-img modal-img"
                                alt="EduCrafter" title="EduCrafter" loading="lazy" width="542" height="415">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>-->



    <section class="mt-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hiw-head">
                        <h2 class="head-title">How it <span>works</span>?</h2>
                        <p class="text-center">Get the perfect essay from EduCrafter in just three easy steps</p>
                    </div>
                </div>
            </div>
            <div class="row gy-4 mt-2">
                @if($data->service && $data->service->howWorks)
                @foreach($data->service->howWorks as $howItWork)
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ $howItWork->icon}}">
                            <img src="{{ $howItWork->icon}}" class="img-fluid" loading="lazy" alt="EduCrafter"
                                title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">{{$howItWork->title}}</h3>
                            <p>{{$howItWork->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="text-center mt-4 mt-md-5 mb-4 ">
                <a class="btn btn-primary" href="#" role="link">Get started</a>
            </div>
        </div>
    </section>
    <section class="mt-3">
        <div class="container">
            <div class="tu-second-block">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tu-content" style="padding-top: 15%;">
                            <h3>The Choice of students from <span>Top Universities</span></h3>
                            <p>TRUSTED BY 100,000 + STUDENTS FROM TOP-RATED UNIVERSITIES</p>
                            <a class="btn btn-primary d-none d-md-block" href="#" role="button">Get started</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <div class="verticle-marquee">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">
                                            <img src="{{ asset('images/top_universities/1.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">
                                            <img src="{{ asset('images/top_universities/2.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">
                                            <img src="{{ asset('images/top_universities/3.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">
                                            <img src="{{ asset('images/top_universities/4.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="{{ asset('images/top_universities/5.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="{{ asset('images/top_universities/6.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="{{ asset('images/top_universities/7.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="{{ asset('images/top_universities/8.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="{{ asset('images/top_universities/9.png') }}" class="card-img-top"
                                                alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center"
                                            style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="{{ asset('images/top_universities/10.png') }}"
                                                class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy"
                                                style="height: 55px;">


                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        <a class="btn btn-primary d-md-none w-100 mt-4" href="#" role="button">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    

    
	<section class="mt-3 mb-3">
        <div class="container" style="overflow: auto;max-height: 600px;">
            <div class="row">
                @if($data->service && $data->service->specification)
                @foreach($data->service->specification as $specification)
                <div class="col-sm-6">
                    <div class="card-body poppins-light"
                        style="background:#F5FFF6;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;text-align:left">
                        <h2 style="font-size: 1.5rem;text-align: left;" class="poppins-bold">{{$specification->title}}</h2>
                        <p style="">{!!$specification->description!!}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
	
	<section class="faq-sec">
        <div class="container">
            <div class="faq-box">
                <div class="hiw-head">
                    <h1 class="head-title">We can <span>assist you </span> with</h1>

                    @if($data->service && $data->service->assistBtns)
                    @php($count = 0)
                    @foreach($data->service->assistBtns as $assistBtn)

                    @php($count = $count+1)

                    @if($count > 4)
                    @php($count = 0)
                    @endif

                    @if($count == 1)
                    <div class="row  p-2 social-auth1">
                        @endif
                        <div class="col-md-3">
                            <a class="btn " href="{{$assistBtn->btn_url}}" role="button">{{$assistBtn->btn_text}}</a>
                        </div>
                        @if($count == 4)
                        @php($count = 0)
                    </div>
                    @endif
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

	
   <section class="faq-sec">
        <div class="container">
            <div class="faq-box">
                <div class="hiw-head">
                    <h2 class="head-title">Frequently Asked <span>Questions</span></h2>
                </div>
                <div class="accordion row" id="accordionExample">
                    @if($data->service && $data->service->faq)
                    @foreach($data->service->faq as $faq)
                    <div class="accordion-item col-sm-6">
                        <h2 class="accordion-header" id="heading<?= $faq['id']; ?>">
                            <a class="accordion-button collapsed" href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapse<?= $faq['id']; ?>" aria-expanded="true"
                                aria-controls="collapse<?= $faq['id']; ?>">
                                <?= $faq['question']; ?>
                            </a>
                        </h2>
                        <div id="collapse<?= $faq['id']; ?>" class="accordion-collapse collapse"
                            aria-labelledby="heading<?= $faq['id']; ?>" data-bs-parent="#accordionExample">
                            <div class="accordion-body"><?= $faq['answer']; ?></div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    

	<section class="trophy-sec mb-5">
        <div class="container">
            <div class="tripy-box">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-end">
                        <div class="assign-content">
                            <h2>Grade-Boosting Essays: </h2>
                            <p>Our Precision Writers Hit Your Academic Target Every Time</p>
                            <a class="btn btn-primary" href="#" role="button">Get started</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <picture>
                            <img src="{{ asset('images/trophy-mobile.png') }}" class="img-fluid card-img modal-img"
                                alt="EduCrafter" title="EduCrafter" loading="lazy" width="542" height="415">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-it-works-sec mb-5" style="background-color:#FCFCFC;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hiw-head">
                        <h2 class="head-title">Recent <span> Articles</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="work-card" style="padding:0px;">
                        <picture>
                            <img src="{{ asset('images/articles/1.jpeg') }}" class="img-fluid" loading="lazy"
                                alt="EduCrafter" title="EduCrafter">
                        </picture>
                        <div class="card-body" style="padding:10px;">
                            <p>6 min read</p>
                            <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect
                                Essay</h3>
                            <p>Read more -></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="work-card" style="padding:0px;">
                        <picture>
                            <img src="{{ asset('images/articles/2.jpeg') }}" class="img-fluid" loading="lazy"
                                alt="EduCrafter" title="EduCrafter">
                        </picture>
                        <div class="card-body" style="padding:10px;">
                            <p>6 min read</p>
                            <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect
                                Essay</h3>
                            <p>Read more -></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="work-card" style="padding:0px;">
                        <picture>

                            <img src="{{ asset('images/articles/3.jpeg') }}" class="img-fluid" loading="lazy"
                                alt="EduCrafter" title="EduCrafter">
                        </picture>
                        <div class="card-body" style="padding:10px;">
                            <p>6 min read</p>
                            <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect
                                Essay</h3>
                            <p>Read more -></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-4 mt-md-5 mb-4 ">
                <a class="btn btn-primary" href="#" role="link">Browse All</a>
            </div>

        </div>
    </section>

    {{--Description: {{@$seo->service->service_description}}

    <h4>FAQ</h4>
    @if($seo && $seo->service && $seo->service->faq)
    @foreach(@$seo->service->faq as $faq)
    <p>Question: {{$faq->question}}</p>
    <p>Anser: {{$faq->answer}}</p>
    <br>
    @endforeach
    @endif--}}



</main>
@endsection