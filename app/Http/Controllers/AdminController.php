<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //
    public function login(Request $request)
    {
        # code...
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin'=>'1'])){
                return view("layouts.adminLayout.admin_desgin");
            }
            else{
                echo "Failed"; die;
            }
        }
        
    }
}
