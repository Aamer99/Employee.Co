@extends('layout')
@section('title','Add New Post')
@section('content')

<div style="  margin: auto; width: 50%; margin-top:10px"> 
    <h1>Add New Post</h1>

    <form action="/post" method="POST">   
      @csrf
        <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Post Title</label>
           <input type="text" class="form-control" name="postTitle" placeholder="Title">
          </div>
         <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Post Content</label>
             <textarea class="form-control" name="postContent" rows="5"></textarea>
          </div>
      <div class="d-grid gap-2 col-6 mx-auto">
         <button class="btn btn-primary" type="submit">Add New Post</button>
      </div>
  </form>
</div>
    
@endsection