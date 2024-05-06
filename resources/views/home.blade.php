@extends('layout.app')
@section('content')
<style>
.select2-container .select2-selection--single {
    height: 52px !important;
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #868685;
    border-radius: 30px;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 52px;
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 48px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
}

.select2-container .select2-selection--single .select2-selection__rendered {
    display: block;
    padding-left: 20px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

#marquee1 {
    overflow-x: marquee-line;
    marquee-style: scroll;
    marquee-direction: backward;
}

.task-form .btn {
    padding: .45rem 1rem;
}
</style>
<div class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="masthead-left">
                    <h1>The <br>student's key <br>to <span>success <br>since 2011</span></h1>
                    <p>Get help with anything from a short essay to exam notes, proofreading and editing or your full
                        dissertation.</p>
                    <a href="order.html" class="btn btn-primary mb-4 w-100 d-md-none">Order Now</a>
                    <p class="tu-text">Our writers are graduates of <span>top universities.</span></p>
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
                        @php($orderRequestData = session('orderRequestData'))

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-control form-select select2" id="subject_id" name="subject_id"
                                        aria-label="Subject" required>
                                        <option selected>Select subject </option>
                                        @if(!empty($subjects)):
                                        @foreach ($subjects as $subject1)
                                        <option value="<?= $subject1['id']; ?>"
                                            @if(isset($orderRequestData['subject_id']) &&
                                            $orderRequestData['subject_id']==$subject1['id']) selected="selected"
                                            @endif><?= $subject1['subject_name']; ?>
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="referencing_style_id" class="form-label">Referencing Style</label>
                                    <select class="form-control form-select select2" id="referencing_style_id"
                                        name="referencing_style_id" required>
                                        <option value="">Select Referencing Style</option>
                                        @if(!empty($referencings)):
                                        @foreach ($referencings as $referencing)
                                        <option value="<?= $referencing['id']; ?>"
                                            @if(isset($orderRequestData['referencing_style_id']) &&
                                            $orderRequestData['referencing_style_id']==$referencing['id'])
                                            selected="selected" @endif><?= $referencing['style']; ?>
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="taskType" class="form-label">Task type</label>
                                    <select class="form-control form-select select2" id="task_type_id"
                                        name="task_type_id" aria-label="taskType" required>
                                        <option value="" selected>Select task type</option> @if(!empty($task_types)):
                                        @foreach ($task_types as $task_type)
                                        <option value="<?= $task_type['id']; ?>"
                                            @if(isset($orderRequestData['task_type_id']) &&
                                            $orderRequestData['task_type_id']==$task_type['id']) selected="selected"
                                            @endif><?= $task_type['type_name']; ?>
                                        </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="wordCount" class="form-label">Word count</label>
                                    <div class="input-group mb-3">
                                        <button class="btn btn-outline-secondary btn-minus" onclick="minus(this)"
                                            type="button">-</button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="taskDate text with button addon"
                                            aria-describedby="button-addon1"
                                            value="{{@$orderRequestData['no_of_words'] ??  200}}" id="no_of_words"
                                            name="no_of_words" required style="text-align: center;">
                                        <button class="btn btn-outline-secondary btn-plus" onclick="add(this)"
                                            type="button">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="studylabel_id" class="form-label">Level of study</label>
                                    <select class="form-control form-select select2" id="studylabel_id"
                                        name="studylabel_id" required>
                                        <option selected value="">Select level of study</option> @if(!empty($levels)):
                                        @foreach ($levels as $level)
                                        <option value="<?= $level['id']; ?>"
                                            @if(isset($orderRequestData['studylabel_id']) &&
                                            $orderRequestData['studylabel_id']==$level['id']) selected="selected"
                                            @endif><?= $level['level_name']; ?></option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="grade_id" class="form-label">Desired grades</label>
                                    <select class="form-control form-select select2" id="grade_id" name="grade_id"
                                        required>
                                        <option selected value="">Select grade</option>
                                        @if(!empty($grades)):
                                        @foreach ($grades as $grade)
                                        <option value="<?= $grade['id']; ?>" @if(isset($orderRequestData['grade_id']) &&
                                            $orderRequestData['grade_id']==$grade['id']) selected="selected" @endif>
                                            <?= $grade['grade_name']; ?></option>
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
                                <img src="{{ asset('images/trustpilot-logo.svg') }}" class="img-fluid" loading="lazy"
                                    alt="EduCrafter" title="EduCrafter" width="150" height="30">
                            </picture>
                            <p class="review-rating"><span>4.6</span> 257 Reviews</p>
                        </div>
                        <div class="review-logo">
                            <picture>
                                <source media="(min-width:768px)" srcset="{{ asset('images/sitejabber-logo.jpg') }}">
                                <img src="{{ asset('images/sitejabber-logo.jpg') }}" class="img-fluid" loading="lazy"
                                    alt="EduCrafter" title="EduCrafter" width="150" height="30">
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
            <div class="col-md-4">
                <div class="work-card h-100">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                        <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
                    </picture>
                    <div class="card-body text-center">
                        <h3 class="card-title">On time delivery</h3>
                        <p>Our writers make sure that all orders are submitted prior to the deadline so that you can
                            proofread your paper before handing it over to your tutor.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-card h-100">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                        <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
                    </picture>
                    <div class="card-body text-center">
                        <h3 class="card-title">Verified Tutors</h3>
                        <p>All tutor profiles are meticulously checked: diplomas, identity and background. ony profiles
                            demostrating academic excellence are retained. Also, all reviews visible on tutor accounts
                            are purely authentic.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-card h-100">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                        <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
                    </picture>
                    <div class="card-body text-center">
                        <h3 class="card-title">100% plagiarism free!</h3>
                        <p>All EduCrafter papers are scanned for duplicate content and are guaranteed plagiarism free.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-card h-100">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                        <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
                    </picture>
                    <div class="card-body text-center">
                        <h3 class="card-title">World's top essay provider</h3>
                        <p>We are widely recognised as being the best provider of student writing services in the World
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-card h-100">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/rocket-icon.svg') }}">
                        <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
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
                        <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
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
                    <p>With EduCrafter, it has never been easier to get the grades you've always wanted. Our world-class
                        academics are ready to help.</p>
                    <a class="btn btn-primary d-none d-md-inline-flex" href="#" role="link">Get started</a>
                </div>
            </div>
            {{--<div class="col-md-6">
				<div class="testimonial-slider">
					<div class="row">
						@foreach ($pageRating->take(4) as $rating)
						<div class="col-md-6 mb-2">
							<div class="card student-review-card p-2">
								<div class="d-flex sr-block ">
									<div class="student-photo">
										<img src="{{ $rating->user_image }}" class="img-fluid" loading="lazy" alt="Student Photo" title="Student
            Photo" width="65" height="65">
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
        <div class="student-name"><b>{{ $rating->address}}.</b><span> {{ $newDate2 }}</span></div>
    </div>
    </div>
    </div>
    @endforeach
    </div>
    </div>
    <a class="btn btn-primary w-100 mt-4 d-md-none" href="#" role="link">Get started</a>
    </div>--}}
    <div class="col-md-6">
        <div class="testimonial-slider">
            <div class="row">

                <div class="col-md-6">
                    <div class="card student-reveiw-card">
                        <div class="d-flex sr-block">
                            <div class="student-photo">
                                <picture>
                                    <source media="(min-width:768px)" srcset="{{ asset('images/stundent-1.png') }}">
                                    <img src="{{ asset('images/stundent-1.png') }}" class="img-fluid" loading="lazy"
                                        alt="EduCrafter" title="EduCrafter" width="65" height="65">
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
                            <p class="card-text">My academic superhero arrived in the form of affordable, easy-to-use
                                support. Courses conquered, stress conquered.</p>
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
                                    <img src="{{ asset('images/stundent-1.png') }}" class="img-fluid" loading="lazy"
                                        alt="EduCrafter" title="EduCrafter" width="65" height="65">
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
                            <p class="card-text">My academic superhero arrived in the form of affordable, easy-to-use
                                support. Courses conquered, stress conquered.</p>
                            <div class="student-name">John De marli. <span>Sep 01, 2023</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card student-reveiw-card">
                        <picture>
                            <img src="https://educrafter.co/images/youtube.png" class="img-fluid card-img"
                                alt="EduCrafter" title="EduCrafter" loading="lazy">
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
                    <h2 class="head-title" style="padding: 0px 15% 0px 15%;font-size: 24px;font-weight: 600;">Our expert
                        essay writers can tackle any academic task you entrust them with. Here are some of the services
                        we offer</h2>
                </div>
            </div>
        </div>
        <div class="row gy-4 mt-2">
            <div class="row gy-4 mt-2">
                <div class="col-md-3">
                    <div class="work-card" style="padding: 1rem 1rem 0;">
                        <div class="card-body text-center" style="padding-top:0px;">
                            <p style="text-align:center;"><img src="{{ asset('images/pencil.svg') }}"
                                    style="margin-top: 10px;margin-bottom: 10px;height: 25px;"></p>
                            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="paperwork-tab" data-bs-toggle="tab" href="#paperwork"
                                        role="tab" aria-controls="paperwork" aria-selected="true"
                                        style="padding: 15px;">Paperwork</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="coursework-tab" data-bs-toggle="tab" href="#coursework"
                                        role="tab" aria-controls="coursework" aria-selected="false"
                                        style="padding: 15px;border: 1px solid #0d6efd;margin-top: 10px;">Coursework/homework</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="other-assignments-tab" data-bs-toggle="tab"
                                        href="#other-assignments" role="tab" aria-controls="other-assignments"
                                        aria-selected="false"
                                        style="padding: 15px;border: 1px solid #0d6efd;margin-top: 10px;margin-bottom: 20px;">Other
                                        assignments</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="myTabContent" style="padding: 4% 5% 5% 5%;">
                        <div class="tab-pane fade show active" id="paperwork" role="tabpanel"
                            aria-labelledby="paperwork-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li style="padding: 5px 0px 5px 0px">Essay</li>
                                            <li style="padding: 5px 0px 5px 0px">Case study</li>
                                            <li style="padding: 5px 0px 5px 0px">Report</li>
                                            <li style="padding: 5px 0px 5px 0px">Research paper</li>
                                            <li style="padding: 5px 0px 5px 0px">Presentation or speech</li>
                                            <li style="padding: 5px 0px 5px 0px">Research paper</li>
                                            <li style="padding: 5px 0px 5px 0px">Presentation or speech</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li style="padding: 5px 0px 5px 0px">Essay</li>
                                            <li style="padding: 5px 0px 5px 0px">Case study</li>
                                            <li style="padding: 5px 0px 5px 0px">Report</li>
                                            <li style="padding: 5px 0px 5px 0px">Research paper</li>
                                            <li style="padding: 5px 0px 5px 0px">Presentation or speech</li>
                                            <li style="padding: 5px 0px 5px 0px">Research paper</li>
                                            <li style="padding: 5px 0px 5px 0px">Presentation or speech</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li style="padding: 5px 0px 5px 0px">Essay</li>
                                            <li style="padding: 5px 0px 5px 0px">Case study</li>
                                            <li style="padding: 5px 0px 5px 0px">Report</li>
                                            <li style="padding: 5px 0px 5px 0px">Research paper</li>
                                            <li style="padding: 5px 0px 5px 0px">Presentation or speech</li>
                                            <li style="padding: 5px 0px 5px 0px">Research paper</li>
                                            <li style="padding: 5px 0px 5px 0px">Presentation or speech</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="coursework" role="tabpanel" aria-labelledby="coursework-tab">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li>Literature review</li>
                                            <li>Business plan</li>
                                            <li>Research proposal</li>
                                            <li>Book / movie review</li>
                                            <li>Editing and proofreading</li>
                                            <li>Reflective writing</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li>Literature review</li>
                                            <li>Business plan</li>
                                            <li>Research proposal</li>
                                            <li>Book / movie review</li>
                                            <li>Editing and proofreading</li>
                                            <li>Reflective writing</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li>Literature review</li>
                                            <li>Business plan</li>
                                            <li>Research proposal</li>
                                            <li>Book / movie review</li>
                                            <li>Editing and proofreading</li>
                                            <li>Reflective writing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="other-assignments" role="tabpanel"
                            aria-labelledby="other-assignments-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li>Research paper</li>
                                            <li>Presentation or speech</li>
                                            <li>Annotated bibliography</li>
                                            <li>Article review</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li>Research paper</li>
                                            <li>Presentation or speech</li>
                                            <li>Annotated bibliography</li>
                                            <li>Article review</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="work-card1">
                                        <ul>
                                            <li>Research paper</li>
                                            <li>Presentation or speech</li>
                                            <li>Annotated bibliography</li>
                                            <li>Article review</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h2 style="color:#303B4F;">All assignments can be done on time</h2>
                        <p style="color:#303B4F;">Fast and professional help from certified <br> experts on EduCrafter
                        </p>
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
                        <img src="{{ asset('images/search-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
                    </picture>
                    <div class="card-body text-center">
                        <h3 class="card-title">Fill-in the details</h3>
                        <p>Provide all the necessary details. Once you complete the order form and pay to write your
                            essay, we will immediately start working on it.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="work-card h-100">
                    <picture>
                        <source media="(min-width:768px)" srcset="{{ asset('images/setting-icon.svg') }}">
                        <img src="{{ asset('images/setting-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
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
                        <img src="{{ asset('images/rocket-icon.svg') }}" class="img-fluid" loading="lazy"
                            alt="EduCrafter" title="EduCrafter" width="90" height="90">
                    </picture>
                    <div class="card-body text-center">
                        <h3 class="card-title">Writing magic happens</h3>
                        <p>Our experts are working tirelessly to write your paper. Then it will go through our quality
                            assurance team.</p>
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


                                        <img src="{{ asset('images/top_universities/10.png') }}" class="card-img-top"
                                            alt="EduCrafter" title="Essay Hel" loading="lazy" style="height: 55px;">


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
                <div class="card-body text-center"
                    style="background:#F5FFF6;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
                    <h3 style="font-size: 1.5rem;text-align: left;">What students want from essay writing services?</h3>
                    <p style="text-align:justify">Essayhelp has been providing top-quality essay writing services for
                        over 20 years now, taking care of our customers’ assignments and helping them succeed. So, why
                        do clients keep choosing our services? We carefully handpick all our paper writers to ensure
                        that each of them demonstrates the highest level of professionalism, expertise, and dedication.
                        Such an approach allows us to deliver top-notch papers for everyone who turns to us with "write
                        my essays" request. Our experienced essay help team specializes in crafting all types of papers,
                        in all areas and of any complexity level. From a simple one-page essay to a thorough and complex
                        dissertation - EssayPro has you covered. Thanks to our vast experience, we create papers
                        tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you
                        might face for you. When you turn to us for help, you will receive the best quality of service
                        within the specified time!</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body text-center"
                    style="background:#FFFFF5;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
                    <h3 style="font-size: 1.5rem;text-align: left;">What students want from essay writing services?</h3>
                    <p style="text-align:justify">Essayhelp has been providing top-quality essay writing services for
                        over 20 years now, taking care of our customers’ assignments and helping them succeed. So, why
                        do clients keep choosing our services? We carefully handpick all our paper writers to ensure
                        that each of them demonstrates the highest level of professionalism, expertise, and dedication.
                        Such an approach allows us to deliver top-notch papers for everyone who turns to us with "write
                        my essays" request. Our experienced essay help team specializes in crafting all types of papers,
                        in all areas and of any complexity level. From a simple one-page essay to a thorough and complex
                        dissertation - EssayPro has you covered. Thanks to our vast experience, we create papers
                        tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you
                        might face for you. When you turn to us for help, you will receive the best quality of service
                        within the specified time! Thanks to our vast experience, we create papers tailored to every
                        customer’s unique needs. And we’re ready to handle any learning challenges you might face for
                        you. When you turn to us for help, you will receive the best quality of service within the
                        specified time!</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card-body text-center"
                    style="background: #F6F5FF;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
                    <h3 style="font-size: 1.5rem;text-align: left;">What students want from essay writing services?</h3>
                    <p style="text-align:justify">Essayhelp has been providing top-quality essay writing services for
                        over 20 years now, taking care of our customers’ assignments and helping them succeed. So, why
                        do clients keep choosing our services? We carefully handpick all our paper writers to ensure
                        that each of them demonstrates the highest level of professionalism, expertise, and dedication.
                        Such an approach allows us to deliver top-notch papers for everyone who turns to us with "write
                        my essays" request. Our experienced essay help team specializes in crafting all types of papers,
                        in all areas and of any complexity level. From a simple one-page essay to a thorough and complex
                        dissertation - EssayPro has you covered. Thanks to our vast experience, we create papers
                        tailored to every customer’s unique needs. And we’re ready to handle any learning challenges you
                        might face for you. When you turn to us for help, you will receive the best quality of service
                        within the specified time!</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{--<section class="mt-3 mb-3">
        <div class="container" style="overflow: auto;">
            <div class="row">
                @foreach ($ServiceSpecifications as $rating)
                <div class="col-sm-6">
                    <div class="card-body text-center" style="background:#F5FFF6;border-radius: 24px;padding:29px 15px 29px 15px;margin-bottom: 10px;">
                        <h3 style="font-size: 1.5rem;text-align: left;">{{$rating->title}}</h3>
<p style="text-align:justify">{{$rating->description}}</p>
</div>
</div>
@endforeach
</div>
</div>
</section>--}}
{{--<x-layout.faq />--}}
<section class="faq-sec">
    <div class="container">
        <div class="faq-box">
            <div class="hiw-head">
                <h2 class="head-title">Frequently Asked <span>Questions</span></h2>
            </div>
            <div class="accordion row" id="accordionExample">
                @foreach ($faq_page as $faq)
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
                        <a class="btn btn-primary" href="#" role="button"
                            style="color: #3b71ed;background: #fff;border: 1px solid #fff;">Get started</a>
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
                        <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect Essay
                        </h3>
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
                        <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect Essay
                        </h3>
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
                        <h3 class="card-title">How To Structure An Argumentative Essay: Hints To Create Perfect Essay
                        </h3>
                        <p>Read more -></p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<script>
$(function() {
    $('.select2').select2({
        placeholder: 'Select an option'
    });
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