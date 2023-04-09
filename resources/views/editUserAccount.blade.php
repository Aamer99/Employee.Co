@extends('pageHeader')
@section('pageTitle','Edit Post')
@section('pageContent') 

<form action="/user/editProfile/{{$user-> id}}" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20" >
    @csrf 
    @method("PUT")
   
  <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
    
    <div class="sm:col-span-2">
      <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Full Name</label>
      <div class="mt-2.5">
        <input type="text" value="{{$user-> name}}"  name="userName" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div> 

    @error('userName')
      <div class="col-span-full" style="color: #D8000C;
       text-align: left; ">
           ⚠️{{$message}}
           </div>
     @enderror

<!-- Email --> 

    <div class="sm:col-span-2">
      <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
      <div class="mt-2.5">
        <input type="email" name="email"  value="{{$user-> email}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>  

    @error('email')
      <div class="col-span-full" style="color: #D8000C;
       text-align: left; ">
           ⚠️{{$message}}
           </div>
     @enderror

<!-- Password --> 

    <div class="sm:col-span-2">
      <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Password</label>
      <div class="relative mt-2.5">
        <input type="password" name="userPassword" value="{{$user-> password }}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div>

    @error('userPassword')
      <div class="col-span-full" style="color: #D8000C; text-align: left; ">
           ⚠️{{$message}}
           </div>
     @enderror


    {{-- <div class="sm:col-span-2">
      <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Confirm Password</label>
      <div class="relative mt-2.5">
        <input type="password" name="userPassword_confirmation" value="{{old('userPassword_confirmation')}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
    </div> 

    @error('userPassword_confirmation')
      <div class="col-span-full" style="color: #D8000C; text-align: left; ">
         ⚠️{{$message}}
         </div>
    @enderror --}}

    
    <div class="col-span-full">
      <label for="userProfileImage" class="block text-sm font-medium leading-6 text-gray-900">Profile photo</label>
      <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
        <div class="text-center">
          <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
          </svg>
          <div class="mt-4 flex text-sm leading-6 text-gray-600">
            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
              <span>Upload a file</span>
              <input id="file-upload" name="userProfileImage" type="file" class="sr-only">
            </label>
            <p class="pl-1">or drag and drop</p>
          </div>
          <p class="text-xs leading-5 text-gray-600">PNG, JPG up to 10MB</p>
        </div>
      </div>
    </div> 

    @error('userProfileImage')
      <div class="col-span-full" style="color: #D8000C; text-align: left; ">
         ⚠️{{$message}}
         </div>
   @enderror
    

  </div>
  <div class="mt-10">
    <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</button>
  </div>
</form>


@endsection