<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request){
        
        $request->validate([
            echo '<pre>'; print_r($request->all()); echo '</pre>'; die;
            'bio'=>'required|max:255',
            'avatar'=>'required_if:type,file|image|mimes:jpeg,png,jpg,svg|max:2048'
                ]);
        
        }

    //
}
