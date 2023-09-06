<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function auth(Request $request){
        $validatedData = $request->validate([
          'email' => 'required|email',
          'password' => 'required'
        ]);

        if(Auth::attempt($validatedData)){
            return redirect()->route('dashboard')->with('message','Login Successfully!');
        }else{
            return redirect()->route('login')->with('error','Unathourized Access!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
    public function register(){
        return view('admin.auth.register');
    }
    public function index(){
        return view('admin.index');
    }
}
