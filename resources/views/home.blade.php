@extends('layout')
{{-- @section('title','Add New Company') --}}
@section('content') 

  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-800 sm:text-4xl"> </h2>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    
      @foreach ($posts as $post)
          
     
      <article class="flex max-w-xl flex-col items-start justify-between" style="border-radius: 20px; border-color:rgb(185, 179, 179); border-width:0.5px; padding:10px">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">
            @php
              $day = $post-> created_at; 
              echo $day-> format("j M Y");
          @endphp
          </time>
          <a href="/post/{{$post-> id}}" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="/post/showPost/{{$post-> id}}">
              <span class="absolute inset-0"></span>
              {{$post-> title}}
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$post-> content}}</p>
        </div>
        
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{-- {{$users->find(1)-> name}} --}}
              </a>
            </p>
            <p class="text-gray-600">Co-Founder / CTO</p>
          </div>
        </div>
      </article>
      @endforeach
      
    </div>
</div>
@if ($posts->count() == 0)
  <main class="grid min-h-full place-items-center  px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">⚠️</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">Sorry, there is no posts.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        @if (auth()->user())
        <a href="/post/addNew" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Post <span aria-hidden="true">&rarr;</span></a>
        @else
        <a href="/login" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</a>
        {{-- <a href="/post/myPosts/{{auth()->user()-> id}}" class="text-sm font-semibold text-gray-900">Add Post <span aria-hidden="true">&rarr;</span></a> --}}
        @endif
       
      </div>
     
    </div>
  </main>
  @endif
@endsection