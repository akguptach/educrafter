@extends('layout.app')
@section('content')
<style>
.pagination .small {
    margin-right: 10px;
}
</style>
<section class="common-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="common-theme">
                    <div class="row align-items-end">
                        <div class="col-md-4">
                            <h5>Transaction Statement(s)</h5>
                        </div>
                        <div class="col-md-8 text-end">
                        <?php $website = \App\Models\Website::select('currency')->where('website_type','Educrafter')->first(); ?>
                            <h6>Wallet Amount: <b>{{$website->currency}} 00.00</b> | Free Credit: <b>{{$website->currency}} 0</b></h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Order Code</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Transaction Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Remark</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $index=>$item)
                                <tr>
                                    <td scope="row">{{$index + $orders->firstItem()}} </td>
                                    <td>Debit</td>
                                    <td>{{$item->website->order_prefix}}{{$item->id}}</td>
                                    <td>{{$item->payment->transaction_id}}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->payment->created_at)->format('M d, Y')}}</td>
                                    <td>{{$item->currency_code}} {{$item->payment->amount}}</td>
                                    <td>Paid</td>
                                    <td class="text-center">
                                        <span class="verify" title="Verify">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green"
                                                class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                            </svg>
                                        </span>
                                        <span class="unverify d-none" title="Unverify">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red"
                                                class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix mt-2 pagination">

                            <div class="float-right" style="margin: 0;">
                                {!! $orders->appends([])->links('pagination::bootstrap-5') !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection