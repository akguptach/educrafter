@extends('layout.app')
@section('content')
<style>
.about-area-three h4{ margin: 0px;color: #000000;}
.about-area-three p {margin-bottom: 10px;color: #000000;}
.section__title .title {font-size: 74px;}
	
</style>
    <main class="main-area fix">
		<section class="about-area-three section-pb-30">
            <div class="container">
                <div class="row align-items-center justify-content-center">
				    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section__title mb-10">
                                
                                <h2 class="title" >
                                    Educrafter<br>
									FAQs
                                </h2>
								<p style="font-size: 16px;">Have a question about our essay writing or editing service? Our FAQs are a great place to start. If you can't find the answer you need, our customer support team is available on WhatsApp to assist you.</p>
                            </div>
                            
						</div>
                    </div>
                
                    <div class="col-lg-6 col-md-9">
                        <div class="about__images-three tg-svg">
                            <img src="{{asset('img/FAQs-pana 1.png')}}" alt="img">
                            
                            
                        </div>
                    </div>
                    
				</div>
				<div class="row align-items-center justify-content-center">
				    <div class="col-lg-12">
					    <div class="faq__wrap">
                                <div class="accordion" id="accordionExample">
								    <div class="row">
									<?php  use App\Models\Faq as Faq_Model;

									$website_id = env('WEBSITE_ID');
									$faq_datas = Faq_Model::where('website_id', $website_id)->orderBy('id', 'desc')->get()->toArray();
									?>
									@if(!empty($faq_datas))
								     @foreach ($faq_datas as $faq)
									 <div class="col-lg-6">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne<?= $faq['id']; ?>" aria-expanded="true" aria-controls="collapseOne<?= $faq['id']; ?>">
                                                <?= $faq['question']; ?>   
                                            </button>
                                        </h2>
                                        <div id="collapseOne<?= $faq['id']; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
				</div>
            </div>
        </section>
		
</main>


@endsection