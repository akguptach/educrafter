<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session as Flash;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use Exception;
use Stripe\StripeClient;
use Stripe\Exception\CardException;
use App\Models\Orders;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    private $stripe;
    public function __construct()
    {
		

        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
		
    }

    public function index(Request $request)
    {
        $order_id = $request->id;
        if(Orders::where('id',\Crypt::decrypt($order_id))->exists()) {
            $order = Orders::where('id',\Crypt::decrypt($order_id))->first();
            
            // If Already Payment Done.
            if($order->payment_status == 'Success') {
                return redirect()->route('order');
            }
            
            $data=array();
            return view('payment',$data)->with(compact(['order_id','order']));
        }else {
            return redirect()->back();
        }
    }
    
    public function pay(Request $request)
    {
        if(session()->has('payment_object')) {
            session()->forget('payment_object');
        }
        if(session()->has('order_id')) {
            session()->forget('order_id');
        }
        $order_id = \Crypt::decrypt($request->order_id);
        if(Orders::where('id',$order_id)->exists()) {
            
            // Get Order Details.
            $order = Orders::where('id',$order_id)->first();
            
            // If Already Payment Done.
            if($order->payment_status == 'Success') {
                return redirect()->route('order');
            }
            
            // Set your Stripe API key.
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            
            // Get the payment amount and email address from the form.
            $amount = $order->gross_price * 100;
            $email = $order->student->email;
            $currency_code = strtolower($order->currency_code);


            

            $fmt = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
            $fmt->parseCurrency($currency_code."0.00", $curr);
        
            $checkout_session = Session::create([
                'customer_email' => $email,
                'line_items' => [[
                    'price_data' => [
                        'currency' => $curr,
                        'product_data' => [
                            'name' => $order->subject->subject_name,
                        ],
                        'unit_amount' => $amount,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('payment-validation'),
                'cancel_url' => route('payment-validation'),
            ]);
            
            session()->put('payment_object',$checkout_session);
            session()->put('payment_order_id',$order_id);
        
        return redirect($checkout_session->url);
            
        }else {
            return redirect()->back();
        }
    }
    
    public function paymentValidation()
    {
		

        

        if(session()->has('payment_object') && session()->has('payment_order_id') && Orders::where('id',session('payment_order_id'))->exists()) {
            

            $stripe = new StripeClient(config('stripe.api_keys.secret_key'));
            $result = $stripe->checkout->sessions->retrieve(
                session('payment_object')->id,
            []
            );
            if($result->payment_status == 'paid') {
                
                Orders::where('id',session('payment_order_id'))->update(
                    [
                        'payment_status' => 'Success',
                        'status' => 'INPROCESS'
                    ]
                );

                $order = Orders::where('id',session('payment_order_id'))->first();
                DB::table('coupon_code_uses')->insert(
                    [
                        'user_id' => Auth::user()->id, 
                        'coupon_id' => $order->coupon_code_id
                    ]
                );
                $coupon = Coupon::where('id',$order->coupon_code_id)->first();
                $coupon->num_uses = $coupon->num_uses+1;
                $coupon->save();


                DB::table('payment')->updateOrInsert(
                    [
                        'order_id' => session('payment_order_id')
                    ],
                    [
                        'order_id' => session('payment_order_id'),
                        'amount' => (int) ((session('payment_object')->amount_total)/100),
                        'payment_status' => 'Success',
                        'transaction_id' => session('payment_object')->id
                    ]
                );



                $url = env('500_URL','https://500m.in').'/orders';
                \App\Models\StudentOrderMessage::Create([
                    'order_id'=>session('payment_order_id'),
                    'sendertable_id' => \Auth::user()->id,
                    'sendertable_type' => \App\Models\Student::class,
                    'receivertable_id' => 1,
                    'receivertable_type' => \App\Models\User::class,
                    'message' => 'Payment of '.((session('payment_object')->amount_total)/100).' is received',
                    'url'=>$url,
                    'type'=>'notification'
                ]);

                $receiver = \App\Models\User::find(1);
                $data = ['name' => $receiver->name,'url'=>$url,'messageContent'=>'Payment of '.((session('payment_object')->amount_total)/100).' is received'];
                try {
                    \Illuminate\Support\Facades\Mail::send('email.500.message', $data, function ($message) use ($data, $receiver) {
                        $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                        $message->subject("Payment Received");
                        $message->to(env('ADMIN_EMAIL', $receiver->email));
                    });

                } catch (\Exception $e) {
                    echo $e; die;
                }


                Flash::flash('payment_status','Success');
            }else {
                // 
                Orders::where('id',session('payment_order_id'))->update(
                    [
                        'payment_status' => 'Failed'
                    ]
                );
                DB::table('payment')->updateOrInsert(
                    [
                        'order_id' => session('payment_order_id')
                    ],
                    [
                        'order_id' => session('payment_order_id'),
                        'amount' => (int) ((session('payment_object')->amount_total)/100),
                        'payment_status' => 'Failed',
                        'transaction_id' => session('payment_object')->id
                    ]
                );
                Flash::flash('payment_status','Success');
                //Flash::flash('payment_status','Failed');
            }
            $order = Orders::where('id',session('payment_order_id'))->first();
            Mail::send('email.order-data', ['order' => $order], function($message) {
                $message->to(env("ADMIN_EMAIL"))->subject('New Order');
            });
            return redirect()->route('order.transactions');
        }else {
            return redirect()->back();
        }
    }    
    public function payment(Request $request)
    {	
        
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required'
        ]);
        if ($validator->fails()) {
            $request->session()->flash('danger', $validator->errors()->first());
            return response()->redirectTo('/');
        }
        $token = $this->createToken($request);
		
        if (!empty($token['error'])) {
            $request->session()->flash('danger', $token['error']);
            return response()->redirectTo('/');
        }
        if (empty($token['id'])) {
            $request->session()->flash('danger', 'Payment failed.');
            return response()->redirectTo('/');
        }
        $charge = $this->createCharge($token['id'], 2000);
        if (!empty($charge) && $charge['status'] == 'succeeded') {
            $request->session()->flash('success', 'Payment completed.');
        } else {
            $request->session()->flash('danger', 'Payment failed.');
        }
        return response()->redirectTo('/');
    }

    private function createToken($cardData)
    {
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount)
    {
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'My first payment',
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}
