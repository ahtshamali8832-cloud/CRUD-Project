<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // insert function------------------------>
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


// Read Function ------------------------->
    public function AllStudent()
    {
        $alldatail = DB::table("students")->get();
        // return $alldatail;
        return view("listStudent",["data" => $alldatail]);
    }
    


    // Single Student Detail ---------------------->
    public function SingleStudent($id)
    {
        $single = DB::table('students')->where('id',$id)->get();
        // return $single;
        return view('singleStudent',['data'=>$single]);
    }

    // Single Record Delete Function ------------------->
    public function StudentDelete($id){
        $delete = DB::table('students')->where('id',$id)->delete();
        if ($delete) {
            return redirect()->route('Student.List');
        }else{
            echo "Your Record Not Delete Successfully!";
        }
    }


    // single Record Update After Show Function;
    public function Editpage(string $id)
    {
        $editpage = DB::table('students')->where('id',$id)->get();
        // $editStudent = DB::table('students')->find($id);
        return view('updateStudent',['data'=> $editpage]);
    }

    // Single Record Update Function ------------>
    public function updateStudent(Request $req, $id)
    {
        $update = DB::table('students')
        ->where('id',$id)
        ->update([
            'name'=>$req->name,
           'father_name'=>$req->father_name,
           'email'=>$req->email,
           'phone'=>$req->phone,
           'class'=>$req->class,
           'roll_no'=>$req->roll_no,
           'created_at'=>now(),
           'updated_at'=>now()
        ]);
        if ($update) {
            return redirect()->route('Student.List');
        }
    }
}
