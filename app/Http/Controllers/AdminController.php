<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    function index(){
        if( session('adminSession') == true ){
            return redirect('admin/dashboard');
        }
        else{
            return view('admin/login');
        }
    }

    // Submit Login
    function submit_login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);
        $admin = Admin::where(['admin' => $request->user, 'password' => $request->password])->count();

        if ($admin > 0) {
            session(['adminSession' => true]);
            session(['user' => $request->user]);
        }

        return redirect('admin/dashboard')->with('name', $request->user);
    }
    
    function logout(){
        session(['adminSession' => false]);
        return redirect('admin/');
    }

    // Admin Dashboard
    function dashboard()
    {
        if( session('adminSession')){
            return view('admin/dashboard')->with('name', session('user'));
        }
        else{
            return redirect('admin/login');
        }
    }

    function bookmanager()
    {
        if( session('adminSession')){
            return view('admin/bookmanager')->with('name', session('user'));
        }
        else{
            return redirect('admin/login');
        }
    }
}
