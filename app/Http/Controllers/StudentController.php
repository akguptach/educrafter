<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


use Validator;
use Hash;


class StudentController extends Controller
{
    public function create(Request $request)
    {
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
        $token = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);

        $response = [];
        if ((session()->has('orderRequestData'))) {
            $orderRequestData = session('orderRequestData');
            $response['refer'] = $orderRequestData['refer'];
        }
        return $this->sendResponse($response, 'User details updated successfully.');
    }
    public function profile()
    {
        $data = array();
        return view('profile', $data);
    }
    public function changepass()
    {
        $data = array();
        return view('changepass', $data);
    }
}
