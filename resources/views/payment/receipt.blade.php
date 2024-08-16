@extends('layout.student')
@section('content')
    <div class="content-body">
            <!-- row -->
        <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Order Receipt</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Orders</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Order Receipt</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-lg-12 mb-3">

                        <div class="card mt-3">
                            <div class="card-header"> Invoice <strong>{{$order?->payment?->created_at}}</strong> 
									<span class="float-right">
										<strong>Payment Status:</strong> {{$order?->payment?->payment_status}} 
									</span> 
									<span class="float-right">
										<strong>Transection:</strong>{{$order?->payment?->transaction_id}}
									</span> 
							</div>
									
									
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table class="table table-striped text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="center">#</th>
                                                <th>Fees Type</th>
                                                <th>Frequency</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="center">1</td>
												<td class="left">Subject:</td>
                                                <td class="left strong">{{$order?->subject?->subject_name}}</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="center">2</td>
												<td class="left">Referencing Style:</td>
                                                <td class="left">{{$order?->referencingStyle?->style}}</td>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <td class="center">3</td>
												<td class="left">Task type:</td>
                                                <td class="left">{{$order?->taskType?->type_name}}</td>
                                                
                                               
                                            </tr>
                                            <tr>
                                                <td class="center">4</td>
												<td class="left">Word count:</td>
                                                <td class="left">{{$order?->no_of_words}}</td>
                                                
                                                
                                            </tr>
											<tr>
											    <td class="center">4</td>
												<td>Level of study</td>
												<td>{{$order?->studyLevel?->level_name}}</td>
												
											</tr>


											<tr>
											    <td class="center">4</td>
												<td>Grade required</td>
												<td>{{$order?->grade?->grade_name}}</td>
												
											</tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-5"> </div>
                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                        <table class="table table-clear">
                                            <tbody>
                                                <tr>
                                                    <td class="left"><strong>Subtotal</strong></td>
                                                    <td class="right">{{$order?->currency_code}}{{$order?->gross_price}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Coupon Discount (20%)</strong></td>
                                                    <td class="right"></td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Wallet use</strong></td>
                                                    <td class="right"></td>
                                                </tr>
                                                <tr>
                                                    <td class="left"><strong>Total</strong></td>
                                                    <td class="right"><strong>{{$order?->currency_code}}{{$order?->gross_price}}</strong></td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
								<div class="row">  
									<div class="col-lg-12 text-right">
										
										<button onclick="javascript:window.print();" class="btn btn-light" type="button"> <i class="fa fa-print"></i> Print </button>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
				</div>
					
            </div>
    </div>

	
	@endsection