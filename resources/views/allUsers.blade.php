@extends('pageHeader')
@section('pageTitle','All Users')
@section('pageContent') 
      
<a href="/admin/addNewUser" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" style="margin: 5px; float:right"> + Add New User</a>

    <table class="table table-white table-striped">
        <thead>
            <tr style="text-align: center">
              <th scope="col" >Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mmember Since </th>
              <th scope="col">Number of Posts</th>
              <th scope="col">Role</th>
              <th scope="col"> </th>
            
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            @if ($user-> id != auth()->user()-> id)
            <tr style="text-align: center">
                <td>
                  <div class="ml-4 flex items-center md:ml-6">
                      <img class="h-10 w-10 rounded-full" src="{{asset('storage/'.$user-> profileImage)}}" alt="">
                     <span style="padding: 5px">  {{$user-> name}} </span> 
                  </div>
                </td>
                <td>{{$user-> email}}</td>
                <td>{{$user-> created_at->format('d-m-Y')}}</td>
                <td><a href="/">{{$user-> total_posts}}</a></td>
                <td> 
                @if ($user-> type == 1)
                   Member 
                    @else 
                    Admin
                @endif  
                </td> 
                <td>
                  <div class="ml-4 flex items-center md:ml-6">
                    <a href="/user/edit/{{$user-> id}}" style="color:blue">Edit </a>
                  <form method="POST" action="/user/delete/{{$user-> id}}">
                    @csrf
                  @method("DELETE") 
                  <button type="submit" style="color:red; padding:5px; margin-left:10px">Delete</button>
                  </form>
                 
                  </div>
                </td>
              </tr>
            @endif
            
            @endforeach
            
          </tbody>
      </table>
@endsection