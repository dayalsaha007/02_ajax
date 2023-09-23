<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('form');
});

Route::controller(StudentController::class)->group(function(){
    Route::post('/add/student', 'add_student')->name('add_student');
    Route::get('/all/student', 'all_student')->name('all_student');
    Route::get('/edit/student/{id}', 'edit_student')->name('edit_student');
    Route::post('/student/update', 'student_update')->name('student_update');
    Route::get('/delete_student/{id}', 'delete_student');

});

Route::controller(SearchController::class)->group(function(){
    Route::get('/search', 'search')->name('search');
});
