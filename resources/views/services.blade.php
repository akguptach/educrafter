@extends('layout.app',['title'=>@$page->page_title,'meta_description'=>@$page->seo_description])
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
@section('content')
<main class="flex-shrink-0">
    <div class="masthead wcu-masthead">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="masthead-left">
                        <h1>Get Academic Success with Our <span>Expert Dissertation Assistance Services</span></h1>
                        <p>Stop stressing over tight deadlines and constant revisions with our premium class dissertation service.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/hero-girl.png') }}">
                        <img src="{{ asset('images/hero-girl-mobile.png') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="450" height="680">
                    </picture>
                    
                </div><div class="row">
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
								<source media="(min-width:768px)" srcset="{{ asset('images/sitejabber-logo.jpg') }}">
								<img src="{{ asset('images/sitejabber-logo.jpg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="150" height="30">
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
					<h2><b>15,000+</b> students trust EduCrafter</h2>
				</div>
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
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">On time delivery</h3>
                            <p>Our writers make sure that all orders are submitted prior to the deadline so that you can proofread your paper before handing it over to your tutor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Verified Tutors</h3>
                            <p>All tutor profiles are meticulously checked: diplomas, identity and background. ony profiles demostrating academic excellence are retained. Also, all reviews visible on tutor accounts are purely authentic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">100% plagiarism free!</h3>
                            <p>All EduCrafter papers are scanned for duplicate content and are guaranteed plagiarism free.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
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
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Free amendments</h3>
                            <p>We provide unlimited free revisions until you are satisfied with the work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">100% Confidentiality Guaranteed</h3>
                            <p>Our aim is your complete confidentiality.</p>
                        </div>
                    </div>
                </div>

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

                        <p>With EduCrafter, it has never been easier to get the grades you've always wanted. Our world-class academics are ready to help.</p>
                        <a class="btn btn-primary d-none d-md-inline-flex" href="#" role="link">Get started</a>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="testimonial-slider">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card student-reveiw-card">
                                    <picture>
                                        <img src="https://educrafter.co/images/youtube.png" class="img-fluid card-img" alt="EduCrafter" title="EduCrafter" loading="lazy">
                                    </picture>

                                    <div class="sr-block" style="margin-top:10px;">

                                        <div class="sr-list">
                                            <ul class="student-rating" data-rate="5" style="padding-left:2px;">
                                                <li>Start 1</li>
                                                <li>Start 2</li>
                                                <li>Start 3</li>
                                                <li>Start 4</li>
                                                <li>Start 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">

                                        <div class="student-name">John De marli. <span>Sep 01, 2023</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card student-reveiw-card">
                                    <div class="d-flex sr-block">
                                        <div class="student-photo">
                                            <picture>
                                                <source media="(min-width:768px)" srcset="{{ asset('images/stundent-1.png') }}">
                                                <img src="{{ asset('images/stundent-1.png') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="65" height="65">
                                            </picture>
                                        </div>

                                        <div class="sr-list">
                                            <ul class="student-rating" data-rate="3">
                                                <li>Start 1</li>
                                                <li>Start 2</li>
                                                <li>Start 3</li>
                                                <li>Start 4</li>
                                                <li>Start 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-text">My academic superhero arrived in the form of affordable, easy-to-use support. Courses conquered, stress conquered.</p>
                                        <div class="student-name">John De marli. <span>Sep 01, 2023</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card student-reveiw-card">
                                    <div class="d-flex sr-block">
                                        <div class="student-photo">
                                            <picture>
                                                <source media="(min-width:768px)" srcset="{{ asset('images/stundent-1.png') }}">
                                                <img src="{{ asset('images/stundent-1.png') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="65" height="65">
                                            </picture>
                                        </div>

                                        <div class="sr-list">
                                            <ul class="student-rating" data-rate="4">
                                                <li>Start 1</li>
                                                <li>Start 2</li>
                                                <li>Start 3</li>
                                                <li>Start 4</li>
                                                <li>Start 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <p class="card-text">My academic superhero arrived in the form of affordable, easy-to-use support. Courses conquered, stress conquered.</p>
                                        <div class="student-name">John De marli. <span>Sep 01, 2023</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card student-reveiw-card">
                                    <picture>
                                        <img src="https://educrafter.co/images/youtube.png" class="img-fluid card-img" alt="EduCrafter" title="EduCrafter" loading="lazy">
                                    </picture>

                                    <div class="sr-block" style="margin-top:10px;">

                                        <div class="sr-list">
                                            <ul class="student-rating" data-rate="5" style="padding-left:2px;">
                                                <li>Start 1</li>
                                                <li>Start 2</li>
                                                <li>Start 3</li>
                                                <li>Start 4</li>
                                                <li>Start 5</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">

                                        <div class="student-name">John De marli. <span>Sep 01, 2023</span></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <a class="btn btn-primary w-100 mt-4 d-md-none" href="#" role="link">Get started</a>
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
                            <h2>All assignments can be done on time</h2>
                            <p>Fast and professional help from certified <br> experts on EduCrafter</p>
                            <a class="btn btn-primary" href="#" role="button">Get started</a>
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
                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/search-icon.svg') }}">
                            <img src="{{ asset('images/search-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Fill-in the details</h3>
                            <p>Provide all the necessary details. Once you complete the order form and pay to write your essay, we will immediately start working on it.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                            <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Your writer assigned</h3>
                            <p>Our team will review your order and select an expert essay writer to work on your paper.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="work-card h-100">
                        <picture>
                            <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                            <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter" width="90" height="90">
                        </picture>
                        <div class="card-body text-center">
                            <h3 class="card-title">Writing magic happens</h3>
                            <p>Our experts are working tirelessly to write your paper. Then it will go through our quality assurance team.</p>
                        </div>
                    </div>
                </div>

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
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">
                                            <img src="https://s3-alpha-sig.figma.com/img/2be3/6d55/b72fa1057305ff594436579ab7fb0f3b?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ouheqhq7dryeGHu2JrQwaHShM5q2wAZIzstu9dX~b0dW9RPgSrld8GQLWBQMmHnubDALDaA1RT0J~4QMhDrJ56FnMOwlVPTIIZUz15f0XJ~xUWLR0au4RYHYXtf4vl~8~qVuojXn8NDRsd~fa8QEDh7r0~8bJuGg7K9yilGQt1NEUsmVn-1RbFAdWtyn~AJlNrRqGXTSq15JujqhyUa5fCAaOd7oKE7BlsNzyn~SvvHYmlq28CwQw-od6ymV7Et0iCqQYPNBpwr43~P1-FvDkjxPqrhs-FMApirqLnPFpYrJLW8BF1LFJfTZ6OQ-Wl2056egXFe4bv2Hs80yRAedeQ__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/a62d/06c4/99b301242f9a6c5ce892be32c99dc1bb?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=R0mg4mIf8jhxpk38eWwap0Oxpvu6RYT~GALW0ID6jUDwF6o8sVRU0PRdBUDk4RbHkvFh8Zf9rHPxl8yAlMkE~er3xuvbN4391qebSjzt72bUAUufntK2ZuW87SKS4TKCYIZHrRnSahYeT5mv48o4-OmJkKPjB8YqYM5nZNJQ~hS2wIk~hbx9nZ52NasC7QLPb9mA8Kioa4CRNFC~Yxx5wKM~KcT8xi7EpxFqf7F4RYLSxUCW3IPcKUfZ4TyxAt7ZARYXJ74JObsklGifGCZ7heV6biLJbXqTYB4~09S0urGF3~h-mkxe6TSu-mZ07C5KzymStjz7YcMp3w2HYMJrsQ__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/42c7/a5fc/d8c8f9d3c1a5db0f4c7089fb6a5b23a6?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=fsXP~ueRFCaBa2JpH~OuhnAxD2RFZz3oQtXixIah5vhvgz8zX~0o5PaELyzBtus6PiWSwt1gJjL8UvST4OnuZ2CpY4K1JLBfW~to-3c9AeTXZBuWyeu1s0ZH9Sgayp0QRva1S9T~yb8s4PRpzq0nI9~x8Og-A61K2Rwplb4QrLgcmKb6B96tuLHYKAmu3sS0rTPhWyiCY1vFMha~1akKqxz1GOeF1Vbh6EbWDEh7SPw9Y-2nUXXBMlu8tTYUHaRpSDDt5JMRaYXE00oG~9NK3ZkLokvEaJAKnL3JdoQcJtSh1eJAEXnmr0DYlkO~MhC-6AzNOQPz3VH2lluEwPgJcg__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/b948/cf05/f5faa4c350918311605cdb0dbe89b0f9?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IlM-YKoYeecFYQ6m14KPTh0KnCiguk37yP5mvBUNDk~YCDd46GAH8M4mr9w77WZ7TCiBo4HfJgXj7d1UO1zlXz-P4Y4Cn07P7xv8pCAjkQ82PBdq9fJPfkqyXHRXpWOtV5AQ-GEJr7U7Unw~zf7nHHR8yHnpHF5uGUuj~bE5hEczRqQDSL0DQ23JmNKMxq4xHG~oMqW~8BcfrVXyT4tOfxm~N7BqofpM78b~3nwX3YHB4cdVJJ0Rz4KB0I4FKldIUaYE~v0P~BJaXlTnSCzO~jy1mEVDFD3ROFViH5cYMUAUC9SgwEeEoVhqx83ioFpT4ZUWxsFIxBRpJVDpm0M2Vg__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/33ee/257b/bd2b3501371f46fc682320e20816d228?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=p3n6SjbJ94~6gBDNned7skc~qgsLJBC2TjvDk2im-tLugH4rKM4QCz-JkMSPj77kz5ikf2Up41zeznqsHvDUORnGbu8uZPM81vVlr1DvdhUMCoTBGBN1duyofZR3DGnWyIJYpMbvKhYIU8R9Wf710eXQAWqKpg8duoER2007CpgkNhQB7UACJ1nLmmttIove0C-LbP7nEGXiy4iKNAvRN5~2q6b~fnEEp6e2cz4uxuZT50CLGgNnM5rw-rqQHRBX19ofjtYCNsHqTwspmbHyPzFatTuilq6D5oDIYmlicv3GYPgthtxT2BsQLoFujOtUkIhwjnmRKAf2FTyAu5bvLw__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/660f/aceb/bdbd9b26cdaeaeb3bdf7b8ebf7fc8516?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=OSlOPBj7dVLw0UqqVvoaMj5zMaeocE9X43DYbzf0lsKmQFWWFQp5Xa1dXkJ2A3NXI7ahfNmswPOEQM-cGLBe~zZHr3BBIV989Af4icgbYjAymJ538ACFy89SyT6YuUfuhR0GLgTPXwa-nEMSf2SJlWxrH5UjDtC9yHP8igu08yIsRIxn1p8lTFLaReq89xcNe4g3I-sXtCjTdj514ghbQJemb2ZSRWbsZTiu5Q4yZqwnfB2vx~V-L0DJJeV57vxPtX7SWWvlnc6IyINMNIfV54ZcD~m-Oedt9b2dT8DJhiQ7YjEd32WHz0SIuMW2aEe19gp2kQyv6JoD8~FAj9GAsQ__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/a9bf/bdd3/551f969f6d09c78437f555c5bf8d5efb?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Uu~M4-JQufG17zVL50w6rXMUrvzBpWClJwwlCzlLqwHFKL4Y~Df9IKYUI7vq2Ft~i1opnSUnV5svBsCkqsKhuyU7oKqyiOHwaMEzKeLyl~BP1cNHNQRqMoCp88fL80PbrE-ltaqAVgcARMa1qbvvAOFIvQ5jkG85WSlMWdbOS-3gEsrbDrB6yHb9UXkrsEysTC7z-suziWJ4AM7ky3ZlY0KlvOvpfmHtIIp3GNv~ol1qrJpnZBB97yOX5gxVJm3gOZKdRJTQZDJZJBFnQVLwNFP7UoX2DUZsRIvs98f6GVMUDLbUKRnBgOHp92hhpOSoLsiZNCiumzG1fIkT1Ow7PQ__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/29dc/2f62/6ff236ece35e856fd709b3489bb14f7e?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ddOM4pGde3Nw3-tmTI3pUUKuhVg~xVxeIxEXCNIgwgf3ZFQQASWkIQo9YcdQNo4n2dNjNkeBkXDs0D2T2kdborD18rMabs5sYe5PQ5H9k7t5afv-SgGHmCVhVh21vqC63j-KTPIAEArCkSy8Ip-sQb9kmQWuThS6hVMfKsLL7n0-7mcdwRuhKIN5V-17TBCWLglLt01NxMhXRLZUOLftgTXGgmvHOuHEX9fcOoiWptoCbZ13FcB41kw4XLR~wMbOVc2l3aI6BBEkxSf47~hyLWPYEZic39MCe2kr9Cof6BBo8jiLn2AMmy8UDDwiQUSYDASFQjNn-j-S6sGPWVSgag__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/a977/0ac6/881f9c5b7184939c6d13624d362e1ad0?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=UJAa3WrnwT26Z9UkXRDze9IygA4iCYgNghpIiaIjMWHVsbBMZ5ZCCC2-SJSSc8ku4oaVhmPQvc0W~fvNLbPM0QsdlLwWROzku1-cHZNxwge8oFrKpRr5GhpJkDlpaF04V5yDS7WjMBLCk8EcdPS6aknE2mfL15uOJCGfTHWn0OF8nS0A-ng49SGgMQU40A0U8j-mdLjGFPmwX~m4X-PgwTxgZ~vOpmLfDPZXQIDK4z0b3CyPwOxgukiABZNlQhTmW0wa704FuIAawnctthMnkH3yXVbv5xe1uTqUJWKOBasGVoAVB-fYMgOB0ej857R3wxnF2Q4d~K4K~FIFiJV-iQ__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="card-body text-center" style="background: #fff;border-radius: 10px;height: 100px;padding:20px;margin-bottom: 10px;">


                                            <img src="https://s3-alpha-sig.figma.com/img/98a0/0682/4f93f1932f90bb8c1d406e01c8b86ec0?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=egp-EIXwsRtTpBIYM4krkab~1iVfITx5~hUQu6VbLt1YxGfS1f3Krsng5ifOzd8vIo8E~ge2VupgppHK6cLSpYmD7Ku0QRPJmur-TS9Wp3GfV-8ZPgTGZ10Hecr9uskUMqluisg97IBBG9VbqRkMZdruBsjbnFNsAaaFfN4WBopQE0UVS-HE0-7xZd7MYg59DHT-dUvzPMSAtEOafa5BePKe52YSN5eMncUnYxIYliJfs37DKKyUicjz~bPh3jnVIhN3J4koj-f0OJ1a40G6e~FtAfdm2-pCib1VYVYu9G7~OtMf8ZyNTl4PIhrfRhmImDN8GyDcSwqM~P30pokFqA__" class="card-img-top" alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


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
    <x-layout.faq />
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
                            <img src="{{ asset('images/trophy-mobile.png') }}" class="img-fluid card-img modal-img" alt="EduCrafter" title="EduCrafter" loading="lazy" width="542" height="415">
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

                            <img src="https://s3-alpha-sig.figma.com/img/78ea/2c9d/0f289ace276d7b79073052f2458d4d8b?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iH9XJu166M8clXgGi-IquzUYudac4hZ8OSqHGzy7iCmjCrHY7VtcO8Som4OLiHa-J1iLaQhKbrgwoX2JQA5cdqGBxP7HhwYTl5~~wo6GEmEWPIluhFCSJ5oPrCPrDx39nmCGAo5zB9d-8WfxUc0agw9fSlEx8qCo6PcEVqPjvtVjgqHzUye4yBMQ5-6BLz6DH6fIkuhWQth9HNIywXN5dF0ALTr0o3phBnLVir8Q459y7s1YhWd-SKvhAnk2HdkXHhA8MoGMe3CL5q~4FvDmBxH12m494UMdsTxh7wM769RnLdUlex3nOh8qrOAI3VkuCCLANYKXvQWhN6eOCjMukg__" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter">
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

                            <img src="https://s3-alpha-sig.figma.com/img/78ea/2c9d/0f289ace276d7b79073052f2458d4d8b?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iH9XJu166M8clXgGi-IquzUYudac4hZ8OSqHGzy7iCmjCrHY7VtcO8Som4OLiHa-J1iLaQhKbrgwoX2JQA5cdqGBxP7HhwYTl5~~wo6GEmEWPIluhFCSJ5oPrCPrDx39nmCGAo5zB9d-8WfxUc0agw9fSlEx8qCo6PcEVqPjvtVjgqHzUye4yBMQ5-6BLz6DH6fIkuhWQth9HNIywXN5dF0ALTr0o3phBnLVir8Q459y7s1YhWd-SKvhAnk2HdkXHhA8MoGMe3CL5q~4FvDmBxH12m494UMdsTxh7wM769RnLdUlex3nOh8qrOAI3VkuCCLANYKXvQWhN6eOCjMukg__" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter">
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

                            <img src="https://s3-alpha-sig.figma.com/img/78ea/2c9d/0f289ace276d7b79073052f2458d4d8b?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=iH9XJu166M8clXgGi-IquzUYudac4hZ8OSqHGzy7iCmjCrHY7VtcO8Som4OLiHa-J1iLaQhKbrgwoX2JQA5cdqGBxP7HhwYTl5~~wo6GEmEWPIluhFCSJ5oPrCPrDx39nmCGAo5zB9d-8WfxUc0agw9fSlEx8qCo6PcEVqPjvtVjgqHzUye4yBMQ5-6BLz6DH6fIkuhWQth9HNIywXN5dF0ALTr0o3phBnLVir8Q459y7s1YhWd-SKvhAnk2HdkXHhA8MoGMe3CL5q~4FvDmBxH12m494UMdsTxh7wM769RnLdUlex3nOh8qrOAI3VkuCCLANYKXvQWhN6eOCjMukg__" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter">
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
    </section>
    {{--<section class="mb-5 mt-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <div class="">

                        <picture>
                            <img src="{{ asset('images/Custom_essay_writing_service.png') }}" class="card-img-top" alt="Essay Help" title="Essay Hel" loading="lazy" width="374" height="374">
    </picture>
    </div>
    </div>
    <div class="col-md-6">
        <div class="we-work-content">
            <h3 class="text-header">Custom essay writing service</h3>
            <p>The information provided when using the Services is not intended for distribution to or use
                by any person or entity in any jurisdiction or country where such distribution or use would
                be contrary to law or regulation or which would subject us to any registration requirement
                within such jurisdiction or country. Accordingly, those people who choose to access the
                Services from other locations do so on their own initiative and are solely responsible for
                compliance with local laws, if and to the extent local laws are applicable</p>

            <p>The Services are not tailored to comply with industry-specific regulations (Health Insurance
                Portability and Accountability Act (HIPAA), Federal Information Security Management Act
                (FISMA), etc.), so if your interactions would be subjected to such laws, you may not use the
                Services. You may not use the Services in a way that would violate the Gramm-Leach-Bliley
                Act (GLBA).</p>
        </div>
    </div>
    </div>
    </div>
    </section>--}}
</main>
@endsection