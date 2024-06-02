<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Referral;

use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Validator;
use Hash;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function create(Request $request)
    {

        

        //dd($request->all());
        $website_id = env('WEBSITE_ID');
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            //'email' => 'required|unique:student,email',
            'email' => ['required', 'email', Rule::unique('student', 'email')->where(function ($query) use ($website_id) {
                $query->where('website_id', '=', $website_id);
            }),],
            //'phone_number' => 'required|unique:student,phone_number',
            'phone_number' => ['required', Rule::unique('student', 'phone_number')->where(function ($query) use ($website_id) {
                $query->where('website_id', '=', $website_id);
            })],
            'password' => 'required|min:5',
            'confirm_password' => 'required|min:5',
        ]);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors(), 422);
        }
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->country_code = $request->country_code;
        $student->phone_number = $request->phone_number;
        $student->website_id = env('WEBSITE_ID');
        $student->password = Hash::make($request->password);
        $student->save();
        $student->referral_code = $student->id.time();
        $student->update();
        if(isset($request->referral_code)){

            
            $referredBy = Student::where('referral_code',$request->referral_code)->first();
            if($referredBy){
                
                Referral::Create([
                    'student_id'=>$student->id,
                    'referred_by'=>$referredBy->id,
                    'earned'=>50
                ]);
                
            }
        }

        $token = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
        $response = [];
        if ((session()->has('orderRequestData'))) {
            $orderRequestData = session('orderRequestData');
            $response['refer'] = $orderRequestData['refer'];
        }


        $data = ['url'=>'https://educrafter.co/login','student'=>$request->first_name];
        try {
            Mail::send('email.signup', $data, function ($message) use ($data, $request) {
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $message->subject("Signup");
                $message->to($request->email);
            });

        } catch (\Exception $e) {
            echo $e; die;
        }



        return $this->sendResponse($response, 'User details updated successfully.');
    }
    public function profile()
    {
        $data = [];
        $profile = auth()->user();      
        return view('profile', compact('data', 'profile'));
    }
    public function changepass()
    {
        $data = array();
        return view('changepass', $data);
    }
    public function updatePassword(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|min:5',
            'password' => 'required|min:5|confirmed',
        ]);
        // Add a custom validation rule to check the old password
        $validator->after(function ($validator) use ($request) {
            if (!\Hash::check($request->old_password, Auth::user()->password)) {
                $validator->errors()->add('old_password', 'The old password is incorrect.');
            }
        });
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // if($validator->fails()){
        //     return $this->sendError('Validation Error.', $validator->errors(), 422);
        // }
        // $student = new Student();
        $student = Student::find(auth()->user()->id);
        $student->password = Hash::make($request->password);
        $student->save();
        // auth()->logout();
        return back()->with('changepassmessage', 'Password changed successfully.');
    }
    public function updateProfile(Request $request)
    {
        $website_id = env('WEBSITE_ID');
        $rules['first_name'] = 'required|min:3';
        $rules['last_name'] = 'required';
        if (auth()->user()->email != $request->email) {
            $rules['email'] = [
                'required',
                'email',
                Rule::unique('student', 'email')->where(function ($query) use ($website_id) {
                    $query->where('website_id', '=', $website_id);
                }),
            ];
        }
        if (auth()->user()->phone_number != $request->phone_number) {
            $rules['phone_number'] = [
                'required',
                Rule::unique('student', 'phone_number')->where(function ($query) use ($website_id) {
                    $query->where('website_id', '=', $website_id);
                }),
            ];
        }
        $messages = [
            // 'title.required' => 'Specify the title of change log',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $student = Student::find(auth()->user()->id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->save();
        return back()->with('profileupdatedsmessage', 'Profile Updated successfully.');
    }
}