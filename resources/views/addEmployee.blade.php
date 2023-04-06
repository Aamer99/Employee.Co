@extends("layout")
@section('title','Add New Employee')
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
              <input type="password" class="form-control" name="employee_password_confirmation" value="{{old("employee_password_confirmation")}}"" id="specificSizeInputGroupUsername" placeholder="Confirm password" >
            </div>
  
            @error('employee_password_confirmation')  
            <div style="color: #D8000C;
              text-align: left; ">
  
              ⚠️ password not matched 
            </div>
                
            @enderror
            <div class="input-group">
              <div class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                  <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                </svg>
              </div>
            <select id="inputState" class="form-select" name="company_id">
              @foreach($companies as $company)
              <option value="{{$company-> id}}">{{$company-> company_name}}</option>
              @endforeach 
             
            </select>
            </div>
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