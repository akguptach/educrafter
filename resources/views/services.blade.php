@extends('layout.app')
@section('content')
<style>
    .we-work-content h3 {
        color: blue;
        font-size: 18px;
    }

    .we-work-content p {
        font-size: 15px !impportant;
        font-weight: 500 !important;
    }
</style>
<?php

$services = \App\Models\Service::where('website_type', 'Educrafter')->where('type', 'SERVICE')
    ->get();
?>
<main class="flex-shrink-0">
    <div class="masthead wcu-masthead">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-8">
                    <div class="masthead-left">
                        {!!$data->seo_title!!}
                        <p>{!!$page->short_description!!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/serviceImage.png') }}">
                        <img src="{{ asset('images/hero-girl-mobile.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="450" height="680">
                    </picture>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="review-block">
                            <div class="review-logo-list">
                                <div class="review-logo">
                                    <picture>
                                        <source media="(min-width:768px)" srcset="{{ asset('images/trustpilot-logo.svg') }}">
                                        <img src="{{ asset('images/trustpilot-logo.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="150" height="30">
                                    </picture>
                                    <p class="review-rating"><span>4.6</span> 257 Reviews</p>
                                </div>
                                <div class="review-logo">
                                    <picture>
                                        <source media="(min-width:768px)" srcset="{{ asset('images/sitejabber-logo-vector-xs.png') }}">
                                        <img src="{{ asset('images/sitejabber-logo.png') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="150" height="30">
                                    </picture>
                                    <p class="review-rating"><span>4.7</span> 653 Reviews</p>
                                </div>
                                <div class="review-logo">
                                    <picture>
                                        <source media="(min-width:768px)" srcset="{{ asset('images/reviews-logo.svg') }}">
                                        <img src="{{ asset('images/reviews-logo.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="150" height="30">
                                    </picture>
                                    <p class="review-rating"><span>4.6</span> 489 Reviews</p>
                                </div>
                            </div>
                            <h2><b>500K </b> students trust EduCrafter</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="faq-sec">
        <div class="container">
            <div class="faq-box">
                <div class="hiw-head">
                    <h2 class="head-title">What are you looking for?</h2>
                </div>
                <div class="accordion row" id="accordionExample">
                    @foreach($services as $index => $service)
                    <div class="accordion-item col-sm-6">
                        <h2 class="accordion-header" id="heading{{$index}}">
                            <a class="accordion-button collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}" aria-expanded="false" aria-controls="collapse{{$index}}">
                                {{$service->service_name}}

                            </a>
                        </h2>
                        <div id="collapse{{$index}}" class="accordion-collapse collapse" aria-labelledby="heading{{$index}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{!!$service->short_description!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
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
                @foreach($servicePage as $rowD)
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ $rowD->icon}}">
                            <img src="{{ $rowD->icon}}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">{{$rowD->title}}</h3>
                            <p>{{$rowD->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-4 mt-md-5 mb-4 ">
                <a class="btn btn-primary" href="{{route('order')}}" role="link">Get started</a>
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

                        <p>With EduCrafter, it has never been easier to get the grades you've always wanted. Our world-class academics are ready to help.</p>
                        <a class="btn btn-primary d-none d-md-inline-flex" href="{{route('order')}}" role="link">Get started</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-slider">
                        <div class="row">
                            @foreach ($pageRating->take(4) as $rating)
                            <div class="col-md-6 mb-2">
                                <div class="card student-review-card p-2">
                                    <div class="card-body p-0">
                                        <p class="card-text" id="ratingDescriptionShort{{ $rating->id }}">
                                            {!! Str::words(strip_tags($rating->description), 20, ' <a href="javascript:void(0)" onclick="toggleDescription(event, '.$rating->id.')" style="text-decoration: none; "> Read more...</a>') !!}
                                        </p>
                                        <p class="card-text" id="ratingDescriptionFull{{ $rating->id }}" style="display: none;">
                                            {!! $rating->description !!}
                                        </p>
                                        <?php
                                        $date2 = $rating->created_at;
                                        $newDate2 = date("M d, Y", strtotime($date2));
                                        ?>
                                        <div class="student-name"><b>{{ $rating->address}}.</b></div>

                                    </div>
                                    <div class="d-flex sr-block ">
                                        <div class="student-photo" style="font-size: 14px;">
                                            {{ $newDate2 }}
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
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>

                    <a class="btn btn-primary w-100 mt-4 d-md-none" href="{{route('order')}}" role="link">Get started</a>
                </div>
            </div>

        </div>
    </section>
    <section class="mb-5">
        <div class="container">
            <div class="assign-box">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-end">
                        <div class="assign-content">
                            <h2 style="color:#303B4F;">All assignments can be done on time</h2>
                            <p style="color:#303B4F;">Fast and professional help from certified <br> experts on EduCrafter
                            </p>
                            <a class="btn btn-primary" href="{{route('order')}}" role="button" style="color: #fff;background: #3b71ed;border: 1px solid #3b71ed;">Get started</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <picture>
                            <img src="{{ asset('images/img-01.png') }}" class="img-fluid card-img modal-img" alt="EduCrafter" title="EduCrafter" loading="lazy" width="542" height="415">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                @foreach($servicepageHowWork as $howItWork)
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ $howItWork->icon}}">
                            <img src="{{ $howItWork->icon}}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">{{$howItWork->title}}</h3>
                            <p>{{$howItWork->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4 mt-md-5 mb-4 ">
                <a class="btn btn-primary" href="{{route('order')}}" role="link">Get started</a>
            </div>
        </div>
    </section>
    {{--<section class="how-it-works-sec mb-5" style="background-color:#FCFCFC;">
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
                            <img src="{{ asset('images/articles/1.jpeg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter">
    </picture>
    <div class="card-body" style="padding:10px;">
        <p>6 min read</p>
        <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect Essay</h3>
        <p>Read more -></p>
    </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="work-card" style="padding:0px;">
            <picture>
                <img src="{{ asset('images/articles/2.jpeg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter">
            </picture>
            <div class="card-body" style="padding:10px;">
                <p>6 min read</p>
                <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect Essay</h3>
                <p>Read more -></p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="work-card" style="padding:0px;">
            <picture>
                <img src="{{ asset('images/articles/3.jpeg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter">
            </picture>
            <div class="card-body" style="padding:10px;">
                <p>6 min read</p>
                <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect Essay</h3>
                <p>Read more -></p>
            </div>
        </div>
    </div>
    </div>

    <div class="text-center mt-4 mt-md-5 mb-4 ">
        <a class="btn btn-primary" href="#" role="link">Browse All</a>
    </div>

    </div>
    </section>--}}

</main>
<script>
    function toggleDescription(event, id) {
        event.preventDefault();
        var shortDescription = document.getElementById("ratingDescriptionShort" + id);
        var fullDescription = document.getElementById("ratingDescriptionFull" + id);

        if (shortDescription.style.display === "none" || shortDescription.style.display === "") {
            shortDescription.style.display = "none";
            fullDescription.style.display = "block";
            event.target.innerText = "Read less...";
        } else {
            shortDescription.style.display = "block";
            fullDescription.style.display = "none";
            event.target.innerText = "Read more...";
        }
    }
</script>
@endsection