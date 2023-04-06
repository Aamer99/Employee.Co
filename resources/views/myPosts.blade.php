@extends('layout')
@section('title','My Posts')
@section('content') 

<div style="max-width: 100%; margin:10px; display: grid;
grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
grid-gap: 20px;"> 

{{-- 
  <div class="col"> --}}

    @foreach ($posts as $post) 
    @if($post->  user_id  == auth()->user()-> id)
    <div class="card" style="margin: 10px">
        <div class="card-header">
          
            @if ($post-> status == 0)
            <p> <span style="color: orange">●</span>  Biding</p>
            @else
            <p> <span style="color: green">●</span>  Published</p>
            @endif
          </div>
      
        <div class="card-body">
          <h5 class="card-title">{{$post-> title}}</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
          @if ($post-> status == 1)
          <form method="POST" action="/post/approve/{{$post-> id}}">
            @csrf 
            @method("PUT")
            <div class="d-grid gap-2 col-6 mx-auto" style="margin:5px">
          <button type="submit" class="btn btn-success">Edit</button> 
            </div>
          </form>
          {{-- </div>
          < class="d-grid gap-2 col-6 mx-auto"> --}}

          <form action="/post/{{$post-> id}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="d-grid gap-2 col-6 mx-auto" style="margin:5px">

          <button type="submit" class="btn btn-danger">DELETE</button> 
            </div>
          </form>
          @endif
        </div>
        <div class="card-footer text-body-secondary">
            <?php 
            $datetime1 = new DateTime();
            $datetime2 = $post-> created_at;
            $interval = date_diff($datetime1, $datetime2);
            echo $interval->format('created %H hours %i min ago'); 
            ?>
        </div>
      </div>  

      @endif
    @endforeach
  </div>
@endsection