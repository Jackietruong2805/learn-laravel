<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\StudentController;


// Route::group(['prefix' => 'location'], function(){
//     Route::get('city', function(){
//         echo 'ho chi minh';
//     });
    
//     Route::get('country', function(){
//         echo 'VietName';
//     });
    
//     Route::get('zip', function(){
//         echo '12345';
//     });
// });

Route::get('add', [StudentController::class, 'add']);
Route::get('show', [StudentController::class, 'show']);
Route::get('show_single/{id}', [StudentController::class, 'show_single']);
Route::get('update', [StudentController::class, 'update']);
Route::get('delete', [StudentController::class, 'delete']);
Route::get('view_join', [StudentController::class, 'join']);
Route::get('join', [StudentController::class, 'join']);
Route::get('students/all', [StudentController::class, 'show_all_students']);

