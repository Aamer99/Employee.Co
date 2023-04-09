@extends('pageHeader')
@section('pageTitle','Denied Requests')
@section('pageContent') 
      
  <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
  
    @foreach ($posts as $post)
        
   
    <article class="flex max-w-xl flex-col items-start justify-between " style="border-radius: 20px; border-color:rgb(185, 179, 179); border-width:0.5px; padding:10px">

      <div class="group relative">
        <h3 class="mt-2 text-lg font-semibold text-gray-900" >
            {{$post-> title}} 

        </h3>
        <p class="mt-2 line-clamp-3 text-sm leading-6 text-gray-600">{{$post-> content}}</p>
      </div>
   
      
      <div class="mt-5 flex lg:ml-4 lg:mt-0">
        <span class="hidden sm:block">
       
          <form action="/post/deleteDeniedPost/{{$post-> id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="inline-flex items-center rounded-md  px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" style="background-color: rgba(241, 238, 238, 0.582)">
              <svg class="h-8 w-8 text-red-500"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="12" r="9" /> 
                   <path d="M10 10l4 4m0 -4l-4 4" />
                  </svg> 
                  Delete
             </button>
          </form>
        </span>
    
        <span class="ml-3 hidden sm:block">
          <form method="POST" action="/post/approve/{{$post-> id}}">
            @csrf 
            @method("PUT")
            <button type="submit" class="inline-flex items-center rounded-md  px-3 py-2 text-sm font-semibold  shadow-sm ring-1 ring-inset hover:bg-gray-50" style="background-color: rgba(241, 238, 238, 0.582)">
              <svg class="h-8 w-8 text-green-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Approve
            </button>
          </form>
         
        </span>
      </div>
      <div class="relative mt-8 flex items-center gap-x-4">
        <div class="text-sm leading-6">
          <p class="font-semibold text-gray-900">
            <?php 
             $datetime1 = new DateTime();
             $datetime2 = $post-> created_at;
             $interval = date_diff($datetime1, $datetime2);
             $day = doubleval($interval-> d); 
             $hour = doubleval($interval-> h);
             $month = doubleval($interval-> m);
             
            if($hour > 0){
              echo'Created '.$hour ." hours ago"; 
            }
            else if ($day > 0)  {
              echo 'Created '.$day ." days ago"; 
            } else if($month > 0){
              echo 'Created '.$month ." months ago"; 
            } else {
            echo $interval->format('Created %i min ago');
            } 
            ?>
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
      <p class="mt-6 text-base leading-7 text-gray-600">Sorry, there is no posts requests.</p>
     
    </div>
  </main>
  @endif
 
@endsection