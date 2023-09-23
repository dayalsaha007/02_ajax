<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{


    function add_student(Request $request){
        $file = $request->file('file');
        $filename = time().''.$file->getClientOriginalName();
        $filepath = $file->storeAs('images',$filename,'public');

        $student = new Student();
        $student->name = $request->in_name;
        $student->email = $request->in_email;
        $student->image = $filepath;
        $student->save();
        return response()->json(['res' => 'Student created Successfully']);
    }


    function all_student(){
        $students = Student::latest()->get();
        return view('all_student', [
            'students'=>$students,
        ]);
    }

    function edit_student($id){

        $student = Student::find($id);
        return view('edit_student', [
          'student'=>$student,
        ]);

    }

    function student_update(Request $request){

        $student = Student::findorFail($request->id);
        $student->name = $request->up_name;
        $student->email = $request->up_email;

        if($request->file('up_file')){

            $up_file = $request->file('up_file');
            $up_filename = time().''.$up_file->getClientOriginalName();
            $up_filepath = $up_file->storeAs('images',$up_filename,'public');

            $student->image = $up_filepath;
        };

        $student->save();
        return response()->json(['res' => 'Student Updated Successfully!']);

    }

    function delete_student($id){
        $student = Student::findorFail($id);
        $student->delete();
        return response()->json(['res' => 'Student Deleted Successfully!']);
    }




}
