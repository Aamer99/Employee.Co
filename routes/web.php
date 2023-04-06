<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CompanyContoller;
use App\Http\Controllers\PostController;
// use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Models\users;
use App\Models\User;



// Route::prefix('/')->middleware("verifyAuth")->group(function(){
 //   Route::get("/employee/addNewEmployee",[EmployeeController::class,"showAddEmployee"]);
 //   Route::get("/employee/{employee}/edit",[EmployeeController::class,"showEditEmployee"]);
   // Route::get('/', [EmployeeController::class, "index"]); 
    // Route::get('/Company/AddNew',[CompanyContoller::class,'showAddCompany']);
// });

// Route::prefix('/')->middleware("block")->group(function(){
    // Route::get("/login",[AdminController::class,"showLogin"]);
    // Route::get('/register',[AdminController::class,"index"]);
// });

// admin 

// Route::post("/admin/register",[UserController::class,"craetUser"]);
// Route::post("/users/login",[AdminController::class,"login"]);
// Route::post("/logout/admin",[AdminController::class,"logout"]);

// employee 

//Route::post("/employee",[EmployeeController::class,"createNewEmployee"]);
// Route::put("/employee/edit/{employee}",[EmployeeController::class,"editEmployee"]);
// Route::delete("/employee/delete/{employee}",[EmployeeController::class,"deleteEmployee"]);

// company 

// Route::post("/company",[CompanyContoller::class,"createNewCompany"]);

/*-------------------------------------------------------------------------------------------------*/

Route::prefix('/post')->middleware("verifyAuth")->group(function(){
    Route::get('/addNew',[PostController::class,"showAddPost"]);
    Route::get('/myPosts',[PostController::class,"showMyPosts"]);
    Route::get('/showPost/{Post}',[PostController::class,"showPost"]);
    Route::get('/requests', [PostController::class,"showPostRequests"]);

    //admin 

    Route::get("/user/all",[UserController::class,'showAllUsers']);

});

//posts 

Route::get("/",[PostController::class,"index"]);
Route::post("/post",[PostController::class,"addNewPost"]);
Route::delete('/post/{post}',[PostController::class,"deletePost"]);
Route::put("/post/approve/{post}",[PostController::class,"approvePost"]);




Route::get("/login",[UserController::class,"showLogin"]);
Route::get("/register",[UserController::class,"showRegister"]);
Route::post("/user/login",[UserController::class,"login"]);
Route::post("/user/register",[UserController::class,"craetUser"]);
Route::post('/user/logout',[UserController::class,"logout"]);




