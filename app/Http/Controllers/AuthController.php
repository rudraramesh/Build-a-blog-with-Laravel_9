<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserM;
use Hash;
use Session;
use Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:user_m_s',
            'password'=>'required|min:6|max:20'
        ]);
        $user = new UserM();
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
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ]);
        $user = UserM::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('/');
            }else{

            }return back()->with('error','password is not match');

        }else{
            return back()->with('error', 'this email is not register');
        }
        
    }


    public function getLogout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('auth/login');
        }
    }
}
