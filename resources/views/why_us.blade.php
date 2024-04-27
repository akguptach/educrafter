@extends('layout.app')
@section('content')
    <main class="flex-shrink-0">
        <div class="masthead wcu-masthead">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <div class="masthead-left">
                            <h1>Why Choose <span>Essay Help</span></h1>
                            <p>Academic anxieties? Essay Help offers a helping hand. Expert guidance, from blank page to high grades. Your
                                journey, simplified.</p>
        
                            <p>Our writers are graduates of <span>top universities.</span></p>
        
                            <picture>
                                <source media="(min-width:768px)" srcset="{{ asset('images/universities-logo.jpg') }}">
                                <img src="{{ asset('images/universities-logo.jpg') }}" class="img-fluid" alt="Essay Help" title="Essay Help"
                                    width="520" height="78">
                            </picture>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/hero-girl.png') }}">
                            <img src="{{ asset('images/hero-girl-mobile.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="543"
                                height="680">
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
                                <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help"
                                    title="Essay Help" width="90" height="90">
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
                                <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help"
                                    title="Essay Help" width="90" height="90">
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
                                <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help"
                                    title="Essay Help" width="90" height="90">
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
                                <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help"
                                    title="Essay Help" width="90" height="90">
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
                                <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help"
                                    title="Essay Help" width="90" height="90">
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
                                <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="Essay Help"
                                    title="Essay Help" width="90" height="90">
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
        
        <section class="client-report">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-md-6">
                        <div class="cr-item">
                            <h2>20</h2>
                            <p>Minutes Response</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cr-item">
                            <h2>24847+</h2>
                            <p>Completed Dissertations</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cr-item">
                            <h2>5000+</h2>
                            <p>PhD writers</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cr-item">
                            <h2>4.9/5</h2>
                            <p>Client ratings</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="mb-5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6">
                        <div class="card tu-card we-work h-100">
                            <h2>We work hard to ensure your satisfaction</h2>
                            <picture>
                                <img src="{{ asset('images/eh-large-logo.svg') }}" class="card-img-top" alt="Essay Help" title="Essay Hel"
                                    loading="lazy" width="374" height="374">
                            </picture>
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
    </main>
@endsection