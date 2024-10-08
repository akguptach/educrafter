@extends('layout.app')
@section('content')
<main class="main-area fix">
    <style>
    .card p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      .card i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
	  .navmenu{ display:none;}
    </style>
    <!-- banner-area -->
    <section class="checkout__area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<div class="" style="text-align: center;">
					<div class="card">
					<div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
						<i class="checkmark">✓</i>
					</div>
						<h1>Payment Successful</h1>
						<p>Thank You for Your Order!</p>
						<a href="https://educrafter.co/vieworder/{{$order->id}}" class="btn btn-primary">View Your Order</a>
						
						<!--<p>Transaction Id</p>
						<p>{{$order?->payment?->transaction_id}}{{$order?->payment?->payment_status}}</p>-->
					</div>
				</div>
                    
				</div>
            </div>
        </div>
    </section>
    @endsection