<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceRating;
use App\Models\ServiceFaq;
use App\Models\ServiceWhyEducrafter;
use App\Models\ServiceSeo;
use App\Models\ServiceSpecifications;
use App\Models\ServiceHowWork;
use App\Models\Pages;
use View;
class PageController extends Controller
{
    public function index($page_sku=''){
        $data['pages']   =   Pages::where('page_sku',$page_sku)->first()->toArray();
        return view('pages',$data);
        
    }
    public function terms_condtion(){
		$data['page'] = Service::where(array('service_name'=>'Terms and conditions','website_type'=>'Educrafter','type'=>'PAGE'))->first();
		
        return view('pages',$data);
    }
	public function privacy_policy(){
		$data['page'] = Service::where(array('service_name'=>'Privacy policy','website_type'=>'Educrafter','type'=>'PAGE'))->first();
		
        return view('pages',$data);
    }
	public function refund_policy(){
		$data['page'] = Service::where(array('service_name'=>'Refund policy','website_type'=>'Educrafter','type'=>'PAGE'))->first();
		
        return view('pages',$data);
    }
	public function cookies_policy(){
		$data['page'] = Service::where(array('service_name'=>'Cookies policy','website_type'=>'Educrafter','type'=>'PAGE'))->first();
		
        return view('pages',$data);
    }
	
	
	
	public function why_us()
    {
        return view('why_us');
    }
    public function about_us()
    {
        return view('about_us');
    }
    public function refer_friend()
    {
        $page = Service::where('service_name', 'Refer Friend')->first();
        $serviceRating = ServiceRating::where('service_id', $page->id)->get();
        return view('refer_friend', compact('serviceRating'));
    }
    public function faq()
    {
        $data = array();
        return view('faq', $data);
    }
    public function services()
    {
        $page = Service::where(array('service_name'=>'Services','website_type'=>'Educrafter','type'=>'PAGE'))->first();
        $pageRating = ServiceRating::where('service_id', $page->id)->get();
        $faq_page = ServiceFaq::where('service_id', $page->id)->get();
        View::share('title', $page->page_title);
        View::share('description', $page->seo_description);
        return view('services', compact('page', 'pageRating', 'faq_page'));
    }
	public function contact_us()
    {
        return view('contact_us');
    }
	
	
}
