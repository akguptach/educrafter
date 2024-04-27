@extends('layout.app')
@section('content')
<main>
    <section class="common-sec">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-6 mx-auto">
					<div class="order-summary os-theme my-5">
					    <h2>Change Password</h2>
						<form action="" class="form-common" id="signup_form" method="POST">
							<input type="hidden" name="_token" value="" autocomplete="off">
							<div class="row gy-3 gx-2">
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="Old Password" name="first_name">
								</div>
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="New Password" name="last_name">
								</div>
								<div class="col-md-12">
									<input type="password" class="form-control" placeholder="Confirm Password" name="last_name">
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