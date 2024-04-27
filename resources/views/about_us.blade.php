@extends('layout.app')
@section('content')
<main class="flex-shrink-0">
    <div class="masthead wcu-masthead">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="masthead-left">
                        <h1>Why Choose <span><br>EduCrafter</span></h1>
                        <p>Academic anxieties? Essay Help offers a helping hand. Expert guidance, from blank page to high grades. Your
                            journey, simplified.</p>

                        <p>Our writers are graduates of <span>top universities.</span></p>

                        <div class="overflow-hidden tu-marquee">
                            <div class="horizontal-marquee">

                                <img src="{{ asset('images/universities_logo/1.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/2.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/3.png') }}" alt="EduCrafter" title="EduCrafter" height="85">

                                <img src="{{ asset('images/universities_logo/4.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/5.png') }}" alt="EduCrafter" title="EduCrafter" height="85">

                                <img src="{{ asset('images/universities_logo/6.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/7.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/8.png') }}" alt="EduCrafter" title="EduCrafter" height="85">

                                <img src="{{ asset('images/universities_logo/9.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/10.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                                <img src="{{ asset('images/universities_logo/11.png') }}" alt="EduCrafter" title="EduCrafter" height="85">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: right;">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/hero-girl.png') }}">
                        <img src="{{ asset('images/hero-girl-mobile.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="543" height="680">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <section class="task-details-sec">
        <div class="container">
            <div class="row gy-4 mt-5">
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">On time delivery</h3>
                            <p>Our writers make sure that all orders are submitted prior to the deadline so that you can proofread your
                                paper before handing it over to your tutor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card box-shadow h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Verified Tutors</h3>
                            <p>All tutor profiles are meticulously checked: diplomas, identity and background. ony profiles demostrating
                                academic excellence are retained. Also, all reviews visible on tutor accounts are purely authentic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">100% plagiarism free!</h3>
                            <p>All Essay Help papers are scanned for duplicate content and are guaranteed plagiarism free.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card box-shadow h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">World's top essay provider</h3>
                            <p>We are widely recognised as being the best provider of student writing services in the World</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Free amendments</h3>
                            <p>We provide unlimited free revisions until you are satisfied with the work.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card box-shadow h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help" title="Essay Help" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">100% Confidentiality Guaranteed</h3>
                            <p>Our aim is your complete confidentiality.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="">
        <div class="container">
            <div class="row client-report1">
                <div class="col-md-6">
                    <div class="cr-item1">
                        <h2>20</h2>
                        <p>Minutes Response</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cr-item1">
                        <h2>24847+</h2>
                        <p>Completed Dissertations</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cr-item1">
                        <h2>5000+</h2>
                        <p>PhD writers</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cr-item1">
                        <h2>4.9/5</h2>
                        <p>Client ratings</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container">
            <div class="row  ">
                <div class="col-md-6">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center" style="background: #F5FFF8;border-radius: 30px;padding: 5%;">
                        <h1 class=" mb-4" style="font-size:3rem">We <b>work hard</b> to<br> ensure <br>your <b>satisfaction</b></h1>
                        <img src="{{ asset('images/eh-large-logo.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" loading="lazy" width="374" height="374">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="we-work-content">
                        <p>The booming essay support market hides a dark secret: offshore mills churning out plagiarism and vanishing
                            with your cash. Don't gamble your grades! Choose <b>Essay Help</b> for ethical, expert guidance. We walk you
                            through every step, delivering reliable, original work that builds your confidence and earns your trust.
                            Invest in your success, not an academic nightmare. Choose <b>Essay Help</b>.</p>

                        <p>This condensed version retains the key message while emphasising your ethical approach and reliable
                            results. Choose this or mix elements from both versions to create your ideal paragraph!</p>

                        <p>Therefore, when you ask yourself “Why Choose Essay Help?”, you can feel safe that we offer incomparable
                            customer service and delivers only top quality guaranteed work. In the unlikely event that you aren’t
                            entirely happy with the work we produce for you, you can be confident we’ll put it right – fast.</p>
                    </div>
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
                            <p style="color:#303B4F;">Fast and professional help from certified <br> experts on EduCrafter</p>
                            <a class="btn btn-primary" href="#" role="button" style="color: #fff;background: #3b71ed;border: 1px solid #3b71ed;">Get started</a>
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
    
</main>
@endsection