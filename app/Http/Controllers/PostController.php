<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("home",["posts"=>Post::all()]);
    }

    public function showPost(){
        return view("post");
    }

    public function showAddPost(){
        return view("addNewPost");
    }

    public function showMyPosts(){
        return view("myPosts",['posts'=>Post::all()]);
    }

    public function showPostRequests(){
        return view("postRequests",["posts"=> Post::all()]);
    }

    public function addNewPost(Request $request){

        $request-> validate([
            'postTitle'=>'required', 
            'postContent'=>'required',
        ]);
        $newPost = new Post();
        $newPost-> title = $request-> postTitle;
        $newPost-> content = $request-> postContent;
        $newPost-> status = 0;
        $newPost-> user_id = auth()->user()->id; 
        $newPost-> save();

        return redirect('/post/myPosts');
    }

    public function deletePost(Post $post){
        $post-> delete();
        return redirect('/post/requests');
    }

    public function approvePost(Post $post){

       $post-> status = "1";
       $post->save();

      $userID = $post-> user_id;
      $user = User::find($userID);
      $user-> total_posts = $user-> total_posts + 1;
      $user -> save();

        return redirect("/post/requests");
    }

   
    
}
