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

    public function showAccount(String $id){
        return view("account",["user"=> User::find($id)]);
    }

    public function showLogin(){
        return view("login");
    }

    public function showRegister(){
        return view("register");
    }

    public function showAddNewUser(){
        return view("register");
    }

    public function showEditUserAccount(User $user){
        return view("editUserAccount",['user'=> User::find($user-> id)]);
    }
    public function showForgotPassword(){
        return view("forgotPassword");
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
                 $newUser-> type = auth()->user() ? $request-> type :1;
                 $newUser-> total_posts = 0;
                 $newUser->save();
        } 
        
        if(auth()->user()){
            return redirect('/user/all');
        }

            return redirect('/login');

    }


    public function login(Request $request){

        $request->validate([
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

     public function deleteUser(User $user){
        $user-> delete();
        return redirect("/user/all");
     }

     public function editUser(User $user,Request $request){

        $user-> name = $request-> userName;
        $user-> email = $request-> email; 
        $user-> password = Hash::make($request-> userPassword); 
        if($request->hasFile("userProfileImage")){
            $imagePath = $request->file('userProfileImage')->store('employeesImage','public');
            $user->  profileImage = $imagePath;
        }
        $user-> save();
        
        if(auth()->user()-> type == 0){
            return redirect("/user/all");
        }
        
         return redirect("/user/account/". $user-> id);
     }
}
