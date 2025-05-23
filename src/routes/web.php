<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/register/step1',[RegistrationController::class,'index']);
Route::post('/register/step2',[RegistrationController::class,'confirm']);
Route::post('/login',[RegistrationController::class,'store']);