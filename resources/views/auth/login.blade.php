@extends('layout.auth')
@section('content')
 <!-- main-area -->
    <main class="main-area fix" style="background:  #FFF4E4;">
	
	
	  <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
						    <div align="center" style="margin-bottom: 25px;"><a href="{{ route('home') }}"><img src="{{ asset('img/Logo.png')}}" alt="img" style="text-align: center;width: 38%;"></a></div>
                            <h2 class="title">Welcome back!</h2>
                            <p>Login to your account by entering the following details</p>
                             <div id="invalid_login_data" class="error alert alert-danger" style="display:none">Invalid email / phone number or
                        password</div>
							<div id="success_register" class="success alert alert-success" style="display:none">Registered successfully, now you can
                        login here</div>
                            <form action="{{route('login')}}" class="account__form" id="login_form" method="POST">
							    @csrf
                                <div class="form-grp">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" placeholder="Enter your email / phone number" aria-label="Enter your email / phone number" aria-describedby="email-wrapping" name="email" onkeyup="error_form('invalid_login_data','success_register')">
                                </div>
                                <div class="form-grp">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" placeholder="Enter your password" aria-label="Enter your password" aria-describedby="password-wrapping" name="password" onkeyup="error_form('invalid_login_data','success_register')">
                                </div>
                                <div class="account__check">
                                    <div class="account__check-remember">
                                        <input type="checkbox" class="form-check-input" value="1" id="terms-check" name="remember_me">
                                        <label for="terms-check" class="form-check-label">Remember me</label>
                                    </div>
                                    <div class="account__check-forgot">
                                        <a href="{{route('reset.password.page')}}">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-two">Login</button>
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
											<img src="{{ asset('img/f.png')}}" alt="img">
										   
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
                                <p>Don't have an account?<a href="{{route('signup')}}">Sign Up</a></p>
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
                    if (response.refer) {
                        window.location.href = response.refer;
                    } else {
                        window.location.href = "{{route('home')}}"
                    }
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
@endsection
    