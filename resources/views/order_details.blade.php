@extends('layout.student')
@section('content')
<style>
.btn-primary1 {
    border-color: #000;
    background-color: #000;
    border-radius: 10px;
    color: #fff;
}

.btn-primary1:hover {
    border-color: #000;
    background-color: #fff;
    border-radius: 10px;
    color: #000;
}

.btn-primary1.active {
    border-color: #000;
    background-color: #000;
    border-radius: 10px;
    color: #fff;
}

.btn-primary2 {
    border-color: #fff;
    background-color: #fff;
    border-radius: 10px;
    color: #000;
    border: 1px solid #000;
}

.btn-primary2:hover {
    border-color: #000;
    background-color: #000;
    border-radius: 10px;
    color: #fff;
}

.btn-primary2.active {
    border-color: #000;
    background-color: #000;
    border-radius: 10px;
    color: #fff;
}

.nav-tabs {
    border-color: #fff;
}
</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background: #FFF9F1;">

                        <div style="width:100%;float:left;">
                            <div style="width: 5%;float:left;">
                                <a href="{{route('order.transactions')}}" style="width: 46px;padding: 15px 10px 10px 10px;/* vertical-align: middle; */height: 60px;border: 1px solid #D6D7D9;border-radius:8px;"
                                    class="btn btn-square btn-outline-light"><img
                                        src="<?php echo asset('/student/');?>/img/arrow-left.png"
                                        style="vertical-align: middle;"></a>
                            </div>
                            <div style="width: 80%;float:left;margin-left: 10px;">
                                <div style="width:100%;float:left;margin-bottom: 6px;">
                                    <p style="font-size:18px;font-weight:600;margin: 0px;">
                                        {{$data->subject->subject_name}}</p>

                                </div>
                                <div style="width:100%;float:left;">
                                    <div style="width:110px;float:left;">
                                        <a style="background:#FEEAA8;border-radius:4px;padding:3px 10px 3px 10px;color:#000;font-size:14px;font-weight:400;"
                                            href="#">{{$data->status}}</a>
                                    </div>
                                    <div style="float:left;font-size:14px;color:#000;">Delivery in
                                        {{$data['delivery_date']}} | {{$data['no_of_words']}} words |
                                        {{$data->taskType->type_name}} | English(Demo)</div>
                                </div>
                            </div>
                            <div style="width: 10%;float:right;">
                                <p style="float:left;color:#3B71ED;">Task ID:
                                    {{$data->website->order_prefix}}{{$data['id']}}</p>

                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <p style="text-align:center;">For added safety and your protection, keep communications and
                            payments within Educrafter</p>
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="chatbox">
                                    <div class="card chat dlab-chat-history-box">
                                        <div class="card-body msg_card_body dlab-scroll" style="padding:0px;">
                                            @foreach($studentMessages as $index=>$item)
                                            <div class="d-flex justify-content-start mb-4">
                                                <div class="img_cont_msg">
                                                    <img src="<?php echo asset('/student/');?>/img/1.jpg"
                                                        class="rounded-circle user_img_msg" alt="">
                                                </div>
                                                <div class="msg_cotainer">
                                                    @if ($item['sendertable_type']== 'App\Models\Student')
                                                    Me
                                                    @else
                                                    {{$item['sendertable']['name']}}
                                                    @endif
                                                    <span
                                                        class="msg_time">{{date('m-d-Y h:i A', strtotime($item['created_at']))}}</span>
                                                    <p style="color: #626469;">{{$item['message']}}</p>
                                                    @if($item['attachment'])
                                                    <p>
                                                        <a href="{{$item['attachment']}}"
                                                            target="_blank">{{$item['attachment']}}</a>
                                                    </p>
                                                    @endif
                                                </div>
                                            </div>

                                            @if($index == 0)
                                            <div class="card" style="border: 1px solid #E4E5E7;">
                                                <div class="card-header">
                                                    <h4 class="card-title">{{$data->subject->subject_name}}
                                                    </h4>
                                                    <span class="pull-right">Task ID:
                                                        {{$data->website->order_prefix}}{{$data['id']}}</span>
                                                </div>
                                                <div class="card-body">
                                                    <p class="mb-0">{{$data->task}}</p>
                                                </div>
                                                <div class="card-footer" style="padding:10px;">
                                                    <div class="row">

                                                        <div class="col-6 pt-3 pb-3">
                                                            <span style="font-weight:bold;"> Delivery in
                                                                {{$data['delivery_date']}}</span>

                                                        </div>
                                                        <div class="col-6 pt-3 pb-3">
                                                            <span class="pull-right"
                                                                style="font-weight:bold;">{{$data['currency_code']}}{{$data['price']}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                            @endforeach
                                        </div>
                                        <div class="card-footer type_msg">
                                            <form action="{{route('order.vieworder',['oid'=>$order_id])}}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @error('message')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                <div class="input-group">
                                                    <textarea class="form-control" name="message"
                                                        placeholder="Type your message..."></textarea>
                                                    <div class="input-group-append">
                                                        <button type="SUBMIT" class="btn btn-primary"><i
                                                                class="fa fa-location-arrow"></i></button>
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
            </div>
        </div>
    </div>

    @endsection