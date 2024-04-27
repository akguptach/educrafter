<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Routing\ResponseFactory;
use App\Models\Subjects;
use App\Models\Study_labels;
use App\Models\Task_types;
use App\Models\Level_study;
use App\Models\Grades;
use App\Models\Referencing;
use App\Models\Website;
use Response;
use Validator;
use Hash;
class OrderController extends Controller{
    public function index(){
        $data['subjects']   =   Subjects::orderBy('id','desc')->get()->toArray();
        $data['topics']     =   Study_labels::orderBy('id','desc')->get()->toArray();
        $data['task_types'] =   Task_types::orderBy('id','desc')->get()->toArray();
        $data['levels']     =   Level_study::orderBy('id','desc')->get()->toArray();
        $data['grades']     =   Grades::orderBy('id','desc')->get()->toArray();
		$data['referencings']     =   Referencing::orderBy('id','desc')->get()->toArray();
        return view('order',$data);
    }
	public function checkprice(Request $request){
		
		$validator = Validator::make($request->all(), [
            'subject_id' 			=> 'required|numeric',
            'referencing_style_id'  => 'required|numeric',
            'task_type_id' 			=> 'required|numeric',
            'no_of_words' 			=> 'required|numeric',
            'studylabel_id' 		=> 'required|numeric',
            'grade_id' 				=> 'required|numeric',

        ]);
        if($validator->fails()){
			return Response::json(array('success' => 'false', 'price' => array(),'message'=>$validator->errors()));
		}
		$website_id=3;
		$subject_id			 = $request->subject_id;
		$referencing_style_id= $request->referencing_style_id;
		$task_type_id		 = $request->task_type_id;
		$no_of_words		 = $request->no_of_words;
		$studylabel_id		 = $request->studylabel_id;
		$grade_id			 = $request->grade_id;
		
		$websiteArr      =   Website::where('id',$website_id)->first()->toArray();
		$subjectArr      =   Subjects::where('id',$subject_id)->first()->toArray();
		$referencingArr  =   Referencing::where('id',$referencing_style_id)->first()->toArray();
		$studylabelArr   =   Study_labels::where('id',$studylabel_id)->first()->toArray();
		$task_typeArr    =   Task_types::where('id',$task_type_id)->first()->toArray();
		$gradeArr        =   Grades::where('id',$grade_id)->first()->toArray();
		
		
		$total=$subjectArr['price']+$websiteArr['price']+$referencingArr['price']+$studylabelArr['price']+$task_typeArr['price']+$gradeArr['price']+(($no_of_words-$websiteArr['no_words'])*$websiteArr['additional_words']);
		$total=($total*200)/100;
		
		
		$arrP=array();
		$arrP['hour1']=100;
		$arrP['hour2']=$total.$websiteArr['currency'];
		$str='<li class="col-12" style="height: 60px;"><input class="delivery_at" type="radio" value="12 hours" name="custom_date_at" rel="'.$total.' '.$websiteArr['currency'].'" checked /><label for="custom_date_at" >12 Hours<br>'.$total.$websiteArr['currency'].'</label></li>';
		$j=1;
		for($i = 1; $i < 30; $i++)
		{   
	        $total1=0;
			if($j==1)
			{
				$total1=round(($total*170)/100);
			}elseif($j==2)
			{
				$total1=round(($total*150)/100);
			}elseif($j==3)
			{
				$total1=round(($total*100)/100);
			}else{
			     $total1=round(($total*95)/100);
			}
			
			
	        //$day=date("D", strtotime(date('Y-m-d')." +$i days"));
			$date=date("Y-m-d", strtotime(date('Y-m-d')." +$i days"));
	
            //if($day=='Sat' || $day=='Sun')
			//{
				//$str.='<li class="col-2" style="height: 60px;"><input class="delivery_at" type="radio" value="'.$date.'" name="custom_date_at" /><label for="custom_date_at" >Not Available<br>'.$total1.'</label></li>';
			//}else{
				$dd=date("d M(D)", strtotime(date('Y-m-d')." +$i days"));
				$str.='<li class="col-2" style="height: 60px;"><input class="delivery_at" type="radio" value="'.$date.'" name="custom_date_at" rel="'.$total1.' '.$websiteArr['currency'].'" /><label for="custom_date_at" >'.$dd.'<br>'.$total1.$websiteArr['currency'].'</label></li>';
				
			//}
			
         $j++;
		}
		
		
													
		$arrP['custom_date']=$str;
		return Response::json(array('success' => 'true', 'price' => $arrP));
		die;
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            'email' => 'required|unique:student,email',
            'phone_number' => 'required|unique:student,phone_number',
            'password' => 'required|min:5',
            'confirm_password' => 'required|min:5',

        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors(), 422);  
        }
        $student = new Student();
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone_number = $request->phone_number;
        $student->password = Hash::make($request->password);
        $student->save();
        return $this->sendResponse([], 'User details updated successfully.');
    }
}
