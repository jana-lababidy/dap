<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function update_profile(Request $request){
        //echo "<pre>"; print_r($request->avatar); echo "</pre>"; die;
        $request->validate([
        'fullname'=>'required',
        'bio'=>'required|max:255',
        'avatar'=>'required_if:type,file|image|mimes:jpeg,png,jpg,svg|max:2048'
            ]);
        $user=new User;
        if(is_object($request->avatar)){
            $imageName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('avatar'), $imageName);
        }else{
            $imageName=auth()->user()->avatar;
        }
        $user->where('id', auth()->user()->id)->update([
        'name'=>$request->input('fullname'),
        'bio'=>$request->input('bio'),
        'avatar'=>$imageName
          ]);
          Session::flash('color','success');
        Session::flash('icon','fa-solid fa-fire');
        Session::flash('msg',"Profile is updated");
          return redirect()->route('account-setting',['tabid'=>'account-setting']);
                }   


        public function updatePassword(Request $request)
                {
        # Validation
        $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed',
        ]);

        # Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
        Session::flash('color','danger');
        Session::flash('icon','fa-solid fa-fire');
        Session::flash('msg',"Old Password Doesn't match!");
            return redirect()->route('account-setting',['tabid'=>'password']);
            }

        # Update the new Password
        $user=new User;
        $user->where('id', auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
              ]);
        Session::flash('color','success');
        Session::flash('icon','fa-solid fa-fire');
        Session::flash('msg',"Password changed successfully!");
        return redirect()->route('account-setting',['tabid'=>'password']);
         }


    //
}
