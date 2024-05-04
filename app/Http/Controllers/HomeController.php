<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\Subjects;
use App\Models\Study_labels;
use App\Models\Task_types;
use App\Models\Level_study;
use App\Models\PagesRating;
use App\Models\Faq;
use App\Models\Grades;
use App\Models\ServiceSeo;
use App\Models\PagesFaq;
use App\Models\Referencing;
use Illuminate\Http\Request;
use View;
use DB;
class HomeController extends Controller
{
    public function index()
    {
        $data['subjects']   =   Subjects::orderBy('subject_name', 'ASC')->get()->toArray();
        //$data['topics']     =  Study_labels::orderBy('id','desc')->get()->toArray();
        $page = ServiceSeo::where('seo_url_slug', 'homepage')->first();
        // dd($page);
        $data['faq_page'] =   PagesFaq::where('page_id',$page->service_id)->get();
        $data['task_types'] =   Task_types::where('website_type', 'Essay Help')->orderBy('id', 'desc')->get()->toArray();
        $data['levels']     =   Level_study::where('website_type', 'Essay Help')->orderBy('id', 'desc')->get()->toArray();
        $data['grades']     =   Grades::orderBy('id', 'desc')->get()->toArray();
        $data['referencings']     =   Referencing::orderBy('id', 'desc')->get()->toArray();
        return view('home', $data);
    }
    public function contact_us()
    {
        return view('contact_us');
    }
    public function dateformat()
    {
        echo date('jS F, Y', strtotime($_GET['date']));
        die;
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
        $page = Pages::where('seo_url_slug', 'services')->first();
        $pageRating = PagesRating::where('page_id', $page->id)->get();
        return view('refer_friend');
    }
    public function faq()
    {
        $data = array();
        return view('faq', $data);
    }
    public function services()
    {
        $page = Pages::where('seo_url_slug', 'services')->first();
        $pageRating = PagesRating::where('page_id', $page->id)->get();
        $faq_page = PagesFaq::where('page_id', $page->id)->get();
        View::share('title', $page->page_title);
        View::share('description', $page->seo_description);
        return view('services', compact('page', 'pageRating', 'faq_page'));
    }
    // not in use    
    public function dissertation_writing_service()
    {
        return view('dissertation_service');
    }
    public function research_writing_service()
    {
        return view('Research_writing_service');
    }
    public function term_writing_service()
    {
        return view('term_writing_service');
    }
    public function admission_writing_service()
    {
        return view('Admission_writing_service');
    }
    public function edit_my_essay()
    {
        return view('Edit_my_essay');
    }
    public function coursework_writing_service()
    {
        return view('Coursework_writing_service');
    }
    public function physics_help()
    {
        return view('physics_help');
    }
    public function research_paper_online()
    {
        return view('research_paper_online');
    }
    public function dissertation_online()
    {
        return view('dissertation_online');
    }
    public function contanctSave(Request $request)
    {            
        $request->validate([
            'c_name' => 'required',
            'c_email_id' => 'required|email',
            'c_mobile_no' => 'required|numeric|min:10',
            'studylabel_id' => 'required',
            'c_message' => 'required',
        ]);
        $contactData = [
            'name' => $request->input('c_name'),
            'email' => $request->input('c_email_id'),
            'mobile_number' => $request->input('c_mobile_no'),
            'service' => $request->input('studylabel_id'),
            'write_us' => $request->input('c_message'),
        ];
        $contact = \App\Models\ContactForm::create($contactData);
        return response()->json([
            'status' => 2,
            'message' => 'Thanks For Enquery.We will touch you soon.',
        ]);
    }
}
