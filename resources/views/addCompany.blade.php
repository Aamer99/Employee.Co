@extends('layout')
@section('title','Add New Company')
@section('content')
  <div style=" padding: 70px 0;
  text-align: center;">
      <h1>Add New Company</h1>
      <form class="row g-3" action="/company" method="POST" enctype="multipart/form-data" style=" text-align: center; margin-left: auto;
      margin-right: auto;
      width: 50%;">
       @csrf
          
       {{-- //company name  --}}
  
          <div class="input-group">
            <div class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                    <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                    <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0H3v14h3v-2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V15h3V1Z"/>
                  </svg>
            </div>
            <input type="text" class="form-control" name="companyName" value="{{old("companyName")}}" placeholder="Company Name" >
          </div>
  
          @error('companyName')  
          <div style="color: #D8000C;
            text-align: left; ">
  
            ⚠️{{$message}}
          </div>
              
          @enderror
  
           {{-- //company location  --}}
  
          <div class="input-group">
              <div class="input-group-text">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
              </div>
              <input type="text" class="form-control" name="companyLocation" value="{{old("companyLocation")}}"  placeholder="Company Location" >
            </div>
  
            @error('companyLocation')  
            <div style="color: #D8000C;
              text-align: left; ">
  
              ⚠️{{$message}}
            </div>
                
            @enderror
  
  
            
             {{-- submit button   --}}
         
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Create New Company</button>
          </div>
        </form>
  @endsection