<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;
use App\Models\Subjects;
use App\Models\Study_labels;
use App\Models\Task_types;
use App\Models\Level_study;
use App\Models\PagesRating;
use App\Models\Faq;

use App\Models\Grades;
use App\Models\Subscription;
use App\Models\ServiceRating;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceWhyEducrafter;
use App\Models\ServiceSeo;
use App\Models\ServiceSpecifications;
use App\Models\ServiceHowWork;
use App\Models\PagesFaq;


use App\Models\Referencing;
use Illuminate\Http\Request;
use View;
use DB;

class HomeController extends Controller
{
    public function index()
    {


        $page = ServiceSeo::where('seo_url_slug', 'homepage')->first();
        \View::share('title', ($page && $page->seo_meta) ? $page->seo_meta : '');
        \View::share('description', ($page && $page->seo_description) ? $page->seo_description : '');
        \View::share('seo_keywords', ($page && $page->seo_keywords) ? $page->seo_keywords : '');
        \View::share('og_image', ($page && $page->og_image) ? $page->og_image : '');
        \View::share('og_url', ($page && $page->seo_url_slug) ? $page->seo_url_slug : '');


        $data['subjects']   =   Subjects::orderBy('subject_name', 'ASC')->get()->toArray();
        //$data['topics']     =  Study_labels::orderBy('id','desc')->get()->toArray();
        $page = ServiceSeo::where('seo_url_slug', 'homepage')->first();
        $page1 = Service::where('service_name', 'Home Page')->first();
        // dd($page1);
        $data['homepageData'] = ServiceWhyEducrafter::where('service_id', $page->service_id)->get();
        $data['ServiceSpecifications'] = ServiceSpecifications::where('service_id', $page->service_id)->get();
        $data['homepageHowWork'] = ServiceHowWork::where('service_id', $page->service_id)->get();
        $data['homepageRating'] = ServiceRating::where('service_id', $page->service_id)->get();
        $data['faq_page'] =   ServiceFaq::where('service_id', $page->service_id)->get();
        $data['task_types'] =   Task_types::where('website_type', 'Essay')->orderBy('id', 'desc')->get()->toArray();
        $data['levels']     =   Level_study::where('website_type', 'Essay')->orderBy('id', 'desc')->get()->toArray();
        $data['grades']     =   Grades::orderBy('id', 'desc')->get()->toArray();
        $data['referencings']     =   Referencing::orderBy('id', 'desc')->get()->toArray();
        return view('home', $data);
    }

    public function dateformat()
    {
        echo date('jS F, Y', strtotime($_GET['date']));
        die;
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

    public function subscriptionData(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:subscriptions,email',
            ]);
            $email = $request->input('email');
            //dd($email);
            Subscription::create(['email' => $email]);
            return response()->json(['message' => 'Your subscription has been added successfully.']);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->validator->errors()->first('email')], 422);
        }
    }
}
