<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('home');
// })->name('front_home');

// Route::get('about/{username}/{age}', function($username, $age){
//     return view('about', ['un' => $username, 'age' => $age]);
// });

// redirect(): dùng để trả về route ta muốn

// đặt tên cho route

// Route::get('about', function(){
//     return view('about');
// })->name('front_about');


// Gọi tới controller và dùng hàm nào để thực hiện
Route::get('/', [StudentController::class, 'index'])->name('student_home');
Route::get('about', [StudentController::class, 'about'])->name('student_about');


