<?php
$referralCode = Auth::user()->referral_code;
$ordersCount = App\Models\Orders::where('student_id', Auth::user()->id)->count();
?>
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            <li><a class="ai-icon" href="" aria-expanded="false">
                    <!--<i class="nav-icon fas fa-wallet"></i>-->

                    <span class="nav-text"><span style="float:left;"><img class="nav-icon"
                                src="<?php echo asset('/student/');?>/img/empty-wallet.png">
                            Balance</span> <span style="float:right;">$134.00(Demo)</span></span>

                </a>
            </li>
            <hr>
            <li>
                <a class="ai-icon" href="{{route('order.transactions')}}" aria-expanded="false">
                    <!--<i class="nav-icon fas fa-first-order"></i>-->

                    <span class="nav-text"><span style="float:left;"><img class="nav-icon"
                                src="<?php echo asset('/student/');?>/img/note.png"> My orders
                        </span> 
                        <span style="float:right;" class="badge badge-primary badge-xs ms-2">{{$ordersCount}}</span></span>

                </a>
            </li>

            <li>
                <a class="ai-icon" href="{{route('order.statements')}}" aria-expanded="false">
                    <span class="nav-text">
                        <span style="float:left;"><img class="nav-icon"
                                src="<?php echo asset('/student/');?>/img/empty-wallet.png"> Transactions
                        </span> 
                </a>
            </li>

            <li><a class="ai-icon" href="" aria-expanded="false">


                    <img class="nav-icon" src="<?php echo asset('/student/');?>/img/message.png">
                    <span class="nav-text"> Chats</span>

                </a>
            </li>
            <li>
                <a class="ai-icon" href="{{route('order.refer_friend')}}" aria-expanded="false">


                    <i class="la la-users"></i>
                    <span class="nav-text"> Refer a friend</span>

                </a>

            </li>
            <li>
                <a class="ai-icon" href="" aria-expanded="false">
                    <i class="la la-gift"></i>
                    <span class="nav-text"> Offers</span>
                </a>

            </li>
            <li>
                <a class="ai-icon" href="" aria-expanded="false">
                    <img class="nav-icon" src="<?php echo asset('/student/');?>/img/message.png">
                    <span class="nav-text"> Contact us</span>
                </a>

            </li>



        </ul>
        <hr>
        <div class="copyright">
            <div
                style="border: 1px solid #000000;background:#FFF4E4;padding: 10px; border-radius: 10px;text-align:center;">
                <p style="text-align:center;color:#000;font-size:15px;"><b>$50</b> for you, <b>$50</b> for them!</p>
                <img src="<?php echo asset('/student/');?>/img/Frame 1686561361.png"
                    style="margin-top:20px;margin-bottom:20px;">
                <p style="text-align:left;color:#616161;font-size:12px;">Your friend gets $50 off their first order, and
                    you get $50 in credit when they place their first order.</p>
                <p><input id="referralUrl" type="text" class="form form-control"
                        style="width:130px;border: 0.5px solid #000000;border-radius:4px;float:left;"
                        value="{{env('APP_URL')}}refer/{{$referralCode}}" />
                    <button class="btn btn-primary" onclick="copyUrl();"
                        style="border-radius: 10px;width: 60px;padding: 6px;margin-left: 5px;">Copy</button>
                </p>
                <div style="min-height: 20px;text-align:left;">
                    <span style="color:green;height:15px;font-size:12px;display:none;" id="url_copied">Url copied</span>
                </div>
                <p style="text-align:left;color:#000;font-size:14px;">
                    <a href="{{route('order.refer_friend')}}">
                    View your earnings 
                    <span><img src="<?php echo asset('/student/');?>/img/arrow-right.png" style="width:16px;"></span>
                    </a>
                </p>

            </div>
        </div>

        <ul class="metismenu">
            <li>
                <a class="ai-icon" href="" aria-expanded="false">
                    <img class="nav-icon" src="<?php echo asset('/student/');?>/img/message-question.png">
                    <span class="nav-text">Help Center</span>
                </a>

            </li>
        </ul>


    </div>
</div>
<script>
function copyUrl() {
    var copyText = document.getElementById("referralUrl");
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    navigator.clipboard.writeText(copyText.value);
    $('#url_copied').show();
    setTimeout(function() {
        $('#url_copied').hide();
    }, 5000)
}
</script>