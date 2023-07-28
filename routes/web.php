<?php

use App\Http\Controllers\Frontend\Home_Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Home_Controller::class,'index'])->name('index');
Route::get('/details',[Home_Controller::class,'details'])->name('details');
Route::get('/browse',[Home_Controller::class,'browse'])->name('browse');
Route::get('/stream',[Home_Controller::class,'stream'])->name('stream');
Route::get('/login',[Home_Controller::class,'login'])->name('login');
Route::get('/registration',[Home_Controller::class,'registration'])->name('registration');
