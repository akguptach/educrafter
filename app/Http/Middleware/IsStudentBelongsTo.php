<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class IsStudentBelongsTo
{

    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $count = 1;
        $currentRoute =  Route::current()->getName(); 
        if($currentRoute == 'order.vieworder'){
            $orderId = $request->route()->parameter('oid');
            $count = \App\Models\Orders::where('id',$orderId)->where('student_id',Auth::User()->id)->count();
           
        }else if($currentRoute == 'payment.failed' || $currentRoute == 'order.receipt'){
            $orderId = $request->route()->parameter('order_id');
            $count = \App\Models\Orders::where('id',$orderId)->where('student_id',Auth::User()->id)->count();
        }
        if($count > 0){
            return $next($request);
        }else{
            return redirect()->route('not.found.page');
        }
    }
}
