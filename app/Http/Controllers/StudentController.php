<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add(){
       $student = new Student();
       $student->student_name = 'Gia Hao';
       $student->student_email = 'giahao@gmail.com';
       $student->save();
    }
}
