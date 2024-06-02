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
use Mail;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index($page_sku = '')
    {
        $data['pages']   =   Pages::where('page_sku', $page_sku)->first()->toArray();
        return view('pages', $data);
    }
    public function terms_condtion()
    {
        $data['page'] = Service::where(array('service_name' => 'Terms and conditions', 'website_type' => 'Educrafter', 'type' => 'PAGE'))->first();

        return view('pages', $data);
    }
    public function privacy_policy()
    {
        $data['page'] = Service::where(array('service_name' => 'Privacy policy', 'website_type' => 'Educrafter', 'type' => 'PAGE'))->first();

        return view('pages', $data);
    }
    public function refund_policy()
    {
        $data['page'] = Service::where(array('service_name' => 'Refund policy', 'website_type' => 'Educrafter', 'type' => 'PAGE'))->first();

        return view('pages', $data);
    }
    public function cookies_policy()
    {
        $data['page'] = Service::where(array('service_name' => 'Cookies policy', 'website_type' => 'Educrafter', 'type' => 'PAGE'))->first();

        return view('pages', $data);
    }
    public function why_us()
    {
        return view('why_us');
    }
    public function about_us()
    {

        $page = ServiceSeo::where('seo_url_slug', 'about-us')->first();
        \View::share('title', ($page && $page->seo_meta) ? $page->seo_meta : '');
        \View::share('description', ($page && $page->seo_description) ? $page->seo_description : '');
        \View::share('seo_keywords', ($page && $page->seo_keywords) ? $page->seo_keywords : '');
        \View::share('og_image', ($page && $page->og_image) ? $page->og_image : '');
        \View::share('og_url', ($page && $page->seo_url_slug) ? $page->seo_url_slug : '');

        $data['page'] = Service::where(array('service_name' => 'About Us', 'website_type' => 'Educrafter', 'type' => 'PAGE'))->first();
        $data['AboutpageData'] = ServiceWhyEducrafter::where('service_id', $data['page']->id)->get();
        return view('about_us',$data);
    }


    public function refer_a_friend(Request $request)
    {

        if (!Auth::check()) {
            $refer_friend_data = $request->all();
            $refer_friend_data['refer'] = route('refer_friend');
            $request->session()->put('orderRequestData', $refer_friend_data);
            $request->session()->save();
            return response()->json(['status' => 'Login require'], 401);
        }
        $referralCode = Auth::user()->referral_code;
        $to = $request->email;

        Mail::send('email.refer-friend', ['referral_url'=>env('APP_URL').'refer/'.$referralCode, 'name'=>Auth::user()->first_name], function($message) use ($to){
            $message->to($to)
            ->subject('Refer Link');
        }
    );


        
    }

    public function refer_friend(Request $request)
    {

        
        $page = ServiceSeo::where('seo_url_slug', 'refer-friend')->first();
        $serviceRating = ServiceRating::where('service_id', $page->service_id)->get();
        $faq_page =   ServiceFaq::where('service_id', $page->service_id)->get();
        return view('refer_friend', compact('serviceRating', 'faq_page'));
    }
    public function faq()
    {
        $data = array();
        return view('faq', $data);
    }
    public function services()
    {
        $page = Service::where(array('service_name' => 'Services', 'website_type' => 'Educrafter', 'type' => 'PAGE'))->first();
        // Retrieve SEO data for the service page
        $data = ServiceSeo::where('seo_url_slug', 'services')->first();        // Share SEO data with the view
       
        $servicepageHowWork = ServiceHowWork::where('service_id', $page->id)->get();
        $servicePage = ServiceWhyEducrafter::where('service_id', $page->id)->get();
        $pageRating = ServiceRating::where('service_id', $page->id)->get();
        $faq_page = ServiceFaq::where('service_id', $page->id)->get();
        View::share('title', $page->page_title);
        View::share('description', $page->seo_description);
        return view('services', compact('page', 'pageRating', 'faq_page', 'servicePage', 'servicepageHowWork', 'data'));
    }
    public function contact_us()
    {
        return view('contact_us');
    }
}
