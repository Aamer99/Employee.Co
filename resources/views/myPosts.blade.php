@extends('pageHeader')
@section('pageTitle','My Posts')
@section('pageContent') 
      
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3 group-hover:text-gray-600">
        @foreach ($posts as $post)
            
       
        <article class="flex max-w-xl flex-col items-start justify-between " style="border-radius: 20px; border-color:rgb(185, 179, 179); border-width:0.5px; padding:10px">

          <div class="group relative">
            <h3 class="mt-2 text-lg font-semibold text-gray-900" >
              
               
                {{$post-> title}} 
                @if ($post-> status == 0 && !$post-> trashed())
                <p style="width:100%; padding:3px;border-radius: 25px; font-size:15px; color:rgb(46, 46, 46)"> <span style="color: orange; font-size:15px">●</span>  Biding</p>
                @elseif($post-> status == 1 && !$post-> trashed())
                <p style="width:100%; padding:3px;border-radius: 25px; font-size:15px; color:rgb(46, 46, 46)"> <span style="color: green; font-size:15px">●</span>  Published</p>
                @else 
                <p style="width:100%; padding:3px;border-radius: 25px; font-size:15px; color:rgb(46, 46, 46)"> <span style="color: red; font-size:15px">●</span>  Denied</p>
                @endif
            </h3>
            <p class="mt-2 line-clamp-3 text-sm leading-6 text-gray-600">{{$post-> content}}</p>
          </div>
       
          
          <div class="mt-5 flex lg:ml-4 lg:mt-0">
            <span class="hidden sm:block">
           
              
                <a href="/post/edit/{{$post-> id}}" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                  <svg class="h-5 w-5 text-indigo-500" <svg  width="24"  height="24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M12 20h9" />  <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" /></svg>
                  Edit
                </a>
            
            </span>
        
            <span class="ml-3 hidden sm:block">
              <form action="/post/delete/{{$post-> id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-700 shadow-sm ring-1 ring-inset ring-gray-700 hover:bg-gray-50">
                  <svg class="h-5 w-5 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>
                      <line x1="4" y1="7" x2="20" y2="7" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /> 
                       <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /> 
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                      </svg>
                   Delete
                </button>
              </form>
             
            </span>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4">
            <div class="text-sm leading-6">
              <p class="font-semibold text-gray-900">
                @if ($post -> updated_at != null && !$post->trashed())
                <?php 
                $datetime1 = new DateTime();
                $datetime2 = $post-> updated_at;
                $interval = date_diff($datetime1, $datetime2);
                $day = doubleval($interval-> d); 
                $hour = doubleval($interval-> h);
                $month = doubleval($interval-> m);
                
               if($hour > 0){
                 echo' Updated '.$hour ." hours ago"; 
               }
               else if ($day > 0)  {
                 echo ' Updated '.$day ." days ago"; 
               } else if($month > 0){
                 echo ' Updated '.$month ." months ago"; 
               } else {
               echo $interval->format('Update %i min ago');
               } 
               ?>
                @else 
                <?php 
                 $datetime1 = new DateTime();
                 $datetime2 = $post-> created_at;
                 $interval = date_diff($datetime1, $datetime2);
                 $day = doubleval($interval-> d); 
                 $hour = doubleval($interval-> h);
                 $month = doubleval($interval-> m);
                 
                if($hour > 0){
                  echo' Created '.$hour ." hours ago"; 
                }
                else if ($day > 0)  {
                  echo ' Created '.$day ." days ago"; 
                } else if($month > 0){
                  echo ' Created '.$month ." months ago"; 
                } else {
                echo $interval->format('Created %i min ago');
                } 
                ?>
                @endif
              </p>
           
            </div>
          </div>
        </article>
        @endforeach

  </div>
  @if ($posts->count() == 0)
  <main class="grid min-h-full place-items-center  px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">⚠️</h1>
      <p class="mt-6 text-base leading-7 text-gray-600">Sorry, there is no posts.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="/" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
        <a href="/post/addNew" class="text-sm font-semibold text-gray-900">Add Post <span aria-hidden="true">&rarr;</span></a>
      </div>
     
    </div>
  </main>
  @endif
@endsection