@extends('layout.student')
@section('content')


<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                    <div class="card-body" style="background: #f2f1f2;">
                        <p>Refer, Earn, Repeat! It's that easy to get $50 for every friend who signs up and places their
                            first order. No limit on referrals.</p>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-sm-6">

                                <!--<div style="min-height: 10px;">
                                    <span style="color:green;display:none;font-size:12px;" id="url_copied_text">Url copied</span>
                                </div>-->

                                <input id="referralUrlInput" type="text" class="form-control form-control-lg"
                                    placeholder="Your referral link" style="border-radius: 60px;" value="{{env('APP_URL')}}refer/{{$referral_code}}">
                                </div>
                            <div class="col-sm-2">
                            
                            <a href="javascript:void(0);" onclick="copyRefCode()" class="btn btn-primary"
                                    style="height: 48px;width: 142px;padding: 8px;border-radius: 60px;background: #9071fb;font-size: 18px;"><img
                                        src="<?php echo asset('/student/');?>/img/copy-icon-blue.png"> Copy link</a>
                            </div>
                            <div class="col-sm-4">
                                <span
                                    style="background: #9071FB;border-radius: 57px;width:100%;padding-top: 7px;float: left;height: 48px;box-shadow: 3px 4px 0px 0px #000000;">

                                    <span style="width:25%;float: left;text-align: center;"><a
                                            href="add-student.html"><img
                                                src="<?php echo asset('/student/');?>/img/whatsapp-fill.png"></a></span>
                                    <span style="width:25%;float: left;text-align: center;"><a
                                            href="add-student.html"><img
                                                src="<?php echo asset('/student/');?>/img/t.png"></a></span>
                                    <span style="width:25%;float: left;text-align: center;"><a
                                            href="add-student.html"><img
                                                src="<?php echo asset('/student/');?>/img/f.png"></a></span>
                                    <span style="width:25%;float: left;text-align: center;"><a
                                            href="add-student.html"><img
                                                src="<?php echo asset('/student/');?>/img/in.png"></a></span>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">

                                    <div class="card-body"
                                        style="padding:0px;border: 1px solid #000000;box-shadow: 3px 3px 0px 0px #000000;border-radius: 8px;">
                                        <h4 class="card-title"
                                            style="font-size:32px !important;padding-left:10px;padding-top:10px;">Your
                                            Referral Earning Statistics</h4>
                                        <hr>
                                        <div class="table-responsive" style="height:350px;over-flow:auto;">
                                            <table class="table table-striped table-responsive-sm">
                                                <thead>
                                                    <tr>
                                                        <th>Referred to</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($referralsList as $referral)
                                                    <tr>
                                                        <td>{{$referral->student->first_name}}</td>
                                                        <td>{{ \Carbon\Carbon::parse($referral->created_at)->format('d/m/Y')}}</td>
                                                        <td>${{$referral->earned}}</td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body"
                                        style="padding: 0px;border: 1px solid #000000;box-shadow: 3px 3px 0px 0px #000000;border-radius: 8px;">
                                        <div style="border-bottom: 1px solid #000;">
                                            <div style="padding: 24px;">
                                                <span style="display: block;font-size:48px;">13(Demo)</span>
                                                <span style="display: block;font-size:16px;">Referral sent</span>
                                            </div>
                                        </div>
                                        <div style="border-bottom: 1px solid #000;">
                                            <div style="padding: 24px;">
                                                <span style="display: block;font-size:48px;">{{count($referralsList)}}</span>
                                                <span style="display: block;font-size:16px;">Friends joined</span>
                                            </div>
                                        </div>
                                        <div style="border-bottom: 1px solid #000;">
                                            <div style="padding: 24px;">
                                                <span style="display: block;font-size:48px;">${{$earned}}</span>
                                                <span style="display: block;font-size:16px;">You Earned</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
function copyRefCode() {
    var copyText = document.getElementById("referralUrlInput");
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
    navigator.clipboard.writeText(copyText.value);
    /*$('#url_copied_text').show();
    setTimeout(function(){
        $('#url_copied_text').hide();
    },5000)*/
}
</script>

@endsection