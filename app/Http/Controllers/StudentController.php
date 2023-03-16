<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function add(){
        // Insert data with raw sql
    //    DB::insert('insert into stdnt (student_name, student_email) values(?, ?)', ['hao', 'hao@gmail.com']);

    // Insert data with query build
        $data= [
            'student_name'=> 'jackie',
            'student_email'=> 'jackie@gmail.com'
        ];
        DB::table('students')->insert($data);
    }
    public function show(){
        // show data with raw sql
        // $all_data['students'] = DB::select('select * from students');
        // $all_data['student_row'] = DB::select('select * from students where student_id=?', [1]);
        // return view('show', $all_data);

        // show data with query builder
        $data = DB::table('students')->get();
        return view('show', compact('data'));
    }
    public function show_single($id){
        $single_data = DB::table('students')->where('student_id', $id)->get();
        return view('show_single', compact('single_data'));
    }
    public function update(){
        // update with sql raw
        // DB::update('update students set student_name="jackie" where student_id=?', [1]);
        // update with query builder
        $data = [
            'student_name'=>"nhi",
            'student_email'=>"nhi@gmail.com"
        ];
        DB::table('students')->where('student_id', 2)->update($data);
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