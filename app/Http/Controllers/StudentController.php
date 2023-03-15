<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function add(){
       DB::insert('insert into stdnt (student_name, student_email) values(?, ?)', ['hao', 'hao@gmail.com']);
    }
}
