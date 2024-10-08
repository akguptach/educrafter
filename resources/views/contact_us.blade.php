@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
    <main class="main-area fix" style="background:#FFF4E4;">
        <section class="contact-area section-py-120">
			<div class="container" >
				<div class="row">
					<div class="col-lg-8">
						<div class="contact-form-wrap">
							<h4 class="title">Enquiry Form</h4>
							
							<form id="contact-form" action="#"  method="POST"  name="contact_form" enctype="multipart/form-data">
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-grp">
										    <label>Your Name</label>
											<input type="text" placeholder="" required="" name="c_name" id="c_name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-grp">
										     <label>Your Email ID</label>
											<input name="c_email_id" id="c_email_id"  type="email" placeholder="" required="" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-grp">
										    <label>Your Mobile No.</label>
											<input type="text" placeholder="" required="" name="c_mobile_no" id="c_mobile_no" pattern="[0-9]{10,14}" min="10" mix="13">
                                            <input type="hidden" class="form-control" name="country_code" id="country_code">
                                            <span id="phone-error" style="color: red;"></span>
										</div>
									</div>

									
								
								<div class="form-grp">
									<textarea name="c_message" placeholder="Tell us more..." required=""></textarea>
								</div>
								<div>
									<button type="button" id="btn_checkout" class="btn btn-two btn-block btn-sm" style="background:#3B71ED;color:#fff;width:100%;text-align:center;">Submit</button>
								</div>
								</div>
								<p class="ajax-response mb-0"></p>
							</form>
							
							
						</div>
						<p style="font-size: 3em;padding: 10px 10px 0px 10px">Send us a message</p>
						<p style="font-size:18px;padding: 0px 10px 10px 10px;">Feel free to contact us with  questions, potential partnerships, or media inquires. We’ll be in touch as soon as we can.</p>
						
						
					</div>
					<div class="col-lg-4">
						<div class="contact-info-wrap">
							<ul class="list-wrap">
								<li>
									
									<div class="content">
										<h4 class="title" style="text-align: center;">Get In Touch</h4>
										<div style="padding: 10px;border-bottom: 1px solid #EAEAEA;float: left;width: 100%;"><span style="width: 50%;float: left;">Email</span><span style="float: right;width: 50%;text-align: right;">info@educrafter.co</span></div>
										<div style="padding: 10px;border-bottom: 1px solid #EAEAEA;float: left;width: 100%;"><span style="width: 50%;float: left;">Whatsapp</span><span style="float: right;width: 50%;text-align: right;">+44 (784) 541 1128</span> </div>
										<div style="padding: 10px;border-bottom: 1px solid #EAEAEA;float: left;width: 100%;margin-bottom: 20px;"><span style="width: 50%;float: left;">Phone</span><span style="width: 50%;float: right;text-align: right;"> +44 (784) 541 1128</span> </div>
									    <a href="https://wa.me/message/6BCQKSJORYUOL1" class="btn btn-four arrow-btn btn-block btn-sm" style="background:#10C379;color:#fff;margin: 20px 20px 0px 20px;border-radius: 40px;padding: 10px;">Whatsapp us</a>
									</div>
									
								</li>
								
								<li style="padding:0px;">
									
									<div class="content" style="padding: 20px;">
										<h4 class="title">Educrafter</h4>
										<div style="text-align:center;">WhatsApp Business Account</div>
										<div style="text-align:center;">
											<img src="https://educrafter.co/img/contect_us_qr.png?v=1" style="width:50%;">
										</div>
										<div style="text-align:center;">Scan this code to start a WhatsApp chat with Educrafter team directly</div>
										
									</div>
								</li>
							</ul>
						</div>
					</div>
			
				</div>
			   
			</div>
        </section>
	</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

$(document).ready(function() {
    // Initialize intl-tel-input plugin
    var input = document.querySelector("#c_mobile_no");
    var iti = window.intlTelInput(input, {
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js"
    });
    // Validate phone number and update country code
    $('#c_mobile_no').on('keyup change', function() {
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


    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("btn_checkout").addEventListener("click", function() {
            var name = document.getElementById("c_name").value;
            var email = document.getElementById("c_email_id").value;
            var mobile = document.getElementById("c_mobile_no").value;
            var service = document.getElementById("studylabel_id").value;
            var message = document.getElementById("c_message").value;

            // Simple validation - check if fields are empty
            if (name.trim() === "") {
                alert("Please enter your name.");
                return false;
            }
            if (email.trim() === "") {
                alert("Please enter your email.");
                return false;
            }
            if (mobile.trim() === "") {
                document.getElementById("mobileError").innerText = "Please enter your mobile number.";
                return false;
            }
            if (service.trim() === "") {
                document.getElementById("serviceError").innerText = "Please select a service.";
                return false;
            }
            if (message.trim() === "") {
                alert("Please write a message.");
                return false;
            }

            // Email validation
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return false;
            }
            // Mobile number validation
            var mobileRegex = /^[0-9]{10,14}$/;
            if (!mobileRegex.test(mobile)) {
                alert("Please enter a valid mobile number.");
                return false;
            }
           
            return false;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btn_checkout').click(function() {
            var formData = $('#contact-form').serialize();
            $.ajax({
                type: 'POST',
                url: "{{ route('contanct_save') }}",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.status === 2) {
                        Swal.fire({
                            title: "Success",
                            text: response.message,
                            icon: "success",
                            timer: 3000, // 3 seconds
                            timerProgressBar: true,
                            onClose: () => {
                                // Actions to be performed when the alert is closed
                            }
                        });
                       
                        document.getElementById("contact-form").reset();
                    } else {
                        Swal.fire({
                            title: "Error",
                            text: "Something went wrong!",
                            icon: "error",
                            timer: 3000, // 3 seconds
                            timerProgressBar: true,
                            onClose: () => {
                                // Actions to be performed when the alert is closed
                            }
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error occurred:', error);
                    // Handle error if needed
                }
            });
        });
    });
</script>
@endsection