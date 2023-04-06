<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function showAllUsers(){
        return view("allUsers",['users'=>User::all()]);
    }

    public function showLogin(){
        return view("login");
    }

    public function showRegister(){
        return view("register");
    }


    public function craetUser(Request $request){

     $request->validate([
        'userName'=>'required', 
         'email'=> ['required','email','lowercase','unique:users'],
         'userPassword' => ['required','min:6','confirmed'],
         'userProfileImage'=> ['required','max:10000','mimes:jpeg,jpg,png']
        ]);


        if($request->hasFile("userProfileImage")){
             $imagePath = $request->file('userProfileImage')->store('employeesImage','public'); 

                 $newUser = new User();

                 $newUser-> name = $request-> userName;
                 $newUser-> email = $request-> email; 
                 $newUser-> password = Hash::make($request-> userPassword); 
                 $newUser-> profileImage = $imagePath;
                 $newUser-> type = 1;
                 $newUser-> total_posts = 0;
                 $newUser->save();
        } 

            return redirect('/login');

    }


    public function login(Request $request){

       $userData= $request->validate([
            'email' => ['email','required'],
            'password'=> ['required'],
         ]);  

         $credentials = $request->only('email', 'password'); 
         
         if (Auth::guard("web")->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
         }

         return back()->withErrors(['password'=>"Invalid Email or password"]);
    }


    public function logout(Request $request){

        auth()->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
     }
}
