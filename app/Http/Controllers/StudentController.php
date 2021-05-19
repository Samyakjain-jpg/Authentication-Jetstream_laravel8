<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use DB;

class StudentController extends Controller
{
    public function form()
    {
       return view("student.form");
    }
     public function store_student(Request $req)
    {
        //print_r($req->all());
        $student_obj = new Student;

        //setting value
        $student_obj->name = $req->name;
        $student_obj->email = $req->email;
        $student_obj->mobile = $req->mobile;

        //save data
        $student_obj->save();
        
        //get flash message
        //session()->flash("key","message");
        $req->session()->flash("success","Student has been done successfully");

        //redirection
        //return redirect()->to("add_teacher");
        return redirect("form");
    }

     public function selectdata()
    {
        $students = student::all(); //get method is also use
       return view("student.list-teacher",[
            "students" => $students
        ]);
    }
     public function showstudent($student_id)
    {
        $student = student::find($student_id);

        return view("student.show-data",[
            "student"=> $student
        ]);
    }
    public function deletestudent($student_id)
    {
        $student = student::find($student_id);
        $student->delete();

        session()->flash("success","Student has been deleted sucessfully");
        return redirect("selectdata");
    }

     //update query
    public function submitEditstudent(Request $req)
    {
        //print_r($req->all());
       // echo ($req['teacher_id']); die;
        $student = student::find($req['student_id']);
        //print_r($teacher);
        $student->name = $req->name;
        $student->email = $req->email;
        $student->mobile = $req->mobile;
        $student->save();
        session()->flash("success","Student has been updated successfully");
        return redirect("selectdata");
    }

}

