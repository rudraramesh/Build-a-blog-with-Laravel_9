<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;

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

// authentication routes
Route::get('auth/login',[AuthController::class,'getLogin'])->middleware('alreadyLoggedIn');
Route::post('auth/login',[AuthController::class,'postLogin']);
Route::get('auth/logout',[AuthController::class,'getLogout'])->name('logout');

// Registration routes
Route::get('auth/register',[AuthController::class,'getRegister'])->middleware('alreadyLoggedIn');
Route::post('auth/register',[AuthController::class,'postRegister']);

Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'App\Http\Controllers\BlogController@getIndex'])->where('slug','[\w\d\-\_]+')->middleware('isLoggedIn');
Route::get('blog',['uses'=>'App\Http\Controllers\BlogController@getIndex','as'=>'blog.index'])->middleware('isLoggedIn');
Route::get('/',[PagesController::class, 'getIndex'] );
Route::get('about',[PagesController::class, 'getAbout'] )->middleware('isLoggedIn');
Route::get('contact',[PagesController::class, 'getContact'] )->middleware('isLoggedIn');
Route::resource('posts',PostController::class)->middleware('isLoggedIn');

