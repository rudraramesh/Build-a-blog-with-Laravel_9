<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Hash;
use Session;
use Auth;

class AuthController extends Controller
{
    protected $redirectTo = '/';


    public function __construct()
    {
        $this->middleware('guest',['except'=>'getLogout']);
    }
















    public function getLogin(){
        return view('auth.login');
    }
    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required|min:8|max:20|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|confirmed',
            'password_confirmation'=>'required|same:password'
        ],
        [
            'name.required'=>'Name Field is Required',

            'email.required'=>'Email Field is Requird',
            'email.email' =>'Email Format Not Match',
            'email.unique'=>'This Email is Already Taken.',
            'email.regex'=>'Please Enter Valid Email.',

            'password.required'=>'password is required',
            'password.min'=>'The password must be at least 8 characters.',
            'password.max'=>'The password must not be greater than 20 characters.',
            'password.regex'=>'Please Enter (MIN REQUIREMENT:= 1:upper,1:lower letter, 1:special character, 1:number)',
            'password.confirmed'=>'The Password Confirmation Does Not Match.'


        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        if($request){
            return back()->with('success','you have registered successfully.');
        }else{
            return back()->with('error','something wrong');
        }
    }

    public function postLogin(Request $request){

        // userM model bankeko belako
        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required|min:6|max:20'
        // ]);
        // $user = User::where('email','=',$request->email)->first();
        // if($user){
        //     if(Hash::check($request->password,$user->password)){
        //         $request->session()->put('loginId',$user->id);
        //         return redirect('about');
        //     }else{

        //     }return back()->with('error','password is not match');

        // }else{
        //     return back()->with('error', 'this email is not register');
        // }
        $request->validate([
            'email'=>'required|email|regex:/(.+)@(.+)\.(.+)/i',
            'password'=>'required',
        ],
        [
            'email.required'=>'Email Field is Requird',
            'email.email' =>'Email Format Not Match',
            'email.regex'=>'Please Enter Valid Email.',

            'password.required'=>'password is required',


        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('you haved Successfully loggedin.');
        }
  
        return redirect("auth/login")->withError('Oppes! Login details are not valid');
        
    }


    public function getLogout(){
        Session::flush();
        Auth::logout();
  
        return redirect('auth/login');
    }
}
