@extends('layout.app')
@section('content')
<main class="main-area fix">

    <!-- banner-area -->
    <section class="banner-area banner-bg-three tg-motion-effects">
        <div class="container">
            <div class="row justify-content-between align-items-start">
                <div class="col-lg-12">
                <h3>Payment {{$order?->payment?->payment_status}}</h3>
                    <table style="width:80%; margin:0 auto;" class="summary-table">

                    <tr>
                        <td width="50%">Transaction Id:</td>
                        <td id="summary_suject">{{$order?->payment?->transaction_id}}</td>
                    </tr>

                    <tr>
                        <td width="50%">Subject:</td>
                        <td id="summary_suject">{{$order?->subject?->subject_name}}</td>
                    </tr>

                    <tr>
                        <td>Referencing Style:</td>
                        <td id="summary_referencing_style">{{$order?->referencingStyle?->style}}</td>
                    </tr>


                    <tr>
                        <td>Task type:</td>
                        <td id="summary_task_type">{{$order?->taskType?->type_name}}</td>
                    </tr>


                    <tr>
                        <td>Word count:</td>
                        <td id="summary_word_count">{{$order?->no_of_words}}</td>
                    </tr>

                    <tr>
                        <td>Level of study</td>
                        <td id="summary_level_of_study">{{$order?->studyLevel?->level_name}}</td>
                    </tr>


                    <tr>
                        <td>Grade required</td>
                        <td id="summary_grade_required">{{$order?->grade?->grade_name}}</td>
                    </tr>


                    <tr>
                        <td>Delivery At</td>
                        <td id="summary_delivery_at">{{$order?->delivery_date}}</td>
                    </tr>

                    <tr>
                        <td>Total Price:</td>
                        <td id="summary_total_price">{{$order?->currency_code}}{{$order?->gross_price}}</td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="{{route('order.transactions')}}" class="btn btn-primary w-100">Continue to
                        Order</a></td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </section>
@endsection