<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function index(){

return view('dashboard');

}
public function accountSetting(Request $request){
$tabid='account-setting';
//print_r($request->get('tabid'));die;
if($request->get('tabid')){
    $tabid=$request->get('tabid');              

}
    return view('accountSetting',['tabid'=>$tabid]);
    
    }

    //
}
