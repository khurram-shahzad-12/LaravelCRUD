<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

 
Route::get('/', function () {
    return view('home');
});
Route::get('/customer',[CustomerController::class,'view']);

Route::post('/customer/create',[CustomerController::class,'addcustomer']);
Route::get('/customer/view',[CustomerController::class,'viewcustomer']);
Route::get('/customer/delete/{id}',[CustomerController::class,'deletecustomer']);
Route::get('/customer/edit/{id}',[CustomerController::class, 'editcustomer']);
Route::post('/customer/update/{id}',[CustomerController::class, 'updatecustomer']);

Route::post('/upload',[CustomerController::class,'uploadimage']);