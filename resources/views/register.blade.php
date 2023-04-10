<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="/dist/output.css" rel="stylesheet"> 
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: '#da373d',
            }
          }
        }
      }
    </script>
     <style type="text/tailwindcss">
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
      }
    </style>
      <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>Register</title>
</head>
<body style="margin: 0;">

<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
      @if (auth()->user())
          Add New User
      @else
      Register
      @endif
    </h2>
    
  </div>
  
    <form action="/user/register" method="POST" enctype="multipart/form-data" class="mx-auto mt-16 max-w-xl sm:mt-20" >
      @csrf 
      
      @if (auth()->user())
          
     
      <fieldset>
        <legend class="text-sm font-semibold leading-6 text-gray-900">User Type</legend>
        <p class="mt-1 text-sm leading-6 text-gray-600">There is Two types in the system, please select on of them</p>
        <div class="mt-6 space-y-6" style="margin-bottom: 5px">
          <div class="flex items-center gap-x-3">
            <input id="push-everything" name="type" type="radio" value="0" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
            <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Admin</label>
          </div>
          <div class="flex items-center gap-x-3">
            <input id="push-email" name="type" type="radio" value = "1" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
            <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Member</label>
          </div>
        
        </div>
      </fieldset>
      @endif
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      
      <div class="sm:col-span-2">
        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Full Name</label>
        <div class="mt-2.5">
          <input type="text" value="{{old("userName")}}"  name="userName" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
          <input type="email" name="email"  value="{{old('email')}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
          <input type="password" name="userPassword" value="{{old('userPassword')}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      @error('userPassword')
        <div class="col-span-full" style="color: #D8000C; text-align: left; ">
             ⚠️{{$message}}
             </div>
       @enderror


      <div class="sm:col-span-2">
        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Confirm Password</label>
        <div class="relative mt-2.5">
          <input type="password" name="userPassword_confirmation" value="{{old('userPassword_confirmation')}}" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div> 

      @error('userPassword_confirmation')
        <div class="col-span-full" style="color: #D8000C; text-align: left; ">
           ⚠️{{$message}}
           </div>
      @enderror

      
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
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
    </div>
  </form>
</div>
</body>
</html>