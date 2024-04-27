@extends('layout.app')
@section('content')
<style>
.form-control {
    font-size: 1rem;
    line-height: 2.5;
}
</style>
<main>
    <section class="common-sec">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-6 mx-auto">
					<div class="order-summary os-theme my-5">
					    <h2>My Profile</h2>
						<form action="" class="" id="signup_form" method="POST">
							<input type="hidden" name="_token" value="" autocomplete="off">
							<div class="row gy-3 gx-2">
								<div class="col-md-12">
									<input type="text" class="form-control form-control-lg" placeholder="Enter your first name" name="first_name">
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control form-control-lg" placeholder="Enter your last name" name="last_name">
								</div>
								<div class="col-md-12">
									<input type="email" class="form-control form-control-lg" placeholder="Enter your email" name="email">
								</div>
								<div class="col-md-12">                          
									<input type="tel" class="form-control form-control-lg" placeholder="Enter your phone number" name="phone_number" >
								</div>
								<div class="col-md-12">                          
									<input type="file" class="form-control form-control-lg" name="profile_pic" >
								</div>
								
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary w-100">Update</button>
								</div>
							</div>
						</form>
					 </div>
				</div>
			</div>
		</div>
	</section>
</main>
@endsection