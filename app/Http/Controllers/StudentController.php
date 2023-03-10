<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        
        $data['student_info'] = [
            'name' => 'hao',
            'email' => 'hao@example.com',
            'age' => 36
        ];

        return view('home', $data);
    }

    function about(){
        return view('about');
    }
}
