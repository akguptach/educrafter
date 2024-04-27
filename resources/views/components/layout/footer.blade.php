<footer class="footer mt-auto py-8" style="background: #3B71ED;color:#fff;">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-6 col-md-4">
						<h2>Services</h2>
						<ul class="nav flex-column">
							<li class="nav-item">
								<a class="nav-link px-0" aria-current="page" href="{{ route('Services') }}">Pay For Essay</a>
							</li>
							<a class="nav-link px-0 {{ (request()->is('Services') ) ? 'active' : '' }}" href="{{ route('Services') }}">Do My Assignment</a>
							<a class="nav-link px-0 {{ (request()->is('Dissertation_service') ) ? 'active' : '' }}" href="{{ route('Dissertation_service') }}">Annotated Bibliography Writing </a>
							<a class="nav-link px-0 {{ (request()->is('Research_writing_service') ) ? 'active' : '' }}" href="{{ route('Research_writing_service') }}">Scholarship Essay Writing Service</a>
							<a class="nav-link px-0 {{ (request()->is('Term_writing_service') ) ? 'active' : '' }}" href="{{ route('Term_writing_service') }}">Essay Help</a>
							<a class="nav-link px-0 {{ (request()->is('Admission_writing_service') ) ? 'active' : '' }}" href="{{ route('Admission_writing_service') }}">Application Essay Writing Service</a>
							<a class="nav-link px-0 {{ (request()->is('Services') ) ? 'active' : '' }}" href="{{ route('Services') }}">College Papers For Sale</a>
							<a class="nav-link px-0 {{ (request()->is('Dissertation_service') ) ? 'active' : '' }}" href="{{ route('Dissertation_service') }}">Writing</a>
							<a class="nav-link px-0 {{ (request()->is('Research_writing_service') ) ? 'active' : '' }}" href="{{ route('Research_writing_service') }}">Buy An Assignment</a>
							<a class="nav-link px-0 {{ (request()->is('Term_writing_service') ) ? 'active' : '' }}" href="{{ route('Term_writing_service') }}">Assignment Help</a>
						</ul>
					</div>
					<div class="col-6 col-md-4">
						<h2 class="invisible">Services</h2>
						<ul class="nav flex-column">
							<a class="nav-link px-0{{ (request()->is('Edit_my_essay') ) ? 'active' : '' }}" href="{{ route('Edit_my_essay') }}">Write My Essay</a>
							<a class="nav-link px-0 {{ (request()->is('Coursework_writing_service') ) ? 'active' : '' }}" href="{{ route('Coursework_writing_service') }}">Essay Writers For Hire</a>
							<a class="nav-link px-0 {{ (request()->is('Physics_help') ) ? 'active' : '' }}" href="{{ route('Physics_help') }}">Write My Assignment</a>
							<a class="nav-link px-0 {{ (request()->is('Research_paper_online') ) ? 'active' : '' }}" href="{{ route('Research_paper_online') }}">Pay For Homework</a>
							<a class="nav-link px-0 {{ (request()->is('Research_writing_service') ) ? 'active' : '' }}" href="{{ route('Research_writing_service') }}">Research Paper Writing Service</a>
							<a class="nav-link px-0{{ (request()->is('Edit_my_essay') ) ? 'active' : '' }}" href="{{ route('Edit_my_essay') }}">Write My Dissertation</a>
							<a class="nav-link px-0 {{ (request()->is('Coursework_writing_service') ) ? 'active' : '' }}" href="{{ route('Coursework_writing_service') }}">Write Papers For Money</a>
							<a class="nav-link px-0 {{ (request()->is('Physics_help') ) ? 'active' : '' }}" href="{{ route('Physics_help') }}">Personal Statement Writing Service</a>
							<a class="nav-link px-0 {{ (request()->is('Research_paper_online') ) ? 'active' : '' }}" href="{{ route('Dissertation_service') }}">Dissertation Writing Services</a>
							<a class="nav-link px-0 {{ (request()->is('Dissertation_online') ) ? 'active' : '' }}" href="{{ route('Dissertation_online') }}">Thesis Help</a>
						</ul>
					</div>
					<div class="col-6 col-md-4">
						<h2 class="invisible">Services</h2>
						<ul class="nav flex-column">
							<a class="nav-link px-0{{ (request()->is('Edit_my_essay') ) ? 'active' : '' }}" href="{{ route('Edit_my_essay') }}">Essay Editing</a>
							<a class="nav-link px-0 {{ (request()->is('Coursework_writing_service') ) ? 'active' : '' }}" href="{{ route('Coursework_writing_service') }}">Coursework writing</a>
							<a class="nav-link px-0 {{ (request()->is('Physics_help') ) ? 'active' : '' }}" href="{{ route('Physics_help') }}">Physics help</a>
							<a class="nav-link px-0 {{ (request()->is('Research_paper_online') ) ? 'active' : '' }}" href="{{ route('Research_paper_online') }}">Buy Research Paper</a>
							<a class="nav-link px-0 {{ (request()->is('Dissertation_online') ) ? 'active' : '' }}" href="{{ route('Dissertation_online') }}">Buy Dissertation</a>
							<a class="nav-link px-0{{ (request()->is('Edit_my_essay') ) ? 'active' : '' }}" href="{{ route('Edit_my_essay') }}">Essay Editing</a>
							<a class="nav-link px-0 {{ (request()->is('Coursework_writing_service') ) ? 'active' : '' }}" href="{{ route('Coursework_writing_service') }}">Coursework writing</a>
							<a class="nav-link px-0 {{ (request()->is('Physics_help') ) ? 'active' : '' }}" href="{{ route('Physics_help') }}">Physics help</a>
							<a class="nav-link px-0 {{ (request()->is('Research_paper_online') ) ? 'active' : '' }}" href="{{ route('Research_paper_online') }}">Buy Research Paper</a>
							<a class="nav-link px-0 {{ (request()->is('Dissertation_online') ) ? 'active' : '' }}" href="{{ route('Dissertation_online') }}">Buy Dissertation</a>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-2">
				<h2>About us</h2>
				<ul class="nav flex-column ">
					<li class="nav-item">
						<a class="nav-link px-0" aria-current="page" href="#">How it works?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" href="#">Testimonials</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" href="{{ route('order') }}">FAQ</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" aria-current="page" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" href="#">Money Back Guarantee</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" href="{{ route('order') }}">Referral Program</a>
					</li>
				</ul>
				<h2>Tools</h2>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link px-0" aria-current="page" href="#">Free Essay Writing Tools</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" href="#">Plagiarism Checker</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0" href="{{ route('order') }}">Citation Generators</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md-2">
				<h2>Contact us</h2>
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link px-0">+1 (888) 337 5415</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0">+3 (595) 691 8356</a>
					</li>
					<li class="nav-item">
						<a class="nav-link px-0">Support@Essayhelp.co</a>
					</li>
				</ul>
				
			</div>
		</div>
		<hr class="opacity-25 my-md-5">
		<p class="cr-text text-center">Copyright EduCrafter, All rights reserved.</p>
	</div>
</footer>
<div class="whatsapp-block">
	<a href="#">
		<img src="{{ asset('images/whatsapp-icon.svg')}}" alt="EduCrafter" title="EduCrafter" width="52" height="25">
	</a>
	<p>Speak to us on Whatsapp</p>
</div>
<!-- Custom JS -->
<script src="{{ asset('js/main.min.js') }}"></script>
<script>
	$(document).ready(function() {
		$("#login_form").validate({
			// In 'rules' user have to specify all the             
			// constraints for respective fields            
			rules: {
				email: {
					required: true,
				},
				password: {
					required: true,
				},
			},
			submitHandler: function(form) {
				$('#invalid_login_data').hide();
				var formData = $(form).serialize();
				$.post("{{route('login')}}", formData)
					.done(function(response) {
						//window.location.href="{{route('order.transactions')}}";

						//alert('asas');						
						//$("#loginModal").modal("hide");						
						//$('#withoutlogin').hide();	
						//$('#withoutlogin').css({'display': 'none'});
						//$('#withoutlogin').attr('style', 'display: none !important');				
						//$('#withlogin').show();

						//$('#is_login').hide();
						//$("#withlogin ul").append("<li class='nav-item'><a class='nav-link' href='{{route('order.transactions')}}'>Hi,"+response.admin.first_name+" "+response.admin.last_name+"</a></li><li class='nav-item'><a class='nav-link' href='{{route('logout')}}'>Logout</a></li>");			
						//$('#ordersubmit_div').html('<button type="submit" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Checkout</button>');		
						//console.log('Success:', response);
						window.location.href = "{{route('home')}}"
					})
					.fail(function(xhr, status, error) {
						$('#invalid_login_data').show();
						console.error('Error:', error);
					})
					.always(function() {
						console.log('Request completed.');
					});
				return false;
			}
		});
	});

	function error_form(error_id, success_id = '') {
		$('#' + error_id).hide();
		if (success_id != '') {
			$('#' + success_id).hide();
		}
	}
</script>

</body>

</html>