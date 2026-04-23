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
    // single student detail show Route;
    Route::get('/single/{id}','SingleStudent')->name('Student.Detail');
    // Single Record delete Route;
     Route::get('/delete/{id}','StudentDelete')->name('Student.Delete');
    //  Single Record Update Route;
     Route::get('/editPage/{id}','Editpage')->name('Student.edit');
     Route::post('/update/{id}','updateStudent')->name('Student.update');
});

// Route::post('/addStudent',[StudentController::class,'addStudent'])->name('Student.Add');