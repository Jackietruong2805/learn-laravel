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
    public function update(){
        DB::update('update students set student_name="jackie" where student_id=?', [1]);
    }

    public function delete(){
        DB::delete('delete from students where student_id=?', [1]);
    }

    public function join(){
        $all_data['student_row'] = DB::select('select *
                  from students t1
                  join fees t2
                  on t1.student_id = t2.student_id
                  where t1.student_id =?', [2]);
        return view('show_join', $all_data);
    }
}