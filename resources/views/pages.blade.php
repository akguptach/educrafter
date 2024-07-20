@extends('layout.app')
@section('content')
<style>
.about-area-three h4{ margin: 0px;}
.about-area-three p {margin-bottom: 10px;}
.section__title .title {
    font-size: 74px;
}
	
</style>
    <main class="main-area fix">
		<section class="about-area-three section-pb-30">
            <div class="container">
                <div class="row align-items-center justify-content-center">
				    <div class="col-lg-8">
                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                
                                <h2 class="title" >
                                    Educrafter<br>
									Terms of Use
                                </h2>
                            </div>
                            
						</div>
                    </div>
                
                    <div class="col-lg-4 col-md-9">
                        <div class="about__images-three tg-svg">
                            <img src="{{asset('img/Accept terms-pana 1.png')}}" alt="img">
                            
                            
                        </div>
                    </div>
                    
				</div>
				<div class="row align-items-center justify-content-center">
				    <div class="col-lg-12">
					    <div style="margin-left:50px;margin-right:40px;">
					     {!!$page->service_description!!}
					</div>
					</div>
				</div>
            </div>
        </section>
		<section class="newsletter__area-three mb-5">
            <div class="container">
                <div class="newsletter__inner-wrap newsletter__inner-wrap-two" style="background: #C2E3FB;">
				    
					<img src="https://educrafter.co/img/black star.svg" style="position:Absolute;top:10px;left: 50px;">
				    <div style="width:80%">
                    <h2 class="title" style="font-family: 'Sofia Pro', sans-serif;font-weight:bold;font-size:8em;">Hire Tutor</h2>
					<p style="color:#000;font-size:18px;font-weight: 500;">Grade-Boosting Essays: Our Precision Writers Hit Your Academic Target Every Time </p>
					</div>
					<div style="width:20%">
					    <form action="#" class="newsletter__form-two">
							<button type="submit" class="btn"><img src="https://educrafter.co/img/arrow.png"></button>
						</form>
					</div>
					
                    
                    
                </div>
				
            </div>
    </section>
</main>
@endsection