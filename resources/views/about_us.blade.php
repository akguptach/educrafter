@extends('layout.app')
@section('content')
<!-- main-area -->
    <main class="main-area fix">
	   <!-- banner-area -->
        <section class="banner-area banner-bg-five tg-motion-effects">
           
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__content-five">
                            
                            <h2 class="title" data-aos="fade-right" data-aos-delay="400">Edu<span>Crafter</span></h2>
							<span class="sub-title" data-aos="fade-right" data-aos-delay="200">Your Trusted Source for <br>High-Quality,Custom Essays</span>
                            <p data-aos="fade-right" data-aos-delay="600">Overwhelmed by essays? Educrafter's expert writers, all graduates of top universities, offer a helping hand. We understand the pressures students face, and our mission is to provide high-quality, custom papers that help you succeed. Let us simplify your journey from blank page to high grades!</p>
                            <div class="banner__btn" data-aos="fade-right" data-aos-delay="800">
                                <a href="courses.html" class="btn arrow-btn">Order Now <img src="{{asset('img/right_arrow.svg')}}" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-9 col-sm-10">
                        <div class="banner__images-five">
                            <img src="{{asset('img/Group 1171274573.png')}}" alt="img">
                            <div class="shape-wrap">
                                
                                <div class="shape-two" data-aos="fade-down-left" data-aos-delay="800">
                                    <img src="{{asset('img/100.svg')}}" alt="shape" class="tg-motion-effects3">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__shape-wrap-two">
                <img src="{{asset('img/banner1_l.png')}}" alt="shape" data-aos="fade-right" data-aos-delay="1000" style="transform: rotate(346deg);">
                
            </div>
        </section>
        <!-- banner-area-end -->
	
	<!-- banner-area -->
      <section class="">
        <div class="container">
          <div class="row justify-content-between align-items-start">
		  
			<div class="col-xl-12 col-lg-12" align="center" style="margin-top: 100px;margin-bottom: 30px;">
			    <div style="border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;border-radius: 8px;overflow: hidden;">
			            <h3 style="padding-top: 20px;padding-bottom:20px;">We only hire tutors who have graduated from top universities.</h3>
			            <div class="marquee_mode" style="height:88px;margin-bottom: 20px;" id="marquee_mode_top">
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/Columbia University.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/Cornell University.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
							  <img src="{{ asset('img/logo2/Duke University.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
							  <img src="{{ asset('img/logo2/ETHzurich.png')}}" style="width:150px;">
							</div>
           
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/HarvardUniversity.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/MassachusettsInsttute ofTechnology.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/NewyorkUniversity.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/Oxford University.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/Princeton University.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/Stanford university.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/UCLLondon.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/University of Cambridge.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/University Of Chicago.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/University of Pennsylvania.png')}}" style="width:150px;">
							</div>
							<div class="brand__item" style="border: 1px solid #C6C6C6;border-radius: 8px;padding: 10px;">
								<img src="{{ asset('img/logo2/Imperial College London.png')}}" style="width:150px;">
							</div>
			
						</div>
			    
				       <div class="" data-aos="fade-right" data-aos-delay="900" style="margin-bottom:20px; width: 600px;">
							<div class="fact__item-wrap-two">
								<div class="row justify-content-center">					  
									<div class="col-3 col-md-3 col-sm-6">
										<div class="fact__item fact__item-two">
										  <h2 class="count">
											<span class="odometer" data-count="10"></span>+
										  </h2>
										  <p style="font-size: 15px;">Years</p>
										</div>
									</div>
									<div class="col-3 col-md-3 col-sm-6">
										<div class="fact__item fact__item-two">
										  <h2 class="count">
											<span class="odometer" data-count="250"></span>K+
										  </h2>
										  <p style="font-size: 15px;">Satisfied students</p>
										</div>
									</div>
								    <div class="col-3 col-md-3 col-sm-6">
										<div class="fact__item fact__item-two">
										  <h2 class="count">
											<span class="odometer" data-count="150"></span>+
										  </h2>
										  <p style="font-size: 15px;">Subjects</p>
										</div>
									</div>
									<div class="col-3 col-md-3 col-sm-6">
										<div class="fact__item fact__item-two">
										  <h2 class="count">
											<span class="odometer" data-count="98"></span>%
										  </h2>
										  <p style="font-size: 15px;">Satisfaction Rate</p>
										</div>
									</div>
								</div>
							</div>
					    </div>
				</div>
			</div>

            
          </div>
        </div>
      </section>
      <!-- banner-area-end -->
	  <section class="about-area-five section-pb-90">
            <div class="container">
                <div class="row align-items-center justify-content-center">
				    <div class="section__title mb-15">
                               
                                <h2 class="title bold" style="text-align: center;">Our Guarantees</h2>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="about__images-five">
                            <div class="" style="float: right;">
                                <img src="{{ asset('img/Rectangle 8854.png')}}" alt="img">
                            </div>
                            <div class="aos-init aos-animate" data-aos="fade-right" data-aos-delay="200" style="float: left;width: 324px;">
                                <img src="{{ asset('img/Rectangle 8859.png')}}" alt="img">
                            </div>
							
							<div class="aos-init aos-animate" data-aos="fade-right" data-aos-delay="200" style="float: left;background:#00B3DA;width: 180px;height: 180px;border-radius: 100px;margin-left: 60px;margin-top: 32px;">
                               
								  <div class="circle__text-wrap">
                                <div class="icon">
                                    <img src="{{ asset('img/Star 30.png')}}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="circle rotateme">Edu Crafter . Edu Crafter . Edu Crafter .</h6>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-five">
                            
                            
                            <ul class="about__info-list list-wrap">
                                <li class="about__info-list-item" style="padding-top: -27px;">
                                    <img src="https://educrafter.co/img/Icon.png">
                                    <p class="content">
										<span style="width: 100%;float: left;height: 31px;">On time delivery</span>
										<span style="font-size:14px;font-weight:normal;float: left;width: 100%;">We guarantee your essay will be delivered on time, giving you ample time for review before your submission deadline.</span>
									</p>
									
                                </li>
                                <li class="about__info-list-item">
                                    <img src="https://educrafter.co/img/Icon.png">
									<p class="content">
										<span style="width: 100%;float: left;">100% plagiarism free!</span>
										<span style="font-size:14px;font-weight:normal;float: left;width: 100%;">Every essay undergoes a thorough plagiarism check using advanced detection tools to ensure originality.</span>
									</p>
                                    
                                </li>
                                <li class="about__info-list-item">
                                    <img src="https://educrafter.co/img/Icon.png">
									<p class="content">
										<span style="width: 100%;float: left;">Excellent Customer Support</span>
										<span style="font-size:14px;font-weight:normal;float: left;width: 100%;">We provide dedicated customer support throughout the entire writing process, offering assistance and addressing any concerns promptly.</span>
									</p>
                                    
                                </li>
								<li class="about__info-list-item">
                                    <img src="https://educrafter.co/img/Icon.png">
									<p class="content">
										<span style="width: 100%;float: left;">Unlimited revisions</span>
										<span style="font-size:14px;font-weight:normal;float: left;width: 100%;">Enjoy unlimited revisions until you're 100% satisfied with your essay.</span>
									</p>
                                   
                                </li>
								<li class="about__info-list-item">
                                    <img src="https://educrafter.co/img/Icon.png">
									<p class="content">
										<span style="width: 100%;float: left;">100% Confidentiality Guaranteed</span>
										<span style="font-size:14px;font-weight:normal;float: left;width: 100%;">We guarantee complete confidentiality in all transactions and communications. Your privacy is our top priority.</span>
									</p>
                                    
                                </li>
                            </ul>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
		<section class="event__area-three">
            <div class="container">
                
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="event__item-two shine__animate-item">
                            
                            <div class="event__content-two align-items-center">
                                <h2 class="title"><a href="events-details.html">We work hard to ensure your satisfaction</a></h2>
                                <p>More Than Just Essays, We Empower You to Succeed                  </p>
                                <div class="event__meta-two">
									<p> For over 10 years, EduCrafter has been a leading force in academic writing services. We go beyond simply providing custom-written essays. We empower students by equipping them with the tools and knowledge they need to excel in their academic journey.</p>                

									<p><b>Our Passion: Your Success</b></p>
									<p>Our team is comprised of passionate educators and experienced writers, all dedicated to delivering high-quality academic writing services. We believe every student deserves the support they need to achieve their academic goals.</p>

									<p><b>Combating Plagiarism & Empowering Students: Why Choose EduCrafter?</b></p>
									<p>The rise of plagiarism-ridden and low-quality essay writing services is a major concern for students. These services can jeopardize your academic integrity and grades. At EduCrafter, we're committed to doing things differently.</p>

									<p><b>We're not just about delivering essays; we're invested in your academic success.</b></p>
									<p>EduCrafter offers premium essay writing services that go beyond the final paper. We equip you with the tools and knowledge to become a stronger, more confident writer in your own right.</p>

									<p><b>Ready to Unlock Your Potential?</b></p>
									<p>Get started with EduCrafter today and experience the difference!</p> 
									<a href="instructors.html" class="btn arrow-btn" style="background:#000;color:#fff;">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
			   </div>
               
            </div>
            
        </section>
		<!-- fact-area -->
        <section class="fact__area section-pb-90">
            <div class="container">
                <div class="fact__inner-wrap">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="400"></span></h2>
                                <p>Qualified Experts</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="98"></span>%</h2>
                                <p>Satisfaction Rate</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="90"></span>%</h2>
                                <p>Returning Customers</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="fact__item">
                                <h2 class="count"><span class="odometer" data-count="10"></span></h2>
                                <p>Years of experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->
	  <section class="newsletter__area-three mb-5" >
            <div class="container">
                <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;">
				    
					<img src="{{ asset('img/black star.svg')}}" style="position:Absolute;top:10px;left: 50px;">
				    <div style="width:80%">
                    <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:8em;">Hire Tutor</h2>
					<p style="color:#000;font-size:18px;font-weight: 500;">Grade-Boosting Essays: Our Precision Writers Hit Your Academic Target Every Time </p>
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
<script>
const text = document.querySelector('.circle');
        text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
        const element = document.querySelectorAll('.circle span');
        for (let i = 0; i < element.length; i++) {
            element[i].style.transform = "rotate(" + i * 13 + "deg)"
        }
</script>
    <!-- main-area-end -->
@endsection

   