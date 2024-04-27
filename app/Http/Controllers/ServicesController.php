<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceSeo;
use App\Models\ServiceRating;
use App\Models\ServiceSpecifications;

class ServicesController extends Controller
{
    public function __construct()
    {
    }
    public function servicesIndex($slug)
    {
        $data = ServiceSeo::where('seo_url_slug', $slug)->first();
        \View::share('title', ($data && $data->service) ? $data->service->service_name : '');
        return view('services/index', compact('data'));
    }
}