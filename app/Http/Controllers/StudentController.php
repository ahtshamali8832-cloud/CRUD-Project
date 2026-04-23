<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function addStudent(Request $req)
    {
         $student = DB::table("students")
         ->insert([
           'name'=>$req->name,
           'father_name'=>$req->father_name,
           'email'=>$req->email,
           'phone'=>$req->phone,
           'class'=>$req->class,
           'roll_no'=>$req->roll_no,
           'created_at'=>now(),
           'updated_at'=>now()
         ]);

         if ($student) {
              return redirect()->route('Student.List');  
         }else{
            echo "Your data Insert Not Successfully!";
         }
    }



    public function AllStudent()
    {
        $alldatail = DB::table("students")->get();
        // return $alldatail;
        return view("listStudent",["data" => $alldatail]);
    }
    
}
