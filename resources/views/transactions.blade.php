@extends('layout.student')
@section('content')
<style>
.btn-primary1 {
    border-color: #fff !important;
    background-color: #fff !important;
    border-radius: 10px !important;
    color: #000 !important;
    border: 1px solid #000 !important;
}

.btn-primary1:hover {
    border-color: #000 !important;
    background-color: #fff !important;
    border-radius: 10px !important;
    color: #000 !important;
}

.btn-primary1.active {
    border-color: #000 !important;
    background-color: #000 !important;
    border-radius: 10px !important;
    color: #fff !important;
}

.btn-primary2 {
    border-color: #fff !important;
    background-color: #fff !important;
    border-radius: 10px !important;
    color: #000 !important;
    border: 1px solid #000 !important;
}

.btn-primary2:hover {
    border-color: #000 !important;
    background-color: #000 !important;
    border-radius: 10px !important;
    color: #fff !important;
}

.btn-primary2.active {
    border-color: #000 !important;
    background-color: #000 !important;
    border-radius: 10px !important;
    color: #fff !important;
}

.nav-tabs {
    border-color: #fff !important;
}

div.all-rating-widgets {
    display: flex !important;
    justify-content: center !important;
}

div.rating-wrapper {
    display: flex !important;
    align-items: first baseline !important;
    flex-direction: column !important;
    margin: 5rem !important;
    font-size: 1.5rem !important;
}

div.star-wrapper {
    font-size: 2rem !important;
}

div.star-wrapper i {
    cursor: pointer !important;
}

div.star-wrapper i.yellow {
    color: #fdd835 !important;
}

div.star-wrapper i.vote-recorded {
    color: #f57c00 !important;
}

p.v-data {
    background: #ccc !important;
    padding: 0.5rem !important;
}
</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>My Orders</h4>
                </div>
            </div>

        </div>
        @if (session('status'))
        <div class="alert alert-success" id="success_message">
            {{ session('status') }}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">


                        <div style="width:500px;float:left;">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" style="margin-left: 20px;"><a href="#active-orders"
                                        id="active-orders-pane" class="btn btn-primary1" data-bs-toggle="tab"
                                        role="tab">Active&nbsp;<span
                                            class="badge badge-default badge-xs ms-2">{{$inprocess->total()}}</span></a>
                                </li>
                                <li class="nav-item" style="margin-left: 20px;"><a href="#draft-orders"
                                        id="draft-orders-pane" class="btn btn-primary2" data-bs-toggle="tab"
                                        role="tab">Draft&nbsp;<span
                                            class="badge badge-default badge-xs ms-2">{{$enquiries->total()}}</span></a>
                                </li>
                                <li class="nav-item" style="margin-left: 20px;"><a href="#complete-orders"
                                        id="complete-orders-pane" class="btn btn-primary2" data-bs-toggle="tab"
                                        role="tab">Completed&nbsp;<span
                                            class="badge badge-default badge-xs ms-2">{{$delivered->total()}}</span></a>
                                </li>
                            </ul>



                        </div>



                        <div class="col-sm-5">
                            Short By

                            <div class="bootstrap-select form form-control dropup pull-right" style="width: 100px;">
                                <form id="sort_by_form">
                                    <select class="form form-control" tabindex="null" id="sortby" name="sortby">
                                        <option @if($orderBy=='created_at' && $order=='ASC' ) selected="selected"
                                            @endif>Date, ASC</option>
                                        <option @if($orderBy=='created_at' && $order=='DESC' ) selected="selected"
                                            @endif>Date, DESC</option>
                                        <option @if($orderBy=='delivery_date' && $order=='ASC' ) selected="selected"
                                            @endif>Deadline, ASC</option>
                                        <option @if($orderBy=='delivery_date' && $order=='DESC' ) selected="selected"
                                            @endif>Deadline, DESC</option>
                                    </select>
                                </form>
                            </div>
                            <div class="search_bar pull-right" style="width: 168px;">
                                <form>
                                    <div class="input-group input-group-sm input-group-custom">
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                            aria-describedby="button-search" name="keyword"
                                            value="{{ request()->get('keyword') }}">
                                        <button class="btn btn-outline-secondary" type="submit" id="button-search">
                                            <img src="{{ asset('images/search-icon-grey.svg')}}" alt="SOP Craft"
                                                title="SOP Craft">
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="active-orders" class="tab-pane fade" role="tabpanel">
                                @if($enquiries && count($enquiries) > 0)
                                @foreach($inprocess as $item)
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-lg-12">
                                        <div
                                            style="width:100%;border: 1px solid #E5E5E5;border-radius:10px;padding:20px;float:left;">
                                            <div style="width:80%; float:left;">
                                                <div style="width:100%;float:left;margin-bottom: 10px;">
                                                    <div style="width:60%;font-size:18px;font-weight:600;float:left;">
                                                        {{$item->subject['subject_name']}}</div>
                                                    <div style="float:left;width:20%;color:#3B71ED;font-size:16px;">Task
                                                        ID: {{$item->website->order_prefix}}{{$item['id']}}</div>
                                                </div>
                                                <div style="width:100%;float:left;">
                                                    <div style="width:110px;float:left;">
                                                        <a style="background:#FEEAA8;border-radius:4px;padding:3px 10px 3px 10px;color:#000;font-size:14px;font-weight:400;"
                                                            href="#">In Process</a>
                                                    </div>
                                                    <div style="float:left;font-size:14px;color:#000;">Delivery in
                                                        {{$item['delivery_date']}} | {{$item['no_of_words']}} words |
                                                        {{$item->taskType->type_name}} | English</div>
                                                </div>
                                            </div>
                                            <div style="width:20%;float:right;">
                                                <div
                                                    style="text-align:right;font-size:16px;color:#000;font-weight:bold;">
                                                    {{$item['currency_code']}}{{$item['gross_price']}}</div>
                                                <div style="text-align:right;"><a
                                                        href="{{url('vieworder/'.$item['id'])}}"
                                                        class="btn btn-primary">
                                                        <img class="nav-icon"
                                                            src="<?php echo asset('/student/');?>/img/message_white.png">
                                                        Chat
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clearfix mt-2 pagination">
                                    <div class="float-right" style="margin: 0;">
                                        {!! $inprocess->appends([])->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                                @else
                                <div class="row" style="text-align:center;background: #fbfbfb;">
                                    <div class="col-lg-12">
                                        <img src="<?php echo asset('/student/');?>/img/no-order.png"
                                            style="width:200px;">
                                        <p style="text-align:center;font-size:18px;">No Active Orders</p>
                                    </div>
                                </div>
                                @endif
                            </div>



                            <div id="draft-orders" class="tab-pane fade" role="tabpanel">


                                @if($enquiries && count($enquiries) > 0)
                                @foreach($enquiries as $item)
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-lg-12">
                                        <div
                                            style="width:100%;border: 1px solid #E5E5E5;border-radius:10px;padding:20px;float:left;">
                                            <div style="width:80%; float:left;">
                                                <div style="width:100%;float:left;margin-bottom: 10px;">
                                                    <div style="width:60%;font-size:18px;font-weight:600;float:left;">
                                                        {{$item->subject['subject_name']}}</div>
                                                    <div style="float:left;width:20%;color:#3B71ED;font-size:16px;">Task
                                                        ID: {{$item->website->order_prefix}}{{$item['id']}}</div>
                                                </div>
                                                <div style="width:100%;float:left;">
                                                    <div style="width:70px;float:left;">
                                                        <a style="background:#F79E1B;border-radius:4px;padding:3px 10px 3px 10px;color:#000;font-size:14px;font-weight:400;"
                                                            href="#">Draft</a>
                                                    </div>
                                                    <div style="float:left;font-size:14px;color:#000;">Delivery in
                                                        {{$item['delivery_date']}} | {{$item['no_of_words']}} words |
                                                        {{$item->taskType->type_name}} | English</div>
                                                </div>
                                            </div>
                                            <div style="width:20%;float:right;">
                                                <div
                                                    style="text-align:right;font-size:16px;color:#000;font-weight:bold;">
                                                    {{$item['currency_code']}} {{$item['price']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clearfix mt-2 pagination">
                                    <div class="float-right" style="margin: 0;">
                                        {!! $enquiries->appends([])->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                                @else
                                <div class="row" style="text-align:center;background: #fbfbfb;">
                                    <div class="col-lg-12">
                                        <img src="<?php echo asset('/student/');?>/img/no-order.png"
                                            style="width:200px;">
                                        <p style="text-align:center;font-size:18px;">No Active Orders</p>
                                    </div>
                                </div>
                                @endif
                            </div>




                            <div id="complete-orders" class="tab-pane fade" role="tabpanel">

                                @if($delivered && count($delivered) > 0)
                                @foreach($delivered as $item)


                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-lg-12">
                                        <div
                                            style="width:100%;border: 1px solid #E5E5E5;border-radius:10px;padding:20px;float:left;">
                                            <div style="width:60%; float:left;">
                                                <div style="width:100%;float:left;margin-bottom: 10px;">
                                                    <div style="width:60%;font-size:18px;font-weight:600;float:left;">
                                                        {{$item->subject['subject_name']}}</div>
                                                    <div style="float:left;width:20%;color:#3B71ED;font-size:16px;">Task
                                                        ID: {{$item->website->order_prefix}}{{$item['id']}}</div>
                                                </div>
                                                <div style="width:100%;float:left;">
                                                    <div style="width:110px;float:left;">
                                                        <a style="background:#10C379;border-radius:4px;padding:3px 10px 3px 10px;color:#fff;font-size:14px;font-weight:400;"
                                                            href="#">Completed</a>
                                                    </div>
                                                    <div style="float:left;font-size:14px;color:#000;">Delivery in
                                                        {{$item['delivery_date']}} | {{$item['no_of_words']}} words |
                                                        {{$item->taskType->type_name}} | English</div>
                                                </div>
                                            </div>
                                            <div style="width:40%;float:right;">
                                                <div
                                                    style="text-align:right;font-size:16px;color:#000;font-weight:bold;">
                                                    {{$item['currency_code']}}{{$item['price']}}</div>
                                                <div style="text-align:right;">
                                                    <a href="#"
                                                        class="btn btn-rounded btn-outline-light pull-left rate-button"
                                                        style="padding: 9px;margin-right: 10px;" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter"
                                                        data-order-id="{{$item['id']}}">
                                                        <img class="nav-icon"
                                                            src="<?php echo asset('/student/');?>/img/Star 27.png"> Rate
                                                        your order
                                                    </a>
                                                    <a href="{{url('vieworder/'.$item['id'])}}" class="btn btn-primary">
                                                        <img class="nav-icon"
                                                            src="<?php echo asset('/student/');?>/img/message_white.png">
                                                        Chat
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="clearfix mt-2 pagination">
                                    <div class="float-right" style="margin: 0;">
                                        {!! $delivered->appends([])->links('pagination::bootstrap-5') !!}
                                    </div>
                                </div>
                                @else
                                <div class="row" style="text-align:center;background: #fbfbfb;">
                                    <div class="col-lg-12">
                                        <img src="<?php echo asset('/student/');?>/img/no-order.png"
                                            style="width:200px;">
                                        <p style="text-align:center;font-size:18px;">No Active Orders</p>
                                    </div>
                                </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="">
            <div class="modal-header" style="display: block;">
                <h5 class="modal-title text-center" style="width: 100%;float: left;font-size: 30px;">Rate and Feedback
                </h5>
                <p style="width: 100%;" class="text-center">We would like your feedback to improve our services</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    style="right: 7px;top: 10px;position: absolute;">
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form method="POST" id="rating-form" action="{{route('save.ratings')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" style="font-size: 16px;">Rate your order</label>
                            <div class="star-wrapper">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <input type="hidden" id="ratings" name="ratings">
                            <input type="hidden" id="order_id" name="order_id">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="8" id="review" name="review"
                                placeholder="Do you have any additional comments or suggestions"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).on('submit', 'form#rating-form', function() {
    var rating = $('.vote-recorded').length;
    if (rating == 0) {
        alert('Please select star rating first')
    } else {
        $('#ratings').val(rating);
        return true;
    }
    return false;
});
$(document).ready(function() {


    $('.rate-button').click(function() {
        $('#order_id').val($(this).attr('data-order-id'));
    })




    $('#sortby').change(function() {
        $('#sort_by_form').submit();
    })
})
</script>

<script>
$(document).ready(function() {

    $('#active-orders .page-link').attr('href', function(i, str) {
        return str + '#active-orders';
    });

    $('#draft-orders .page-link').attr('href', function(i, str) {
        return str + '#draft-orders';
    });

    $('#complete-orders .page-link').attr('href', function(i, str) {
        return str + '#complete-orders';
    });

    if (location.hash) {
        var tabID = location.hash;
        $('.nav-tabs a[href="' + tabID + '"]').tab('show')
    } else {
        $('.nav-tabs a[href="#active-orders"]').tab('show')
    }


    $('.nav-item .btn').click(function() {
        window.location.href = '{{url()->current()}}' + this.getAttribute("href")
    });
});
$(window).on("popstate", function() {
    //var anchor = location.hash || $("button[data-bs-toggle='tab']").first().attr("data-bs-target");
    //$("button[data-bs-target='" + anchor + "']").tab("show");
});
</script>
@endsection