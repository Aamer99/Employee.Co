@extends('layout')
@section('title','Add New Company')
@section('content') 
<div style="max-width: 100%; margin:10px; display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    grid-gap: 20px;"> 
@foreach ($posts as $post)
@if ($post -> status != 0)
<div class="card" style="width: 100%; margin:5px;">
  <div class="card-body">
    <h5 class="card-title">{{$post-> title}}</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endif

@endforeach
</div>

@endsection