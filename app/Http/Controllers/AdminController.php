<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\User;

use Illuminate\Support\Facades\Hash;




class AdminController extends Controller
{
    //
    public function login(Request $request)
    {
        # code...
        if($request->isMethod('post')){
            $data = $request->input();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin'=>'1'])){
                $request->session()->put('adminSession', $data['email']);
                return redirect('/admin/dashboard');
            }
            else{
                // echo "Failed"; die;
                return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view("admin.admin_login");
    }
    
    public function dashboard(Request $request)
    {
        # code...
        if($request->session()->has('adminSession')){
            return view('admin.dashboard');
        }
        else{
            return redirect('/admin')->with('flash_message_error','Please login to access');
        }
        
    }
    public function check_pwd(Request $request)
    {
        # code...
        $data = $request->all();
        $current_pwd = $data['current_pwd'];
        $check_pwd = User::where(['admin'=>1])->first();
        if(Hash::check($current_pwd, $check_pwd->password)){
            echo "true"; die;
        }
        else{
            echo "false"; die;
        }
       
        
    }
    public function setting(Request $request)
    {
        # code...
        if($request->session()->has('adminSession')){
            return view('admin.setting');
        }
        else{
            return redirect('/admin')->with('flash_message_error','Please login to access');
        }
        
    }
    public function logout(Request $request)
    {
        # code...
       $request->session()->flush();
        return redirect('/admin')->with('flash_message_logout','Logout is success');
    }
}
