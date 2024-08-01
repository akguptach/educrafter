@extends('layout.student')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="background:#fff;">
                        <h3 class="card-title">Transaction history</h3>

                        <div
                            style="border: 1px solid #000;border-radius: 8px;padding: 10px;right: 20%; position: absolute;background:#FBFBFB;">
                            <span class="nav-text pull-right"><span style="float:left;"><img class="nav-icon"
                                        src="<?php echo asset('/student/');?>/img/empty-wallet.png"
                                        style="margin-right: 11px;"> Balance</span> <span
                                    style="float:right;margin-left: 30px;">$00.00 (demo)</span></span>
                        </div>
                        <div
                            style="border: 1px solid #000;border-radius: 8px;padding: 10px;background: #10C379;color: #fff;">
                            <span class="nav-text"><span style="float:left;"><img class="nav-icon"
                                        src="<?php echo asset('/student/');?>/img/empty-wallet_white.png"
                                        style="margin-right: 11px;"> Withdraw
                                    money</span></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="statements" class="table table-striped table-responsive-sm"
                                style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Amount</th>



                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
