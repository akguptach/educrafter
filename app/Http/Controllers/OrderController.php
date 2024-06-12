<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grades;
use App\Models\Level_study;
use App\Models\Orders;
use App\Models\Referencing;
use App\Models\Subjects;
use App\Models\Task_types;
use App\Models\Website;
use App\Models\Referral;
use App\Models\Coupon;
use App\Models\CouponCodeUses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Response;
use Validator;
use App\Services\OrderService;
use App\Http\Requests\OrderRequestMessageRequest;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


class OrderController extends Controller
{


    public function __construct(protected OrderService $orderService)
    {
    }

    public function index()
    {
        $data['subjects'] = Subjects::orderBy('subject_name', 'ASC')->get()->toArray();
        //$data['topics']     =   Study_labels::orderBy('id','desc')->get()->toArray();
        $data['task_types'] = Task_types::where('website_type', 'Essay')->orderBy('id', 'desc')->get()->toArray();
        $data['levels'] = Level_study::where('website_type', 'Essay')->orderBy('id', 'desc')->get()->toArray();
        $data['grades'] = Grades::orderBy('id', 'desc')->get()->toArray();
        $data['referencings'] = Referencing::orderBy('id', 'desc')->get()->toArray();
        if (session()->has('attachment')) {
            session()->forget('attachment');
        }
        
        return view('order', $data);
    }

    public function validateCouponCode(Request $request)
    {
        $couponCode  = isset($request->coupon_code)?$request->coupon_code:'';
        if(!$couponCode)
            return response()->json(['message'=>'Please enter coupon code'], 422);

        $date = Carbon::now();
        $coupon = Coupon::where('code',$couponCode)
        ->whereDate('start_date', '<=', $date)
        ->whereDate('end_date', '>=', $date)
        ->first();
        if(!$coupon)
            return response()->json(['message'=>'Please use a valid coupon code'], 422);
        else if($coupon->max_uses == $coupon->num_uses){
            return response()->json(['message'=>'Please use a valid coupon code'], 422);
        }
        $uses = CouponCodeUses::where('coupon_id',$coupon->id)->where('user_id',Auth::user()->id)->count();
        if($uses == $coupon->limit_per_users){
            return response()->json(['message'=>'You already have used this coupon code'], 422);
        }
        return response()->json(['message'=>'Coupon code is valid'], 200);

    }

    public function checkprice(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'subject_id' => 'required|numeric',
            'referencing_style_id' => 'required|numeric',
            'task_type_id' => 'required|numeric',
            'no_of_words' => 'required|numeric',
            'studylabel_id' => 'required|numeric',
            'grade_id' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return Response::json(array('success' => 'false', 'price' => array(), 'message' => $validator->errors()));
        }
        $website_id = env('WEBSITE_ID');;
        $subject_id = $request->subject_id;
        $referencing_style_id = $request->referencing_style_id;
        $task_type_id = $request->task_type_id;
        $no_of_words = $request->no_of_words;
        $labelofstudy_id = $request->studylabel_id;
        $grade_id = $request->grade_id;
        $delivery_date = $request->delivery_date;

        $websiteArr = Website::where('id', $website_id)->first()->toArray(); //%
        $subjectArr = Subjects::where('id', $subject_id)->first()->toArray();
        $referencingArr = Referencing::where('id', $referencing_style_id)->first()->toArray();
        $labelofstudyArr = Level_study::where('id', $labelofstudy_id)->first()->toArray(); //%
        $task_typeArr = Task_types::where('id', $task_type_id)->first()->toArray(); //%
        $gradeArr = Grades::where('id', $grade_id)->first()->toArray(); //%

        if ($no_of_words < $websiteArr['no_words']) {
            $no_of_words = $websiteArr['no_words'];
        }
        //echo $no_of_words.'=='.$websiteArr['no_words'];

        $total1 = $subjectArr['price'] + (($no_of_words - $websiteArr['no_words']) * $subjectArr['additional_word_rate']);

        $total1 = $total1 + ($total1 * $websiteArr['subject_price'] / 100);

        //echo $websiteArr['price'].'=='.$studylabelArr['price'].'=='.$task_typeArr['price'].'=='.$gradeArr['price'];
        //echo '<br>';
        $total_percent = $labelofstudyArr['price'] + $task_typeArr['price'] + $gradeArr['price'];

        $total = $total1 + round(($total1 * $total_percent) / 100);

        $arrWP = explode(',', $websiteArr['website_price']);

        $total2 = ($total * $arrWP[0]) / 100;

        $arrP = array();
        $arrP['hour1'] = 100;
        $arrP['delivery_date'] = $delivery_date;
        $checked='';
        $arrP['hour2'] = $total2 . $websiteArr['currency'];
        if ($delivery_date == '12 hours') {
            
            $str = '<li class="col-12" style="height: 60px;"><input class="delivery_at" type="radio" value="12 hours" name="custom_date_at" rel="' . $websiteArr['currency_sign'] . $total2 . '" checked /><label for="custom_date_at" >12 Hours<br>' . $websiteArr['currency_sign'] . $total2 . '</label></li>';

            $arrP['delivery_date_price'] = $websiteArr['currency_sign'] . $total2;
        } else {
            $str = '<li class="col-12" style="height: 60px;"><input class="delivery_at" type="radio" value="12 hours" name="custom_date_at" rel="' . $websiteArr['currency_sign'] . $total2 . '" /><label for="custom_date_at" >12 Hours<br>' . $websiteArr['currency_sign'] . $total2 . '</label></li>';
        }
        if ($delivery_date == 'NA') {
            $arrP['delivery_date_price'] = 0;
        }

        $j = 1;
        for ($i = 1; $i < 25; $i++) {
            $total1 = 0;
            /* if($j==1)
              {
              $total1=round(($total*$arrWP[1])/100);
              }elseif($j==2)
              {
              $total1=round(($total*$arrWP[2])/100);
              }elseif($j==3)
              {
              $total1=round(($total*$arrWP[3])/100);
              }else{ */
            $total1 = round(($total * $arrWP[$j]) / 100);
            //}

            if ($j == 22) {

                $checked = '';
                if ($delivery_date == '30 days') {
                    $checked = 'checked';
                }
                $str .= '<li class="col-2" style="height: 82px;margin-top:2px;"><input class="delivery_at" type="radio" value="30 days" name="custom_date_at" rel="' . $websiteArr['currency_sign'] . $total1 . '" style="height:80px;" '.$checked.' /><label for="custom_date_at" >
					<span style="float: left;width: 100%;font-size: 12px;">Delivered in</span>
					<span style="float: left;width: 100%;font-weight: bold;font-size: 20px;">30 Days</span>
					<span style="float: left;width: 100%;font-size:14px;color:#0a58ca;">' . $total1 . $websiteArr['currency_sign'] . '</span>
					</label></li>';
                $arrP['delivery_date_price'] = $websiteArr['currency_sign'] . $total1;
            } elseif ($j == 23) {

                $checked = '';
                if ($delivery_date == '45 days') {
                    $checked = 'checked';
                }
                $str .= '<li class="col-2" style="height: 82px;margin-top:2px;"><input class="delivery_at" type="radio" value="45 days" name="custom_date_at" rel="' . $websiteArr['currency_sign'] . $total1 . '" style="height:80px;" '.$checked.' /><label for="custom_date_at" >
					<span style="float: left;width: 100%;font-size: 12px;">Delivered in</span>
					<span style="float: left;width: 100%;font-weight: bold;font-size: 20px;">45 Days</span>
					<span style="float: left;width: 100%;font-size:14px;color:#0a58ca;">' . $total1 . $websiteArr['currency_sign'] . '</span>
					</label></li>';
                $arrP['delivery_date_price'] = $websiteArr['currency_sign'] . $total1;
            } elseif ($j == 24) {

                $checked = '';
                if ($delivery_date == '60 days') {
                    $checked = 'checked';
                }
                $str .= '<li class="col-2" style="height: 82px;margin-top:2px;"><input class="delivery_at" type="radio" value="60 days" name="custom_date_at" rel="' . $websiteArr['currency_sign'] . $total1 . '" style="height:80px;" '.$checked.' /><label for="custom_date_at" >
					<span style="float: left;width: 100%;font-size: 12px;">Delivered in</span>
					<span style="float: left;width: 100%;font-weight: bold;font-size: 20px;">60 Days</span>
					<span style="float: left;width: 100%;font-size:14px;color:#0a58ca;">' . $total1 . $websiteArr['currency_sign'] . '</span>
					</label></li>';

                $arrP['delivery_date_price'] = $websiteArr['currency_sign'] . $total1;
            } else {
                $date = date("Y-m-d", strtotime(date('Y-m-d') . " +$i days"));

                //M(D)
                $dd = date("d", strtotime(date('Y-m-d') . " +$i days"));
                $D1 = date("D", strtotime(date('Y-m-d') . " +$i days"));
                if ($delivery_date == $date) {
 
                    $str .= '<li class="col-2" style="height: 82px;margin-top:2px;"><input class="delivery_at" type="radio" value="' . $date . '" name="custom_date_at" rel="' . $total1 . ' ' . $websiteArr['currency_sign'] . '" style="height:80px;" checked /><label for="custom_date_at" >
					<span style="float: left;width: 100%;font-size: 12px;">' . $D1 . '</span>
					<span style="float: left;width: 100%;font-weight: bold;font-size: 20px;">' . $dd . '</span>
					<span style="float: left;width: 100%;font-size:14px;color:#0a58ca;">' . $total1 . $websiteArr['currency_sign'] . '</span>
					</label></li>';
                    $arrP['delivery_date_price'] = $websiteArr['currency_sign'] . $total1;
                } else {

                    $str .= '<li class="col-2" style="height: 82px;margin-top:2px;"><input class="delivery_at" type="radio" value="' . $date . '" name="custom_date_at" rel="' . $websiteArr['currency_sign'] . $total1 . '" style="height:80px;" />
					<label for="custom_date_at" >
					<span style="float: left;width: 100%;font-size: 12px;">' . $D1 . '</span>
					<span style="float: left;width: 100%;font-weight: bold;font-size: 20px;">' . $dd . '</span>
					<span style="float: left;width: 100%;font-size:14px;color:#0a58ca;">' . $websiteArr['currency_sign'] . $total1 . '</span>
					</label></li>';
                    if ($delivery_date != 'NA' && $delivery_date != '12 hours') {
                        $arrP['delivery_date_price'] = $websiteArr['currency_sign'] . $total1;
                    }
                }
                
            }



            $j++;
        }
        if($request->delivery_price){
            $arrP['delivery_date_price'] = $request->delivery_price;
            $price1 = $request->delivery_price;
        }else{
            $price1 = $websiteArr['currency_sign'] . $total1;
        }


        // apply coupon
        $discount = 0;
        $discountprice = 0;
        $currency = '';
        
        if($price1 > 0){
            preg_match('/^(\D+)(\d|\d[.,\d]+)$/', $price1, $match);
            $currency = $match[1];
            $discountprice = $match[2];
        }
        if($request->valid_coupon_code){
            $amount = $match[2];
            $discount = $this->applyCoupon($request->valid_coupon_code, $amount);
            $discountprice = $amount-$discount;
        }

        $arrP['custom_date'] = $str;
        return Response::json(array('success' => 'true', 'price' => $arrP, 'price1' => $price1,'discount'=>$discount,'discountprice'=>$currency.$discountprice));
    }

    public function applyCoupon($valid_coupon_code, $amount)
    {
        $discount = 0;
        $date = Carbon::now();
        $coupon = Coupon::where('code',$valid_coupon_code)
        ->whereDate('start_date', '<=', $date)
        ->whereDate('end_date', '>=', $date)
        ->first();
        if($coupon){
            if($coupon->reduction_type == 'FIXED'){
                $discount = $coupon->reduction_amount;
            }else if($coupon->reduction_type == 'PERCENTAGE'){
                $discount = ($amount*$coupon->reduction_amount)/100;
                
            }
            return $discount;
        }

    }

    public function processAttachment(Request $request)
    {


        if (session()->has('attachment')) {
            session()->forget('attachment');
        }
        $type = $request->type;
        $attachment = $request->attachment;
        $data = [];
        if ($type == 'url') {
            $data['type'] = $type;
            $data['attachment'] = $attachment;
            session()->put('attachment', $data);
        }
        if ($type == 'file') {
            $attachmentList = [];
            for ($i = 0; $i < $request->total_file; $i++) {
                $key = 'attachment_' . $i;
                $attachment = $request->$key;
                $attachmentName = time() . '.' . $attachment->getClientOriginalExtension();
                $attachment->move(public_path('images/uploads/attachment/'), $attachmentName);
                $attachmentList[] = env('APP_URL', '/') . 'images/uploads/attachment/' . $attachmentName;
            }
            $data['type'] = $type;
            $data['attachment'] = $attachmentList;
            session()->put('attachment', $data);
        }
        if (session()->has('attachment')) {
            return session('attachment');
        }
    }

    public function create(Request $request)
    {

        $website_id = env('WEBSITE_ID');

        $validator = Validator::make($request->all(), [
            //'title' => 'required',
            //'task' => 'required',
            'subject_id' => 'required',
            'referencing_style_id' => 'required',
            'task_type_id' => 'required',
            'no_of_words' => 'required',
            'studylabel_id' => 'required',
            'grade_id' => 'required',
            'delivery_date' => 'required',
            'delivery_price' => 'required',
            //'taskFile' => 'required|mimes:pdf,doc,zip,jpg,png|max:5120',
        ]);

        if ($validator->fails()) {

            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }

        if (!Auth::check()) {
            $orderRequestData = $request->all();
            $orderRequestData['refer'] = route('order');
            $request->session()->put('orderRequestData', $orderRequestData);
            $request->session()->save();
            return response()->json(['status' => 'Login require'], 401);
        }

        $order = new Orders();



        // Store the file in storage\app\public folder
        //$file = $request->file('taskFile');
        //$fileName = $file->getClientOriginalName();
        //$filePath = $file->store('uploads/easy_help/', 'public');
        // Store file information in the database
        //$uploadedFile = new UploadedFile(); ̰
        //$uploadedFile->filename = $fileName;
        //$uploadedFile->original_name = $file->getClientOriginalName();
        //$uploadedFile->file_path = $filePath;


        $attachment = $request->uploadedFile;

        if($request->title)
		{
			$order->title = $request->title;
		}
        
        if($request->task)
		{
			$order->task = $request->task;
		}
        

        $order->subject_id = $request->subject_id;
        $order->website_id = $website_id;
        $order->referencing_style_id = $request->referencing_style_id;
        $order->task_type_id = $request->task_type_id;
        $order->no_of_words = $request->no_of_words;
        $order->grade_id = $request->grade_id;
        $order->studylabel_id = $request->studylabel_id;

        if (str_contains($request->delivery_date, 'days')) {
            $delivery_date = date('Y-m-d', strtotime($request->delivery_date));
        } else {
            $delivery_date  = $request->delivery_date;
        }
        $order->delivery_date = $delivery_date;
        //$arrPrice = explode(' ', $request->delivery_price);

        
        $string = preg_match('/^(\D+)(\d|\d[.,\d]+)$/', $request->delivery_price, $match);
        //print_r($match); die;
        $amount = $match[2];
        if($request->valid_coupon_code){
            

            $date = Carbon::now();
            $coupon = Coupon::where('code',$request->valid_coupon_code)
            ->whereDate('start_date', '<=', $date)
            ->whereDate('end_date', '>=', $date)
            ->first();

            $uses = CouponCodeUses::where('coupon_id',$coupon->id)->where('user_id',Auth::user()->id)->count();
            if($coupon && $coupon->max_uses > $coupon->num_uses && $uses < $coupon->limit_per_users){
                $discount = $this->applyCoupon($request->valid_coupon_code, $amount);
                $order->gross_price  = $amount - $discount;
                $order->coupon_code_id = $coupon->id;
            } else{
                $order->gross_price = $amount; 
            }  
        }else{
            
            $order->gross_price = $amount;
        }
        $order->price = $amount;
        $order->currency_code = $match[1];
        if($attachment)
		{
			$order->fileupload = $attachment;
		}

        $websiteArr = Website::where('id', $website_id)->first()->toArray();

        $order->student_id = Auth::id();

        $order->save();
        $order_number = $websiteArr['order_prefix'] . str_pad($order->id, 3, 0, STR_PAD_LEFT);

        DB::table('orders')->updateOrInsert(
            [
                'id' => $order->id
            ],
            [
                'id' => $order->id,
                'order_number' => $order_number
            ]
        );

        $url = env('500_URL','https://500m.in').'/orders';
        \App\Models\StudentOrderMessage::Create([
            'order_id'=>$order->id,
            'sendertable_id' => Auth::user()->id,
            'sendertable_type' => \App\Models\Student::class,
            'receivertable_id' => 1,
            'receivertable_type' => \App\Models\User::class,
            'message' => 'Your have received new order',
            'url'=>$url,
            'type'=>'notification'
        ]);

        $receiver = \App\Models\User::find(1);
        $data = ['name' => $receiver->name,'url'=>$url,'messageContent'=>'Your have received new order'];
        try {
            Mail::send('email.500.message', $data, function ($message) use ($data, $receiver) {
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $message->subject("Order Received");
                $message->to(env('ADMIN_EMAIL', $receiver->email));
            });

        } catch (\Exception $e) {
            echo $e; die;
        } 



        //$token = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
        return response()->json(
            [
                'status' => 'order added successfully.',
                'order_id' => \Crypt::encrypt($order->id)
            ]
        );
    }

    public function transactions(Request $request)
    {
        $user_id = Auth::id();
        $keyword  = isset($request->keyword)?$request->keyword:'';

        $delivered = Orders::where('student_id', $user_id)
        ->where(function($q) use ($keyword){
            if($keyword){
                $q->whereHas('subject',function($sq) use ($keyword){
                    $sq->where('subject_name','like','%'.$keyword.'%');
                });
                $q->orWhere('no_of_words','like','%'.$keyword.'%');
            }
        })
        ->where('status', 'DELIVERED')->paginate(10);

        $inprocess = Orders::where('student_id', $user_id)
        ->where(function($q) use ($keyword){
            if($keyword){
                $q->whereHas('subject',function($sq) use ($keyword){
                    $sq->where('subject_name','like','%'.$keyword.'%');
                });
                $q->orWhere('no_of_words','like','%'.$keyword.'%');
            }
        })
        ->where('payment_status', 'Success')->paginate(10);

        $enquiries = Orders::where('student_id', $user_id)
        ->where(function($q) use ($keyword){
            if($keyword){
                $q->whereHas('subject',function($sq) use ($keyword){
                    $sq->where('subject_name','like','%'.$keyword.'%');
                });
                $q->orWhere('no_of_words','like','%'.$keyword.'%');
            }
        })
        ->where('payment_status', 'Failed')->paginate(10);
        

            

        return view('transactions', compact('delivered','inprocess','enquiries','keyword'));
    }

    public function vieworder(OrderRequestMessageRequest $request, $id)
    {
        $user_id = Auth::id();
        if ($request->isMethod('post')) {
            $result = $this->orderService->saveOrderMessage($request, $id);
            return redirect()->back()->with($result['status'], $result['message']);
        }

        DB::table('student_order_messages')
            ->where('order_id', $id)
            ->where('receivertable_type', \App\Models\Student::class)
            ->where('receivertable_id', Auth::user()->id)
            ->update(array('read' => 1));

        return view('order_details', $this->orderService->orderDetails($id, $user_id));
    }

    public function refer_friend()
    {

        $referrals = Referral::where('referred_by',Auth::user()->id)->count();
        $earned = Referral::where('referred_by',Auth::user()->id)->sum('earned');
        $referralsList = Referral::with(['student' => fn($student) => $student->withCount('orders')])
        ->where('referred_by',Auth::user()->id)->get();
        $totalOrders = 0;
        foreach($referralsList as $referralsData){
            $totalOrders = $totalOrders+$referralsData->student->orders_count;
        }
        $referralCode = Auth::user()->referral_code;
        $data = [
            'referral_code'=>$referralCode,
            'total_orders'=>$totalOrders,
            'referrals'=>$referrals,
            'earned'=>$earned
        ];
        return view('refer_friend_individual', $data);

    }

    public function statements()
    {
        $data = array();
        $orders = Orders::with(['payment'])->whereHas('payment')->where('student_id',Auth::user()->id)->paginate(10);
        return view('statements', compact('orders'));
    }
}