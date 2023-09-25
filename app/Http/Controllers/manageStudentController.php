<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class manageStudentController extends Controller
{
    public function index (){
        $studentsList=Student::all();
            
        return view( 'student', compact("studentsList"));
    }
    public function show($id=null){
        $studentsList= Student::find($id);
           
        return view( 'detailStudent', compact("id" , "studentsList")); 
    }
    public function showFormular(){

        return view('detailStudent');
    }
    public function  delete($id){
        $studentsList = Student::find($id);
    }
    public function store(Request $request){
        $data = $request->all();
        
        $validate = $request->validate([
            "firstName"=> "required",
            "lastName" => "required",
            "birthday" => "required",
            "hobbies" => "required",
            "speciality" => "required",
            "biography" => "required",
            "image" => "required"
        ]);
        if ($data["image"]){
            $image=$data["image"];
            $path=$image->store('etudiant');
        }

        $save = Student::create([
            "firstName" => $data['firstName'],
            "lastName" => $data['lastName'],
            "birthday" => $data['birthday'],
            "hobbies" => $data['hobbies'],
            "speciality" => $data['speciality'],
            "biography" => $data['biography'],
            "image" => $path
        ]);
        return redirect()->route('index')->with("message", "Etudiant enregistré");

    }
}
