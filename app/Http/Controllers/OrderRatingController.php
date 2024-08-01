<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;



class OrderRatingController extends Controller
{


    public function __construct()
    {
    }

    public function saveRatings(Request $request)
    {
        
        $data = $request->all();
        $data['student_id'] = Auth::user()->id;
        OrderRating::Create($data);
        return redirect(route('order.transactions') . '#complete-orders')->with('status', 'Rating has been saved');
    }

    
    
}