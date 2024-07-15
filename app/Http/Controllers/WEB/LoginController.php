<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WEB\Admin;
//use Symfony\Component\HttpFoundation\Session\Session;
use Redirect;
use Auth;
use Session;

class LoginController extends Controller
{
    # Web Login Page
    public function loginPage(){
        return view('login.login');
    }

    # Admin Login
    public function adminLogin(Request $request){
        //dd($request->all());
        $email = $request->input('email');
        $password = $request->input('password');
        $encrpPassword = md5($password);
        //dd($encrpPassword);
        $admin_count = Admin::where(['email'=> $email ,'password'=>$encrpPassword,'status'=>'1'])->count();
        //dd($admin_count);
        if($admin_count > 0 ){
            $admin = Admin::where(['email'=> $email , 'status'=>'1'])->first();
           // dd($admin);
            session()->put('user_name',$admin->user_name);
          
            return redirect()->route('admin.dashboard')->with('message', 'Login Successfully');
        }else if($admin_count == 0){
            
            return redirect()->back()->with('message', 'Invalid Email or Password');
        } 
    }

    # Admin Logout
    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('admin-login');
    }
}
