@extends('layout.auth')
@section('content')
<!-- Signup Pop-up -->
<?php

use App\Models\CountriesModel as Countries;

$ip = request()->ip();
$response = Http::get("https://ipapi.co/" . $ip . "/json/");
$data = $response->json();
// Retrieve the country code from the response
$countryCode = isset($data['country_code_iso3']) ? $data['country_code_iso3'] : 'IND';
$countries = Countries::all();
?>
<style>
    .masthead {
        padding-top: 0px !important;
    }

    body {
        background: hsla(241, 90%, 70%, 1);

        background: linear-gradient(135deg, hsla(241, 90%, 70%, 1) 0%, hsla(186, 90%, 62%, 1) 100%);

        background: -moz-linear-gradient(135deg, hsla(241, 90%, 70%, 1) 0%, hsla(186, 90%, 62%, 1) 100%);

        background: -webkit-linear-gradient(135deg, hsla(241, 90%, 70%, 1) 0%, hsla(186, 90%, 62%, 1) 100%);

        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#6F6DF7", endColorstr="#45E3F5", GradientType=1);
    }
    .iti {
        width: 100%;
    }

    .loginform {
        padding: 25px;
        margin: 25px;
        background-color: white;
        border-radius: 15px;
    }
</style>
<!-- Include jQuery -->

<!-- Include intl-tel-input plugin -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>


<div class="row masthead">
    <div class="offset-md-4">
    </div>
    <div class="col-md-4 loginform">
        <div class="signup-form">
            <div class=" px-2" style="text-align:center;">
                <a class="navbar-brand mx-auto mx-md-start" href="https://educrafter.co">
                    <picture>
                        <svg width="155" height="23" viewBox="0 0 159 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2371_12428)">
                                <path d="M1 10.7369C1 6.32298 1 4.11601 2.28702 2.67908C2.41042 2.5413 2.5413 2.41042 2.67908 2.28702C4.11601 1 6.32298 1 10.7369 1H12.2631C16.677 1 18.884 1 20.3209 2.28702C20.4587 2.41042 20.5896 2.5413 20.713 2.67908C22 4.11601 22 6.32298 22 10.7369V12.2631C22 16.677 22 18.884 20.713 20.3209C20.5896 20.4587 20.4587 20.5896 20.3209 20.713C18.884 22 16.677 22 12.2631 22H1V10.7369Z" fill="white"></path>
                                <circle cx="2.16934" cy="21.0851" r="6.71622" fill="black"></circle>
                                <rect y="0.275192" width="10.2882" height="21.1485" rx="5.14408" transform="matrix(0.731217 0.682145 -0.731217 0.682145 14.3731 -11.6503)" fill="#3B71ED" stroke="black" stroke-width="0.403422"></rect>
                                <rect y="0.275192" width="10.2882" height="21.1485" rx="5.14408" transform="matrix(0.731217 0.682145 -0.731217 0.682145 21.5372 -4.65935)" fill="#EE674E" stroke="black" stroke-width="0.403422"></rect>
                                <rect y="0.275192" width="10.2882" height="21.1485" rx="5.14408" transform="matrix(0.731217 0.682145 -0.731217 0.682145 28.6387 2.58234)" fill="#A888CE" stroke="black" stroke-width="0.403422"></rect>
                            </g>
                            <path d="M0.798289 22V22.2017H1H12.2631H12.2781C14.4724 22.2017 16.1379 22.2017 17.4335 22.0393C18.7371 21.8758 19.6942 21.5451 20.4555 20.8632C20.5988 20.7349 20.7349 20.5988 20.8632 20.4555C21.5451 19.6942 21.8758 18.7371 22.0393 17.4335C22.2017 16.1379 22.2017 14.4724 22.2017 12.2781V12.2631V10.7369V10.7219C22.2017 8.52764 22.2017 6.86214 22.0393 5.56653C21.8758 4.26295 21.5451 3.30584 20.8632 2.5445C20.7349 2.40122 20.5988 2.2651 20.4555 2.13677C19.6942 1.45485 18.7371 1.12418 17.4335 0.960734C16.1379 0.798288 14.4724 0.798288 12.2781 0.798289H12.2631H10.7369H10.7219C8.52764 0.798288 6.86214 0.798288 5.56653 0.960734C4.26295 1.12418 3.30585 1.45485 2.5445 2.13677C2.40122 2.2651 2.2651 2.40122 2.13677 2.5445C1.45485 3.30585 1.12418 4.26295 0.960734 5.56653C0.798288 6.86214 0.798288 8.52764 0.798289 10.7219V10.7369V22Z" stroke="black" stroke-width="0.403422"></path>
                            <path d="M31.735 22.2104C30.4886 22.2104 29.754 21.4495 29.754 20.1376V5.33931C29.754 4.04052 30.4886 3.27961 31.735 3.27961H40.7347C41.8235 3.27961 42.532 3.89621 42.532 4.9195C42.532 5.94279 41.8104 6.55938 40.7347 6.55938H33.7159V11.1117H40.3936C41.3775 11.1117 42.0466 11.6889 42.0466 12.6335C42.0466 13.5781 41.3906 14.1553 40.3936 14.1553H33.7159V18.9307H40.7347C41.8104 18.9307 42.532 19.5473 42.532 20.5706C42.532 21.5939 41.8235 22.2104 40.7347 22.2104H31.735ZM49.5118 22.4335C45.9959 22.4335 43.7788 19.6522 43.7788 15.1524C43.7788 10.6919 46.009 7.92377 49.5381 7.92377C51.5715 7.92377 53.1458 8.99953 53.828 10.5607H53.9067V4.99821C53.9067 3.6863 54.707 2.99099 55.8221 2.99099C56.9504 2.99099 57.7375 3.6863 57.7375 4.99821V20.5443C57.7375 21.8169 56.9504 22.4859 55.8352 22.4859C54.7332 22.4859 53.9067 21.83 53.9067 20.5443V19.7309H53.8411C53.2245 21.3052 51.6765 22.4335 49.5118 22.4335ZM50.8106 19.3505C52.7129 19.3505 53.933 17.75 53.933 15.1786C53.933 12.6204 52.7129 10.9936 50.8106 10.9936C48.8821 10.9936 47.7014 12.6073 47.7014 15.1786C47.7014 17.7631 48.8821 19.3505 50.8106 19.3505ZM64.7567 22.4728C61.7131 22.4728 59.6928 20.4918 59.6928 17.2121V9.86539C59.6928 8.55348 60.493 7.85817 61.6082 7.85817C62.7364 7.85817 63.5235 8.55348 63.5235 9.86539V16.4118C63.5235 18.2878 64.455 19.2849 66.1474 19.2849C67.8528 19.2849 68.9155 18.0648 68.9155 16.2019V9.86539C68.9155 8.55348 69.7158 7.85817 70.8309 7.85817C71.9591 7.85817 72.7463 8.55348 72.7463 9.86539V20.5443C72.7463 21.8169 71.9985 22.4859 70.8965 22.4859C69.7945 22.4859 69.0467 21.8169 69.0467 20.5443V19.6785H68.968C68.2727 21.4495 66.882 22.4728 64.7567 22.4728Z" fill="#3B71ED"></path>
                            <path d="M83.4651 22.5253C77.8501 22.5253 74.4392 18.852 74.4392 12.7385C74.4392 6.6381 77.9157 2.95163 83.3601 2.95163C86.9023 2.95163 89.6442 4.52592 90.943 7.25469C91.2053 7.75322 91.3365 8.26486 91.3365 8.73715C91.3365 9.77356 90.6412 10.4426 89.5917 10.4426C88.6996 10.4426 88.1355 10.0491 87.7025 9.13072C86.8367 7.20222 85.2886 6.23141 83.3995 6.23141C80.4083 6.23141 78.4798 8.73715 78.4798 12.7254C78.4798 16.766 80.3821 19.2587 83.4126 19.2587C85.4067 19.2587 86.9023 18.3534 87.755 16.4512C88.1617 15.5591 88.6602 15.2049 89.4999 15.2049C90.615 15.2049 91.3496 15.9133 91.3496 16.9628C91.3496 17.4089 91.2447 17.8287 91.0479 18.2878C89.8672 20.9117 87.0466 22.5253 83.4651 22.5253ZM95.2334 22.4859C94.0789 22.4859 93.318 21.7644 93.318 20.4918V9.78668C93.318 8.5666 94.0658 7.85817 95.1678 7.85817C96.2436 7.85817 96.9783 8.5666 96.9783 9.78668V10.705H97.057C97.4243 8.96017 98.5788 7.92377 99.9825 7.92377C100.494 7.92377 100.901 8.04184 101.176 8.27798C101.544 8.5666 101.727 9.03889 101.727 9.69484C101.727 10.2983 101.544 10.7575 101.176 11.0723C100.809 11.3872 100.258 11.5578 99.5102 11.5709C97.7654 11.5971 97.1488 12.581 97.1488 14.2472V20.4918C97.1488 21.7644 96.401 22.4859 95.2334 22.4859ZM106.385 22.4335C103.709 22.4335 101.675 20.7018 101.675 18.1698C101.675 15.6116 103.643 14.1291 107.159 13.9192L110.701 13.7093V12.7778C110.701 11.4659 109.783 10.705 108.34 10.705C107.172 10.705 106.464 11.0855 105.611 12.1875C105.191 12.6598 104.706 12.8959 104.089 12.8959C103.158 12.8959 102.489 12.2924 102.489 11.4266C102.489 11.1248 102.554 10.8493 102.686 10.5607C103.342 8.88146 105.598 7.84505 108.51 7.84505C112.118 7.84505 114.467 9.70796 114.467 12.5417V20.5574C114.467 21.83 113.693 22.4859 112.604 22.4859C111.567 22.4859 110.846 21.9087 110.767 20.7805V20.0589H110.688C109.901 21.5545 108.143 22.4335 106.385 22.4335ZM107.645 19.6653C109.324 19.6653 110.701 18.5765 110.701 17.0546V16.0314L107.736 16.215C106.306 16.32 105.493 16.9628 105.493 17.9599C105.493 19.0094 106.359 19.6653 107.645 19.6653ZM119.347 22.4859C118.206 22.4859 117.432 21.8169 117.432 20.4918V11.033H116.697C115.897 11.033 115.294 10.5213 115.294 9.61613C115.294 8.72403 115.897 8.21239 116.697 8.21239H117.432V7.14974C117.432 4.3685 118.796 3.1353 121.446 3.10906C123.48 3.10906 124.333 3.7519 124.333 4.65712C124.333 5.195 124.07 5.50986 123.559 5.66728C123.349 5.71976 123.113 5.75912 122.824 5.77224C121.643 5.81159 121.171 6.28388 121.171 7.32029V8.21239H122.785C123.585 8.21239 124.188 8.72403 124.188 9.61613C124.188 10.5213 123.585 11.033 122.785 11.033H121.263V20.4918C121.263 21.8169 120.476 22.4859 119.347 22.4859ZM126.472 18.6158V11.033H125.737C124.832 11.033 124.254 10.482 124.254 9.58989C124.254 8.69779 124.832 8.14679 125.737 8.14679H126.472V6.58562C126.472 5.35243 127.193 4.59152 128.387 4.59152C129.581 4.59152 130.302 5.35243 130.302 6.58562V8.14679H131.654C132.559 8.14679 133.123 8.71091 133.123 9.58989C133.123 10.4689 132.559 11.033 131.654 11.033H130.302V17.7631C130.302 18.7601 130.643 19.1799 131.47 19.2455L131.719 19.2718C132.664 19.3767 133.175 19.7703 133.175 20.6624C133.175 21.7906 132.073 22.3679 130.46 22.3679H130.329C127.77 22.3679 126.472 21.0953 126.472 18.6158ZM140.719 22.5122C136.324 22.5122 133.74 19.7965 133.74 15.2442C133.74 10.7181 136.377 7.84505 140.536 7.84505C144.524 7.84505 147.2 10.5738 147.2 14.3915C147.2 15.4541 146.597 16.0576 145.534 16.0576H137.505V16.2281C137.505 18.3141 138.765 19.6785 140.706 19.6785C142.11 19.6785 143.028 19.2062 144.065 17.9861C144.471 17.5663 144.813 17.422 145.311 17.422C146.138 17.422 146.807 17.9467 146.807 18.8257C146.807 19.1275 146.715 19.4423 146.544 19.7572C145.613 21.4889 143.435 22.5122 140.719 22.5122ZM137.545 13.7093H143.514C143.435 11.8726 142.254 10.6788 140.575 10.6788C138.896 10.6788 137.676 11.912 137.545 13.7093ZM150.559 22.4859C149.405 22.4859 148.644 21.7644 148.644 20.4918V9.78668C148.644 8.5666 149.392 7.85817 150.494 7.85817C151.569 7.85817 152.304 8.5666 152.304 9.78668V10.705H152.383C152.75 8.96017 153.905 7.92377 155.308 7.92377C155.82 7.92377 156.227 8.04184 156.502 8.27798C156.87 8.5666 157.053 9.03889 157.053 9.69484C157.053 10.2983 156.87 10.7575 156.502 11.0723C156.135 11.3872 155.584 11.5578 154.836 11.5709C153.091 11.5971 152.475 12.581 152.475 14.2472V20.4918C152.475 21.7644 151.727 22.4859 150.559 22.4859Z" fill="black"></path>
                            <defs>
                                <clipPath id="clip0_2371_12428">
                                    <path d="M1 10.7369C1 6.32298 1 4.11601 2.28702 2.67908C2.41042 2.5413 2.5413 2.41042 2.67908 2.28702C4.11601 1 6.32298 1 10.7369 1H12.2631C16.677 1 18.884 1 20.3209 2.28702C20.4587 2.41042 20.5896 2.5413 20.713 2.67908C22 4.11601 22 6.32298 22 10.7369V12.2631C22 16.677 22 18.884 20.713 20.3209C20.5896 20.4587 20.4587 20.5896 20.3209 20.713C18.884 22 16.677 22 12.2631 22H1V10.7369Z" fill="white"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </picture>
                </a>
            </div>
            <div class="form-main">
                <div class="form-head">
                    <h2>Sign Up</h2>
                    <p style="font-size: 12px;">Create your account by filling up your details</p>
                </div>
                <div class="">
                    <div id="invalid_signup_data" class="error" style="display:none">Email or phone number already
                        exists</div>
                    <form action="{{route('signup')}}" class="" id="signup_form" method="POST">
                        @csrf
                        <input type="hidden" name="referral_code" value="{{@$referral_code}}">
                        <div class="row gy-2 gx-1">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name" aria-label="Enter your first name" name="first_name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Enter your last name" name="last_name">
                            </div>
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Enter your email" aria-label="Enter your email" name="email">
                            </div>
                            <div class="col-md-12 cuntry_code">
                                {{-- <select class="form-control" style="width: 22%;float: left;margin-right: 5px;" name="country_code">
                                    @if(!empty($countries))
                                    @foreach ($countries as $country1)
                                    <option value="{{$country1->dial}}" @if($country1->iso3 == $countryCode) selected
                                @endif> {{$country1->dial}}</option>
                                @endforeach
                                @endif
                                </slect>--}}
                                <input type="tel" class="form-control" placeholder="Enter your phone number" aria-label="Enter your phone number" name="phone_number" id="phone_number" required>
                                <input type="hidden" class="form-control" name="country_code" id="country_code">
                                <span id="phone-error" style="color: red;"></span>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="password-wrapping">
                                        <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="24" height="24">
                                    </span>
                                    <input type="password" class="form-control" placeholder="Enter your password" aria-label="Enter your password" aria-describedby="password-wrapping" name="password" id="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="repassword-wrapping">
                                        <img src="{{ asset('images/lock-icon.svg') }}" class="img-fluid" alt="Essay Help" title="Essay Help" width="24" height="24">
                                    </span>
                                    <input type="password" class="form-control" placeholder="Re-enter your password" aria-label="Re-enter your password" aria-describedby="repassword-wrapping" name="confirm_password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary w-100 p-2">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center  text-muted">OR</div>
                    <div class="container">
                        <div class="row justify-content-center ">
                            <div class="col-md-2  social-auth">
                                <a href="#" class="btn btn-google "></a>
                            </div>
                            <div class="col-md-2  social-auth">
                                <a href="#" class="btn btn-facebook "></a>
                            </div>
                            <div class="col-md-2  social-auth">
                                <a href="#" class="btn btn-apple "></a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center mt-4 mb-0">Already have an account? <a href="{{route('login')}}" class="link">Login</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="offset-md-4">
    </div>
</div>
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