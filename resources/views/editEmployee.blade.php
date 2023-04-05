
@extends('layout')

@section('content')

<div  style="display: flex;justify-content: center; align-items: center;">
  <div style="background-color: gray ;width:30%; text-align:center; margin:20px; border-radius: 15px; padding:10px">  
    <h1 style="margin: 10px"> Edit Employee</h1>

    <form class="row g-3" action="/employee/edit/{{$employee-> id}}" method="POST" enctype="multipart/form-data" >
      @csrf 
      @method("PUT")

    <!--   Name -->
    
      <div class="input-group mb-3" style="padding: 20px">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Employee Name" name="employeeName" aria-describedby="basic-addon1" value="{{$employee->employee_name}}">
      </div>

      @error('employeeName')  
      <div style="color: #D8000C;
        text-align: left; ">

        ⚠️{{$message}}
      </div>
      @enderror

     <!--   Email -->

      <div class="input-group mb-3" style="padding: 20px">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="email" class="form-control" placeholder="Employee Email"  name="employeeEmail" disabled aria-describedby="basic-addon1" value="{{$employee->employee_email}}">
      </div>

     
        
    
     <!--   password -->

      <div class="input-group mb-3" style="padding: 20px">
                <span class="input-group-text" id="basic-addon1">@</span>
        <input type="password" class="form-control" placeholder="Employee Password"   name="employee_password" aria-describedby="basic-addon1" value="{{$employee->employee_password}}">
      </div>

      @error('employee_password')  
      <div style="color: #D8000C;
        text-align: left; ">

        ⚠️{{$message}}
      </div>
          
      @enderror


      <!--   confirm password -->
     
        <div class="input-group mb-3" style="padding: 20px">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="password" class="form-control" placeholder="confirm password"   name="employee_password_confirmation"  aria-describedby="basic-addon1" value="{{$employee->employee_password}}">
        </div>
     
        <div class="input-group mb-3" style="padding: 20px">
          <img src={{asset('storage/'.$employee->employee_image)}} style="width:250px; height:250px" />
        </div> 
    
        <div class="input-group mb-3" style="padding: 20px">
        <input type="file" class="form-control" name="employeeImage" >
      </div>
     

        <button type="submit" class="btn btn-success">Edit</button>
      </form>
     
  </div>
 
     
    </div>
@endsection
