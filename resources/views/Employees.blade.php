
    @extends('layout')
    @section("content")
    <div style="max-width: 100%; margin:10px; display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    grid-gap: 20px;"> 

    @foreach($employees as $employee)

    {{-- <x-emplyeeCard :employee= "$employee"/>  --}}
    
    <div class="card" style="width: 100%; margin:5px;">
      <img src="{{asset('storage/'. $employee-> employee_image)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$employee -> employee_name}}</h5>
        <p class="card-text">{{$employee -> employee_email}}</p>
        <div class="d-grid gap-2" style="padding: 10px">
        <a type="button" href="/employee/{{$employee-> id}}\edit" class="btn btn-outline-success" >Edit</a>
        </div>
        
        <form method="POST" action="/employee/delete/{{$employee-> id}}">
          @csrf
          @method("DELETE")
          <div class="d-grid gap-2" style="padding: 10px">
        <button type="submit" class="btn btn-outline-danger">Delete</button>
      </div>
        </form>
      
      </div>
    </div>
    @endforeach
    </div>
@endsection
   