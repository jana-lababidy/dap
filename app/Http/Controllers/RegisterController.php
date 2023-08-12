<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function user_reg(Request $request){
        $request->validate([
            'fullname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:7|max:20',
            'cpassword'=>'required|same:password'
        
        ]);
        $user= new User;
        $user->name= $request->input("fullname");
        $user->email= $request->input("email");
        $user->password= Hash::make($request->input("password"));
        $user->save();

        return redirect()-> route('login');
        
            }

    //
}
