<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class SearchController extends Controller
{

     function search(Request $request){

        if($request->ajax()){

            $student = Student::where('name','LIKE',$request->name.'%')->get();
            $output = '';

            if(count($student) > 0){
                $output = '<ul class="list-group" style="display:block;position:relative;z-index:1000" >';
                            foreach($student as $data){
                     $output.= '<li class="list-group-item" style="">'. $data->name. '</li>';
                            }
                $output .= '</ul >';
            }
            else{
                $output .= '<li class="list-group-item" style="background-color:white;border:1px solid #ccc;border-radius:5px;padding:10px;margin-bottom:10px;position:relative;z-index:1000">No Data Found</li>';
            }
            return $output;
        }
        return view('student_search');
     }

}
