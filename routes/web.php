<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('addStudent');
});

Route::controller(StudentController::class)->group(function(){
    // insert Route;
    Route::post('/addStudent','addStudent')->name('Student.Add');
    // Show / Read Data Route;
     Route::get('/showStudent','AllStudent')->name('Student.List');
    //  Route::view('/showStudent', 'listStudent');

});

// Route::post('/addStudent',[StudentController::class,'addStudent'])->name('Student.Add');