<p>Hi {{$name}},
<p>Thanks for your order</p>
<br>
<table class="table table-striped text-nowrap" style="padding: 25px;">
   
    <tbody>
        <tr>
            
            <td class="left" style="width: 300px;;">Subject:</td>
            <td class="left strong">{{$order?->subject?->subject_name}}</td>


        </tr>
        <tr>
         
            <td class="left">Referencing Style:</td>
            <td class="left">{{$order?->referencingStyle?->style}}</td>


        </tr>
        <tr>
            
            <td class="left">Task type:</td>
            <td class="left">{{$order?->taskType?->type_name}}</td>


        </tr>
        <tr>
           
            <td class="left">Word count:</td>
            <td class="left">{{$order?->no_of_words}}</td>


        </tr>
        <tr>
           
            <td>Level of study</td>
            <td>{{$order?->studyLevel?->level_name}}</td>

        </tr>


        <tr>
           
            <td>Grade required</td>
            <td>{{$order?->grade?->grade_name}}</td>

        </tr>
    </tbody>
</table>

<table class="table table-clear" style="padding: 25px;">
    <tbody>

        <tr>
            <td class="left"><strong>Total</strong></td>
            <td class="right"><strong>{{$order?->currency_code}}{{$order?->price}}</strong></td>
        </tr>


        @if($order->coupon)
        <tr>
            <td class="left"><strong>Coupon Discount (
                    @if($order->coupon->reduction_type == 'PERCENTAGE')
                    @php($discount = ($order?->price * $order->coupon->reduction_amount)/100)
                    {{$order->coupon->reduction_amount}}%
                    @else
                    @php($discount = $order->coupon->reduction_amount)
                    {{$order->currency_code}}{{$order->coupon->reduction_amount}}
                    @endif
                    )</strong></td>
            <td class="right">{{$order?->currency_code}}{{$discount}}</td>
        </tr>
        @endif
        @if($order->wallet_paid)
        <tr>
            <td class="left"><strong>Wallet use</strong></td>
            <td class="right"><strong>{{$order?->currency_code}}{{$order?->wallet_paid}}</strong></td>
        </tr>
        @endif

        <tr>
            <td class="left"><strong>Subtotal</strong></td>
            <td class="right">{{$order?->currency_code}}{{$order?->gross_price}}</td>
        </tr>


    </tbody>
</table>