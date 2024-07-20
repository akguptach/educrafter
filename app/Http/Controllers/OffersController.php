<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Deal;


class OffersController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $homeDeals = Deal::where('show_on_home',1)->get();
        return view('offers/index',compact('homeDeals'));
    }


    public function details($id)
    {
        $deal = Deal::where('id',$id)->first();
        return view('offers/details', compact('deal'));
    }

    public function ajaxList(Request $request)
    {
        $keyword = $request->get('keyword');
        $category = $request->get('category');
        
        $dealsQuery = Deal::where('show_on_home',0);
        
        if($keyword){
            $dealsQuery->where('title','LIKE', "%$keyword%");
        }
        if($category && $category!='All'){
            $dealsQuery->whereHas('category',function($q) use ($category){
                $q->where('category_name','LIKE', "%$category%");
            });
        }
        $deals = $dealsQuery->get();
        return view('offers/ajax_list',compact('deals'));
    }


}
