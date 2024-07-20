@extends('layout.app',['title'=>@$title])
@section('content')
<!-- main-area -->

<main class="main-area fix">

    <section class="features__area section-pb-90 section-py-90" style="padding: 30px 0 90px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12" align="center">

                    <img src="{{$deal->deal_logo}}" alt="Logo" style="width: 250px;margin: 30px 0px;">
                </div>



            </div>
            <style>
            .copy-button {
                display: flex;
                justify-content: space-between;
                padding: 0 10px;
                align-items: center;
            }

            .copy-button {
                margin: 10px 0 0px 0;
                height: 66px;
                border-radius: 4px;
                padding: 5px 10px 10px 5px;
                border: 2px dashed;
                border-radius: 32px;
            }

            .copy-button input {
                width: 100%;
                height: 100%;
                font-size: 24px;
                border: none;
                outline: none;
                font-size: 32px;
                color: #000;
                font-weight: 400;
                padding-left: 20px;
            }

            .copy-button button {
                padding: 10px 10px;
                width: 200px;
                background-color: #3B71ED;
                color: #fff;
                border-radius: 36px;
                box-shadow: 3px 4px 0px 0px #000000;
                border: 1px solid transparent;
            }
            </style>
            <div class="fact__inner-wrap align-items-center text-center"
                style="background:#fff;border: 1px solid #000000;box-shadow: 4px 4px 0px 0px #000000;">
                <div class="row">
                    <div class="col-lg-12 col-12">

                        <h2 class="title">{{$deal->title}}</h2>
                        <br>
                        {!!$deal->long_description!!}
                        <br>
                        <button type="submit" class="btn btn-two" id="expend_code_btn">Reveal code</button>

                        <div id="expended_code" style="display: none;">
                            <div class="copy-button">
                                <input id="voucher_code" type="text" readonly value="{{$deal->voucher_code}}" />
                                <button onclick="copyUrl()" class="copybtn">COPY</button>
                            </div>
                            <p style="text-align:center;font-size:18px;"><a href="{{$deal->url}}">Order now</a></p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

</main>
<script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
<script>
function copyUrl() {
    var copyText = document.getElementById("voucher_code");
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    navigator.clipboard.writeText(copyText.value);
    //$('#url_copied').show();
    //setTimeout(function(){
        //$('#url_copied').hide();
    //},5000)
}
</script>
<script>
    $(document).ready(function(){
        $('#expend_code_btn').click(function(){
            $(this).hide();
            $('#expended_code').show();
        });
    })
</script>
<!-- main-area-end -->
@endsection