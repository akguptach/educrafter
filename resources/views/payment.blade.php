@extends('layout.app')
@section('content')
<main>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-6 mx-auto">
                <form action="{{ route('pay') }}" role="form" method="POST">
                    {{ csrf_field() }}
                    <div class="order-summary os-theme my-5">
                        <input type="hidden" name="order_id" value="{{ $order_id }}">
                        <h2>Order summary</h2>
                        <div class="row">
                            <div class="col-6">
                                <p>Subject</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end subject_div">
                                    {{ $order->subject->subject_name }}
                                </p>
                            </div>
                        </div>
    					<div class="row align-items-end">
                            <div class="col-6">
                                <p>Referencing Style</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end referencing_style_div">
                                    {{ $order->referencingStyle->style }}
                                </p>
                            </div>
                        </div>
    					<div class="row align-items-end">
                            <div class="col-6">
                                <p>Task type</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end task_type_div">
                                    {{ $order->taskType->type_name }}
                                </p>
                            </div>
                        </div>
    					<div class="row align-items-end">
                            <div class="col-6">
                                <p>Word count</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end no_of_words_div">
                                    {{ $order->no_of_words }}
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-6">
                                <p>Level of study</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end studylabel_div">
                                    {{ $order->studyLevel->level_name }}
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-6">
                                <p>Grade required</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end grade_div">
                                    {{ $order->grade->grade_name }}
                                </p>
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col-6">
                                <p>Delivery At</p>
                            </div>
                            <div class="col-6">
                                <p class="text-end delivery_at_div">
                                    {{ $order->delivery_date }}
                                </p>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <p class="text-tp">Total Price:</p>
                            </div>
                            <div class="col-6">
                                <p class="text-ta text-end total_price">
                                    {{ $order->price }} {{ $order->currency_code }}
                                </p>
                            </div>
                        </div>
                        <hr class="opacity-25">
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
    					<button type="submit" data-bs-toggle="modal" class="btn btn-primary w-100" id="btn_checkout" name="btn_checkout">Pay Now
    					</button>
				    </div>
                </form>
                <script src="https://js.stripe.com/v3/"></script>
            </div>
        </div>
    </div>
</main>
@endsection
@push('js')
    <script src="https://js.stripe.com/v3/"></script>
@endpush