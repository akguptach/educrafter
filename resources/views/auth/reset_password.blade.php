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
                            <h2 class="title">Reset Password!</h2>
                           
                             <div id="invalid_login_data" class="error alert alert-danger" style="display:none">Invalid email / phone number or
                        password</div>
							<div id="success_register" class="success alert alert-success" style="display:none">Registered successfully, now you can login here</div>
                            <form action="{{route('login')}}" class="account__form" id="login_form" method="POST">
							    @csrf
                                <div class="form-grp">
                                    <label for="email">Validate Your Identity to Get Reset Password Email</label>
                                    <input id="email" type="text" placeholder="Enter your email / phone number" aria-label="Enter your email / phone number" aria-describedby="email-wrapping" name="email" onkeyup="error_form('invalid_login_data','success_register')">
                                </div>
                               
                                
                                <button type="submit" class="btn btn-two">Submit</button>
                            </form>
							<div class="account__divider">
                                <span>or</span>
                            </div>
							
                            
                            <div class="account__switch">
                                <p>Don't have an account?<a href="{{route('signup')}}">Sign Up</a></p>
								<p style="margin-top:20px;display:block;">Already Registered?<a href="{{route('login')}}">Login</a></p>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </section>
		@livewire('reset-password')

	   
    </main>

@endsection
    