<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceSeo;
use App\Models\ServiceRating;
use App\Models\ServiceSpecifications;
use App\Models\Expert;

class ServicesController extends Controller
{
    public function __construct()
    {
    }
    public function servicesIndex($slug)
    {
        $data = ServiceSeo::where('seo_url_slug', $slug)->first();

        $experts = Expert::with(['subjects'=>function($q){
            $q->where('show_on_home', 1)->orderBy('subject_number');
        }])->where('show_on_home', 1)->get();
        //echo "<pre>"; print_r($experts); die;

        if($data){
            \View::share('title', ($data && $data->seo_meta) ? $data->seo_meta : '');
            \View::share('description', ($data && $data->seo_description) ? $data->seo_description : '');
            \View::share('seo_keywords', ($data && $data->seo_keywords) ? $data->seo_keywords : '');
            \View::share('og_image', ($data && $data->og_image) ? $data->og_image : '');
            \View::share('og_url', ($data && $data->seo_url_slug) ? $data->seo_url_slug : '');
            return view('services/index', compact('data','experts'));
        }else{
            return view('errors/404'); 
        }
    }
}
