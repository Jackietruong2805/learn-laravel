<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function(){
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});


