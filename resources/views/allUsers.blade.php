@extends('layout')
@section('title','Add New Company')
@section('content')  

<div style="width:50%; margin:auto; margin-top:10px">

    <h1>All Users</h1>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
              {{-- <th scope="col">#</th> --}}
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mmember Since </th>
              <th scope="col">Number of Posts</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            @if ($user-> type != 0)
            <tr>
                {{-- <th scope="row">{{$user-> id -1 }}</th> --}}
                <td>{{$user-> name}}</td>
                <td>{{$user-> email}}</td>
                <td>{{$user-> created_at->format('d-m-Y')}}</td>

                <td><a href="/">{{$user-> total_posts}}</a></td>
              </tr>
            @endif
            
            @endforeach
            
          </tbody>
      </table>


</div>

@endsection