<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\DealCategory;


class OffersController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $homeDeals = Deal::where('show_on_home',1)->get();

        $dealCategories = DealCategory::all();

        return view('offers/index',compact('homeDeals','dealCategories'));
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
        
        $dealsQuery = Deal::where(function($q) use ($keyword, $category){
            if($keyword){
                $q->where('title','LIKE', "%$keyword%");
            }
            if($category && $category!='All'){
                $q->where('deal_category', $category);
            }
        });
        
        $deals = $dealsQuery->get();
        return view('offers/ajax_list',compact('deals'));
    }


}
