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
Route::get('/', function(){
    return view('welcome');
});

Route::middleware(['price'])->group(function(){
    Route::get('item1', function(){
        echo 'Item 1 price';
    });
            
    Route::get('item2', function(){
        echo 'Item 2 price';
    });
    Route::get('item3', function(){
        echo 'Item 3 price';
    });
});

Route::get('item3', function(){
    echo 'Item 3 price';
})->middleware('price');

Route::name('location')->group(function(){
    Route::get('city', function(){
        echo 'Ho Chi Minh';
    })->name('/main_city');
});


