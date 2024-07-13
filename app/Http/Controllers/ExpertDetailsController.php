<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceSeo;
use App\Models\ServiceRating;
use App\Models\ServiceSpecifications;
use App\Models\Expert;

class ExpertDetailsController extends Controller
{
    public function __construct()
    {
    }

    public function index($id)
    {
        return view('expert/index');
    }

    public function tutorsList()
    {
        return view('expert/list');
    }
}
