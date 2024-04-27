@extends('layout.app')
@section('content')
<style>.select2-container .select2-selection--single {height: 52px !important;}
.select2-container--default .select2-selection--single {    background-color: #fff;    border: 1px solid #868685;    border-radius: 30px;}
.select2-container--default .select2-selection--single .select2-selection__rendered {    color: #444;    line-height: 52px;}
.select2-container--default .select2-selection--single .select2-selection__arrow {    height: 48px;    position: absolute;    top: 1px;    right: 1px;    width: 20px;}
.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 20px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
#marquee1 {	overflow-x: marquee-line;	marquee-style: scroll;	marquee-direction: backward;}
.task-form .btn{
	padding:.45rem 1rem;
}
</style>
	<div class="masthead">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="masthead-left">
						<h1>The <br>student's key <br>to <span>success <br>since 2011</span></h1>
						<p>Get help with anything from a short essay to exam notes, proofreading and editing or your full dissertation.</p>
						
						<a href="order.html" class="btn btn-primary mb-4 w-100 d-md-none">Order Now</a>

						<p class="tu-text">Our writers are graduates of <span>top universities.</span></p>
							<div class="overflow-hidden tu-marquee">
							    <div class="horizontal-marquee">
								    
							        <img src="https://s3-alpha-sig.figma.com/img/7a96/b67a/ad66c59d0d2c65348c0d05ef4fcccd94?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=C0F6IY2LXNsXQNWonQs~6zvgJaHUlmCNFhOH2jEejQXuWXL33TzfGRqy5pLO6SWqq~QCz1xk7HDK62uWcapj7BLWFCDRBlZgwaiVuuYxG11hiU29vyqK~45e6CuYXQQvIi8hQYDMHKjTa~T~I1rLwNkXwzw1YCX8tXw1-KDpvEoBEaeyjylWJtT4hVQl35c~IUapbFdk~r-MRgSUDM839yBrDGy~31jfkhfjkuWEYmgeN2lexFAIgguj~Fh29KrM9LNOh7W~esfIiW0ZVfpt~lUKe8BXQl0bjLNBWQx-45msiloL9X6PuAE7OAQTEpbcFIFoYEuNLJeJZcZr4e4nUw__"  alt="EduCrafter" title="EduCrafter"  height="85">
									<img src="https://s3-alpha-sig.figma.com/img/0d44/3070/f792e30751b5a59cc888ba08e1474aab?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=KR4JoPGkkd5fwqnRJYPyPIa5Dsy~UvZrDZSU4MRMgRWuJ7B6MNqi-w9pjDM6knrpMzpWYpjUptCSMqVPj-uYawFGYPA1z5FFwkJyn6EzoBacXhmBgokOzqR6JmTlIdx9e-SWXodygMSoghdkKALQfQFWiW8p~RIT-7P1ltsObTDtGXfZaLpXk6Bhcwju5S~FO1-iTssFRiih7eNb7DVc73h7TpqU4GM8lQn~85jm5J~A3bhZfSiQfSz7COkgroGXISfpkPp0sy~Fmt-IohOJNNxe5lhQHw1h2dxDVykE-7NOxNPTj5fvbkDqKgrk~G0589oyEQfZUbBHAAH~lgf6Ww__" alt="EduCrafter" title="EduCrafter"   height="85">
									<img src="https://s3-alpha-sig.figma.com/img/9dc9/71cb/96300ec3d2f0c50740b49be3e7e8e39b?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Yu-OfU0eoPm26IdnRlzMm6PS2lrf0V30dFFuMCkCHilFpHSw6T25fSHNuxEecYW25HaUKvy2ScHSHRr-7lv99iOqhSeO2qxC4mE7cdWokt3Bu-Zz-CpwAPjmajYpV8hkBTVRTpcFClEuB8Gp13CQHxKkCEoDT58yDslQIrCpE5YFW6qT~o1SBrPOYvVpfhluG6CHKWsWdEwbLavpEPO17mdg4JnxYEbDCxgOaJJ2-XYwFuNR~tqY1u-g6oAGKFtmK6kVv7HehJp1PQ2GBmgBVsqkh-c5ESnzaYHSJD6DRigy7tXHrwSDybTNMo5QUDjVbMshQwPXZg~NFE155Tw~zQ__"  alt="EduCrafter" title="EduCrafter"  height="85">
									
									<img src="https://s3-alpha-sig.figma.com/img/9088/39c2/520508ceadfec51cef36229ee09eb651?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=kxnCFGyTJH5MhEVb6UEsj~5wcfr3rleSxKzymERD2aHE9MWBfOQUYz-6NtnNY28NY7JlvrjdOzxh2MBoQ5fH1~QE6NSbWfwSfdk20Fsj884hJ0JauY5AKhNclQ7io9N8Mv0E~O1AbdJ57ZgIDAzqsvzN9g2I-rA1Fl8kkBNlCMQmXdXF4QE8~4dMYSr8q05X2s5SNFlrGEC-APlgBdzUsTA4kG2rv9FqiCWVI91ugDL4WyQRXkzuaFMvPwvlBnw0rcp45REr96zg-ZOhuqkWBlQtLMKFR8IzMyxW8qc8xZ~TGqdhzUVz5hWqXY08wQ90T0wyhljgKJZDEEfSttLSyA__" alt="EduCrafter" title="EduCrafter"  height="85">
									<img src="https://s3-alpha-sig.figma.com/img/2c7c/8596/40d27b41901f379a5e6fd9346c3bf0ab?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Z3dcr1MVoN3ASYjWabT5XT5U6c8sbuxjgK-bC4ocC2gdDr7Hz0FxCX6whgCutBLlYU1-97LB2E65y~b9xXTgV8cCB49ragxPniM-6OJKdOm5VcxUffmQVnLKpW3jOznQHN6J4iR1E0k59Q1c2EgWN1Pex~w2-GuyWqvIqHKjb7y4DuIqOvG6L4yEBDdN~Wfhx0O-eqQOlveDHKD7kCAlHulsSGlqcJurKkggTnL9Mq8HivKQaDyE-xEvZzB66AnsKGjxq1NNqMVWUxW9FDkHQ5JLkF2K3PH7aOCV6HPlGOrOPFKoLs8LyJ5h3s7b~zE~5sz8QUCWLvyhHTGk6KkjEQ__" alt="EduCrafter" title="EduCrafter"   height="85">
									
									<img src="https://s3-alpha-sig.figma.com/img/39e7/5019/b1bb0859e28d9159590c917fb2b01263?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=XCKHckUG5VFvTAW4tK0iY12ZYf3ZCevjMaSs8NnpVypsKEYSaZMqKL4iEL6OIJcVSyWo4TfwR9ZP1KNXCz1qc57m3uoncCdJ7Nw21KeTTrxRL0jlTP68AcJA7rSEmOkYdRQq3Xq3ZztNADzyhrr~Y6HZKe70wlVtIbv3b~495~pqqjU4n3nwL8o1X2r~3BN28ZzU-m7Vn~ANyITH~o84ITwpIsZwWsL1jrBv~gd-C5q5pymP-2ajh3eo2yBB4xNwCkUUfQckacjAldY~AWJ1mlIQBAV2oix52odtQfQXwyFz~gPZtmLiPh3pLi0lXj4nlJ2TKolbpyWrOVUsQnDcjg__" alt="EduCrafter" title="EduCrafter"  height="85">
									<img src="https://s3-alpha-sig.figma.com/img/d9b3/bd03/64ed0f04611d7b8a22f8a8ea0f8ffd30?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=ikbDZnSdS0aFBpUGsg8rTQMzjey4eNzV~4IOD1oad-wQ1dQ2EZEa~KCc~r2W4tv~4Z3YEZzBgZ9NLtjwYXTUKGuZoL1ht~lrXwrDo119sIY2II~KR5UBjPSywVqSAFHbO~5hCtpoLidGkDcOichQPCGObF97WKWC-mWK8BoGPpue78AHKOnyWmesJJNQU4kVQBTptSTFtT-ei1cO7kESWLO7rRYWuj0g3n-176cFwOU~p1v5jJ1QuZopmkgnzlT8KnWCLRA1LQkuqiFRfPTbblvF4VnDGsh3bjuRHyuAteiFAciBMCO-tCr~GpPs9Pag8d~5piWiseMTqCUusIzLdw__" alt="EduCrafter" title="EduCrafter" height="85">
									<img src="https://s3-alpha-sig.figma.com/img/6bd2/1709/801a96e48b3095a18ca5b3c9652ef974?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=IwdSlaCa~TgG2RH8RBfEvLXY1J~UfyvE3QkF-ApogJ1HV7Gbyh0F-Mavxq6xfHe1lLuEue2M6UCXDVLjRvksFQIFcb9Zz0FQFzVwT2QZg8NdY919thVuOwJeXb8ot~XUzmQnQMzKjXczDtBjF8kzI16ntiiqMG-ZUvFpZjrl7pWaGtXmRaaRlsRvdIOPCxj7wwbS3IulojhHtL3JJWFGOl2tXDqA7TE20U~wFxyLqs-LJmsES~c0JBOZJdMrppa0InJj1oGyk3xpNxzyH6WnmJwrRr0vuVcWC036P~-Fhcw~JjwEghQrmCDLlGRffq97GRQ5tUVLTlRw~AFBDrff2w__" alt="EduCrafter" title="EduCrafter" height="85">
									
									<img src="https://s3-alpha-sig.figma.com/img/83c4/64f8/a50c0b78df78d3c869ab941c5d9365d6?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=PHc4frDSEAfW5BGGyCUPW9zGD-vDBOcg8hPA-ffVAGvX6Ef65rQu6o7BIJuRuWy4CQFc~2Ze9sHSnldz1hrCKo~kvnnvwskqbK0FhlGfX4~jM-rJdMxPgF-u5Fsgy6guQoue5GnCn9X2Le2q75X~zlg5zQzXU3ytRFopeQYHZViFi8VC3iHJSUX~deuhp0bnKf5x855o9zOTamepFMwR3ng8PHkTMnSuueVF1AOP9Za0p92YF5KQqkmpL2XcMtFF147EajiDPH-NmnPcXHWXmJz47Q1qYnS1rjTZL4ZYsh3b9CNxgaSXL3l8IlsatLeNzA~z5NK6d~kndTfIz2K5gA__" alt="EduCrafter" title="EduCrafter" height="85">
									<img src="https://s3-alpha-sig.figma.com/img/953e/617b/94941f80921b28b2b2e4666bc44d45a2?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=P4lih0ZJHbmTyIoGG-vmXJWHMeFF4TgqmrY4XXmFNuT9GRcxbzGbSeVzOzJW7IfZItB0IXEJ0kDOy05F9BFcA4uwAfRKfkzGwELfmPXRQiOAXu3IwNUJT4kH4XS54zc9NKaXpPeXr0cLdZKbWGaXsKZDKfk-JEdjbjCzx1jsLJDS-LAFc2dfN1kmDerC9Bck5WvL9vWSKZxUvZymucckV-E74~ltPJIffWc7DjK0iASbrjRJs7FrlTnOincAxwiW7G-BKQ8Ow5QN4o8jpqeDkL4nrd2cb9OGo3LSwr8BW8TEuhW3R-slVm18dyLOfAcCHfMcc-7RMrhdHC~xY6Mi~w__" alt="EduCrafter" title="EduCrafter" height="85">
									<img src="https://s3-alpha-sig.figma.com/img/b752/3c79/bf687669ae2fd3104159806b67940be3?Expires=1713744000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=bTSYFmaeUuVeREkCwqxrUvXxdfbDTIxvTvGn7ny8cixfQlBXlHrpR0fliuDA0T1lgpC9Ne9gE5vORfyy0CX9Nee9hFdFMybZnG8NLXyxbEXQx7Nln5TPhE1mwAZ5q3jdBhRDvRQh-35-ZHwVNK3ZdgQ0ouoIVDmU7Y6sd15zSMqDSae1plCISUm3Q4V6sWNcHND-tVLkzEyZqdm2IUuN2uOeoz3lLMK2qrFJSDPyb2uGN5UlvKOO3qAcLxvLSzWWugnWf97CRMPDpBRpEBMLD2DRdjxUCMHSzft14eBoOR0Y82lAaNdlEYDHfm2fBpf1dxn6YPNZBTfDIJQnrZhfxA__" alt="EduCrafter" title="EduCrafter" height="85">
										
										
									
							        
							    </div>
							</div>	
					<!--	<picture id="marquee1">
							<source media="(min-width:768px)" srcset="{{ asset('images/universities-logo.jpg') }}">
							<img src="{{ asset('images/universities-logo.jpg') }}" class="img-fluid" alt="EduCrafter" title="EduCrafter" width="520" height="78">
						</picture> -->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="task-form">
						<h2>Whats Your Task?</h2>
						<form action="{{ route('order') }}" method="GET">
							<div class="row">
							<div class="col-md-6">
								<div class="form-group mb-3">
								<label for="subject" class="form-label">Subject</label>
								<select class="form-control form-select select2" id="subject_id" name="subject_id" aria-label="Subject" required >
								<option selected>Select subject</option>
								    @if(!empty($subjects)):
											@foreach ($subjects as $subject1)
												<option value="<?= $subject1['id'];?>"><?= $subject1['subject_name'];?></option>
											@endforeach 
										@endif
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-3">
									<label for="referencing_style_id" class="form-label">Referencing Style</label>
									<select class="form-control form-select select2" id="referencing_style_id" name="referencing_style_id" required>
									<option value="">Select Referencing Style</option>
										@if(!empty($referencings)):                                                    
												@foreach ($referencings as $referencing)
												<option value="<?= $referencing['id'];?>"><?= $referencing['style'];?></option>  
												@endforeach
										@endif
									</select>
								</div>
							</div>
							<div class="col-md-6">                                        
								<div class="form-group mb-3">
								<label for="taskType" class="form-label">Task type</label>
									<select class="form-control form-select select2" id="task_type_id" name="task_type_id" aria-label="taskType" required >
									<option value="" selected>Select task type</option>                                                @if(!empty($task_types)):                                                    
										@foreach ($task_types as $task_type)
										<option value="<?= $task_type['id'];?>"><?= $task_type['type_name'];?></option>
										@endforeach 
									@endif 
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-3">                                            
									<label for="wordCount" class="form-label">Word count</label>
									<div class="input-group mb-3">
										<button class="btn btn-outline-secondary btn-minus" onclick="minus(this)" type="button">-</button>
											<input type="text" class="form-control" placeholder="" aria-label="taskDate text with button addon" aria-describedby="button-addon1" value="200" id="no_of_words" name="no_of_words" required style="text-align: center;">
										<button class="btn btn-outline-secondary btn-plus" onclick="add(this)" type="button">+</button>
									</div>
								</div>
							</div>                                    
							<div class="col-md-6">
								<div class="form-group mb-3">                                            
									<label for="studylabel_id" class="form-label">Level of study</label>
									<select class="form-control form-select select2" id="studylabel_id" name="studylabel_id" required  >                                                
										<option selected value="">Select level of study</option>                                                @if(!empty($levels)):                                                    
											@foreach ($levels as $level)
												<option value="<?= $level['id'];?>"><?= $level['level_name'];?></option>
											@endforeach
										@endif
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mb-3">
									<label for="grade_id" class="form-label">Desired grades</label>
									<select class="form-control form-select select2" id="grade_id" name="grade_id" required>
									<option selected value="">Select grade</option>
									@if(!empty($grades)):
										@foreach ($grades as $grade)
										<option value="<?= $grade['id'];?>"><?= $grade['grade_name'];?></option>
										@endforeach
									@endif 
									</select>
								</div>
							</div>                                    
								
								
								<div class="col-12">
									<button type="submit" class="btn btn-primary w-100">Proceed To Order</button>
								</div>
							</div>
						</form>
					</div>
				</div>
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
							<img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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
							<img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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
							<img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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
							<img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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

<section class="mt-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="hiw-head">
						<h2 class="head-title" style="padding: 0px 15% 0px 15%;font-size: 24px;font-weight: 600;">Our expert essay writers can tackle any academic task you entrust them with. Here are some of the services we offer</h2>
						
					</div>
				</div>
			</div>
			<div class="row gy-4 mt-2">
				<div class="col-md-3">
					<div class="work-card" style="padding: 1rem 1rem 0;">
						
						<div class="card-body text-center" style="padding-top:0px;">
						    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3.54 18.5201C2.93 18.5201 2.36 18.31 1.95 17.92C1.43 17.43 1.18 16.69 1.27 15.89L1.64 12.65C1.71 12.04 2.08 11.23 2.51 10.79L10.72 2.10005C12.77 -0.0699511 14.91 -0.129951 17.08 1.92005C19.25 3.97005 19.31 6.11005 17.26 8.28005L9.05 16.97C8.63 17.42 7.85 17.84 7.24 17.9401L4.02 18.49C3.85 18.5 3.7 18.5201 3.54 18.5201ZM13.93 1.91005C13.16 1.91005 12.49 2.39005 11.81 3.11005L3.6 11.8101C3.4 12.0201 3.17 12.5201 3.13 12.8101L2.76 16.05C2.72 16.38 2.8 16.65 2.98 16.82C3.16 16.99 3.43 17.05 3.76 17L6.98 16.4501C7.27 16.4001 7.75 16.14 7.95 15.93L16.16 7.24005C17.4 5.92005 17.85 4.70005 16.04 3.00005C15.24 2.23005 14.55 1.91005 13.93 1.91005Z" fill="#3B71ED"/>
<path d="M15.34 9.95005C15.32 9.95005 15.29 9.95005 15.27 9.95005C12.15 9.64005 9.64 7.27005 9.16 4.17005C9.1 3.76005 9.38 3.38005 9.79 3.31005C10.2 3.25005 10.58 3.53005 10.65 3.94005C11.03 6.36005 12.99 8.22005 15.43 8.46005C15.84 8.50005 16.14 8.87005 16.1 9.28005C16.05 9.66005 15.72 9.95005 15.34 9.95005Z" fill="#3B71ED"/>
<path d="M19 21.75H1C0.59 21.75 0.25 21.41 0.25 21C0.25 20.59 0.59 20.25 1 20.25H19C19.41 20.25 19.75 20.59 19.75 21C19.75 21.41 19.41 21.75 19 21.75Z" fill="#3B71ED"/>
</svg>

							<a href="" class="btn btn-primary btn-sm" style="border-radius: 10px;padding: 15px;margin-top:10px;width: 100%;border-radius: 10px;">Paperwork</a>
							<a href="" class="btn btn-outline-primary  btn-sm" style="border-radius: 10px;margin-top:10px;padding: 15px;width: 100%;">Coursework/homework</a>
							<a href="" class="btn btn-outline-primary btn-sm" style="border-radius: 10px;margin-top:10px;margin-bottom:20px;padding: 15px;width: 100%;">Other assignments</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="work-card1" style="padding-top: 27%;">
					    <ul>
							<li>Essay</li>
							<li>Case study</li>
							<li>Report</li>
							<li>Research paper</li>
							<li>Presentation or  speech</li>
							<li>Annotated bibliography</li>
							<li>Article review</li>
						</ul>
						
					</div>
				</div>

				<div class="col-md-3">
					<div class="work-card1" style="padding-top: 27%;">
						
						<ul>
							<li>Literature review</li>
							<li>Business plan</li>
							<li>Research proposal</li>
							<li>Book / movie review</li>
							<li>Editing and proofreading</li>
							<li>Reflective writing</li>
							<li>Thesis / dissertation</li>
						</ul>
					</div>
				</div>
                <div class="col-md-3">
					<div class="work-card1" style="padding-top: 27%;">
						<ul>
							<li>Essay</li>
							<li>Case study</li>
							<li>Report</li>
							<li>Research paper</li>
							<li>Presentation or  speech</li>
							<li>Annotated bibliography</li>
							<li>Article review</li>
						</ul>
						
					</div>
				</div>

			</div>

			<div class="text-center mt-4 mb-4 ">
				<a class="btn btn-primary" href="#" role="link">Get started</a>
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
							<img src="{{ asset('images/search-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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
							<img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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
							<img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy" alt="EduCrafter" title="EduCrafter"
								width="90" height="90">
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
	
	<section class="mt-3 mb-3">
		<div class="container" style="height: 600px;overflow: auto;">
			<div class="row">
			    <div class="col-sm-6">
					<div class="card-body text-center" style="background:#F5FFF6;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
					<h3 style="font-size: 1.5rem;text-align: left;">What students want from essay writing services?</h3>
					<p style="text-align:justify">Essayhelp has been providing top-quality essay writing services for over 20 years now, taking care of our customers’ assignments and helping them succeed. So, why do clients keep choosing our services? We carefully handpick all our paper writers to ensure that each of them demonstrates the highest level of professionalism, expertise, and dedication. Such an approach allows us to deliver top-notch papers for everyone who turns to us with "write my essays" request. Our experienced essay help team specializes in crafting all types of papers, in all areas and of any complexity level. From a simple one-page essay to a thorough and complex dissertation - EssayPro has you covered. Thanks to our vast experience, we create papers tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you might face for you. When you turn to us for help, you will receive the best quality of service within the specified time!</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card-body text-center" style="background:#FFFFF5;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
					<h3 style="font-size: 1.5rem;text-align: left;">What students want from essay writing services?</h3>
					<p style="text-align:justify">Essayhelp has been providing top-quality essay writing services for over 20 years now, taking care of our customers’ assignments and helping them succeed. So, why do clients keep choosing our services? We carefully handpick all our paper writers to ensure that each of them demonstrates the highest level of professionalism, expertise, and dedication. Such an approach allows us to deliver top-notch papers for everyone who turns to us with "write my essays" request. Our experienced essay help team specializes in crafting all types of papers, in all areas and of any complexity level. From a simple one-page essay to a thorough and complex dissertation - EssayPro has you covered. Thanks to our vast experience, we create papers tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you might face for you. When you turn to us for help, you will receive the best quality of service within the specified time! Thanks to our vast experience, we create papers tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you might face for you. When you turn to us for help, you will receive the best quality of service within the specified time!</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card-body text-center" style="background: #F6F5FF;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
					<h3 style="font-size: 1.5rem;text-align: left;">What students want from essay writing services?</h3>
					<p style="text-align:justify">Essayhelp has been providing top-quality essay writing services for over 20 years now, taking care of our customers’ assignments and helping them succeed. So, why do clients keep choosing our services? We carefully handpick all our paper writers to ensure that each of them demonstrates the highest level of professionalism, expertise, and dedication. Such an approach allows us to deliver top-notch papers for everyone who turns to us with "write my essays" request. Our experienced essay help team specializes in crafting all types of papers, in all areas and of any complexity level. From a simple one-page essay to a thorough and complex dissertation - EssayPro has you covered. Thanks to our vast experience, we create papers tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you might face for you. When you turn to us for help, you will receive the best quality of service within the specified time!</p>
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
		
		</div>
	</section>		
	
	
	<script>
		$(function(){
			$('.select2').select2({  placeholder: 'Select an option'});
			add = function(obj) { 
				var count = $(obj).siblings('input').val();
				$(obj).siblings('input').val(parseInt(++count));
			}
			minus = function(obj) {
			var count = $(obj).siblings('input').val();
			if (count > 0) {
				$(obj).siblings('input').val(parseInt(count - 1));
				}
			}
		});
		</script>
@endsection