@extends("layout")
@section('content')

<div style=" padding: 70px 0;
text-align: center;">
    <h1>Add New Employee</h1>
    <form class="row g-3" action="/employee" method="POST" enctype="multipart/form-data" style=" text-align: center; margin-left: auto;
    margin-right: auto;
    width: 50%;">
     @csrf
        
     {{-- //employee name  --}}

        <div class="input-group">
          <div class="input-group-text">🙎🏻‍♂️</div>
          <input type="text" class="form-control" name="employee_name" value="{{old("employee_name")}}" id="specificSizeInputGroupUsername" placeholder="Employee Name" >
        </div>

        @error('employee_name')  
        <div style="color: #D8000C;
          text-align: left; ">

          ⚠️{{$message}}
        </div>
            
        @enderror

         {{-- //employee email  --}}

        <div class="input-group">
            <div class="input-group-text">📩</div>
            <input type="text" class="form-control" name="employee_email" value="{{old("employee_email")}}" id="specificSizeInputGroupUsername" placeholder="Employee Email" >
          </div>

          @error('employee_email')  
          <div style="color: #D8000C;
            text-align: left; ">

            ⚠️{{$message}}
          </div>
              
          @enderror


         {{-- //employee password  --}}

          <div class="input-group">
            <div class="input-group-text">🔑</div>
            <input type="password" class="form-control" name="employee_password" value="{{old("employee_password")}}" id="specificSizeInputGroupUsername" placeholder="Employee password" >
          </div>

          @error('employee_password')  
          <div style="color: #D8000C;
            text-align: left; ">

            ⚠️{{$message}}
          </div>
              
          @enderror

            {{-- //confirm password --}}

            <div class="input-group">
              <div class="input-group-text">🔑</div>
              <input type="password" class="form-control" name="confirm_password" value="{{old("confirm_password")}}"" id="specificSizeInputGroupUsername" placeholder="Confirm password" >
            </div>
  
            @error('confirm_password')  
            <div style="color: #D8000C;
              text-align: left; ">
  
              ⚠️ password not matched 
            </div>
                
            @enderror

             {{-- upload profile image   --}}
            <div class="mb-3">
              <input type="file" class="form-control" aria-label="file example" required name="employee_image">
              <div class="invalid-feedback">Example invalid form file feedback</div>
            </div>
            @error('employee_image')  
            <div style="color: #D8000C;
              text-align: left; ">
  
                   ⚠️{{$message}}
            </div>
                
            @enderror
          
           {{-- submit button   --}}
       
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Create New Employee</button>
        </div>
      </form>
@endsection