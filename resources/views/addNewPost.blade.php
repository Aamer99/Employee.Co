@extends('pageHeader')
@section('pageTitle','Add New Post')
@section('pageContent') 



    <form action="/addNewPost" method="POST">   
      @csrf
      
          <p class="mt-1 text-sm leading-6 text-gray-600"> ⚠️ This information will be displayed publicly so be careful what you share.</p>
    
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <div class="sm:col-span-4">
              <label  class="block text-sm font-medium leading-6 text-gray-900">Post Title</label>
              <input type="text" name="postTitle" value="{{old('postTitle')}}" class="block w-full rounded-md border-0 py-2 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Post Titel">
            </div>

            @error('postTitle')
            <div class="col-span-full" style="color: #D8000C; text-align: left; ">
              ⚠️{{$message}}
            </div>
         @enderror
    
            <div class="col-span-full" >
              <label  class="block text-sm font-medium leading-6 text-gray-900">Post Content</label>
              <div class="mt-2" >
                <textarea name="postContent" value="{{old('postContent')}}" rows="5" class="block w-full rounded-md border-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6" placeholder="Post Content"></textarea>
              </div>
            </div>

            @error('postContent')
            <div class="col-span-full" style="color: #D8000C; text-align: left;">
              ⚠️{{$message}}
            </div>
         @enderror
         
            <div class="mt-10">
              <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add</button>
            </div>
          </div>
    
  </form>

    
@endsection