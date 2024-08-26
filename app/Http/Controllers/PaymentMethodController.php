<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentPaymentMethods;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BankRequest;
use App\Http\Requests\UpiRequest;
use App\Http\Requests\WithdrawaAmountRequest;
use App\Models\WalletTransaction;
use App\Models\StudentWithdrawal;
use DataTables;

class PaymentMethodController extends Controller
{

    public function index(Request $request)
    {

        $credits = WalletTransaction::where('user_id', Auth::user()->id)->where('type','credit')->sum('amount');
        $debits = WalletTransaction::where('user_id', Auth::user()->id)->where('type','debit')->sum('amount');
        $balance = number_format($credits-$debits,2);
        $paymentMethods = StudentPaymentMethods::where('student_id', Auth::user()->id)->first();
        if(!$paymentMethods){
            $paymentMethods = new StudentPaymentMethods();
        }
        
        return view('payment_method.index',compact('paymentMethods','balance'));
    }


    public function store($request, $tab='#bank'){
        try{
            $data = $request->all();
            $data['student_id'] = Auth::user()->id;
            $where = ['student_id'=>Auth::user()->id];
            StudentPaymentMethods::updateOrCreate($where,
            $data);
            return redirect('/payment-method' . $tab)->with('success', 'Saved Successfully');
        }
        catch(\Exception $e){
            return redirect('/payment-method' . $tab)->with('error', $e->getMessage());
        }
    }

    public function bank(BankRequest $request)
    {
        return $this->store($request,'#bank');
    }

    public function upi(UpiRequest $request)
    {
        return $this->store($request,'#upi');
    }

    public function withdrawaAmount(WithdrawaAmountRequest $request)
    {
        try{
            $paymentMethod = StudentPaymentMethods::where('student_id', Auth::user()->id)->first();
            if(!$paymentMethod){
                return redirect('/payment-method' . '#withdraw_amount')
                ->withInput($request->all())
                ->with('error', 'Please add a payment method first');
            }

            $pending = StudentWithdrawal::where('student_id', Auth::user()->id)
            ->where('status','PENDING')
            ->first();
            if($pending){
                return redirect('/payment-method' . '#withdraw_amount')->withInput($request->all())
                ->with('error', 'Your last withdraw request is pending');
            }

            $credits = WalletTransaction::where('user_id', Auth::user()->id)->where('type','credit')->sum('amount');
            $debits = WalletTransaction::where('user_id', Auth::user()->id)->where('type','debit')->sum('amount');
            $balance = number_format($credits-$debits,2);

            if($balance == 0){
                return redirect('/payment-method' . '#withdraw_amount')
                ->withInput($request->all())
                ->with('error', 'Your balance is $'.$balance);
            }

            if($balance < $request->amount){
                return redirect('/payment-method' . '#withdraw_amount')
                ->withInput($request->all())
                ->with('error', 'You can not withdraw more than $'.$balance);
            }

            StudentWithdrawal::Create([
                'student_id'=>Auth::user()->id,
                'amount'=>$request->amount,
                'wallet_balance'=>(float) $balance
            ]);
            return redirect('/payment-method' . '#withdraw_amount')->with('success', 'Your withdrawal request has been sent successfully!');
        }catch(\Exception $e){
            return redirect('/payment-method' .'#withdraw_amount')
            ->withInput($request->all())
            ->with('error', $e->getMessage());
        }
        
    }

    public function withdrawHistory()
    {

            $studentWithdrawal = StudentWithdrawal::where('student_id', Auth::user()->id)->orderBy('id', 'desc');
            return DataTables::eloquent($studentWithdrawal)
            ->addIndexColumn()
            ->addColumn('created_at', function($row) {
                return \Carbon\Carbon::parse($row->created_at)->format('d/m/Y');
            })

            ->addColumn('amount', function($row) {
                return '$'.$row->amount;
            })

            ->addColumn('status', function($row) {
                if ($row->status == 'COMPLETED') {
                    return '<span class="badge bg-success" style="min-width: 80px;">Completed</span>';
                }else if ($row->status == 'DECLINED') {
                    return '<span class="badge bg-danger" style="min-width: 80px;">Declined</span>';
                }
                else {
                    return '<span class="badge bg-primary" style="min-width: 80px;">Pending</span>';
                } 
            })
            
            ->filterColumn('student_name', function($query, $keyword) {
                $query->whereHas('student', fn($q) => $q->where('first_name', 'LIKE', '%' . $keyword . '%'));
            })
            ->filterColumn('status', function($query, $keyword) {
                $query->where('status', $_GET['columns'][3]['search']['value']);
            })
            ->rawColumns(['status'])
            ->toJson();
    }


    

    
}