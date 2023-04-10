<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("home",["posts"=>Post::where("status",1)->get(),"users"=> User::where("type",1)->get()]);
    }

    public function showPost(String $id){
        
        return view("post",["post"=> Post::find($id)]);
    }

    public function showAddPost(){
        return view("addNewPost");
    }

    public function showMyPosts(User $user){
        
       
        return view("myPosts",['posts'=>Post::withTrashed()->where("user_id",$user-> id)->get()]);
    }

    public function showPostRequests(){
        return view("postRequests",["posts"=> Post::where('status','0')->get()]);
    }

    public function showDeniedRequests(){
        return view("DeniedRequests",["posts"=> Post::onlyTrashed()->get()]);
    }

    public function showEditPost(Post $post){

        // $data = Post::find(3);
        // dd($data->all());
        
        return view("editPost",["post"=> Post::find($post-> id)]);
    }

    public function showUserPosts(User $user){
        return view("userPosts",["posts"=> Post::where("user_id",$user-> id)->get()]);
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

        return redirect('/post/myPosts/'.auth()->user()-> id);
    }

    public function denyPost(Post $post){
        $post-> status = '2';
        $post-> save();
        $post-> delete();
        return redirect('/admin/requests');
    }

    public function deletePost(Post $post){
        
        $post->forceDelete();
        $userID = $post-> user_id;
        $user = User::find($userID);
        $user-> total_posts = $user-> total_posts - 1;
        $user -> save();
        return redirect("/");
    }

    public function deleteDeniedPost(String $id){
        $posts = Post::onlyTrashed()->find($id);
        $posts->forceDelete();
        return redirect('/admin/requests');
    }
    

    public function editPost(Post $post,Request $request){
        $post-> title = $request-> postTitle ;
        $post-> content = $request-> postContent;
        $post-> status = '0'; 
        $post-> save();
        return redirect('/');
    }
    public function approvePost(Post $post){

       $post-> status = "1";
       $post->save();

      $userID = $post-> user_id;
      $user = User::find($userID);
      $user-> total_posts = $user-> total_posts + 1;
      $user -> save();
        return redirect("/admin/requests");
    }

    public function restore(String $id){
        $post = Post::onlyTrashed()->find($id);
        
        $post-> status = 1 ;
        $post-> save();
        $post->restore();
        return redirect("/");
    }

   
    
}
