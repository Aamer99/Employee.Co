<?php


use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::prefix('/post')->middleware("verifyAuth")->group(function(){
    
    Route::get('/addNew',[PostController::class,"showAddPost"]);
    Route::get('/myPosts/{user}',[PostController::class,"showMyPosts"]);
    Route::get('/{Post}',[PostController::class,"showPost"]);
    Route::get("/edit/{post}",[PostController::class,"showEditPost"]);

    Route::put("/approve/{post}",[PostController::class,"approvePost"]);
    Route::put("/edit/{post}",[PostController::class,"editPost"]);

    Route::delete("/delete/{post}",[PostController::class,"deletePost"]);
    Route::delete('/deny/{post}',[PostController::class,"denyPost"]);
    Route::delete("/deleteDeniedPost/{post}",[PostController::class,"deleteDeniedPost"]);

});

Route::prefix("/admin")->middleware("verifyAuth")->group(function(){

    Route::get('/requests', [PostController::class,"showPostRequests"]);
    Route::get('/deniedRequests',[PostController::class,"showDeniedRequests"]);
    Route::get("/addNewUser",[UserController::class,"showAddNewUser"]);
});

Route::prefix("/user")->middleware("verifyAuth")->group(function(){

    Route::delete("/delete/{user}",[UserController::class,"deleteUser"]);

    Route::get("/edit/{user}",[UserController::class,"showEditUserAccount"]);
    Route::get("/all",[UserController::class,'showAllUsers']);

    Route::put("/editProfile/{user}",[UserController::class,"editUser"]);

});
//posts 

Route::get("/",[PostController::class,"index"]);
Route::post("/addNewPost",[PostController::class,"addNewPost"]);

// Route::delete('/post/deny/{post}',[PostController::class,"denyPost"]);
// Route::put("/post/approve/{post}",[PostController::class,"approvePost"]);
// Route::delete("/post/delete/{post}",[PostController::class,"deletePost"]);
// Route::put("/post/edit/{post}",[PostController::class,"editPost"]);
// Route::delete("/post/deleteDeniedPost/{post}",[PostController::class,"deleteDeniedPost"]);

// Route::delete("user/delete/{user}",[UserController::class,"deleteUser"]);
// Route::get("/user/edit/{user}",[UserController::class,"showEditUserAccount"]);
Route::get("/login",[UserController::class,"showLogin"]);
Route::get("/register",[UserController::class,"showRegister"]);
Route::post("/user/login",[UserController::class,"login"]);
Route::post("/user/register",[UserController::class,"craetUser"]);
Route::post('/user/logout',[UserController::class,"logout"]);

// Route::post("/user/login",[UserController::class,"login"]);
// Route::post("/user/register",[UserController::class,"craetUser"]);
// Route::post('/user/logout',[UserController::class,"logout"]);
// Route::put("/user/editProfile/{user}",[UserController::class,"editUser"]);

// Route::get("/user/all",[UserController::class,'showAllUsers'])->middleware("verifyAuth");


