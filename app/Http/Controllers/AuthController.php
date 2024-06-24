<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view(){
        return view('login');
    }
    public function login(){
        validator(request()->all(),[
         'email'=>['required','email'],
         'password'=>['required']
        ])->validate();
         // dd(auth()->attempt(request()->only(['email','password'])));
         // dd(request()->all());
        if(auth()->attempt(request()->only(['email','password']))){
         return view('create');
        }
        return redirect()->back()->withErrors(['email'=>'invaild email']);
 
     }
 
     public function logout(){
         auth()->logout();
         return redirect('/');
     }
}
