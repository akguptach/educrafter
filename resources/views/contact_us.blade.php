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
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<section class="order-sec">

    <div class="container">
        <form class="order-form" method="POST" id="contact_form" name="contact_form" enctype="multipart/form-data">
            <div class="row">
                @csrf
                <div class="col-md-8">
                    <!-- order summary form 1 -->
                    <div id="osForm1" class="order-summary">
                        <h2 class="border-0">
                            Enquery Form
                        </h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="c_name" class="form-label">Your Name</label>
                                    <div class="input-group">
                                        <input name="c_name" id="c_name" type="text" class="form-control text-start" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="c_email_id" class="form-label">Your Email Id</label>
                                    <div class="input-group">
                                        <input name="c_email_id" id="c_email_id" type="email" class="form-control text-start" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="c_mobile_no" class="form-label">Your Mobile No./Whatapp No.</label>
                                    <input name="c_mobile_no" id="c_mobile_no" type="text" class="form-control text-start" required pattern="[0-9]{10,14}" min="10" mix="13" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="studylabel_id" class="form-label">Service</label>
                                    <select class="form-select select2" id="studylabel_id" name="studylabel_id" aria-label="studylabel_id" required>
                                        <option value="">Select</option>
                                        <option value="SOP Writing">SOP Writing</option>
                                        <option value="Admission Essay">Admission Essay</option>
                                        <option value="CV or Resume writing">CV or Resume writing</option>
                                        <option value="Letter of recommendation">Letter of recommendation</option>
                                        <option value="Personal Statement">Personal Statement</option>
                                        <option value="Scholarship Essay Writing">Scholarship Essay Writing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="title-task-box">
                                    <textarea class="form-control" id="c_message" name="c_message" rows="3" placeholder="Write Us.." required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sticky-top">
                        <div class="order-summary os-theme">
                            <h2>GET IN TOUCH</h2>
                            <div class="row">
                                <div class="col-12">
                                    <p>Office Email Id info@educrafter.co</p>
                                </div>
                                <div class="col-12">
                                    <p>Office Whatapp No. +44 (784) 541 1128</p>
                                </div>
                                <div class="col-12">
                                    <p>Office Call No. +44 (784) 541 1128</p>
                                </div>
                            </div>
                        </div>
                        <div class="whn-block">
                            <h3>What happens next?</h3>
                            <p>We will assign a tutor who's an expert in your subject. We'll keep you updated on the progress.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
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
            var formData = $('#contact_form').serialize();
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
                       
                        document.getElementById("contact_form").reset();
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