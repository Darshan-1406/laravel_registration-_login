<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\RegisterController;
use  App\Http\Controllers\LoginController;

Route::get('/',function(){
    return view('home');
})->name('home');

Route::post('login',[LoginController::class,'postdata_login']);


Route::get('registration',[RegisterController::class,'getdata_reg']);

Route::post('registration',[RegisterController::class,'postdata_reg']);


Route::get('update/{id}/{email}',[RegisterController::class,'update_post_data_reg']);

Route::post('updatedata',[RegisterController::class,'update_get_data_reg']);

Route::get('delete/{id}/{email}',[RegisterController::class,'delete_post_data_reg']);


