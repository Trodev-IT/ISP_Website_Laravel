<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
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

Route::get('/',[UserController::class,'welcome'])->name('welcome');

Route::get('/aboutus',[UserController::class, 'aboutus']) -> name ('aboutus');
Route::get('/package',[UserController::class, 'package']) -> name ('packages');
Route::get('/features',[UserController::class, 'features']) -> name ('features');
Route::get('/blog',[UserController::class, 'blog']) -> name ('blogs');
Route::get('/blogsdetails',[UserController::class,'blogsdetails'])->name( 'blogsdetails');
Route::get('/elements',[UserController::class,'elements'])->name( 'element');
Route::get('/contacts',[UserController::class,'contacts'])->name('contact');


