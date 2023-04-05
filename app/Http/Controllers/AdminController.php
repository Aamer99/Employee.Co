<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view("register");
 }

 public function register(Request $request){

    $request->validate([
        
        'fullName'=> ['required','min:6'],
        'email'=> ['required','email','unique:admins','lowercase'],
        'password'=> ['required','min:6','confirmed'],
        'phoneNumber' =>['required','digits:12']
    ]);
    

   Admin::create([
        'fullName'=>$request-> fullName,
        'email'=>$request-> email, 
        'password'=> Hash::make($request-> password),
        'phoneNumber'=> $request -> phoneNumber
    ]);

    return redirect("/login");    
 }

 public function login(Request $request){

    $request->validate([
        'email' => ['email','required'],
        'password'=> ['required'],
     ]); 
     
    if(Auth::guard('admins')->attempt($request-> only('email','password'))){
            dd($request);
    }

    //  $request->session()->regenerate();

    //  dd(auth()->user());
    // if(Auth::attempt($credentials)){

    //     return redirect("/");
    //  } 
     
        return redirect("/");
     
   

 }
 public function showLogin(){
    return view("login");
 }
}
