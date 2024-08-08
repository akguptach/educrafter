@extends('layout.auth')
@section('content')
<!-- Include intl-tel-input plugin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
<main class="main-area fix" style="background:  #FFF4E4;">
	
	
	  <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
						    <div align="center" style="margin-bottom: 25px;"><a href="{{ route('home') }}"><img src="{{ asset('img/Logo.png')}}" alt="img" style="text-align: center;width: 38%;"></a></div>
                            <h2 class="title">Sign Up</h2>
                            <p>Create your account by filling up your details</p>
                            
                            <form action="{{route('signup')}}" class="account__form" id="signup_form" method="POST">
							@csrf
                                <input type="hidden" name="referral_code" value="{{@$referral_code}}">
							   
								<div class="row">
									<div class="col-md-6">
										<div class="form-grp">
											
											<input type="text" placeholder="First name" aria-label="Enter your first name" name="first_name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-grp">
											
											<input type="text" placeholder="Last name" aria-label="Enter your last name" name="last_name">
										</div>
									</div>
								</div>
                               
								<div class="form-grp">
                                    
                                    <input type="text" placeholder="Enter your email" aria-label="Enter your email" name="email">
                                </div>
								<div class="form-grp cuntry_code">
                                    
                                    <input  type="text" placeholder="Enter your phone number" aria-label="Enter your phone number" name="phone_number" id="phone_number" required>
                                <input type="hidden" class="form-control" name="country_code" id="country_code">
                                <span id="phone-error" style="color: red;"></span>
                                </div>
								<div class="form-grp">
                                    
                                    <input  type="password" placeholder="Enter your password" aria-label="Enter your password" aria-describedby="password-wrapping" name="password" id="password">
                                </div>
								<div class="form-grp">
                                    
                                    <input type="password" placeholder="Re-enter your password" aria-label="Re-enter your password" aria-describedby="repassword-wrapping" name="confirm_password">
                                </div>
                               
                                <button type="submit" class="btn btn-two">Sign Up</button>
                            </form>
							<div class="account__divider">
                                <span>or</span>
                            </div>
							<div class="account__social">
							    <div class="row">
								    <div class="col-4 col-sm-4">
										<a href="#" class="account__social-btn">
											<img src="{{ asset('img/g.png')}}" alt="img">
											
										</a>
									</div>
									<div class="col-4 col-sm-4">
										<a href="#" class="account__social-btn" style="background:  #3B71ED;border: 1px solid #3B71ED">
											<img src="{{ asset('img/facebook.png')}}" alt="img">
										   
										</a>
									</div>
									<div class="col-4 col-sm-4">
										<a href="#" class="account__social-btn" style="background: #05070F;border: 1px solid #000000;">
											<img src="{{ asset('img/a.png')}}" alt="img">
										</a>
								    </div>
								</div>
                            </div>
                            
                           
							<div class="account__switch">
                                <p>Already have an account?<a href="{{route('login')}}">Login</a></p>
								<p style="margin-top:20px;display:block;">By creating an account, you agree to the <a href="{{route('terms-and-conditions')}}">Terms and Conditions</a> and <a href="{{route('privacy-policy')}}">Privacy Policy</a></p>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>

	   
    </main>
<script>
    $(document).ready(function() {
        // Initialize intl-tel-input plugin
        var input = document.querySelector("#phone_number");
        var iti = window.intlTelInput(input, {
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js"
        });
        // Validate phone number and update country code
        $('#phone_number').on('keyup change', function() {
            var isValidNumber = iti.isValidNumber();
            var selectedCountryData = iti.getSelectedCountryData();
            if (!isValidNumber) {
                $('#phone-error').text('Invalid phone number');
            } else if (selectedCountryData == null) {
                $('#phone-error').text('Please select a country');
            } else {
                $('#phone-error').text('');
                var countryCode = selectedCountryData.dialCode;
                $('#country_code').val(countryCode);
            }
        });
    });

    $().ready(function() {
        $("#signup_form").validate({
            // In 'rules' user have to specify all the 
            // constraints for respective fields
            rules: {
                first_name: {
                    required: true,
                    minlength: 3
                },
                last_name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                country_code: {
                    required: true,
                },
                phone_number: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 5,
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
            },
            submitHandler: function(form) {
                $('#invalid_signup_data').hide();
                var formData = $(form).serialize();
                $.post("{{route('signup')}}", formData)
                    .done(function(response) {
                        //window.location.href="{{route('order.transactions')}}";
                        //window.location.href = "{{route('home')}}"



                        if (response.data.refer) {
                            window.location.href = response.data.refer;
                        } else {
                            window.location.href = '/';
                        }

                    })
                    .fail(function(xhr, status, error) {
                        $('#invalid_signup_data').show();
                        console.error('Error:', error);
                    })
                    .always(function() {
                        console.log('Request completed.');
                    });
                return false;
            }
        });
    });
</script>
@endsection