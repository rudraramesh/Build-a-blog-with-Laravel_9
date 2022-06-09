<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

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


Route::get('/',[PagesController::class, 'getIndex'] );
Route::get('about',[PagesController::class, 'getAbout'] );
Route::get('contact',[PagesController::class, 'getContact'] );
Route::get('posts',[PostController::class,'create']);

