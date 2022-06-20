<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
Route::get('auth/login',[AuthController::class,'getLogin'])->name('login');
Route::post('auth/login',[AuthController::class,'postLogin']);
Route::get('auth/logout',[AuthController::class,'getLogout'])->name('logout');

// Registration routes
Route::get('auth/register',[AuthController::class,'getRegister']);
Route::post('auth/register',[AuthController::class,'postRegister']);

// password reset route
// Route::get('password/reset{token?}',[PasswordController::class,'showResetForm']);
// Route::post('password/email',[PasswordController::class,'sendResetLinkEmail']);
// Route::post('password/reset',[PasswordController::class,'reset']);

Route::get('forgot-password', function () {
    return view('auth.passwords.reset-password-email');
})->middleware('guest')->name('password.request');


 
Route::post('forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('reset-password/{token}', function ($token) {
    return view('auth.passwords.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');


Route::post('reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');



Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'App\Http\Controllers\BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('blog',['uses'=>'App\Http\Controllers\BlogController@getIndex','as'=>'blog.index']);
Route::get('/',[PagesController::class, 'getIndex'] );
Route::get('about',[PagesController::class, 'getAbout'] );
Route::get('contact',[PagesController::class, 'getContact'] );
Route::resource('posts',PostController::class);

