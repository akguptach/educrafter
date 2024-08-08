@extends('layout.student')
@section('content')
<style>
.form-control {
    font-size: 1rem;
    line-height: 2.5;
}
</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">



        <div class="container">

            <div class="row text-center">

                <div class="col-sm-6 mx-auto">
                    <div class="card" style="padding: 20px;">
                        @if(session('profileupdatedsmessage'))
                        <center>
                            <div id="profileupdatedsmessage" class="alert alert-success " style="font-size: 15px;">
                                {{ session('profileupdatedsmessage') }}
                            </div>
                        </center>

                        <script>
                        setTimeout(function() {
                            $('#profileupdatedsmessage').fadeOut(1000);
                        }, 5000);
                        </script>
                        @endif
                        <div class="order-summary os-theme my-5">
                            <h2 style="margin-bottom: 40px;">My Profile</h2>

                            <form action="{{ route('student.update.profile') }}" class="" id="update_profile"
                                method="POST" >
                                @csrf
                                <div class="row gy-3 gx-2">

                                    <img src="{{$profile->profile_pic}}" id="previewProfilePic"
                                        style="width: 200px;margin: 0 auto;border-radius: 50%;border: 1px solid;">

                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-lg" name="profile_pic_file"
                                            id="profile_pic_file">
											<input type="hidden" id="base64ProfilePic" name="profile_pic"> 
                                    </div>
                                    @error('profile_pic')
                                    <div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}
                                    </div>
                                    @enderror



                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your first name" name="first_name"
                                            value="{{ $profile->first_name }}">
                                    </div>
                                    @error('first_name')
                                    <div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}
                                    </div>
                                    @enderror

                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Enter your last name" name="last_name"
                                            value="{{ $profile->last_name }}">
                                    </div>
                                    @error('last_name')
                                    <div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}
                                    </div>
                                    @enderror
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="Enter your email" name="email" value="{{ $profile->email }}">
                                    </div>
                                    @error('email')
                                    <div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}
                                    </div>
                                    @enderror
                                    <div class="col-md-12">
                                        <input type="tel" class="form-control form-control-lg"
                                            placeholder="Enter your phone number" name="phone_number"
                                            value="{{ $profile->phone_number }}">
                                    </div>
                                    @error('phone_number')
                                    <div class="text-danger" style="text-align: left; font-size: small;">{{ $message }}
                                    </div>
                                    @enderror

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div id="insertimageModal" class="modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header" style="display: block;">
                <h4 class="modal-title text-center">Crop Picture
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    style="right: 7px;top: 10px;position: absolute;">
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div>
                        <div id="image_demo" style="width:400px; margin-top:5px"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary crop_image">Crop & Insert Image</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    $image_crop = $('#image_demo').croppie({
        enableExif: true,
        viewport: {
            width: 200,
            height: 200,
            type: 'square' //circle
        },
        boundary: {
            width: 470,
            height: 470
        }
    });
    $('#profile_pic_file').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(event) {
            $image_crop.croppie('bind', {
                url: event.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
        $('#insertimageModal').modal('show');
    });
    $('.crop_image').click(function(event) {
        $image_crop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(response) {
            $('#previewProfilePic').attr('src', response);
			$('#base64ProfilePic').val(response);
            $('#insertimageModal').modal('hide');
        });
    });
});
</script>
@endsection