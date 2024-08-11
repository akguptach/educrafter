<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
class BlogController extends Controller
{
    public function index(){
        $website_id = env('WEBSITE_ID');

        $data['categories'] = BlogCategory::where('status', 'active')->get();
        $data['blogs']   =   Blog::with('category')->where('website_id',$website_id)->latest('blog_date')->paginate(6);
        return view('blog',$data);
    }



    public function view($category, $blog_sku){

        $blog = Blog::where('blog_sku',$blog_sku)->first();
        //print_r($blog); die;
        return view('blog_view',array('blog'=>$blog));
    }


    public function ajaxList(Request $request)
    {
        $keyword = $request->get('keyword');
        $category = $request->get('category');
        
        $blogQuery = Blog::whereHas('category',function($q){
            $q->where('status','active');
        })
        
        ->where(function($q) use ($keyword, $category){
            if($keyword){
                $q->where('title','LIKE', "%$keyword%");
            }
            if($category && $category!='All'){
                $q->where('category_id', $category);
            }
        });
        
        $blogs = $blogQuery->get();
        return view('ajax_list',compact('blogs'));
    }

}