<!-- Custom JS -->
<script src="{{ asset('js/main.min.js') }}"></script>
<script>
$(document).ready(function() {
    alert("hii")
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
                    alert("{{route('home')}}")
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