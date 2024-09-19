@extends('layout.student')
@section('content')
<style>
#withdraw_request_table_filter{
    margin-left: 400px;
}
.checked {
  color: orange;
}

.btn-danger {
    border-radius: 54px!important;
    box-shadow: 0px 4px 0px 0px #000000;
}

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




</style>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Payment Methods</h4>
                </div>
            </div>

        </div>
        @if (session('success'))
        <div class="alert alert-success" id="success_message">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger" id="success_message">
            {{ session('error') }}
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">

                        <div style="float:left;">
                            <ul class="nav nav-tabs">

                                <li class="nav-item" style="margin-left: 20px;"><a href="#bank"
                                        id="bank-pane" class="btn btn-primary1" data-bs-toggle="tab"
                                        role="tab">Bank</a>
                                        
                                </li>

                                <!--<li class="nav-item" style="margin-left: 20px;"><a href="#upi"
                                        id="upi-pane" class="btn btn-primary2" data-bs-toggle="tab"
                                        role="tab">UPI</a>
                                </li>-->


                                <li class="nav-item" style="margin-left: 20px;"><a href="#withdraw_amount"
                                        id="withdraw-amount-pane" class="btn btn-primary2" data-bs-toggle="tab"
                                        role="tab">Withdraw Amount</a>
                                </li>

                                <li class="nav-item" style="margin-left: 20px;"><a href="#withdraw_history"
                                        id="withdraw_history-pane" class="btn btn-primary2" data-bs-toggle="tab"
                                        role="tab">Withdraw History</a>
                                </li>


                            </ul>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="tab-content">
                            <div id="bank" class="tab-pane fade" role="tabpanel">
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-lg-12">
                                        <form id="bank_details_form" method="POST" action="{{route('payment.method.bank')}}">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">


                                                    
                                                    <div class="col-xl-6">

                                                        @if(old('default_payment',$paymentMethods->default_payment) == 'BANK')
                                                        <div class="mb-3 row">
                                                            <div class="col-lg-12">
                                                                <span class="badge badge-primary" style="padding-top: 4px;">Default Payment Method</span>
                                                            </div>
                                                        </div>
                                                        @endif


                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="bank_name">Bank
                                                                name</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" placeholder="Bank name"
                                                                    name="bank_name" value="<?php if (isset($paymentMethods->bank_name)) {
                                                                echo $paymentMethods->bank_name;
                                                                } ?>">
                                                                @error('bank_name')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="bank_name">Account Holder Name</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Account Holder Name" name="account_holder_name"
                                                                    value="{{old('account_holder_name',$paymentMethods->account_holder_name)}}">
                                                                @error('account_holder_name')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="account_no">Account no

                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" placeholder="Account no"
                                                                    name="account_no"
                                                                    value="{{old('account_no',$paymentMethods->account_no)}}">
                                                                @error('account_no')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="branch">Branch

                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" placeholder="Branch"
                                                                    name="branch"
                                                                    value="{{old('branch',$paymentMethods->branch)}}"
                                                                    >

                                                                @error('branch')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="ifsc_code">IFSC Code
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="IFSC code"
                                                                    name="ifsc_code"
                                                                    value="{{old('ifsc_code',$paymentMethods->ifsc_code)}}"
                                                                    >
                                                                @error('ifsc_code')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <!------------>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="short_code">Sort code
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="Sort code" name="short_code" value="{{old('short_code',$paymentMethods->short_code)}}" >
                                                                @error('short_code')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="ibn_number">IBAN Number
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="iban code" name="ibn_number" value="{{old('ibn_number',$paymentMethods->ibn_number)}}" >
                                                                @error('ibn_number')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="country">Country
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="country" name="country" value="{{old('country',$paymentMethods->country)}}" >
                                                                @error('country')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="state">State
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="state" name="state" value="{{old('state',$paymentMethods->state)}}" >
                                                                @error('state')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="state">City
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="city" name="city" value="{{old('city',$paymentMethods->city)}}" >
                                                                @error('city')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label class="col-lg-4 col-form-label" for="zip_code">Zip Code
                                                            </label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control " placeholder="zip_code" name="zip_code" value="{{old('zip_code',$paymentMethods->zip_code)}}" >
                                                                @error('zip_code')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <!---------------------->


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                            <input type="hidden" class="form-control" 
                                            name="default_payment" value="{{old('default_payment',$paymentMethods->default_payment)}}">
                                                <!--<button type="button" class="btn btn-primary formsubmit" id="bankformsubmit">Save</button>-->
                                                <button type="submit" class="btn btn-primary formsubmit" >Save</button>
                                                <!-- <a href="" class="btn btn-primary">Back</a> -->
                                            </div>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                       
                        <div id="upi" class="tab-pane fade" role="tabpanel">
                            <div class="row" style="margin-bottom:10px;">
                                <div class="col-lg-12">
                                    <form id="upi_details_form" method="POST" action="{{route('payment.method.upi')}}">
                                            @csrf
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="mb-3 row">


                                                        @if(old('default_payment',$paymentMethods->default_payment) == 'UPI')
                                                        <div class="mb-3 row">
                                                            <div class="col-lg-12">
                                                                <span class="badge badge-primary" style="padding-top: 4px;">Default Payment Method</span>
                                                            </div>
                                                        </div>
                                                        @endif


                                                            <label class="col-lg-4 col-form-label" for="upi_id">UPI ID</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" class="form-control" placeholder="UPI Id"
                                                                    name="upi_id" value="{{old('upi_id',$paymentMethods->upi_id)}}">
                                                                @error('upi_id')
                                                                <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                            <input type="hidden" class="form-control" 
                                            name="default_payment" value="{{old('default_payment',$paymentMethods->default_payment)}}">
                                                <button type="button" class="btn btn-primary" id="upiformsubmit">Save</button>
                                                <!-- <a href="" class="btn btn-primary">Back</a> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            

                            

                        

                            <div id="withdraw_amount" class="tab-pane fade" role="tabpanel">
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-lg-12">
                                    <form id="upi_details_form" method="POST" action="{{route('payment.method.withdraw')}}">
                                                @csrf
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-6">

                                                            <div class="mb-3 row">
                                                                <label class="col-lg-4 col-form-label" for="upi_id">Amount in wallet</label>
                                                                <div class="col-lg-6">
                                                                £{{$balance}}
                                                                </div>
                                                            </div>

                                                            <div class="mb-3 row">
                                                                <label class="col-lg-4 col-form-label" for="upi_id">Withdraw Amount</label>
                                                                <div class="col-lg-6">
                                                                    <input pattern="^\d*(\.\d{0,2})?$" type="text" class="form-control" placeholder="amount"
                                                                        name="amount" value="{{old('amount')}}">
                                                                    @error('amount')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary" >Withdraw</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>


                            <div id="withdraw_history" class="tab-pane fade" role="tabpanel">
                                <div class="row" style="margin-bottom:10px;">
                                    <div class="col-lg-12">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="withdraw_request_table" class="table table-striped table-responsive-sm"
                                                >
                                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Request Amount</th>
                                        <th>Request Date</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
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
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="upi_confirm">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="">
            <div class="modal-body">
                <h5>Do you want to make UPI as your default payment method?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="upi_default_yes">Yes</button>
                <button type="button" class="btn btn-primary" id="upi_default_no">No</button>
                <button type="button" class="btn btn-danger closebtn">Cancel</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="bank_confirm">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="">
            <div class="modal-body">
                <h5>Do you want to make bank account as your default payment method?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="bank_default_yes">Yes</button>
                <button type="button" class="btn btn-primary" id="bank_default_no">No</button>
                <button type="button" class="btn btn-danger closebtn">Cancel</button>
            </div>

        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    var table = $('#withdraw_request_table').DataTable({
        dom: '<"top-toolbar"lf>rtip',
            initComplete: function() {
                this.api().columns([3]).every(function() {
                    var column = this;
                    var website_type = $('#status')
                        .on('change', function() {
                            var val = $(this).val();
                            column.search(val).draw();
                        });

                });
            },
        processing: true,
        serverSide: true,
        ajax: "{{ route('payment.withdraw.history') }}",
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            
            {
                data: 'amount'
            },
            {
                data: 'created_at'
            },
            {
                data: 'status'
            },
            {
                data:'remarks'
            }
            
        ]

    });
    $("div.top-toolbar").css({
        "display": "flex",
        "justify-content": "space-between"
    });
    
    $("div.top-toolbar").append('<select id="status"><option value="">All</option><option value="COMPLETED">Completed</option><option value="PENDING">Pending</option><option value="DECLINED">Declined</option></select>');
});
</script>

<script>

$(document).ready(function() {

    


    $('#bankformsubmit').click(function() {
       var default_payment = $("#bank_details_form input[name=default_payment]").val();
       if(default_payment !=='BANK')
            $('#bank_confirm').modal('show');
        else
            $('#bank_details_form').submit();
    });
    $('#bank_default_yes').click(function() {

        $("#bank_details_form input[name=default_payment]").val('BANK');
        $('#confirm').modal('hide');
        $('#bank_details_form').submit();
    });
    $('#bank_default_no').click(function() {
        $('#confirm').modal('hide');
        $('#bank_details_form').submit();
    });




    $('#upiformsubmit').click(function() {
        var default_payment = $("#upi_details_form input[name=default_payment]").val();
        if(default_payment !=='UPI')
            $('#upi_confirm').modal('show');
        else
            $('#upi_details_form').submit();
    });
    $('#upi_default_yes').click(function() {
        $('#confirm').modal('hide');
        $("#upi_details_form input[name=default_payment]").val('UPI');
        $('#upi_details_form').submit();
    });
    $('#upi_default_no').click(function() {
        $('#confirm').modal('hide');
        $('#upi_details_form').submit();
    });




    $('.closebtn').click(function() {
        $('#bank_confirm').modal('hide');
        $('#upi_confirm').modal('hide');
    });


    



    $('#bank .page-link').attr('href', function(i, str) {
        
        return str + '#bank';
    });

    $('#upi .page-link').attr('href', function(i, str) {
        return str + '#upi';
    });

    $('#withdraw_amount .page-link').attr('href', function(i, str) {
        return str + '#withdraw_amount';
    });

    

    

    if (location.hash) {
        var tabID = location.hash;
        $('.nav-tabs a[href="' + tabID + '"]').tab('show')
    } else {
        $('.nav-tabs a[href="#bank"]').tab('show')
    }


    $('.nav-item .btn').click(function() {
        window.location.href = '{{url()->current()}}' + this.getAttribute("href")
    });
});

</script>
@endsection