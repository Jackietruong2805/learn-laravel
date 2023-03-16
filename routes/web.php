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
Route::get('view', [StudentController::class, 'view']);

