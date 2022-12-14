<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function store(Request $request)
    {
        $student = new Student;
        $student->id=$request->id;
        $student->name = $request->name;
        $student->save();
    }

    public function get($id){
        $student = Student::find($id);
        return $student;
    }

}
