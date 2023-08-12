<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function auth(Request $request){
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:7|max:20'

    ]);
    $credential=$request->only('email','password');
    $remember = $request->has('remember')?true:false;
    if(Auth::attempt($credential,$remember)){    
       // Authentication passed...
       Session::flash('color','success');
        Session::flash('icon','fa fa-check');
        Session::flash('msg','welcome to dashboard');
       return redirect()->intended('dashboard');

        }
        Session::flash('color','warning');
        Session::flash('icon','fa-solid fa-fire');
        Session::flash('msg','email or password is wrong');
        return redirect()->route('login');
        

        
    }
    public function logout(){
        Auth::logout();
Session::flash('color','success');
                Session::flash('icon','fa fa-check');
                Session::flash('msg','User has been logout successfully.');
        return redirect()->route('login');
    }
    //

}
