<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserM;
use Hash;

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
}
