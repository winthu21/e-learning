<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Admin Routes
Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('adminDashboard');
    Route::get('course',[AdminController::class,'course'])->name('course');
    Route::get('createCategoryPage',[AdminController::class,'createCategoryPage'])->name('createCategoryPage');
    Route::post('createCategory',[AdminController::class,'createCategory'])->name('createCategory');
    Route::get('categoryDelete/{id}',[AdminController::class,'categoryDelete'])->name('categoryDelete');
    Route::get('createCoursePage',[AdminController::class,'createCoursePage'])->name('createCoursePage');
    Route::post('createCourse',[AdminController::class,'createCourse'])->name('createCourse');
    Route::get('courseDetailsPage/{id}',[AdminController::class,'courseDetailsPage'])->name('courseDetailsPage');
    Route::get('courseUpdatePage/{id}',[AdminController::class,'courseUpdatePage'])->name('courseUpdatePage');
    Route::post('courseUpdate',[AdminController::class,'courseUpdate'])->name('courseUpdate');
    Route::get('createDelete/{id}',[AdminController::class,'createDelete'])->name('createDelete');
    Route::get('appliedCourse',[AdminController::class,'appliedCourse'])->name('appliedCourse');
    Route::get('userList',[AdminController::class,'userList'])->name('userList');
    Route::get('adminList',[AdminController::class,'adminList'])->name('adminList');
});
