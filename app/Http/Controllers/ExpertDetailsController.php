<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\ServiceSeo;
use App\Models\ServiceRating;
use App\Models\Task_types;
use App\Models\Expert;

class ExpertDetailsController extends Controller
{
    public function __construct()
    {
    }

    public function index($id)
    {
        $expert = Expert::with(['subjects'=>function($q){
            $q->orderBy('subject_number');
        }])->where('id', $id)->first();

        $competencesList = explode(',',$expert->competences);
        $competences = Task_types::whereIn('id', $competencesList)->get();
        return view('expert/index',compact('expert','competences'));
    }

    public function tutorsList()
    {
        $experts = Expert::with(['subjects'=>function($q){
            $q->where('show_on_home', 1)->orderBy('subject_number');
        }])->get();
        return view('expert/list',compact('experts'));
    }
}
