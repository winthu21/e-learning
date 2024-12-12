<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

// guest Routes
Route::group(['prefix'=>'user'],function(){
    Route::get('/',[GuestController::class,'home'])->name('home');
    Route::get('about',[GuestController::class,'about'])->name('about');
    Route::get('contactPage',[GuestController::class,'contactPage'])->name('contactPage');
    Route::get('coursePage/{category_id?}',[GuestController::class,'coursePage'])->name('coursePage');
    Route::get('courseDetails/{id}',[GuestController::class,'courseDetails'])->name('courseDetails');
    Route::post('courseApply',[GuestController::class,'courseApply'])->name('courseApply');
    Route::get('loginPage',[GuestController::class,'loginPage'])->name('loginPage');
    Route::get('registerPage',[GuestController::class,'registerPage'])->name('registerPage');
    Route::post('mail',[GuestController::class,'mail'])->name('mail');
});
