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
    public function view(){
        // $all_data['students'] = DB::select('select * from students');
        $all_data['student_row'] = DB::select('select * from students where student_id=?', [1]);
        
        return view('show', $all_data);
    }
}
