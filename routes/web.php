<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return view('form');
});

Route::controller(StudentController::class)->group(function(){
    Route::post('/add/student', 'add_student')->name('add_student');
    Route::get('/all/student', 'all_student')->name('all_student');
    Route::get('/edit/student/{id}', 'edit_student')->name('edit_student');
    Route::post('/student/update', 'student_update')->name('student_update');
    Route::get('/delete_student/{id}', 'delete_student');
    Route::get('/pagination/paginate-data', 'pagination');
});

Route::controller(SearchController::class)->group(function(){
    Route::get('/search', 'search')->name('search');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'category')->name('category');
    Route::post('/category/store', 'category_store')->name('category.store');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/product', 'product')->name('product');
    Route::post('/product/store', 'product_store')->name('product.store');
    Route::get('/product/filter', 'product_filter')->name('product_filter');
    Route::get('/parent_pagination', 'parent_pagination')->name('parent_pagination');
    Route::get('/child_pagination', 'child_pagination')->name('child_pagination');
    Route::post('/pagination/fetch', 'fetch')->name('pagination_fetch');
});
