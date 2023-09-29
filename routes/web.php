<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


// Route::get('/', function () {
//     return view('home');
// });
//student registration
Route::get('/',[RegistrationController::class,'registerPage'])->name('register#Page');
Route::post('register',[RegistrationController::class,'register'])->name('register#success');
Route::get('success',[RegistrationController::class,'success'])->name('success#page');
Route::get('registerList',[RegistrationController::class,'registerList'])->name('register#List');
Route::get('delete/{id}',[RegistrationController::class,'deleteData'])->name('register#Delete');
Route::get('studentDetail/{id}',[RegistrationController::class,'studentDetail'])->name('student#Detail');
Route::get('updateStudent/{id}',[RegistrationController::class,'updateStudent'])->name('student#Update');
Route::post('update',[RegistrationController::class,'update'])->name('student#UpdateData');