@extends('layout.app')
@section('content')
<style>
.post-tag {
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
    color: #0E0F0C;
    background: #C2E3FB;
    
    padding: 5px 10px;
    border-radius: 4px;
   
}
.courses__item-content .title {
    font-size: 18px;
    font-weight: var(--tg-fw-semi-bold);
    line-height: 1.4;
    margin: 10px 0 10px;
}
.courses__item {
    margin: 0 0 30px;
}
.blog__post-meta {
    margin-top: 20px;
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
<!-- main-area -->
<main class="main-area fix">

   
   <!-- course-area -->
    <section class="courses-area section-pt-30 section-pb-30" style="background:#fff;border:none;box-shadow:none;">
        <div class="container">
            <div class="section__title-wrap" style="border-bottom: 1px solid #E1E1E1">
                <div class="row">
                    <div class="section__title mb-40">

                        <h2 class="title">Blogs</h2>

                    </div>
                    <div class="col-lg-12">

                        <div class="courses__nav">
                            <ul class="nav nav-tabs" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active ajaxLoad" id="all-tab" data-bs-toggle="tab"
                                        data-bs-target="#all-tab-pane" type="button" role="tab"
                                        aria-controls="all-tab-pane" aria-selected="true"
                                        data-cat="All">
                                        All Articles
                                    </button>
                                </li>
                               
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="1-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#1-pane"
                                        type="button" role="tab"
                                        aria-controls="1-pane"
                                        aria-selected="false" tabindex="-1">
                                        Educations
                                    </button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="2-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#2-pane"
                                        type="button" role="tab"
                                        aria-controls="2-pane"
                                        aria-selected="false" tabindex="-1">
                                        Lifestyle
                                    </button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="3-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#3-pane"
                                        type="button" role="tab"
                                        aria-controls="3-pane"
                                        aria-selected="false" tabindex="-1">
                                        Entertainment
                                    </button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="4-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#4-pane"
                                        type="button" role="tab"
                                        aria-controls="4-pane"
                                        aria-selected="false" tabindex="-1">
                                        Travel
                                    </button>
                                </li>
								<li class="nav-item" role="presentation">
                                    <button class="nav-link ajaxLoad"
                                        id="5-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#5-pane"
                                        type="button" role="tab"
                                        aria-controls="5-pane"
                                        aria-selected="false" tabindex="-1">
                                        Food
                                    </button>
                                </li>
								
                               

                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="tab-content" id="courseTabContent">

                <div class="tab-pane fade active show" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
				    <div class="row">
					    @foreach($blogs as $blog)
						<div class="col-sm-4">
							<div class="courses__item shine__animate-item"
								style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
								<div class="courses__item-thumb">
									<a href="{{route('blog.view',['blog'=>$blog->id])}}" class="shine__animate-link">
										<img src="<?= env('ADMIN_URL').$blog->blog_image;?>" alt="img" style="border-radius: 6px 6px 0px 0px;">
									</a>
								</div>
								<div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
								    <a href="blog.html" class="post-tag">{{$blog->category->category_name}}</a>
									<h5 class="title"><a href="{{route('blog.view',['blog'=>$blog->id])}}"><?= $blog->blog_title;?></a>
									</h5>
									<div class="blog__post-meta">
										<ul class="list-wrap">
											<li>20 July, 2024</li>
										</ul>
                                    </div>
								</div>
							</div>
						</div>
						 @endforeach
						<div class="col-sm-4">
							<div class="courses__item shine__animate-item"
								style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
								<div class="courses__item-thumb">
									<a href="#" class="shine__animate-link">
										<img src="https://500m.in/images/uploads/attachment/1721380789.png" alt="img" style="border-radius: 6px 6px 0px 0px;">
									</a>
								</div>
								<div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
								    <a href="blog.html" class="post-tag">Marketing</a>
									<h5 class="title"><a href="#">How to scrape education on linkedin for growth and success</a>
									</h5>
									<div class="blog__post-meta">
                                        <ul class="list-wrap">
											<li>20 July, 2024</li>
										</ul>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="courses__item shine__animate-item"
								style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
								<div class="courses__item-thumb">
									<a href="#" class="shine__animate-link">
										<img src="https://500m.in/images/uploads/attachment/1721228807.png" alt="img" style="border-radius: 6px 6px 0px 0px;">
									</a>
								</div>
								<div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
								    <a href="blog.html" class="post-tag">Marketing</a>
									<h5 class="title"><a href="#">How to scrape education on linkedin for growth and success</a>
									</h5>
									<div class="blog__post-meta">
                                        <ul class="list-wrap">
											<li>20 July, 2024</li>
										</ul>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="courses__item shine__animate-item"
								style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
								<div class="courses__item-thumb">
									<a href="#" class="shine__animate-link">
										<img src="https://500m.in/images/uploads/attachment/1721380789.png" alt="img" style="border-radius: 6px 6px 0px 0px;">
									</a>
								</div>
								<div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
								    <a href="blog.html" class="post-tag">Marketing</a>
									<h5 class="title"><a href="#">How to scrape education on linkedin for growth and success</a>
									</h5>
									<div class="blog__post-meta">
                                        <ul class="list-wrap">
											<li>20 July, 2024</li>
										</ul>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="courses__item shine__animate-item"
								style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
								<div class="courses__item-thumb">
									<a href="#" class="shine__animate-link">
										<img src="https://500m.in/images/uploads/attachment/1721228807.png" alt="img" style="border-radius: 6px 6px 0px 0px;">
									</a>
								</div>
								<div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
								    <a href="blog.html" class="post-tag">Marketing</a>
									<h5 class="title"><a href="#">How to scrape education on linkedin for growth and success</a>
									</h5>
									<div class="blog__post-meta">
                                        <ul class="list-wrap">
											<li>20 July, 2024</li>
										</ul>
                                    </div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="courses__item shine__animate-item"
								style="border: 1px solid #E5E7EB;box-shadow: 5px 7px 0px 0px #000000;padding: 0px 0px 10px;">
								<div class="courses__item-thumb">
									<a href="#" class="shine__animate-link">
										<img src="https://500m.in/images/uploads/attachment/1721380789.png" alt="img" style="border-radius: 6px 6px 0px 0px;">
									</a>
								</div>
								<div class="courses__item-content" style="padding: 0px 10px 10px 10px;">
								    <a href="blog.html" class="post-tag">Marketing</a>
									<h5 class="title"><a href="#">How to scrape education on linkedin for growth and success</a></h5>
									<div class="blog__post-meta">
                                        <ul class="list-wrap">
											<li>20 July, 2024</li>
										</ul>
                                    </div>
								</div>
							</div>
						</div>
					</div>
                </div>
                
                <div class="tab-pane fade" id="1-pane" role="tabpanel" aria-labelledby="1" tabindex="0">
                </div>
                




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
    
</main>
<!-- main-area-end -->
@endsection